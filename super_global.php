<?php
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_USER_AGENT'];
//echo $_SERVER['HTTP_REFERER'];
//echo $_SERVER['SCRIPT_NAME'];

// echo $_SERVER['REQUEST_METHOD'];


// echo $_REQUEST['name'];
// strip_tags($_GET['name'])
// addslashes($_GET['name'])
// echo htmlentities($_GET['name']);

// echo "asd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asd"

if(empty($_GET['name'])){
    echo 'enter your name';
}
else{
    echo 'thank you '.$_GET['name'];
}
?>