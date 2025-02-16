<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background: #f5f5f5;
        }
        .donor-form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-top: 100px;
            margin-bottom: 30px;
        }
        .form-header {
            background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px 15px;
            margin-bottom: 15px;
        }
        .form-control:focus {
            border-color: #c41230;
            box-shadow: 0 0 0 0.2rem rgba(196,18,48,0.25);
        }
        .btn-submit {
            background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            background: #8b1f3f;
            transform: translateY(-2px);
        }
        .font-italic {
            font-weight: 500;
            margin-bottom: 8px;
            color: #555;
        }
        .donor-card {
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }
        .donor-card:hover {
            transform: translateY(-5px);
        }
        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            color: #c41230;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .card-text {
            line-height: 1.6;
        }
        .alert {
            border-radius: 8px;
            padding: 1rem 1.5rem;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php $active ='need'; include('head.php') ?>

    <div id="page-container" style="position: relative;min-height: 84vh;">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:50px;">
                <div class="donor-form-container">
                    <div class="form-header">
                        <h2 class="m-0">Need Blood</h2>
                    </div>

                    <form name="needblood" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="font-italic">Blood Group<span style="color:red">*</span></div>
                                <select name="blood" class="form-control" required>
                                    <option value="" selected disabled>Select</option>
                                    <?php
                                        include 'conn.php';
                                        $sql= "select * from blood";
                                        $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
                                        while($row=mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="font-italic">Reason, why do you need blood?<span style="color:red">*</span></div>
                                <textarea class="form-control" name="address" required rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <input type="submit" name="search" class="btn-submit" value="Search" style="cursor:pointer">
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <?php if(isset($_POST['search'])) {
                            $bg=$_POST['blood'];
                            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
                            $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
                            if(mysqli_num_rows($result)>0) {
                                while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="col-lg-4 col-sm-6 donor-card">
                            <div class="card">
                                <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Blood Donor" style="width:100%;height:200px;object-fit:cover;">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $row['donor_name']; ?></h3>
                                    <p class="card-text">
                                        <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                                        <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                                        <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                                        <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                                        <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            } else {
                                echo '<div class="col-12"><div class="alert alert-danger">No Donor Found For your search Blood group</div></div>';
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>