<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';
// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();


$tour = new Tour_List_Access();

$category = $_GET['category_id'];

// ツアー記事データの取得
$status = $tour -> cate_list_show($category);

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
                        '<a href="./tour.php?tour_id='.$result[id].'" class="expand"><i class="fa fa-search"></i><br>View More</a>'.
                        '<a class="close-overlay hidden">x</a>'.
                      '</div>'.
                    '</div>'.
	              '</div>'.
    		    '<h2>'. $result[title].'</h2>'.
                '<p>'.$result[description] .'</p>'.
    		  '</div>';  
  		  
    $view = $view . $view_t;
  }

}

  echo $view;
  exit;
 // viewファイル読み込み
include_once '../include/view/nature.php';
