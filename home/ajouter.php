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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Create a simple CodeMirror instance -->
    <link rel="stylesheet" href="codemirror/lib/codemirror.css">
 
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
        <?php include_once "navbar.php"; ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                  <fieldset><legend>Notification</legend>
                     <?php
                     // traitement des notification
                     include_once "notification.php";
                     ?>
                  </fieldset>
                </div>
            </div>

            <div class="col-md-9">
                <div class="well">
                   <fieldset><legend>Action</legend>
                    <?php if(isset($_GET['res'])){$res=$_GET['res'];$style=$_GET['style'] ; echo "<p  id='res' class='".$style."'>$res</p>";} ?>
                    
						<form METHOD="POST" ACTION="post_ajouter.php">
							<table>
								<tr><td><label for="titre">Titre</label></td><td><input type="text" name="titre" placeholder="titre..." /></td></tr>
								<tr><td><label for="description">Description</label></td><td><input type="text" name="description" placeholder="description..." /></td></tr>
								<tr><td><label for="language">Language</label></td><td><input type="text" name="language" placeholder="titre..." /></td></tr>
								<tr><td><label for="statut">Statut</label></td><td><select name="statut"><option value="publique">publique</option><option value="lien">lien</option><option value="prive"></option>prive</select></td></tr>
								<tr><td><label for="code">Code</label></td><td><textarea name="code" placeholder="ecrivez votre code ici..."></textarea></td></tr>
								<tr><td><input type="submit" name="submit" value="submit"/></td><td></td></tr>
								
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
    <!--/ codemirror-->
    <script src="codemirror/lib/codemirror.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
