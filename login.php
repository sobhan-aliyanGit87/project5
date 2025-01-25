<?php
session_start();

// اتصال به دیتابیس
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_db"; // نام دیتابیس

$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال به دیتابیس
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ورود
    if (isset($_POST['login'])) {
        // دریافت نام کاربری و پسورد از فرم
        $username = $_POST['username'];
        $password = $_POST['password'];

        // بررسی اینکه نام کاربری وجود دارد یا نه
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) { // مقایسه پسورد هش شده
                $_SESSION['username'] = $username;  // ذخیره نام کاربری در سشن
                $_SESSION['message'] = "ورود موفقیت‌آمیز!"; // پیام موفقیت
                header("Location: index.php"); // هدایت به صفحه اصلی
                exit();
            } else {
                $login_message = "نام کاربری یا رمز عبور اشتباه است!";
            }
        } else {
            $login_message = "نام کاربری یافت نشد!";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ورود</title>
    <style>
        /* استایل‌ها */
        body {
            font-family: 'Arial', sans-serif;
            background: url('bak.webp') no-repeat center center fixed;
            background-size: cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .form-title {
            font-size: 26px;
            margin-bottom: 20px;
            color: #4caf50;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background-color: #4caf50;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            color: #d9534f;
            margin-bottom: 10px;
        }
        .message.success {
            color: #5bc0de;
        }
        .toggle-btn {
            background: none;
            border: none;
            color: #4caf50;
            font-size: 14px;
            cursor: pointer;
            margin-top: 10px;
        }
        .password-container {
            position: relative;
        }
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="form-title">ورود</h2>
        <div class="message <?php echo $login_message ? 'success' : ''; ?>">
            <?php echo $login_message; ?>
        </div>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="نام کاربری" required>
            <div class="password-container">
                <input type="password" name="password" placeholder="رمز عبور" required id="password">
                <span class="eye-icon" onclick="togglePassword()">👁️</span>
            </div>
            <button type="submit" name="login" class="btn">ورود</button>
            <p>
                
            </p>
            <button class="btn" onclick="window.location.href='index.php'">صفحه اصلی</button>
        </form>
        <button class="toggle-btn" onclick="window.location.href='register.php'">حساب کاربری ندارید؟ ثبت‌نام کنید</button>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.querySelector('.eye-icon');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.textContent = "🙈"; // آیکون مخفی کردن
            } else {
                passwordField.type = "password";
                eyeIcon.textContent = "👁️"; // آیکون نمایش
            }
        }
    </script>
</body>
</html>
