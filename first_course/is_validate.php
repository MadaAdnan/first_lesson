<?php

$var='Welcome to mada@https://mada.com-3423';

// هل العنصر عبارة عن رقم صحيح
//  echo is_integer($var);
// echo is_string($var);

// هل العنصر عبارة عن رقم عشري
// echo is_float($var);


//هل العنصر عبارة عن قيمة منطقية 
// echo is_bool($var);


// هل العنصر عبارة عن نص
//echo is_string($var);

// فحص تنسيق العنصر
// echo filter_var($var,FILTER_SANITIZE_NUMBER_INT);
// echo filter_var('DA:CA:D6:A3:C2:A1',FILTER_VALIDATE_MAC);
// echo filter_var($var,FILTER_VALIDATE_EMAIL);

// التحقق إذا كان العنصر يحتوي تنسيق رقمي
// echo filter_var($var,FILTER_SANITIZE_NUMBER_INT);

echo filter_var($var,FILTER_SANITIZE_URL);
echo "<br>";
// البحث والتحقق من وجود رابط في النص
$array=explode(' ',$var);
echo "<pre>";
// print_r($array);
foreach($array as $ar){
    if(filter_var($ar,FILTER_VALIDATE_URL)){
        echo $ar;
        break;
    }
}




?>