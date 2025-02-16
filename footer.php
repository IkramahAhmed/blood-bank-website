<html>
<head>
  <style>
  #footer {

  position:absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 75px;
  background-color:#000000;
  color:white;
  text-align: center;
}
.footer {
            background-color: #1F2937;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }
/* 
        .logo {
            width: 40px;
            height: 40px;
        } */

        .cta-section {
            display: flex;
            align-items: baseline;
            gap: 20px;
        }

        .donate-btn {
            background-color: white;
            color: #1F2937;
            padding: 10px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .donate-btn:hover {
            background-color: #f3f4f6;
            transform: translateY(-2px);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .newsletter h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .email-input {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .email-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #374151;
            border-radius: 6px;
            background-color: transparent;
            color: white;
        }

        .email-input button {
            padding: 10px 15px;
            background-color: #8B1D3D;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .email-input button:hover {
            background-color: #a0234a;
        }

        .footer-links h4 {
            font-size: 16px;
            margin-bottom: 20px;
            color: #f3f4f6;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 30px;
            border-top: 1px solid #374151;
        }

        .legal-links a {
            color: #9ca3af;
            text-decoration: none;
            margin-right: 20px;
        }

        .social-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-top {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .social-links {
                margin-top: 20px;
            }
        }
  </style>
</head>
<body>
<footer class="footer">
        <div class="footer-container">
            <div class="footer-top">
                <img src="/placeholder.svg" alt="Blood Bank Logo" class="logo">
                <div class="cta-section">
                    <p>Ready to save lives?</p>
                    <a href="#" class="donate-btn">Donate Now</a>
                </div>
            </div>

            <div class="footer-content">
                <div class="newsletter">
                    <h3>Subscribe to our newsletter</h3>
                    <div class="email-input">
                        <input type="email" placeholder="Enter your email">
                        <button type="submit">→</button>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Blood Donation</a></li>
                        <li><a href="#">Find Blood</a></li>
                        <li><a href="#">Blood Drive</a></li>
                        <li><a href="#">Blood Types</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="legal-links">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div>
                <div class="social-links">
                    <a href="#" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</body>

</html>
