<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعلان ویژه</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* استایل کادر اعلان */
        #notification {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg,rgb(123, 120, 119),rgb(215, 190, 202)); /* رنگ تدرج */
            color: white;
            padding: 50px 60px;
            border-radius: 30px;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.6); /* سایه قوی‌تر */
            width: 75%;
            max-width: 800px;
            opacity: 0;
            transition: opacity 0.8s ease, transform 0.8s ease, box-shadow 0.5s ease;
            z-index: 9999;
            filter: blur(0px);
        }

        /* زمانی که اعلان نمایش داده می‌شود */
        #notification.show {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 25px 75px rgba(0, 0, 0, 0.8);
            filter: blur(0); /* رفع تاری */
        }

        /* دکمه بستن اعلان */
        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 36px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
            transition: transform 0.3s ease;
            z-index: 10000; /* قرار دادن دکمه در بالاترین سطح */
        }

        /* زمانی که موس روی دکمه بستن می‌رود */
        .close-btn:hover {
            transform: scale(1.3) rotate(15deg);
            background: rgba(255, 255, 255, 0.2);
        }

        /* استایل برای آیکن */
        #notification .icon {
            font-size: 60px;
            margin-bottom: 30px;
            animation: bounce 1.5s infinite;
        }

        /* استایل متن مهم */
        #notification strong {
            color: #ffeb3b; /* رنگ زرد برای تاکید */
        }

        /* انیمیشن پرش آیکن */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
            60% {
                transform: translateY(-7px);
            }
        }

        /* ایجاد افکت موج برای دکمه */
        .close-btn:hover {
            transform: scale(1.1) rotate(10deg);
            background: rgba(255, 255, 255, 0.2);
        }

        /* استایل برای متن */
        #notification p {
            line-height: 1.8;
            font-size: 20px;
            letter-spacing: 1px; /* فاصله بیشتر بین حروف */
        }
    </style>
</head>
<body>

<!-- اعلان -->
<div id="notification">
    <button class="close-btn" onclick="closeNotification()">×</button>
    <div class="icon">📞</div>
    <p>برای اطلاع از قیمت دقیق محصولات، با ما تماس بگیرید! <strong>ما منتظرتون هستیم!</strong></p>
</div>

<script>
    // نمایش اعلان بعد از بارگذاری صفحه
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('notification').classList.add('show');
        }, 1000); // نمایش بعد از 1 ثانیه
    }

    // بستن اعلان
    function closeNotification() {
        document.getElementById('notification').style.display = 'none';
    }
</script>

</body>
</html>
