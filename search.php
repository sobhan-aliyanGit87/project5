<!-- search.php -->
<?php
include("header.html");
?>
<?php
include("nav.html");
?>
<div class="container mt-5">
    <h1 class="text-center">نتایج جستجو</h1>
    <p class="text-center">نتایج مربوط به کلمه جستجو: <?php echo htmlspecialchars($_GET['query']); ?></p>
</div>
<?php
include("footer.html");
?>

