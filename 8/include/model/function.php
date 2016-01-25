<?php


class User_Mst_Access{

  //設定
  const SALT = "mwefCMEP28DjwdW3lwdS239vVS";
  const HOST_NAME = DB_HOST;
  const USER_NAME = DB_USER;
  const PASSWORD = DB_PASSWD;
  const DATABASE_NAME = DB_NAME;

  private $dbh = null;

  /**
   * コンストラクタ
   *　DB接続情報
   */
  function __construct(){
    $this->dbh = new PDO(
      DB_HOST, 
      DB_USER, 
      DB_PASSWD
    );
    session_start();
  }

  //パスワードのハッシュ化
  //private function hash($password){
  //  return md5($password . self::SALT);
  //}
  //パスワードのハッシュ化
  private function hash($password){
    return md5($password . self::SALT);
  }
  /**
   * 指定したユーザでログインします。
   *  
   * @param string $user_name ユーザ名
   * @param string $password パスワード
   *
   * @return 成功したかどうか
   */
  public function login($user_name, $password){

      $dbh = new PDO(DB_HOST, DB_USER, DB_PASSWD);
      
      $prepare = $dbh->prepare('SELECT * FROM user_mst WHERE user_name = :user_name');
      
      $prepare->bindValue(':user_name',$user_name,PDO::PARAM_STR);
      //foreach($dbh->query("SELECT * FROM pm_user WHERE user_login = '" . $user_id . "'") as $row) {
      $prepare->execute();

      $rtn = null;
      /*  */
      while ($row = $prepare->fetch(PDO::FETCH_ASSOC)) {
        $db_hashed_pwd = $row['password'];
        $rtn['user_id'] = $row['id'];
      }
     $dbh = null;

      // ３．画面から入力されたパスワードとデータベースから取得したパスワードのハッシュを比較します。
     $compare_password = $this->hash($password);

     
     if($compare_password === $db_hashed_pwd){

     // ４．認証成功なら、セッションIDを新規に発行する
        session_regenerate_id(true);

        return $rtn;
        exit;
      } else {
        // 認証失敗
        throw new Exception('パスワードが一致しません。');
        //$errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
      } 
    return false;
  }

  /**
   * 登録ユーザーの一覧情報を取得する
   *
   *
   * @return 登録ユーザー一覧
   */
  public function user_list_show(){
    // DB接続情報
    $dbh = new PDO(DB_HOST, DB_USER, DB_PASSWD);

    // 一覧表示用SQL作成
    $stmt = $dbh->prepare("SELECT * FROM user_mst");
  
    $stmt->execute();

    $result = $stmt->fetchAll();

    $dbh = null;

    //insertを実行
    return $result;

  }


  /**
   * 登録ユーザーの一覧情報を取得する
   *
   *
   * @return 登録ユーザー一覧
   */
  public function user_delete($user_id){

    // DB接続情報
    $dbh = new PDO(DB_HOST, DB_USER, DB_PASSWD);

    // 一覧表示用SQL作成
    $stmt = $dbh->prepare("delete from user_mst where id = :user_id");
    
    $stmt->bindValue(':user_id', (int)$user_id, PDO::PARAM_INT);

    $result = $stmt->execute();

    $dbh = null;

    //insertを実行
    return $result;

  }

  /**
   * 登録ユーザーの一覧情報を取得する
   *
   *
   * @return 登録ユーザー一覧
   */
  public function user_update($user_id,$user_name){

    // DB接続情報
    $dbh = new PDO(DB_HOST, DB_USER, DB_PASSWD);

    //予約番号の承認フラグを1にする
    $prepare = $dbh->prepare('update user_mst set user_name = :user_name WHERE id = :user_id');

    $prepare->bindValue(':user_id', (int)$user_id, PDO::PARAM_INT); 
    $prepare->bindValue(':user_name', $user_name, PDO::PARAM_STR); 
    
    $result = $prepare->execute();
   
    //insertを実行
    return $result;

  }

}

/**
 * 予約テーブルクラス
 *　ユーザー同士の予約情報を格納する予約テーブルへのCRUDを定義
 */
class Tour_List_Access{

  const HOST_NAME = DB_HOST;
  const USER_NAME = DB_USER;
  const PASSWORD = DB_PASSWD;
  const DATABASE_NAME = DB_NAME;

  /**
   * コンストラクタ
   */
  function __construct(){

  }

  /**
   * ツアー一覧を取得する
   *
   * @param なし
   *
   * @return ツアー情報の一覧
   */
    public function tour_list_show(){

    try {
      // PDOクラスをインスタンス化
      $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWD); 
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

    // 文字コードをセット
    $stmt = $pdo->query('SET NAMES utf8');
    if (!$stmt) {
      $error = $pdo->errorInfo();
      exit($error[2]);
    }

    // 一覧表示用SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tour_list limit 3");
  
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    //結果セットを返す 
    return $result;

  }


  /**
   * カテゴリーに対応したツアー一覧を返す
   *
   * @param カテゴリー区分
   *
   * @return ツアー情報の一覧
   */
  
    public function cate_list_show($category){

    try {
      // PDOクラスをインスタンス化
      $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWD); 
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

    // 文字コードをセット
    $stmt = $pdo->query('SET NAMES utf8');
    if (!$stmt) {
      $error = $pdo->errorInfo();
      exit($error[2]);
    }

    // 一覧表示用SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tour_list where category = :category");

    $stmt->bindValue(':category',$category,PDO::PARAM_INT);
    
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    //結果セットを返す 
    return $result;

  }



  /**
   * 自分の作成したツアー一覧を返す
   *
   * @param ユーザーID
   *
   * @return ツアー情報の一覧
   */
  
    public function my_list_show($user_id){

    try {
      // PDOクラスをインスタンス化
      $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWD); 
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

    // 文字コードをセット
    $stmt = $pdo->query('SET NAMES utf8');
    if (!$stmt) {
      $error = $pdo->errorInfo();
      exit($error[2]);
    }

    // 一覧表示用SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tour_list where author_id = :user_id");

    $stmt->bindValue(':user_id',(int)$user_id,PDO::PARAM_INT);
    
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    //結果セットを返す 
    return $result;

  }


  /**
   * 編集したツアーの内容を更新
   *
   * @param 記事ID
   *
   * @return ツアー情報の一覧
   */
  
    public function tour_list_update($article_id,$title,$description){

    $dbh = new PDO(DB_HOST, DB_USER, DB_PASSWD);

    //予約番号の承認フラグを1にする
    $prepare = $dbh->prepare('update tour_list set title = :title, description = :description WHERE id = :article_id');

    $prepare->bindValue(':title', $title, PDO::PARAM_STR); 
    $prepare->bindValue(':description', $description, PDO::PARAM_STR); 
    $prepare->bindValue(':article_id', (int)$article_id, PDO::PARAM_INT);

    $result = $prepare->execute();
    var_dump($result);
    return $result;

  }


  /**
   * 編集したツアーの内容を更新
   *
   * @param 記事ID
   *
   * @return ツアー情報の一覧
   */
  
    public function tour_show($article_id){

    try {
      $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWD);
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }
    // 記事詳細表示用SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tour_list where id = :article_id");

    $stmt->bindValue(':article_id',(int)$article_id,PDO::PARAM_INT);
    
    $stmt->execute();

    $result = $stmt->fetchAll();

    return $result; 

  }



}


?>