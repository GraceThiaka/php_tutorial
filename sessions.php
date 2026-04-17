<?php
session_start();
$_SESSION['user'] ="Noah";
$session =$_SESSION['user'];
//$_SESSION['admin']=$session;
if(!empty(($_SESSION['user'] =='Noah'))){
    echo "logged in successfully";

}else{
    echo "please Login";
    header ("Location:index.php");
}