<?php
include_once "session.php";
include_once "security.php";
include_once "config_bdd.php";

if(isset($_POST['submit'])){
$username=test_input($_POST['username']);
$mdp=sha1(test_input($_POST['mdp']));

$sql = "SELECT * FROM utilisateur WHERE username=:username limit 1";
$query=$bdd->prepare($sql);
$query->execute(array('username' => $username));
$count=$query->rowCount();
if ($count > 0) {
    // output data of each row
    foreach ($query as $row) {
           //nothing
                }
          if($mdp==$row['mdp']){
            //crée les variable de notre session a partir de la base de donnée
            foreach ($row as $key => $value) {
              $_SESSION[$key]=test_input($value);
              $sql = "UPDATE utilisateur SET dernier_date=:dernier_date WHERE id=:id  ";
              $query=$bdd->prepare($sql);
              $query->execute(array('id' => $_SESSION['id'],
                                      'dernier_date'=>$dernier_date
                                    ));
            }
            header('location: index.php');
          }else{
            header('Location: index.php?err=mot de passe incorrect !');
          }

} else {
    header('Location: index.php?err=utilisateur non valide !');
}

}else{  //header('Location: index.php')
  ;}

 ?>
