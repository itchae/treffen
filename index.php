<?php
session_start();

if(!isset($_SESSION['connexion']))
{
  session_unset();
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.ico">

    <title>Treffen site de rencontre</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/treffen.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php 
      if (isset($_SESSION['connexion']))
      {
        include ("navc.php");
      }
      else
      {
        include ("nav.php");
      }


    ?>

   

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Rencontre de nouvelles personnes !</h1>
        <p>Avec plus de 4 millions d'utilisateurs, Treffen est l'endroit pour te faire de nouveaux amis.</p>
        <p><a id="btn_inscription" class="btn btn-primary btn-lg" role="button" href="inscription.php">Je m'inscris &raquo;</a></p>
      </div>
    </div>


    <div class="container mainpanel">
      <div class="splash">
		<div class="slider1_wrapper">
            <a href="#" class="next"><span style="opacity: 0.4;"></span></a>
            <a href="#" class="prev"><span style="opacity: 0.4;"></span></a>
            <div class="slider1" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 836px;">
              <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 3135px; left: -1463px;"><li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide04.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Anna</div>
                      <div class="txt2">Age: 25</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li><li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide05.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Olga</div>
                      <div class="txt2">Age: 27</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li><li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide06.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Peter</div>
                      <div class="txt2">Age: 25</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li><li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide07.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">John</div>
                      <div class="txt2">Age: 31</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide01.jpg" alt="" style="display: inline-block; width: 179px; height: 218px; margin-left: 0px; margin-top: 0px;"></div>
                    <div class="txt">
                      <div class="txt1">William</div>
                      <div class="txt2">Age: 29</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide02.jpg" alt="" style="display: inline-block; overflow: hidden; width: 179px; height: 218px; margin-left: 0px; margin-top: 0px;"></div>
                    <div class="txt">
                      <div class="txt1">Amanda</div>
                      <div class="txt2">Age: 23</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide03.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Jesica</div>
                      <div class="txt2">Age: 21</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide04.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Anna</div>
                      <div class="txt2">Age: 25</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide05.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Olga</div>
                      <div class="txt2">Age: 27</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide06.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Peter</div>
                      <div class="txt2">Age: 25</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide07.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">John</div>
                      <div class="txt2">Age: 31</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
              <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider man">
                    <div class="img"><img src="images/slide01.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">William</div>
                      <div class="txt2">Age: 29</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide02.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Amanda</div>
                      <div class="txt2">Age: 23</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li>
                <li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide03.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Jesica</div>
                      <div class="txt2">Age: 21</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li><li style="overflow: hidden; float: left; width: 199px; height: 279px;">
                  <a href="index-8.html" class="slider woman">
                    <div class="img"><img src="images/slide04.jpg" alt=""></div>
                    <div class="txt">
                      <div class="txt1">Anna</div>
                      <div class="txt2">Age: 25</div>
                    </div>
                    <div class="over1" style="opacity: 0.5;"></div>
                    <span class="clear"></span>
                  </a>
                </li></ul>
            </div>
          </div>
      	</div>
      <hr>

      <footer>
        <p>&copy; Treffen 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<!-- JCarouselLite -->
    <script type="text/javascript" src='js/jquery.easing.1.3.js'></script>
    <script type="text/javascript" src='js/jcarousellite_1.0.1.js'></script>

	<script>
	// Script d'initialisation de la page

	// Carousel des photos
    $(".slider1").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        mouseWheel: true,
        visible: 4,
        circular: true,
        vertical: false,
        speed: 600,
        auto: 5000,
        easing: 'easeOutExpo'
    });

    $('.slider').find('.over1').css({opacity:'0.5'});
    $('.slider').hover(function(){
      $(this).find('.over1').stop().animate({opacity:'1'},500,'easeOutCubic');
      $(this).find('img').stop().animate({'width':'199px','height':'242px','marginLeft':'-10px','marginTop':'-10px'},500,'easeOutCubic');
    }, function(){
      $(this).find('.over1').stop().animate({opacity:'0.5'},500,'easeOutCubic');
      $(this).find('img').stop().animate({'width':'179px','height':'218px','marginLeft':'0px','marginTop':'0px'},500,'easeOutCubic');
    });

    $('.prev span, .next span').css({opacity:'0.4'});
    $('.prev, .next').hover(function(){
      $(this).find('span').stop().animate({opacity:'1'},500,'easeOutCubic');
    }, function(){
      $(this).find('span').stop().animate({opacity:'0.4'},500,'easeOutCubic');
    });
	</script>
  </body>
</html>
