<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blood Donation Registration Form">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            min-height: 100vh;
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
    </style>
</head>
<body>
    <?php $active ='donate'; include('head.php') ?>

    <div id="page-container" style="position: relative;min-height: 84vh;">
        <div class="container">
            <div id="content-wrap" style="padding-bottom:50px;">
                <div class="donor-form-container">
                    <div class="form-header">
                        <h2 class="m-0" style="">Register As Donor</h2>
                    </div>
                    
                    <form name="donor" action="savedata.php" method="post">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="font-italic">Full Name<span style="color:red">*</span></div>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="font-italic">Mobile Number<span style="color:red">*</span></div>
                                <input type="text" name="mobileno" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="font-italic">Email Id</div>
                                <input type="email" name="emailid" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="font-italic">Age<span style="color:red">*</span></div>
                                <input type="text" name="age" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="font-italic">Gender<span style="color:red">*</span></div>
                                <select name="gender" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-4">
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
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="font-italic">Address<span style="color:red">*</span></div>
                                <textarea class="form-control" name="address" required rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" class="btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include('footer.php') ?>
    </div>
</body>
</html>