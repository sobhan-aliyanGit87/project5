<?php
include("vazyat.php");
?>
<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماس با ما</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        /* Main container */
        .contact-container {
            display: flex;
            justify-content: space-between;
            padding: 50px 5%;
            gap: 30px;
            flex-wrap: wrap;
        }

        /* Contact info section */
        .contact-info, .contact-form {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 30px;
            width: 48%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-info:hover, .contact-form:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        h3 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
            text-align: center;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }

        .contact-info p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Social media icons section */
        .social-links a {
            margin: 10px;
            display: inline-block;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-links a:hover {
            transform: scale(1.2);
            color: #4CAF50;
        }

        .social-links i {
            font-size: 35px;
            color: #555;
        }

        /* Contact form section */
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin: 12px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s ease;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .contact-form button {
            padding: 15px 30px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #45a049;
        }

        /* Map section */
        .map-container {
            margin-top: 30px;
            width: 100%;
            height: 400px;
            background-color: #f0f0f0;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: 100%;
            height: 100%;
            border-radius: 12px;
            border: 0;
        }

        /* Responsive design for mobile and tablets */
        @media (max-width: 768px) {
            .contact-container {
                padding: 20px;
            }

            .contact-info, .contact-form {
                width: 100%;
                margin-bottom: 20px;
            }

            h3 {
                font-size: 20px;
            }

            .contact-form button {
                font-size: 16px;
                padding: 12px 20px;
            }

            .social-links a {
                margin: 5px;
            }

            .social-links i {
                font-size: 30px;
            }
        }

        @media (max-width: 480px) {
            .contact-container {
                flex-direction: column;
                padding: 15px;
            }

            .contact-info, .contact-form {
                width: 100%;
                padding: 20px;
            }

            h3 {
                font-size: 18px;
            }

            .contact-form input, .contact-form textarea {
                padding: 12px;
            }

            .contact-form button {
                font-size: 14px;
                padding: 12px;
            }

            .social-links a {
                margin: 5px;
            }

            .social-links i {
                font-size: 25px;
            }
        }
    </style>
</head>
<body>

<div class="contact-container">
    <!-- Contact Info Section -->
    <div class="contact-info">
        <h3>راه های ارتباطی</h3>
        <p><strong>آدرس:</strong> اصفهان، نصر آباد، شهرک صنعتی، میدان کارگر </p>
        <p><strong>ساعات کاری:</strong> شنبه تا پنج شنبه - ۸ صبح تا ۴ عصر</p>
        <p><strong>شماره تماس:</strong> ۰۳۱</p>
        <p><strong>ایمیل:</strong> <a href="mailto:azmoondaneh.ir@gmail.com">.ir@gmail.com</a></p>
        <div class="social-links">
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://t.me" target="_blank"><i class="fab fa-telegram"></i></a>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="contact-form">
        <h3>ثبت نظر</h3>
        <form action="#" method="POST">
            <input type="email" placeholder="ایمیل" required>
            <input type="text" placeholder="نام" required>
            <textarea placeholder="متن پیام" rows="5" required></textarea>
            <button type="submit">ارسال پیام</button>
        </form>
    </div>
</div>

<!-- Google Map Section -->
<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.674278212585!2d51.283465515741745!3d32.789443679736054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fabb441a4585999%3A0x2035f639ab9a849!2z2YbYryDYp9mF2KfYp9mI2LTZiiDZh9ix2r3YjA!5e0!3m2!1sen!2s!4v1675208481042!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

</body>
</html>

<?php
include("footer.html");
?>
<?php
include("bat.html");
?>