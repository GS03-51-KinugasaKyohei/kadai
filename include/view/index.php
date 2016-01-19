<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halcyon Days - An Exclusive Freebie for Codrops by Peter Finlan.</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="../include/view/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../include/view/css/flexslider.css" rel="stylesheet" >
    <link href="../include/view/css/styles.css" rel="stylesheet">
    <link href="../include/view/css/queries.css" rel="stylesheet">
    <link href="../include/view/css/animate.css" rel="stylesheet">
    <script src="../include/view/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../include/view/js/jquery.lightbox_me.js" type="text/javascript"></script>
    <script>
    $(function(){
      $('#login1').click(function(e) {
        $('#sign_up').lightbox_me({
          centered: true, 
          onLoad: function() { 
            $('#login').find('input:first').focus()
          }
        });
        e.preventDefault();
      });
    });
    </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body id="top">
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro">ホーム <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features">コンセプト<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#responsive">japan tourが提供すること <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#portfolio">ツアー一覧 <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <!--
                      <li><a href="#team">Team <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact">Get in Touch <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      -->
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <p id="login1">ログイン</p>
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
                  <h1 class="animated fadeInDown">JAPAN<span>TOUR</span></h1>
                  <p class="animated fadeInUp delay-05s">An special tour for <em>all tourists</em></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#" class="learn-more-btn">新規登録</a>
                  <a href="./login.php" class="learn-more-btn">ログイン</a>
                </div>
            </div>
          </section>  
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Concept of our wersite</h1>
                <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Love what you do, and you'll do it well</h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-laptop shadow"></i>
                    </div>
                    <h2><a href="../htdocs/nature.php">自然を楽しむツアー</a></h2>
                    <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.
                    primis in faucibus.</p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-code shadow"></i>
                    </div>
                    <h2>文化を楽しむツアー</h2>
                    <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.
                    </p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-heart shadow"></i>
                    </div>
                    <h2>爆買ツアー</h2>
                    <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow">Responsive Design Specialists</h1>
                        <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology. </p>
                        <p>
                        Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology. </p>
                        <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.</p>
                      </li>
                      <li>
                        <h1 class="arrow">Bootstrap Professionals</h1>
                        <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology. </p>
                        <p>
                        Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology.. </p>
                        <p>Japan is one of the most popular travel destinations in the world. It is a unique blend of traditional and modern, with many temples and buildings from the past co-existing with modern achievements in architecture and technology..</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>TOUR LIST</h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <?php echo $view ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!--
        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#" class="ignite-btn">Ignite Your Passion</a>
              </div>
            </div>
          </div>
        </div>
        <section class="team text-center section-padding" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">We're a team that adore what we do</h1>
              </div>
            </div>
            <div class="row">
              <div class="team-wrapper">
                <div id="teamSlider">
                  <ul class="slides">
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="../include/view/img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="../include/view/img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="../include/view/img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="../include/view/img/team-01.png" alt="Team Member">
                        <h2>Jon Snow</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="../include/view/img/team-02.png" alt="Team Member">
                        <h2>Cersei Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="../include/view/img/team-03.png" alt="Team Member">
                        <h2>Jamie Lannister</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Subscribe to stay in the loop</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Send">
            </form>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Drop us a line</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                  <p>Level 6, 23 Pitt St, Sydney</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>+61 9 211 3747</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="#">hey@halcyondays.com</a></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Peter Finlan</a> exclusively for <a href="http://tympanus.net/codrops/"><em>Codrops</em></a></p>
              </div>
            </div>
          </div>
        </footer>

        <div id="sign_up">
          <h3 class="log_in">ログイン</h3>
          <form id="loginForm" name="loginForm" action="./index.php" method="POST">
            <div class="form-item">
              <label for="user_name"></label>
              <input type="text" class="user_id" name="user_name" required="required" placeholder="User ID" value="<?php echo htmlspecialchars($_POST["user_name"], ENT_QUOTES); ?>"></input>
            </div>
            <div class="form-item">
              <label for="password"></label>
              <input type="password" name="password" required="required" placeholder="Password" value=""></input>
            </div>
            <div class="button-panel">
              <input type="submit" id="login" class="login" title="ログイン" value="ログイン"></input>
            </div>
            <div class="button-panel">
              <a href="#" class="tw_button_link"><img class="tw_login_img" src="../include/view/images/tw_button.jpeg" alt="twitterログイン"></a>
              <a href="<?php echo $loginUrl ?>" class="fb_button_link"><img class="fb_login_img" src="../include/view/images/fb_button.png" alt="facebookログイン"></a>
            </div>
          </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../include/view/js/waypoints.min.js"></script>
        <script src="../include/view/js/bootstrap.min.js"></script>
        <script src="../include/view/js/scripts.js"></script>
        <script src="../include/view/js/jquery.flexslider.js"></script>
        <script src="../include/view/js/modernizr.js"></script>
      </body>
    </html>