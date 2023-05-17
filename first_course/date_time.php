<?php
// 1-1-1970
echo time();
echo "<br>";

 echo date('Y - M - d h : i : s a');

echo "<br>";
// date_default_timezone_set('Asia/Baghdad');
echo date('Y - M - d h : i : s a');
 echo "<br>";
  echo date('Y-m-d h:i:m',strtotime('Sep 10 2000'));
echo "<br>";
// echo strtotime('Sep 10 2000');
echo date('Y-m-d h:i:s a',strtotime('+4 month'));
echo "<br>";
echo date('l');

echo "<br>";

echo mktime(12,40,29,5,14,2023);
 echo "<br>";
 echo date('Y-m-d',mktime(12,40,29,5,14,2050));
echo "<pre>";

?>