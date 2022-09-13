<?php

// super global variables $_GET , $_POST , $_REQUEST , $_FILES , $_COOKIE , $_SESSION  
// var_dump( $_REQUEST );  

// from to
// var_dump($_FILES['cv']);
$from = $_FILES['cv']['tmp_name'];
$file_array = explode( '.',$_FILES['cv']['name']);
$file_name = $file_array[0];
$ext = $file_array[1];
$to = $file_name .'_' . time() .".$ext";
// timestamp
// extension png jpg jpeg
// size
$available_extensions = ['png','jpg','jpeg'];
$is_upload = true;
if(!in_array($ext ,$available_extensions )  ){
    $is_upload = false;
    echo 'file extension not supported';
}
$allowed_size = 1000000;
if($_FILES['cv']['size'] > $allowed_size){
    $is_upload = false;
    echo 'file is too large';
}
if($is_upload){
    move_uploaded_file($from , "./uploads/$to" );
}
?>


// $_COOKIE , $_SESSION



// 