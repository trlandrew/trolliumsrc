<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head><?php include('../shortcuts/cssftr.php') ?>
    </head>
  <body>
       <?php include('../shortcuts/nav.php') ?>
    <main class="py-4">
<div class="container">
<h1 class="font-weight-bold">User Settings</h1>
<hr>
<div class="card rounded-0 mb-3 shadow-sm">
<div class="card-body py-0 px-0">
<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
<a class="nav-link rounded-0 active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link rounded-0" id="pills-account-tab" data-toggle="pill" href="#pills-account" role="tab" aria-controls="pills-account" aria-selected="false">Account</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link rounded-0" id="pills-theme-tab" data-toggle="pill" href="#pills-theme" role="tab" aria-controls="pills-theme" aria-selected="false">Theme</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link rounded-0" id="pills-preferences-tab" data-toggle="pill" href="#pills-preferences" role="tab" aria-controls="pills-preferences" aria-selected="false">Preferences</a>
</li>
</ul>
</div>
</div>
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="container px-0">
<div class="card card-body">
<form method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="xwyzJDp21SNWLQFwZ8g1pZHrQJc85DbJjkwoVadW">
<div class="form-group">
<label for="blurb">
<h3 class="mb-0">Blurb</h3>
<small class="text-muted">Maximum 700 characters</small>
</label>
<textarea name="blurb" class="form-control " id="blurb" rows="3"></textarea>
</div>
<div class="text-right px-0">
<button type="submit" class="btn btn-secondary shadow-sm"><i class="far fa-save mr-1"></i>Save</button>
</div>
</form>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab">
<div class="container px-0">
<div class="card card-body">
<h3>Account Information</h3>
  <p class="text-muted">User ID is needed for you to recover account. If you lost an account, contact <a href="mailto:shitdapants@gmail.com" style="color: lightblue">owner</a></p>
<p class="mb-0">Username: </p>
<p class="text-muted"><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
<p class="mb-0">User ID: </p>
<p class="text-muted"><?php echo htmlspecialchars($_SESSION["id"]); ?></p>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-preferences" role="tabpanel" aria-labelledby="pills-preferences-tab">
<div class="container px-0">
<div class="card card-body">
<h3>Client Settings</h3>
<small class="text-muted pb-2">currently only apply for 2014</small>
<form method="post">
<input type="hidden" name="_token" value="xwyzJDp21SNWLQFwZ8g1pZHrQJc85DbJjkwoVadW"> <div class="form-check">
<input class="form-check-input" value="old_cores" type="radio" name="old_cores" id="themeRadio" checked="">
<label class="form-check-label" for="themeRadio">
New CoreScripts
</label>
</div>
<div class="form-check">
<input class="form-check-input" value="new_cores" type="radio" name="old_cores" id="themeRadio">
<label class="form-check-label" for="themeRadio">
Old CoreScripts
</label>
</div>
<div class="text-right px-0">
<button type="submit" class="btn btn-primary shadow-sm"><i class="far fa-save mr-1"></i>Save</button>
</div>
</form>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-theme" role="tabpanel" aria-labelledby="pills-theme-tab">
<div class="container px-0">
<div class="card card-body">
<h3>Site Theme</h3>
<small class="text-muted pb-2">no, Lumen is not coming back</small>
<form method="post">
<input type="hidden" name="_token" value="xwyzJDp21SNWLQFwZ8g1pZHrQJc85DbJjkwoVadW"> <div class="form-check">
<input class="form-check-input" value="default" type="radio" name="theme" id="themeRadio">
<label class="form-check-label" for="themeRadio">
Default
</label>
</div>
 <div class="form-check">
<input class="form-check-input" value="dark" type="radio" name="theme" id="themeRadio">
<label class="form-check-label" for="themeRadio">
Dark
</label>
</div>
<div class="text-right px-0">
<button type="submit" class="btn btn-primary shadow-sm"><i class="far fa-save mr-1"></i>Save</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</main>
    <?php include('../shortcuts/footer.php'); ?>
    </body>
  </html>









