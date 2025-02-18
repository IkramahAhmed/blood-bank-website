<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
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
                position: relative;
                margin-left: auto;
                margin-right: auto;
            }
        }
        .page-title {
            color: #2C3E50;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .table thead {
            background-color: #e63946;
            color: white;
        }
        .table th, .table td {
            text-align: center;
            padding: 15px;
            vertical-align: middle;
        }
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        .btn-action {
            background-color: #3498db;
            color: white;
            padding: 5px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            transition: all 0.3s;
        }
        .btn-action:hover {
            background-color: #2980b9;
            color: white;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
        }
        .status-read {
            background-color: #4CAF50;
            color: white;
        }
        .status-pending {
            background-color: #FFA500;
            color: white;
        }
        .pagination {
            display: inline-flex;
            list-style: none;
            gap: 5px;
        }
        .pagination li a {
            background: #f8f9fa;
            color: #333;
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
        }
        .pagination li.active a {
            background: #e63946;
            color: white;
        }
        .pagination li a:hover {
            background: #d32f2f;
            color: white;
        }
        td{
          color:black
        }
    </style>
</head>
<body>
<?php
include 'conn.php';
include 'session.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
?>
<div id="header">
    <?php include 'header.php'; ?>
</div>
<div id="sidebar">
    <?php $active="query"; include 'sidebar.php'; ?>
</div>
<div id="content">
    <div class="content-wrapper" style="padding: 20px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 lg-12 sm-12">
                    <h1 class="page-title">User Query</h1>
                </div>
            </div>
            <hr style="border-color: #eee;">
            
            <script>
            function clickme(query_id) {
                if (confirm("Do you really want to mark this as Read?")) {
                    $.ajax({
                        url: "query.php",
                        type: "POST",
                        data: { id: query_id },
                        success: function(response) {
                            if (response.trim() === "success") {  
                                alert("Query marked as Read.");
                                document.getElementById("status_" + query_id).innerHTML = "Read";
                                document.getElementById("status_" + query_id).className = "status-badge status-read";
                            } else {
                                alert("Error updating query. Response: " + response);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert("AJAX Error: " + error);
                        }
                    });
                }
            }

            function confirmDelete(query_id) {
                if (confirm("Are you sure you want to delete this query?")) {
                    window.location.href = "delete_query.php?id=" + query_id;
                }
            }
            </script>

            <?php
            include 'conn.php';

            $limit = 10;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $offset = ($page - 1) * $limit;
            $count=$offset+1;
            $sql= "select * from contact_query LIMIT {$offset},{$limit}";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)   {
            ?>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Mobile Number</th>
                            <th>Message</th>
                            <th>Posting Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['query_name']; ?></td>
                            <td><?php echo $row['query_mail']; ?></td>
                            <td><?php echo $row['query_number']; ?></td>
                            <td><?php echo $row['query_message']; ?></td>
                            <td><?php echo $row['query_date']; ?></td>
                          
                            <td>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['query_id']; ?>)" class="btn-action">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>

            <div class="table-responsive" style="text-align:center;">
                <?php
                $sql1 = "SELECT * FROM contact_query";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){
                    $total_records = mysqli_num_rows($result1);
                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination admin-pagination">';
                    if($page > 1){
                        echo '<li><a href="query.php?page='.($page - 1).'">Prev</a></li>';
                    }
                    for($i = 1; $i <= $total_page; $i++){
                        if($i == $page){
                            $active = "active";
                        }else{
                            $active = "";
                        }
                        echo '<li class="'.$active.'"><a href="query.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($total_page > $page){
                        echo '<li><a href="query.php?page='.($page + 1).'">Next</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

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
<?php }
?>

</body>
</html>