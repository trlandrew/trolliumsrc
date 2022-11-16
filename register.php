<?php
require_once "config.php";
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);                   
            if(mysqli_stmt_execute($stmt)){
                header("location: login");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>

<html lang="en"><head>
<?php include('shortcuts/cssftr.php'); ?></head>
   <body style="height: 100vh">
  <?php include('shortcuts/alert.php'); ?>
<div class="d-flex 1 h-100" id="app">
<div class="container align-self-center">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="d-flex justify-content-center">
<img class="img-fluid" width="180" src="/images/logos/small.png">
</div>
<div class="text-center justify-content-center">
<div class="card-body">
<h2><b>Privated now</b></h2>
<p>You'll get pinged on server when we are back.<br></p>
</div>
</div>
</div>
</div>
</div>
</div> 
 <?php
/* 
  <div class="d-flex 1 h-100" id="app">
<div class="container align-self-center">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="d-flex justify-content-center">
<img class="img-fluid" width="180" src="/images/logos/small.png">
</div>
<div class=" justify-content-center">
    <div class="form-text text-muted text-center"><i class="fas fa-exclamation-triangle mr-1"></i>Key drops are on server soon.</div>
<div class="card-body">
<form method="POST" action="/register">
<input type="hidden" name="_token" value="SZdEwMZRMADJU9c7gmO9G9OC4cQXtYJVzaY7UPgp">
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Username" type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" name="username" value="<?php echo $username; ?>" required="" autocomplete="username" autofocus="">
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Email" id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email" disabled>
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Password" type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" value="<?php echo $password; ?>" required="" autocomplete="new-password">
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<input placeholder="Confirm Password" type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" required="" autocomplete="new-password">
</div>
</div>
<div class="form-group row d-flex justify-content-center">
<div class="col-md-6">
<div class="d-flex justify-content-center">
</div>
</div>
</div>
<div class="form-group row d-flex justify-content-center mb-0">
<div class="col-md-6">
<button type="submit" class="btn btn-secondary shadow-sm w-100">
<i class="fas fa-user-plus mr-1"></i>Register
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div> */  ?>
  </html>



















































