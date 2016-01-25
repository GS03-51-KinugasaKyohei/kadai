<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';

// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();


if(isset($_POST['name'])){

  $name = $_POST['name'];

  $furigana = $_POST['furigana'];

  $gender = $_POST['gender'];

  $user_name = $_POST['user_name'];

  $password = $_POST['password'];

  $email = $_POST['email'];
/*
  var_dump($name);
  var_dump($furigana);
  var_dump($gender);
  var_dump($email);
  var_dump($user_name);
  var_dump($password);
  exit();
*/

  $user = new User_Mst_Access();

  $user -> user_insert($name,$furigana,$gender,$user_name,$password,$email);




}


 // viewファイル読み込み
include_once '../include/view/register.php';
