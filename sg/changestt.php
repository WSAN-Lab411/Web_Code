<?php
require 'dbconnect.php';
$mac = $_GET['macid'];
$my_query1 = "UPDATE mapstt SET temp_humi = '".$mac."' ";
mysql_query ($my_query1);
echo $mac;

mysql_close($connect);
?>