<?php
include_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sharkzilla | Bienvenue</title>
    <link rel="icon" type="image/png" href="img/logo.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sharkzilla</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">à propos</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container" >

        <div class="row">

            <div class="col-md-3" >
                <div class="list-group">
                  <fieldset><legend>Connection</legend>
                    <form method="POST" action="connection.php">
                      <table  >
                        <tr><td><?php if(isset($_GET['err'])){$err=$_GET['err'];  echo "<p  id='err' class='btn btn-warning'>$err</p>";} ?></td></tr>
                        <tr><td><input class="form-control"  type="text" name="username" placeholder="Utilisateur" /></td></tr>
                        <tr><td><input class="form-control"  type="password" name="mdp" placeholder="mot de passe"/></td></tr>
                        <tr><td><input class="btn btn-primary"  type="submit" name="submit" value="connection" /></td></tr>
                      </table>
                    </form>
                    <p><a href="recover.php">mot de passe oublié?</a></p>
                  </fieldset>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="img/banner.png" alt="">
                    <div class="caption-full">
                        <h4><a href="#">ipsum dolor</a>
                        </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                </div>

                <div class="well">
                   <fieldset><legend>Inscription</legend>
                     <?php if(isset($_GET['res'])){$res=$_GET['res'];$style=$_GET['style'] ; echo "<p  id='res' class='".$style."'>$res</p>";} ?>
                     <form method="POST" action="inscription.php">
                       <table class="inscription">
                         <tr><td><label>Utilisateur </label></td><td><input class="form-control"  type="text" name="username" placeholder="nom d'utilisateur..." /></td></tr>
                         <tr><td><label>Prenom </label></td><td><input class="form-control"  type="text" name="prenom" placeholder="prenom..."/></td></tr>
                         <tr><td><label>Nom </label></td><td><input class="form-control"  type="text" name="nom" placeholder="nom..."/></td></tr>
                         <tr><td><label>Email </label></td><td><input class="form-control"  type="email" name="email" placeholder="email..."/></td></tr>
                         <tr><td><label>Mot de passe </label></td><td><input class="form-control"  type="password" name="mdp" placeholder="mot de passe..."/></td></tr>
                         <tr><td><label>confirmer le </label></td><td><input class="form-control"  type="password" name="rmdp" placeholder="mot de passe..."/></td></tr>
                         <tr><td><label>Sexe </label></td><td><input  type="radio" name="sexe" value="H" />homme<input type="radio" name="sexe" value="F"/>femme</td></tr>
                         <tr><td><label>naissance </label></td><td><input class="form-control"  type="date" name="naissance" /></td></tr>
                         <tr><td></td><td><input class="btn btn-primary"  type="submit" name="submit" value="Inscrire"/></td></tr>
                       </table>
                     </form>
                   </fieldset>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p> Copyright &copy; Sharkzilla 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
