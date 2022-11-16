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
<center><iframe width="100%" height="400" src="//www5.cbox.ws/box/?boxid=938971&boxtag=WH4KC4" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="yes" frameborder="0" name="cboxmain" id="cboxform"></iframe></center>