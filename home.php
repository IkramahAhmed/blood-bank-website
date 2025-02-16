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
   .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

     

        .hero-content {
            width: 50%;
            margin-left: auto;
            padding-right: 5%;
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 1rem;
        }

        p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));                       

            background-color:rgb(22, 18, 18);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #c62f3b;
            border:none;
        }

       
        .mission-section {
    max-width: 1500px;
    margin: 56px auto;
    padding: 40px 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}
        .mission-title {
            font-size: 24px;
            font-weight: bold;
            color:rgb(201, 50, 50);
            margin-bottom: 16px;
        }

        .mission-text {
            color: #666666;
            line-height: 1.6;
            font-size: 14px;
            max-width: 100%;
        }
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }

            .nav-links {
                display: none;
            }

            .hero-content {
                width: 100%;
                padding: 2rem;
                text-align: center;
            }

            .red-shape {
                width: 100%;
                left: -50%;
                transform: rotate(-20deg);
            }
          }
          

        @media (max-width: 768px) {
            .mission-section {
                padding: 20px;
            }
        }

        /* need blood */

        .steps-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 80px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .steps-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .steps-header h2 {
            font-size: 36px;
            color: #2C3E50;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .steps-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #8B1D3D, #FF4B6E);
            border-radius: 2px;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .step-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(139, 29, 61, 0.15);
        }

        .step-number {
            font-size: 64px;
            font-weight: bold;
            color: rgba(139, 29, 61, 0.1);
            position: absolute;
            top: 10px;
            right: 20px;
            line-height: 1;
        }

        .step-icon {
            font-size: 32px;
            color: #8B1D3D;
            margin-bottom: 20px;
        }

        .step-title {
            font-size: 20px;
            font-weight: bold;
            color: #2C3E50;
            margin-bottom: 15px;
        }

        .step-description {
            color: #666;
            line-height: 1.6;
            font-size: 15px;
        }

        .step-description ul {
            list-style: none;
            margin-top: 10px;
        }

        .step-description li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }

        .step-description li::before {
            content: '➡';
            position: absolute;
            left: 0;
            color: #8B1D3D;
        }

        @media (max-width: 992px) {
            .steps-container {
                grid-template-columns: 1fr;
                max-width: 600px;
                margin: 40px auto 0;
            }

            .step-card {
                text-align: center;
            }

            .step-description li {
                text-align: left;
            }

            .step-number {
                top: 5px;
                right: 10px;
                font-size: 48px;
                opacity: 0.1;
            }
        }
        /* becpome donar */
        .donor-steps-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #fff5f5 0%, #fff 100%);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 36px;
            color: #e63946;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #e63946, #f1a7a7);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .section-header:hover h2::after {
            transform: scaleX(1);
        }

        .steps-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .step-card {
            flex-basis: calc(33.333% - 20px);
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .step-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(230, 57, 70, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
            transition: top 0.3s ease;
        }

        .step-card:hover::before {
            top: 0;
        }

        .step-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(230, 57, 70, 0.2);
        }

        .step-icon {
            font-size: 48px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .step-number {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 72px;
            font-weight: bold;
            color: rgba(230, 57, 70, 0.1);
            transition: all 0.3s ease;
        }

        .step-card:hover .step-number {
            transform: scale(1.2);
            color: rgba(230, 57, 70, 0.2);
        }

        .step-title {
            font-size: 24px;
            font-weight: 600;
            color: #e63946;
            margin-bottom: 15px;
        }

        .step-description {
            color: #4a4a4a;
            line-height: 1.6;
            font-size: 16px;
        }

        .step-description ul {
            list-style-type: none;
            padding-left: 0;
        }

        .step-description li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
        }

        .step-description li::before {
            content: '➡';
            position: absolute;
            left: 0;
            color: #e63946;
        }

        .cta-message {
            text-align: center;
            font-size: 24px;
            color: #e63946;
            margin-top: 50px;
            font-weight: 600;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease forwards 0.5s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 992px) {
            .step-card {
                flex-basis: calc(50% - 15px);
            }
        }

        @media (max-width: 768px) {
            .step-card {
                flex-basis: 100%;
            }
        }


