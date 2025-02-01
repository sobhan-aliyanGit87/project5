<?php
include("vazyat.php");
?>
<?php
include("header.html");
?>
<style>
    /* نوار بالای صفحه */
    .top-bar {
        background: linear-gradient(135deg, #2980b9, #8e44ad);
        color: white;
        text-align: center;
        padding: 10px 0;
        font-size: 1rem;
        font-weight: bold;
        position: relative;
        z-index: 10;
    }

    .top-bar a {
        color: #fff;
        text-decoration: none;
        margin-left: 15px;
        font-weight: normal;
        transition: color 0.3s ease;
    }

    .top-bar a:hover {
        color: #f39c12;
    }

    /* استایل برای سایر بخش‌ها */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: #f0f2f5;
        color: #333;
    }

    .product-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
        background: linear-gradient(135deg, rgba(19, 41, 63, 0.8), rgba(12, 38, 56, 0.8)),
                    url('background.jpg') no-repeat center center;
        background-size: cover;
    }

    .product-card {
        display: flex;
        flex-direction: row-reverse;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        max-width: 1200px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: scale(1.05);
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
    }

    .product-card img {
        width: 50%;
        object-fit: cover;
        border-radius: 10px;
    }

    .product-details {
        padding: 30px;
        text-align: right;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .product-details h4 {
        font-size: 2rem;
        color: #2c3e50;
        margin-bottom: 15px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .product-details p {
        font-size: 1.1rem;
        color: #7f8c8d;
        margin-bottom: 20px;
        line-height: 1.7;
    }

    .product-details ul {
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .product-details ul li {
        font-size: 1.1rem;
        color: #34495e;
        margin-bottom: 10px;
        position: relative;
        padding-right: 30px;
    }

    .product-details ul li:before {
        content: "✔";
        position: absolute;
        right: 0;
        color: #1abc9c;
        font-size: 1.2rem;
    }

    .product-details h5 {
        font-size: 1.6rem;
        color: #e74c3c;
        margin-bottom: 25px;
        font-weight: bold;
    }

    .product-details .btn-primary {
        background: linear-gradient(135deg, #ff7e5f, #feb47b);
        color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 12px 30px;
        border: none;
        border-radius: 30px;
        text-decoration: none;
        transition: all 0.4s ease-in-out;
        cursor: pointer;
        text-align: center;
    }

    .product-details .btn-primary:hover {
        background: linear-gradient(135deg, #feb47b, #ff7e5f);
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(255, 126, 95, 0.3);
    }

    /* حالت موبایل */
    @media (max-width: 768px) {
        .product-card {
            flex-direction: column; /* نمایش عمودی */
        }

        .product-card img {
            width: 100%; /* تصویر تمام عرض شود */
            height: auto; /* ارتفاع به تناسب تغییر کند */
            border-radius: 10px 10px 0 0; /* گوشه‌ها گرد شوند */
        }

        .product-details {
            text-align: center; /* متن وسط‌چین */
            padding: 20px; /* فضای کمتر */
        }

        .product-details h4 {
            font-size: 1.8rem; /* فونت کوچک‌تر */
        }

        .product-details p {
            font-size: 1rem; /* متن کوتاه‌تر */
        }

        .product-details ul li {
            font-size: 1rem;
            padding-right: 20px;
        }

        .product-details h5 {
            font-size: 1.4rem;
        }

        .product-details .btn-primary {
            font-size: 1rem;
            padding: 10px 25px;
        }
    }
</style>

<!-- نوار بالای صفحه -->
<div class="top-bar">
    <span>🎉 تخفیف ویژه! </span>
    <a href="contact.html">تماس با ما</a>
    <a href="register.php">ثبت‌نام</a>
</div>

<!-- صفحه محصول -->
<div class="product-container">
    <div class="product-card">
        <!-- تصویر محصول -->
        <img src="mahsol1.jpg" alt="پودر چربی دامی">
        <!-- اطلاعات محصول -->
        <div class="product-details">
            <h4>پودر چربی دامی</h4>
            <p>یک مکمل غنی از انرژی برای دام‌های شیری که به افزایش تولید شیر کمک می‌کند.</p>
            <ul>
                <li>ترکیبات گیاهی</li>
                <li>حاوی تری گلیسیریدهای مفید</li>
                <li>مناسب برای دام‌های شیری</li>
                <li>افزایش تولید شیر</li>
                <li>مناسب برای همه دام‌ها</li>
            </ul>
            <h5><strong>قیمت: تماس</strong></h5>
            <a href="safe.html" class="btn btn-primary">سفارش محصول</a>
        </div>
    </div>
</div>

<?php
include("footer.html");
?>
<?php
include("bat.html");
?>
