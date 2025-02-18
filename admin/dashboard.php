<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #sidebar {
            position: relative;
            margin-top: -20px;
        }

        #content {
            position: relative;
            margin-left: 210px;
        }

        @media screen and (max-width: 600px) {
            #content {
                margin-left: 0;
            }
        }

        .panel-body {
            border-radius: 50px;
            padding: 20px;
            color: white;
        }

        .panel-body:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .stat-panel-number {
            font-size: 28px;
            font-weight: bold;
        }

        .stat-panel-title {
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-danger {
            background: rgba(255,255,255,0.2);
            border: none;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background: rgba(255,255,255,0.3);
        }

        .chart-container {
            background: white;
            border-radius: 12px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body style="color:black;">
    <?php
    include 'conn.php';
    include 'session.php';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

    <div id="header">
        <?php include 'header.php'; ?>
    </div>
    <div id="sidebar">
        <?php
        $active = "dashboard";
        include 'sidebar.php';
        ?>
    </div>
    <div id="content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 lg-12 sm-12">
                        <h1 class="page-title">Dashboard</h1>
                    </div>
                </div>
                <hr>

                <?php
                // Fetching Data for Chart
                $sql = "SELECT * FROM donor_details";
                $result = mysqli_query($conn, $sql);
                $donorsCount = mysqli_num_rows($result);

                $sql1 = "SELECT * FROM contact_query";
                $result1 = mysqli_query($conn, $sql1);
                $queriesCount = mysqli_num_rows($result1);

                $sql2 = "SELECT * FROM contact_query WHERE query_status = 2";
                $result2 = mysqli_query($conn, $sql2);
                $pendingQueriesCount = mysqli_num_rows($result2);

                // Fetching Blood Group Distribution Data
                $bloodGroups = array();
                $bloodGroupLabels = array();
                $bloodGroupData = array();
                $sql3 = "SELECT blood.blood_group, COUNT(*) as count FROM donor_details 
                         JOIN blood ON donor_details.donor_blood = blood.blood_id 
                         GROUP BY blood.blood_group";
                $result3 = mysqli_query($conn, $sql3);
                while($row = mysqli_fetch_assoc($result3)) {
                    $bloodGroupLabels[] = $row['blood_group'];
                    $bloodGroupData[] = $row['count'];
                }
                ?>

                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            <div class="panel-body" style="background: linear-gradient(to bottom, #4099ff, #73b4ff);">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1"><?php echo $donorsCount ?></div>
                                    <div class="stat-panel-title text-uppercase">Blood Donors Available</div>
                                    <button class="btn btn-danger" onclick="window.location.href = 'donor_list.php';">
                                        Full Detail <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="">
                            <div class="panel-body" style="background: linear-gradient(to bottom, #2ed8b6, #59e0c5);">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1"><?php echo $queriesCount ?></div>
                                    <div class="stat-panel-title text-uppercase">All User Queries</div>
                                    <button class="btn btn-danger" onclick="window.location.href = 'query.php';">
                                        Full Detail <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body" style="background: linear-gradient(to bottom, #FFB64D, #ffcb80);">
                                <div class="stat-panel text-center">
                                    <div class="stat-panel-number h1"><?php echo $pendingQueriesCount ?></div>
                                    <div class="stat-panel-title text-uppercase">Pending Queries</div>
                                    <button class="btn btn-danger" onclick="window.location.href = 'pending_query.php';">
                                        Full Detail <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="chart-container">
                            <canvas id="dashboardChart"></canvas>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-container">
                            <canvas id="bloodGroupChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Dashboard Statistics Chart
        new Chart(document.getElementById("dashboardChart"), {
            type: 'bar',
            data: {
                labels: ['Statistics Overview'],
                datasets: [
                    {
                        label: 'Blood Donors Available',
                        data: [<?php echo $donorsCount ?>],
                        backgroundColor: '#4099ff',
                        borderColor: '#4099ff',
                        borderWidth: 1
                    },
                    {
                        label: 'Total Queries',
                        data: [<?php echo $queriesCount ?>],
                        backgroundColor: '#2ed8b6',
                        borderColor: '#2ed8b6',
                        borderWidth: 1
                    },
                    {
                        label: 'Pending Queries',
                        data: [<?php echo $pendingQueriesCount ?>],
                        backgroundColor: '#FFB64D',
                        borderColor: '#FFB64D',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Dashboard Statistics Overview',
                        font: {
                            size: 16
                        }
                    },
                    legend: {
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                barThickness: 50,
                maxBarThickness: 60,
                categoryPercentage: 0.8,
                barPercentage: 0.9
            }
        });

        // Blood Group Distribution Chart
        new Chart(document.getElementById("bloodGroupChart"), {
            type: "doughnut",
            data: {
                labels: <?php echo json_encode($bloodGroupLabels); ?>,
                datasets: [{
                    data: <?php echo json_encode($bloodGroupData); ?>,
                    backgroundColor: [
                        "#FF6B6B", "#4ECDC4", "#45B7D1", "#96CEB4",
                        "#FFEEAD", "#D4A5A5", "#9A8194", "#392F5A"
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: "Blood Group Distribution"
                    }
                }
            }
        });
    </script>

    <?php
    } else {
        echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
    ?>
        <form method="post" name="" action="login.php" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4" style="float:left">
                    <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
                </div>
            </div>
        </form>
    <?php } ?>
</body>
</html>