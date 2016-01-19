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
        <div id="form-main">
          <div id="form-div">
            <form class="form" id="form1" action="./login.php" method="post">  
              <p class="name">
                <input name="user_name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
              </p>
              <p class="email">
                <input name="password" type="text" class="validate[required,custom[email]] feedback-input" id="password" placeholder="password" />
              </p>
              <div class="submit">
                <input type="submit" value="LOGIN" id="button-blue"/>
                <div class="ease"></div>
              </div>
            </form>
          </div>
        </body>
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