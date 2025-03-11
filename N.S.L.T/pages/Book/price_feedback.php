<?php

include("../../data-mysql/dba.php");

session_start();




if($_SERVER["REQUEST_METHOD"]=='POST'){

$email=$_POST['email'];

$id=$_SESSION['id'];

$sql="insert into price_feedback values(null, '$email' , '$id')";

$connect=$conn->query($sql);

if($connect){
    header("Location:/Egypt-Seferis/index.php");
}

}















?>