<?php
$server="localhost";
$user="root";
$password="";
$db="user";

$con= mysqli_connect($server,$user,$password,$db);
if(!$con){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
