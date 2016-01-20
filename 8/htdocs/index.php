<?php

// 設定ファイル読み込み
require_once '../include/conf/const.php';

// 関数ファイル読み込み
require_once '../include/model/function.php';

// セッション開始
session_start();

$tour = new Tour_List_Access();

// ツアー記事データの取得
$status = $tour -> tour_list_show();

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
                        '<a href="#" class="expand"><i class="fa fa-search"></i><br>View More</a>'.
                        '<a class="close-overlay hidden">x</a>'.
                      '</div>'.
                    '</div>'.
	              '</div>'.
    		    '<h2>'. $result[title].'</h2>'.
                '<p>'.$result[description] .'</p>'.
    		  '</div>';  
  		  
    $view = $view . $view_t;
  }
  //echo $view;
  //exit;
}

// user_mstのインスタンス生成

$user_mst_access = new User_Mst_Access();

/*画面から入力したIDとパスワード*/
$user_name = $_POST["user_name"];
$password = $_POST["password"];

// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された場合
if (isset($_POST["user_name"])) {
  // １．ユーザIDの入力チェック
  if (empty($_POST["user_name"])) {
    $errorMessage = "ユーザIDが未入力です。";
  } else if (empty($_POST["password"])) {
    $errorMessage = "パスワードが未入力です。";
  } 

  // ２．ユーザIDとパスワードが入力されていたら認証する
  if (!empty($_POST["user_name"]) && !empty($_POST["password"])) {
    // mysqlへの接続
    try {
        $rtn = $user_mst_access->login($user_name,$password);

        if(isset($rtn)){
          $_SESSION["user_id"] = $rtn['user_id'];
          $_SESSION["user_name"] = $user_name;
          $_SESSION["user_kbn"] = $rtn['user_kbn'];
          var_dump($rtn['user_kbn']);
          header("Location: mypage.php");
          exit;
        }else{
          // throw new Exception('DBアクセスエラー');
        }
    } catch (Exception $e) {
        print "エラー!: " . $e->getMessage() . "<br/>";
        die();
    }
  }
} 




 // viewファイル読み込み
include_once '../include/view/index.php';
