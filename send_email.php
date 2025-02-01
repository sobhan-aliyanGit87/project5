<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت داده‌ها و جلوگیری از حملات XSS
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // تنظیمات ایمیل
    $to = "sobhanaliyan1387@gmail.com"; // ایمیل مقصد
    $subject = "پیام جدید از سایت"; // موضوع ایمیل
    $body = "
    <html>
    <head>
        <title>پیام جدید از سایت</title>
    </head>
    <body>
        <p><strong>نام:</strong> $name</p>
        <p><strong>ایمیل:</strong> $email</p>
        <p><strong>پیام:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";

    // تنظیمات هدر ایمیل برای ارسال HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n"; // اضافه کردن آدرس فرستنده به هدر

    // ارسال ایمیل
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('پیام شما ارسال شد.'); window.location.href='thank_you.html';</script>";
    } else {
        echo "<script>alert('خطا در ارسال پیام. لطفاً دوباره تلاش کنید.'); window.location.href='contact.php';</script>";
    }
}
?>