</style>
</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>
<?php include'ticker.php'; ?>

  <div id="page-container" style=" position: relative;min-height: 84vh;   ">
    <div class="">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

  <section class="hero">
        <div class="red-shape" style=" 
            position: absolute;
            left: -5%;
            top: -50%;
            width: 50%;
            height: 200%;
background: linear-gradient(to bottom, rgb(193 161 161), rgb(189 4 20));                        transform: rotate(-10deg);
            z-index: -1;
        "></div>
        <div class="hero-content">
            <h1>Save a Life: Donate Blood</h1>
            <p>Your donation can make a world of difference. Join our mission to ensure a stable and sufficient blood supply for those in need. Every drop counts in our fight to save lives.</p>
            <a href="donate_blood.php" class="cta-button" style="">Donate Now</a>
        </div>
    </section>

    <section class="mission-section">
        <h2 class="mission-title">Our Mission</h2>
        <p class="mission-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
    </section>
    <!-- Indicators -->
    <!-- <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul> -->

    <!-- The slideshow -->
    <!-- <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image\_107317099_blooddonor976.jpg" alt="image\_107317099_blooddonor976.jpg" width="100%" height="500">
      </div>
      <div class="carousel-item">
        <img src="image\Blood-facts_10-illustration-graphics__canteen.png" alt="image\Blood-facts_10-illustration-graphics__canteen.png" width="100%" height="500">
      </div>

    </div> -->

    <!-- Left and right controls -->
    <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a> -->
  </div>

<!-- need blood -->
<section class="steps-section">
        <div class="container">
            <div class="steps-header">
                <h2>Need Blood? Follow These 3 Simple Steps!</h2>
            </div>
            
            <div class="steps-container">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon">🩸</div>
                    <h3 class="step-title">Tap "Need Blood"</h3>
                    <div class="step-description">
                        Start by clicking the "Need Blood" button—no hassle, just one tap to begin your search.
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon">🩸</div>
                    <h3 class="step-title">Select & Specify</h3>
                    <div class="step-description">
                        <ul>
                            <li>Choose your blood group from the list.</li>
                            <li>Mention why you need it—whether it's for an emergency, surgery, or donation request.</li>
                        </ul>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon">🩸</div>
                    <h3 class="step-title">Search & Connect</h3>
                    <div class="step-description">
                        <ul>
                            <li>Hit the Search button, and our system will instantly check for available donors.</li>
                            <li>If a match is found, you'll see their details and can connect with them right away.</li>
                            <li>If no match is available, you'll be notified—try again later or spread the word!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- become donar -->
    <section class="donor-steps-section">
        <div class="container">
            <div class="section-header">
                <h2>How to Become a Blood Donor?</h2>
            </div>
            
            <div class="steps-container">
                <div class="step-card">
                    <div class="step-icon">🩸</div>
                    <div class="step-number">1</div>
                    <h3 class="step-title">Tap "Become a Donor"</h3>
                    <div class="step-description">
                        <ul>
                            <li>Click the button to start your donor registration.</li>
                        </ul>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-icon">🩸</div>
                    <div class="step-number">2</div>
                    <h3 class="step-title">Fill in Your Details</h3>
                    <div class="step-description">
                        <ul>
                            <li>Select your blood group and provide your contact information.</li>
                        </ul>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-icon">🩸</div>
                    <div class="step-number">3</div>
                    <h3 class="step-title">Submit & Save Lives</h3>
                    <div class="step-description">
                        <ul>
                            <li>Confirm your details, and you're ready to help!</li>
                            <li>Whenever someone needs blood, they can find you and reach out.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cta-message">
                One simple step from you can save a life! ❤️
            </div>
        </div>
    </section>


<br>
        <h1 style="text-align:center;font-size:45px;">Welcome to BloodBank & Donor Management System</h1>
<br>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >The need for blood</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='needforblood'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white">Blood Tips</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='bloodtips'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>

                        </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Who you could Help</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:120px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='whoyouhelp'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>


                        </div>
            </div>
</div>

        <h2>Blood Donor Names</h2>

        <div class="row">
          <?php
            include 'conn.php';
            $sql= "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
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
      <?php }} ?>
</div>
<br>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="image\blood_donationcover.jpeg" alt="" >
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color:#7FB3D5;color:#273746 ">Become a Donor </a>
            </div>
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>
