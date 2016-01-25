<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';
// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();

$tour = new Tour_List_Access();

if(isset($_POST["article_id"])){

$article_id = $_POST["article_id"];
$title = $_POST["title"];
$description = $_POST["content"];

// ツアー記事データの更新
$status = $tour -> tour_list_update($article_id,$title,$description);

}






$tour_id=$_GET['tour_id'];

// ツアー記事データの取得
$status = $tour -> tour_show($tour_id);

$title = $status[0]["title"];

$content = $status[0]['description'];

$id = $status[0]['id'];




 // viewファイル読み込み
include_once '../include/view/tour_edit.php';
