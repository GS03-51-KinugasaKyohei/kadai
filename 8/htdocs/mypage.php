<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';

// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();

$user_id = $_SESSION["user_id"];

$user_name = $_SESSION["user_name"];


$tour = new Tour_List_Access();




// ツアー記事データの取得
$status = $tour -> my_list_show($user_id);

//データ表示
//echo(count($status));
//exit;
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  print '結果がありません。';
}else{
  $view = '';
  foreach($status as $result){

    $view_t = '<div class="col-md-4 wp4">'.
                  '<div class="overlay-effect effects clearfix">'.
                    '<div class="img">'.
                    '<img src="../include/view/img/0'. $result[id].'.jpg" alt="Portfolio Item">'.
                      '<div class="overlay">'.
                        '<a href="./tour_edit.php?tour_id='.$result[id].'" class="expand"><i class="fa fa-search"></i><br>View More</a>'.
                        '<a class="close-overlay hidden">x</a>'.
                      '</div>'.
                    '</div>'.
	              '</div>'.
            '<form method="post" action="./mypage.php">'.
    		    '<h2>'.$result[title].'</h2>'.
            '<p>'.$result[description] .'</p>'.
            '<input type="hidden" name="article_id" value="'.$result[id].'">'.
            '</form>'.
    		  '</div>';  
  		  
    $view = $view . $view_t;
  }
  //echo $view;
  //exit;
}


 // viewファイル読み込み
include_once '../include/view/mypage.php';
