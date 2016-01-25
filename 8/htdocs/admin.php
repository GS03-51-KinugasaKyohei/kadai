<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';

// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();

$user = new User_Mst_Access();

$_SESSION["admin_flg"] = 1;

if($_SESSION["admin_flg"] === 1){

  // ツアー記事データの更新
  $status = $user -> user_list_show();

  //データ表示
  if($status===null){
    print '結果がありません。';
  }else{

    $view .= '<div class="col-md-4 wp4"><table border="1"><caption>ユーザー一覧</caption>';
    $num = 1;
 
    //echo $view;
    foreach($status as $result){
      $view_t .= '<form action="./admin.php" method="post"><tr><th>ユーザー'. $num .'</th><td>'.$result['id'].'</td><td><input type="text" name="user_name" value="'. $result['user_name'].'"></td><td><input name="update" type="submit" value="編集"></td><td><input name="delete" type="submit" value="削除"><input name="id" type="hidden" value="'.$result['id'].'"></td></tr></form>';
      $num = $num + 1;
    } 

    $view = $view . $view_t . '</table></div>'; 
  }
}


if(isset($_POST['id']) and isset($_POST['delete'])){
  


  $user_id = $_POST['id'];

  // ユーザー削除
  $user -> user_delete($user_id);


}

if(isset($_POST['id']) and isset($_POST["update"])){
  
  $user_id = $_POST['id'];
  $user_name = $_POST['user_name'];

  // ユーザー情報編集
  $user -> user_update($user_id,$user_name);


}




echo $view;
 // viewファイル読み込み
/*
include_once '../include/view/admin.php';
*/