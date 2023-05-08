<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
$op=$_GET['op'];
// $num1=$_POST['num1'];
// $num2=$_POST['num2'];
// $op=$_POST['op'];
$r=multi($num1,$num2,$op);
echo "R=>".$r;




function multi($num1,$num2,$op)  {
    if($op=='+'){
        $result= $num1+$num2;
    }elseif($op=='-'){
        $result=$num1-$num2;
    }
    else{
        $result=$num1*$num2;
    }
   
   
    return  $result;
    
}
?>