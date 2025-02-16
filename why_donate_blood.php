<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="About Us - Discover our story and mission">
    <meta name="author" content="Your Company Name">
    <title>About Us | Your Company Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .about-section {
            background: linear-gradient(135deg, #ffffff 0%, #f3f4f6 100%);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        .about-content {
            padding: 4rem;
        }
        .about-image-container {
            position: relative;
            height: 100%;
            overflow: hidden;
        }
        .about-image {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }
        .about-image:hover {
            transform: scale(1.05);
        }
        .about-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
        }
        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1.5rem;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 50px;
            height: 4px;
            background: linear-gradient(135deg, rgba(230, 57, 70, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        }
        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        .btn-learn-more {
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-learn-more:hover {
            transform: translateY(-3px);
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 1rem;
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

    </style>
</head>
<body>
    <?php $active ='about'; include('head.php'); ?>

    <div id="page-container" class="min-vh-100 d-flex flex-column">
        <div class="container flex-grow-1 py-5" style="margin-top: 100px;">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-section">
                        <div class="row g-0">
                            <div class="col-lg-6 about-content">
                                <h1 class="section-title">Why Should I Donate Blood ?
                                </h1>
                                <div class="about-text mb-4">
    <ul style="list-style-type: none; padding-left: 0;">
        <li>🩸 <strong>Save Lives</strong> – Your donation can help accident victims, surgery patients, and those with medical conditions.</li>
        <li>🩸 <strong>Help Patients in Need</strong> – People with diseases like cancer and anemia rely on regular blood donations.</li>
        <li>🩸 <strong>Stay Healthy</strong> – Donating blood improves circulation and keeps your body healthy.</li>
        <li>🩸 <strong>It’s Quick & Easy</strong> – The process is simple, safe, and only takes a few minutes.</li>
        <li>🩸 <strong>Make a Difference</strong> – A single donation can save multiple lives. Be a hero today!</li>
    </ul>
</div>


                            </div>
                            <div class="col-lg-6 about-image-container">
                                <div class="about-overlay"></div>
                                <img class="img-fluid rounded" src="image\why_should_blood.webp" style="    height: 695px;
    width: max-content;
" alt="error"  >
                                </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>