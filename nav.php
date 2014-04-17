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
          <form class="navbar-form navbar-right" role="form" method="post" action="validation_c.php">
            <div class="form-group">
              <input type="email" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Mot de passe" class="form-control" name="mdp">
            </div>
            <button type="submit" class="btn btn-success">Connexion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>