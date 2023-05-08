<?php
//  print ("helooo");
// echo "asd";

# variables
// $name='ahmad';
// $age=19;
// echo $name;
// echo "<br>";
// echo $age;

// echo "<br>";

// echo "your name is: ".$name." and your age is :".$age;

//  string  "" , ''
# integer - , +
# float 0.4 , 12, 0.333333
# double 0.4 ,12 0.765767567567
# boolean , true , false // 0 , 1
# array 
// $num1 =10;
// $num2=20;
// $is_gt=$num1<$num2;
// echo $is_gt;

// logic opertator

# > < >= <= == === != !
// $name='ahmad';
// $bool=! '1'!==1;

// echo $bool;


// + - * / % ++ -- += -= *= /=
// $num1=5;
// $num2=11;
// $num1/=10;
// echo $num1;
// $first_name="ahmad";
// $last_name="khaled1";
// if($name=='ahmad'){
//     echo "welcome";
// }elseif($name=='ali'){
// echo "Welcome Ali";
// }elseif($name=='ahmad'){
//     echo "Welcome My frind Fhd";
//     }else{
//   echo "not welcome"; 
// }
//        true          &&    false
// if($first_name=='ahmad' || $last_name=='khaled'){
//   echo "welcome ".$first_name;
// }
// $num2=6;
// $num3= $num2==4  ?  5 :  6;

// echo $num2;
// echo "<br>";
// echo $num3;
// $name="fhd";

// $names=[
//   "ahmad","mohammad",12,true,5>4,$name
// ];

// $numbers=[
//   [1,3,5,7,9],
//   [2,4,6,8,10],
//   [0,1,2,3,4,['a','b']],
// ];

// echo "<pre>";
// print_r($numbers[2][5][1]);
// echo "</pre>";

// $students=[
//  "st1"=> [
//   "info"=>["name"=>"ahmad","age"=>18,"is_success"=>true],
// 'parent'=>['father'=>'walid','mother'=>'hameda'],
// ],
 
// ];
// print_r( $students["st1"]);

//$names=['ahmad','ali','walid','fhd'];
// for($i=0;$i<10;$i++) {
  
// //   if($i==5){
// //   break;
// // }
// if($i==5){
//   continue;
// }
// echo $i;

  
// }

################ Home Work #####################
// for($i=0;$i<30;$i++) {
//   if($i%2!=0){
//     echo $i;
//   }
//   }
  #######################################

// $names=['ahmad','ali','fhd','walied'];
// for($i=0;$i<count($names);$i++){
//   echo $names[$i]."<br>";
// }

// foreach($names as $item){
//   echo $item."<br>";
// }


// $student = [
//   [
//   'age'=>18,
//   "name"=>'ahmad',
//   'is_success'=>true,
  
// ],
//   [
   
//   'age'=>18,
//   'is_success'=>true,
//   "name"=>'ali',
// ],
// ];
// $i=0;
// تستخدم فقط مع المصفوفات
// foreach($student as $key => $value){
//   // $value=['age' ,'is_success', 'name']
//   foreach($value as $k=>$item){
//     $i++;
//     if($k=='name'){
//       echo $item;
//       break;
//     }
//   }
// }
// echo $i;
// $i=0;
// while($i<10){
//   $i++; 
// if($i==5){
//   continue;
// }
// echo $i;
// }
// $i=0;
// do{
// echo $i;
// $i++;
// }while($i<10);


// function print_array(){
// $names=['ahmad','ali'];
// foreach($names as $name){
//   echo $name;
// }
// }
// print_array();

// function plus() : void{
//   echo 5+1;
// }
// //plus();

// function div() : float{
//   return 4/2;
// }

// $x=div();
// echo $x;

// function add($x,$y,$z=12){
//   echo $x+$y+$z;
// }
// $num1=5;
// $num2=10;
// add($num1,$num2,3);

function area($width,$length,$x,$r=null){
if($r!=null){
  echo $r;
}
else{
  echo $width* $length;
}
}

//area(10,20,5);

function multi(...$x){
  $result=1;
 foreach($x as $i){
$result*=$i;
 }
 echo $result;
}

multi(4,5,6,7,8,1,2,5);





