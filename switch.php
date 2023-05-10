<?php
//print_r($_GET);
$number1=$_POST['num1'];

$number2=$_POST['num2'];
$op=$_POST['op'];
$test=isset($_POST['test'])?$_POST['test']:null;
$m=null;
echo isset($m)?$m:"no declar $m";
calc($number1,$number2,$op);

function calc($num1,$num2,$op){
    switch($op){
        case '+':
            echo $num1+$num2;
            break;
        case '-':
            echo $num1-$num2;
            break;
        case '*':
            echo $num1*$num2;
           break;
        case '/':
            echo $num1/$num2;
            break;
        default :
            echo "لم تدخل عملية صحيحة";
    }
}


