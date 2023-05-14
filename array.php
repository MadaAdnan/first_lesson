<?php
$array=[
    'ali',
    'adnan',
    'ehsan',
    'mohammad',
    'hareth',

];

$array2=[1,2,3,4,5];
// echo "<pre>";
// print_r($array);
// echo "</pre>";
//$arr=array_merge($array,$array2);
// $arr=array_pop($array);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
// $student=[
//     'name'=>'ali',
//     'age'=>10,
//     'date'=>'1-2-2000'
// ];
// $keys=array_keys($student);
// $keys=array_values($student);
// echo "<pre>";
// print_r($keys);
// echo "</pre>";


//$str=array_shift($array);
//array_push($array,'ali',1,[1,2,3]);
//array_unshift($array,12,13);

// $arr=array_replace($array,[1,3,6,4,5]);
// $arr=array_sum($array2);
//$arr=array_reverse($array);
// $arr=array_diff([1,2,3,4,5],[4,5,7]);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

$array=[1,5,3,8,9,0];
$num=6;
// هل العنصر موجود في المصفوفة   TRUE || FALSE
//echo in_array($num,$array);
//  هل المتغير عبارة عن مصفوفة  TRUE || FALSE
//echo is_array($num);
// قص المصفوفة من عنصر معين وجلب عدد من العناصر بعده
$arr=array_slice($array,2,2);
//print_r($arr);

?>