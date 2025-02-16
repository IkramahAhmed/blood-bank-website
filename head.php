<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank & Donation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f8f8f8;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 1rem 5%;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e63946;

            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #e63946;
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
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
        <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>
        <nav class="nav-links">
                <a href="home.php" <?php if($active=='home') echo "class='logo2'"; ?>>Home</a>
                <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>

            </nav>
        </div>
    </header>

    <!-- <div class="header">
    <a href="home.php" class="logo"<?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation </a>
    <div class="header-right">
    <a href="about_us.php"  <?php if($active=='about') echo "class='act'"; ?> >About Us</a>
    <a href="why_donate_blood.php"  <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php"  <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div> -->

    <!-- <section class="hero">
        <div class="red-shape"></div>
        <div class="hero-content">
            <h1>Save a Life: Donate Blood</h1>
            <p>Your donation can make a world of difference. Join our mission to ensure a stable and sufficient blood supply for those in need. Every drop counts in our fight to save lives.</p>
            <a href="#" class="cta-button">Donate Now</a>
        </div>
    </section> -->
</body>
</html>