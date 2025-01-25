<?php
include("header.html");
?>
<?php
include("nav.html");
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(120deg, #f7f8fc, #ffffff);
    }

    .product-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .product-card {
        display: flex;
        flex-direction: row-reverse;
        background: #ffffff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        max-width: 1200px;
        overflow: hidden;
    }

    .product-card img {
        width: 50%;
        object-fit: cover;
    }

    .product-details {
        padding: 30px;
        text-align: right;
        flex: 1;
    }

    .product-details h4 {
        font-size: 2rem;
        color: #243b55;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .product-details p {
        font-size: 1.2rem;
        color: #6c757d;
        margin-bottom: 30px;
        line-height: 1.8;
    }

    .product-details ul {
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .product-details ul li {
        font-size: 1.1rem;
        color: #495057;
        margin-bottom: 10px;
        position: relative;
        padding-right: 25px;
    }

    .product-details ul li:before {
        content: "✔";
        position: absolute;
        right: 0;
        color: #28a745;
        font-size: 1.2rem;
    }

    .product-details h5 {
        font-size: 1.5rem;
        color: #dc3545;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .product-details .btn-primary {
        background: linear-gradient(90deg, #ff7e5f, #feb47b);
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 12px 30px;
        border: none;
        border-radius: 25px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
    }

    .product-details .btn-primary:hover {
        background: linear-gradient(90deg, #feb47b, #ff7e5f);
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(255, 126, 95, 0.4);
    }
</style>

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
