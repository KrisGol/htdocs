<?php include ('connection.php')  ?>
<?php

if (!$dbconn) {
die('Could not connect');
}
else {
echo ("Connected to local DB");
?>
