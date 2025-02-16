<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contact Us - Blood Donation">
    <meta name="author" content="">
    <title>Contact Us - Blood Donation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        .contact-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 100px;
            margin-bottom: 50px;
        }
        .contact-header {
          background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 12px 15px;
            margin-bottom: 20px;
        }
        .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 107, 0.25);
        }
        .btn-submit {
          background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        .contact-details {
            background-color: #f1f3f5;
            border-radius: 10px;
            padding: 30px;
        }
        .contact-details h2 {
            color: #ff6b6b;
            margin-bottom: 20px;
        }
        .contact-details h4 {
            color: #ff6b6b;
            margin-top: 20px;
        }
        .alert {
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <?php 
    $active ='contact'; 
    include 'head.php'; 

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Form handling logic
    $messageSent = false;
    $errorMsg = "";

    if(isset($_POST["send"])){
        $name = $_POST['fullname'];
        $number = $_POST['contactno'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Database connection
        $conn = mysqli_connect("localhost", "root", "", "blood_donation");
        if (!$conn) {
            $errorMsg = "Database connection failed!";
        } else {
            $sql = "INSERT INTO contact_query (query_name, query_number, query_mail, query_message) VALUES 
                    ('$name', '$number', '$email', '$message')";

            if(mysqli_query($conn, $sql)) {
                $messageSent = true;
            } else {
                $errorMsg = "Query failed: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
    ?>

    <div id="page-container" style="position: relative; min-height: 84vh;">
        <div class="container contact-container">
            <div id="content-wrap" style="padding-bottom:50px;">
                <div class="contact-header text-center">
                    <h1>Contact Us</h1>
                </div>

                <!-- Success Message -->
                <?php if ($messageSent): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Query Sent!</strong> We will contact you shortly.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Error Message -->
                <?php if ($errorMsg): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> <?= $errorMsg; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <h3>Send us a Message</h3>
                        <form method="post">
                            <div class="form-group">
                                <label>Full Name:</label>
                                <input type="text" class="form-control" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="tel" class="form-control" name="contactno" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Message:</label>
                                <textarea rows="5" class="form-control" name="message" required></textarea>
                            </div>
                            <button type="submit" name="send" class="btn btn-submit">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="contact-details">
                            <h2>Contact Details</h2>
                            <?php
                            include 'conn.php';
                            $sql= "SELECT * FROM contact_info";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                    <p>
                                        <h4>Address:</h4>
                                        <?php echo $row['contact_address']; ?>
                                    </p>
                                    <p>
                                        <h4>Contact Number:</h4>
                                        <?php echo $row['contact_phone']; ?>
                                    </p>
                                    <p>
                                        <h4>Email:</h4>
                                        <a href="mailto:<?php echo $row['contact_mail']; ?>"><?php echo $row['contact_mail']; ?></a>
                                    </p>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </div>

    <script>
        setTimeout(() => {
            $(".alert").fadeOut();
        }, 3000);
    </script>

</body>
</html>
