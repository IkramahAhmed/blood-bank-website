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

                    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center;">
    <?php if(isset($_POST['search'])) {
        $bg=$_POST['blood'];
        $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 5";
        $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
        if(mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-lg-4 col-sm-6 donor-card" style="padding: 15px;">
        <div style="width: 100%; max-width: 350px; background-color: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 20px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; margin: 0 auto;">
            <div style="position: relative; height: 200px; overflow: hidden;">
                <img src="image\blood_drop_logo.jpg" alt="Blood Donor" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(to bottom, rgba(231, 76, 60, 0.8), rgba(231, 76, 60, 0.4)); display: flex; align-items: center; justify-content: center;">
                    <h3 style="color: #fff; font-size: 24px; text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);"><?php echo $row['donor_name']; ?></h3>
                </div>
            </div>
            <div style="padding: 20px;">
                <p style="font-family: 'Arial', sans-serif; font-size: 16px; color: #333; margin-bottom: 15px;">
                    <span style="display: inline-block; background-color: #e74c3c; color: #fff; padding: 5px 10px; border-radius: 20px; font-weight: bold; margin-bottom: 10px;">Blood Group: <?php echo $row['blood_group']; ?></span><br>
                    <strong style="color: #e74c3c;">Mobile:</strong> <?php echo $row['donor_number']; ?><br>
                    <strong style="color: #e74c3c;">Gender:</strong> <?php echo $row['donor_gender']; ?><br>
                    <strong style="color: #e74c3c;">Age:</strong> <?php echo $row['donor_age']; ?><br>
                    <strong style="color: #e74c3c;">Address:</strong> <?php echo $row['donor_address']; ?>
                </p>
                <button onclick="openGoogleMaps('<?php echo $row['donor_address']; ?>')" style="width: 100%; padding: 10px; background-color: #e74c3c; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">View on Google Maps</button>
            </div>
        </div>
    </div>
    <?php
            }
        } else {
            echo '<div class="col-12"><div class="alert alert-danger" style="text-align: center; padding: 20px; border-radius: 10px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;">No Donor Found For your search Blood group</div></div>';
        }
    } ?>
</div>

<script>
function openGoogleMaps(address) {
    var encodedAddress = encodeURIComponent(address);
    window.open('https://www.google.com/maps/search/?api=1&query=' + encodedAddress, '_blank');
}
</script>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>