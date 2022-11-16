<?php
  session_start();
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head><?php include('../shortcuts/cssftr.php'); ?></head>
  <body>
    <?php include('../shortcuts/nav.php'); ?>
    <main class="py-4">
<div class="container">
<div class="d-flex justify-content-between">
<h1 class="mb-0">Invite Keys</h1>
<div class="d-flex align-items-center">
<button data-toggle="modal" data-target="#keyPurchaseModal" class="btn btn-lg btn-success shadow-sm" type="submit"><img src="/tadah/im_/https://tadah.rocks/images/dahllor_white.png" width="20" height="20"> Create Key</button>
</div>
</div>
<br>
<p>1 keys can be created every 7 days. Creating a key costs 500 Tokens. You also need a linked Discord account.</p>
<table class="table">
<thead>
<tr>
<th scope="col">Key</th>
<th scope="col">Created</th>
<th scope="col">Updated</th>
<th scope="col">Uses</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
<div class="modal fade" id="keyPurchaseModal" tabindex="-1" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="row text-center justify-content-center">
<div class="justify-content-center">
<p class="mb-0">Are you sure you want to create an invite key? This costs<img src="/tadah/im_/https://tadah.rocks/images/currency.png" width="20" height="20" class="mx-1">500 Tokens.</p>
<p class="text-danger mt-0 mb-0"><b>Remember:</b> You will be held accountable for who you invite and what they do.</p>
</div>
</div>
</div>
<div class="modal-footer justify-content-center">
<form method="POST" action="https://archive.lumen128.com/tadah/mp_/https://tadah.rocks/my/keys">
<input type="hidden" name="_token" value="xwyzJDp21SNWLQFwZ8g1pZHrQJc85DbJjkwoVadW"> <button class="btn btn-success shadow-sm" type="submit">Purchase</button>
</form>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>
<div class="d-flex justify-content-center">
</div>
</div>
</main>