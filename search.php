<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جستجو در گوگل | پودر چربی دامی</title>
    <!-- لینک به بوت‌استرپ 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* اضافه کردن پس‌زمینه و استایل کلی */
        body {
            background: url('market.webp') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #fff;
        }

        .search-container {
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
            width: 80%;
            max-width: 1100px;
            transition: transform 0.3s ease;
        }

        .search-container:hover {
            transform: translateY(-10px);
        }

        .search-container h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.8);
        }

        .gcse-searchbox-only {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
            animation: zoomIn 1s ease-in-out;
        }

        /* استایل برای کادر جستجو */
        .gcse-searchbox-only input[type="text"] {
            width: 100%;
            padding: 20px;
            font-size: 1.5rem;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.7);
            transition: all 0.4s ease;
            outline: none;
        }

        .gcse-searchbox-only input[type="text"]:focus {
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.7);
            background-color: rgba(255, 255, 255, 0.9);
        }

        /* دکمه جستجو */
        .gcse-searchbox-only input[type="submit"] {
            background-color: #007bff;
            color: white;
            font-size: 1.5rem;
            padding: 15px 35px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 40px rgba(0, 123, 255, 0.5);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .gcse-searchbox-only input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }

        /* دکمه بازگشت به صفحه اصلی */
        .back-btn {
            margin-top: 30px;
            font-size: 1.3rem;
            background-color: #ff6347;
            color: white;
            border-radius: 40px;
            padding: 12px 30px;
            text-decoration: none;
            box-shadow: 0 10px 20px rgba(255, 99, 71, 0.3);
            transition: all 0.3s ease;
            display: inline-block;
        }

        .back-btn:hover {
            background-color: #e53d32;
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 99, 71, 0.5);
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* اضافه کردن تنظیمات برای موبایل */
        @media (max-width: 768px) {
            .search-container {
                width: 90%;
                padding: 30px;
            }

            .back-btn {
                width: 100%;
                font-size: 1.1rem;
                padding: 15px;
                box-sizing: border-box;
            }

            .gcse-searchbox-only input[type="text"], .gcse-searchbox-only input[type="submit"] {
                font-size: 1.3rem;
                padding: 18px;
            }
        }

    </style>
</head>
<body>

    <div class="search-container">
        <h1>جستجو برای پودر چربی دامی</h1>
        
        <!-- اسکریپت جستجو گوگل -->
        <script async src="https://cse.google.com/cse.js?cx=0771c29a70b5644bf"></script>
        <div class="gcse-searchbox-only"></div>

        <!-- دکمه بازگشت به صفحه اصلی -->
         <br>
        <a href="index.php" class="back-btn">بازگشت به صفحه اصلی</a>
    </div>

    <!-- اسکریپت‌های بوت‌استرپ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
