<?php
include_once "session.php";
include_once "config_bdd.php";
include_once "security.php";
if(!isset($_GET['id'])){
header('location : index.php');
$id=$_SESSION['id'];
}else{
$id=$_GET['id'];
}
test_input($id);
$sql = "SELECT * FROM utilisateur WHERE id=:id  ";
$query=$bdd->prepare($sql);
$query->execute(array('id' => $id));
$count=$query->rowCount();
if($count==0){header('location: 404.php');};
foreach ($query as $row) {
  //nothing
}
 
$sql = "SELECT * FROM post";
		$query=$bdd->prepare($sql);
		$query->execute();
foreach ($query as $query) {
           //nothing
                }
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
                  <fieldset><legend><img class="avatar" src="<?php echo $row['avatar']; ?>" /></legend>

                      <table>
                        <tr><td><?php echo $row['nom']." ".$row['prenom']; ?></td></tr>
                        <tr><td>Naissance: <?php echo $row['naissance']; ?></td></tr>
                        <tr><td>Membre depuis :<?php  echo $row['date'] ?></td></tr>
                        <tr><td>Dernier connection :<?php  echo $row['dernier_date'] ?></td></tr>
                        <tr><td>Telephone:<?php if($row['tel']){$telephone=$row['tel'];}else{$telephone='...';};echo  $telephone; ?></td></tr>
                        <tr><td>
                          <fieldset><legend>Bio</legend>
                          <?php if(isset($_GET['modifier'])){echo $_GET['modifier'];}?>
                          <?php include_once "bio.php";?>
                        </td></tr>
                      </table>

                    <?php if($_SESSION['id']==$row['id']){ ?><p><a href="deconnection.php">Deconnecter</a></p><?php }?>
                  </fieldset>
                </div>
            </div>

            <div class="col-md-9">
                <div class="well">
               
                    <fieldset><legend>Action</legend>
                    
                    <table class="table">
                    <tr><td>auteur</td><td>titre</td><td>language</td><td>date<td></tr>
                    <tr><td><?php echo $query['id_user']; ?></td><td><?php echo $query['titre']; ?></td><td><?php echo $query['language']; ?></td><td><?php echo $query['date_post']; ?></td></tr>
                    </table>
                     
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
