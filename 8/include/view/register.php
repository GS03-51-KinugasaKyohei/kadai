<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Japan Tour</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="../include/view/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../include/view/css/flexslider.css" rel="stylesheet" >
    <link href="../include/view/css/login.css" rel="stylesheet">
    <link href="../include/view/css/queries.css" rel="stylesheet">
    <link href="../include/view/css/animate.css" rel="stylesheet">
      </head>
      <body id="top">
 <div id="page">
    <div class="container">
      <h1>新規会員登録フォーム</h1>
      <div class="row">
        <div class="col-sm-9">
          <form action="./register.php" class="form-horizontal" method="post">
            <div class="form-group">
              <label for="input-name" class="col-sm-2 control-label">お名前</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="input-name" placeholder="お名前" required="required" value="">
              </div>
            </div>
            <div class="form-group">        
              <label for="input-name" class="col-sm-2 control-label">フリガナ</label>
              <div class="col-sm-10">
                <input type="text" name="furigana" class="form-control" id="furigana" placeholder="フリガナ" required="required">
              </div>
            </div>
            <div class="form-group">   
            <label for="input-name" class="col-sm-2 control-label">性別</label>
              <div class="col-sm-10">
                <input type="text" name="gender" class="form-control" id="gender" placeholder="性別" required="required" value="<?php echo $gender ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="input-mail" class="col-sm-2 control-label">メールアドレス</label>
              <div class="col-sm-10">
                <input type="email" name="email" class="form-control"  id="input-mail" placeholder="メールアドレス" required="required" value="<?php echo $email ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="input-mail" class="col-sm-2 control-label">ユーザーネーム</label>
              <div class="col-sm-10">
                <input type="text" name="user_name" class="form-control" id="user_name" placeholder="ユーザーネーム" required="required" value="<?php echo $user_name ?>">
              </div>
            </div>
            <div class="form-group">
              <label for="input-mail" class="col-sm-2 control-label">パスワード</label>
              <div class="col-sm-10">
                <input type="text" name="password" class="form-control" id="password" placeholder="パスワード" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-default" value="送信">
              </div>
            </div>
          </form>
        </div>
      </div>

    </div><!-- /container -->
  </div><!-- /page -->


        <footer>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../include/view/js/waypoints.min.js"></script>
        <script src="../include/view/js/bootstrap.min.js"></script>
        <script src="../include/view/js/jquery.flexslider.js"></script>
        <script src="../include/view/js/modernizr.js"></script>
      </body>
    </html>