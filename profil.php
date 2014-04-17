<?php
	session_start();
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
    <div class="container mainpanel" style="max-width:800px; padding-top: 64px;">
		<div class="box">
        <h1>Votre Profil</h1>
        <p><?php
				try
				{
   					$bdd = new PDO('mysql:host=localhost;dbname=web996_db', 'web996_db', 'auo430');
				}
				catch (Exception $e)
				{
        			die('Erreur : ' . $e->getMessage());
				}
				$req = $bdd->prepare('SELECT  nom, prenom, mdp, date_naissance FROM rencontres WHERE email=? ');
				$req->execute(array($_SESSION['email']));


				while ($donnees = $req->fetch())
				{
    			 	/*echo "Bonjour " . $donnees['pseudo'] ."</br>"  ;*/
    			 	echo "Votre nom est : " . $donnees['nom'] ."</br>" ;
    			 	echo "Votre pr&eacutenom est : " . $donnees['prenom'] ."</br>" ;
    			 	echo "Votre date de naissance est : " . $donnees['date_naissance'] ."</br>" ;
				}



?></p>
        
      </div>
    
      <footer>
        <p>&copy; Treffen 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>			