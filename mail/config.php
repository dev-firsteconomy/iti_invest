<?php
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "fe_db_admin";
$mysql_database = "bcis_landing";

$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Database Connection Problem a");
mysqli_select_db($db, $mysql_database) or die("Database Connection Problem b");
