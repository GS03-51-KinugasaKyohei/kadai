<?php

/*
class connectModel{
  protected $_dbConnections=array();
  protected $_connectName;
    public function connect($name,$connection_strings){
      try{
        $cnt = new PDO{
          $connection_strings['string'],
          $connection_strings['user'],
          $connection_strings['password']
        );
        }catch(PDOException $e){
          exit("データベースの接続に失敗しました。：{$e->getMessage()}");
        }
      $cnt -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this -> _dbConnections[$name] = $cnt;

      $this -> _connectName = $name;
    }

  public function getConnection($name = null){
    //データベースの接続名が取得できない場合の処理
    if(is_null($name)){
      // _dbConnectionsプロパディの先頭要素を返す
      return current($this->_dbConnections);

    }
    //_dbConnectionsプロパディに格納されているPDOオブジェクトを返す
    return $this -> _dbConnections[$name];
  }
}
*/
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
/*
        $prepare = $dbh->prepare('SELECT * FROM yoyaku_table WHERE user_id = :user_id and syonin_flg = 0 ');

    $prepare->bindValue(':user_id', $user_id, PDO::PARAM_INT); 

    $prepare->execute();

    $result = $prepare->fetchAll();
*/
    // 一覧表示用SQL作成
    $stmt = $pdo->prepare("SELECT * FROM tour_list where category = :category");

    $stmt->bindValue(':category',$category,PDO::PARAM_INT);
    
    $stmt->execute();

    $result = $stmt->fetchAll();
    
    //結果セットを返す 
    return $result;

  }



}


?>