<?php
$db_host='localhost';
$db_user='root';
$db_passwd='tiger';
$db_name='saurabh';
$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("Error connecting to the database". mysqli_connect_error($dbh));
?>
