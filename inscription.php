<!DOCTYPE html>
<html lang="en">
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

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="ico/treffen-logo.jpg"/></a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <div class="container mainpanel" style="max-width:800px; padding-top: 64px;">
		<div class="box">

          <h1>Je m'inscris &agrave Treffen</h1>

          <div>

            <div id="reservation_fields">

              <form method="post" action="validation_i.php">
				<div class="form-group">
					<label for="inputEmail" class="control-label col-xs-3">Email</label>
					<div class="col-xs-9">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="control-label col-xs-3">Mot de passe</label>
					<div class="col-xs-9">
						<input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="mdp">
					</div>
				</div>				
				<div class="form-group">
					<label for="inputFirstName" class="control-label col-xs-3">Pr&eacutenom</label>
					<div class="col-xs-9">
						<input class="form-control" id="inputFirstName" placeholder="Prenom" name="prenom">
					</div>
				</div>
				<div class="form-group">
					<label for="inputLastName" class="control-label col-xs-3">Nom</label>
					<div class="col-xs-9">
						<input class="form-control" id="inputLastName" placeholder="Nom" name="nom">
					</div>
				</div>
				<div class="form-group">
					<label for="day" class="control-label col-xs-3">Date de naissance</label>
					<div class="col-xs-9">
						<div id="date2" class="datefield">
							<input id="day" type="tel" maxlength="2" placeholder="DD" name="jour"/> /
							<input id="month" type="tel" maxlength="2" placeholder="MM" name="mois"/> /
							<input id="year" type="tel" maxlength="4" placeholder="YYYY" name="annee" />
						</div>
					</div>
				</div>
				<div class="form-group">
				  <label class="col-xs-3 control-label" for="sexe">Sexe</label>
				  <div class="col-xs-9">
				  	<div class="radio">
						<label for="male">
					  		<input type="radio" name="sexe" id="masculin" value="masculin" checked="checked">
					  		Homme
						</label>
					</div>
				  	<div class="radio">
						<label for="radios-1">
					  		<input type="radio" name="sexe" id="feminin" value="feminin">
					  		Femme
						</label>
					</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Inscription</button>
			</form>
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

	<script>
	</script>
  </body>
</html>
