<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, target-densitydpi=device-dpi"/>  
		<link rel="stylesheet" href="config.css" />
        <title>connexion</title>
		<!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>   
	<header>
			<h1>Treffen</h1>
	</header>
	<?php include("navc.php"); ?>
	
	<body>
		<section>
			<h2>Mon profil</h2>
		<br/><br/><br/>
			<?php
				try
				{
   					$bdd = new PDO('mysql:host=localhost;dbname=web996_db', 'web996_db', 'auo430');
				}
				catch (Exception $e)
				{
        			die('Erreur : ' . $e->getMessage());
				}
				$req = $bdd->prepare('SELECT pseudo, nom, prenom, mdp, date_naissance, sexe, l_cheveux, c_cheveux,  yeux FROM rencontres WHERE pseudo=? ');
				$req->execute(array($_SESSION['pseudo']));

				
				while ($donnees = $req->fetch())
				{
    			 	echo " <label for=\"pseudo\">pseudo: </label><input type=\"text\" name=\"pseudo\" value=\"" . $donnees['pseudo'] . "\" /></br>";
    			 	echo " <label for=\"nom\">nom: </label><input type=\"text\" name=\"nom\" value=\"" . $donnees['nom'] . "\" /></br>";
    			 	echo " <label for=\"prenom\">prénom: </label><input type=\"text\" name=\"prenom\" value=\"" . $donnees['prenom'] . "\" /></br>";
    			 	echo " date de naissance : " . $donnees['date_naissance'] ."</br>" ;
    			 	echo"<label for=\"sexe\">Sexe:</label><select name=\"sexe\" id=\"sexe\">";
    			 	if ($donnees['sexe']=="masculin")
    			 		{
    			 			echo"<option value=\"masculin\" selected>Masculin</option>";
    			 		}
    			 	else 
    			 		{
    			 			echo"<option value=\"masculin\" >Masculin</option>";
    			 		}

    			 	if ($donnees['sexe']=="feminin")
    			 		{
    			 			echo"<option value=\"feminin\" selected>feminin</option>";
    			 		}
    			 	else
    			 		{
    			 			echo"<option value=\"feminin\" >Feminin</option>";
    			 		}
    			 	if ($donnees['sexe']=="autre")
    			 		{
    			 			echo"<option value=\"autre\" selected>Autre</option>";
    			 		}
    			 	else
    			 		{
    			 			echo"<option value=\"autre\" >Autre</option>";
    			 		}
				}			
				
				

?>
		</section>
	</body>
</html>