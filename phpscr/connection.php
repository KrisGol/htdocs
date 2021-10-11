
<?php
$host = 'localhost'
$port = '5434'
$database = 'postgres'
$user = 'postgres'
$password = 'postgres'

$dbconn = pg_connect("host=$host port=$port dbname=$database user=$user password=$password")
?>
