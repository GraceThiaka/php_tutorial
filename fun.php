<?php
function addition(){
    if(isset($_POST['addbtn'])){
        $Num1 = $_POST ['num1'];
        $Num2 = $_POST ['num2'];


        $result = $Num1+ $Num2;
         return $result;
    }
}
//Dividing two numbers
function divide(){
    if(isset($_POST['divbtn'])){
        $Num1 = $_POST ['num1'];
        $Num2 = $_POST ['num2'];
        $result = $Num1 /$Num2;
        return $result;

}
}