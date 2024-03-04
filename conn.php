<?php
$host  ="localhost";
$user  ="root";
$password ="";
$dbName="hospital";
$conn=mysqli_connect($host,$user,$password,$dbName);
if(!$conn){
    echo "connection failed";
    exit();
}
else {
//echo "";
}?>