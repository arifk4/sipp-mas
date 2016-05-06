<?php

$host="localhost"; 
$user="root";
$password=""; 
$database="dataku";

if($connect = mysql_connect($host,$user,$password)==true){  
 $sel = mysql_select_db($database);  
}  
else{  
 echo "Koneksi database Gagal !!";  
}  

?>