<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /my/dashboard");
    exit;
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('shortcuts/cssftr.php'); ?> </head>
<body style="height: 100vh">
    
<div class="d-flex 1 h-100" id="app">
<main class="landing-page vw-100 vh-100 justify-content-center align-items-center d-flex" style="background-image: url('/images/wintytown.png'); background-size: cover; background-repeat: no-repeat;">
<div class="container-fluid text-center">
<img style="filter: drop-shadow(8px 8px 8px #000);" src="/images/logos/full.png" class="img-fluid" width="500">
<p class="lead my-3 motto user-select-none">
A tight-knit lab full of scientists that reveal a lot of dumb nerd shit.
</p>
  <p style="color: red"><b>We are private now. Please do not try to invite anyone.</b></p>
<a href="/login" class="btn btn-secondary btn-lg shadow-lg mr-3"><i class="fas fa-sign-in-alt mr-1"></i>Login</a>
<a href="/register" class="btn btn-secondary btn-lg shadow-lg"><i class="fas fa-user-plus mr-1"></i>Sign Up</a>
</div>
</main>
</div>
</body>
</html>




























































































