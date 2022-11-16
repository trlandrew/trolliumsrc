<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /my/dashboard");
    exit;
}
 
require_once "config.php";
 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: /my/dashboard");
                        } else{
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head><?php include('shortcuts/cssftr.php'); ?></head>
<body style="height: 100vh">
  <?php include('shortcuts/alert.php'); ?>
<div class="d-flex 1 h-100" id="app">
<div class="container align-self-center"> 
<div class="row justify-content-center">
<div class="col-md-8">    <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>
<div class="d-flex justify-content-center">
      
<img class="img-fluid" width="180" src="/images/logos/small.png">
</div>
<div class="justify-content-center">
<div class="card-body">
<form method="POST" action="/login">
<input type="hidden" name="_token" value="r1nOsEfffqzUAeeD8WI4rPqq3G48T5mJZz1bKOax">
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Username" type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" autofocus>
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Password" type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required autocomplete="current-password">
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<button type="submit" class="btn btn-secondary shadow-sm w-100">
<i class="fas fa-sign-in-alt mr-1"></i>Login
</button>
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<div class="form-check d-inline-block">
<input class="form-check-input" type="checkbox" name="remember" id="remember">
<label class="form-check-label" for="remember">
Rember Me
</label>
</div>
<div class="float-right">
<a class="text-decoration-none" href="/password/reset">
I forgor my password
</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>






















