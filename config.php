<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql.ct8.pl');
define('DB_USERNAME', 'm29571_Andrew');
define('DB_PASSWORD', 'makebyurselflol');
define('DB_NAME', 'm29571_trollium');
  
  $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
