// تابع برای تغییر حالت نمایش پسورد
function togglePasswordVisibility(id) {
    const passwordField = document.getElementById(id);
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
}

// تابع برای ورود
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // جلوگیری از ارسال فرم به طور پیش‌فرض
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if (username && password) {
        alert('ورود موفقیت‌آمیز');
        window.location.href = 'index.php'; // هدایت به صفحه اصلی
    } else {
        alert('لطفا تمام فیلدها را پر کنید');
    }
});

// نمایش فرم ثبت‌نام
document.getElementById('register-btn').addEventListener('click', function() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'block';
});

// نمایش فرم ورود
document.getElementById('login-btn').addEventListener('click', function() {
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
});

// ثبت‌نام
document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const username = document.getElementById('register-username').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    
    if (username && password && confirmPassword) {
        if (password === confirmPassword) {
            alert('ثبت‌نام موفقیت‌آمیز');
            window.location.href = 'index.php'; // هدایت به صفحه اصلی
        } else {
            alert('رمز عبور و تکرار رمز عبور با هم مطابقت ندارند');
        }
    } else {
        alert('لطفا تمام فیلدها را پر کنید');
    }
});
// افزودن عملگر برای آیکون چشم در فیلد پسورد
document.getElementById('toggle-password').addEventListener('click', function () {
    var passwordField = document.getElementById('password');
    var passwordType = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = passwordType;
    this.classList.toggle('fa-eye-slash');
});

// افزودن عملگر برای آیکون چشم در فیلد تکرار پسورد
document.getElementById('toggle-confirm-password').addEventListener('click', function () {
    var confirmPasswordField = document.getElementById('confirm-password');
    var passwordType = confirmPasswordField.type === 'password' ? 'text' : 'password';
    confirmPasswordField.type = passwordType;
    this.classList.toggle('fa-eye-slash');
});


