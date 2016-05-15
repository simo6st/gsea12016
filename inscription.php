<?php
include_once "session.php";
include_once "security.php";
include_once "config_bdd.php";
// pour des mesures de securité ;)
$username = $email = $sexe = $nom = $prenom = $naissance = $age =  "";
if (isset($_POST['submit'])) {
  $username = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $nom = test_input($_POST["nom"]);
  $prenom = test_input($_POST["prenom"]);
  $naissance = test_input($_POST["naissance"]);
  $sexe = test_input($_POST["sexe"]);
  $mdp = test_input($_POST["mdp"]);
  $rmdp = test_input($_POST["rmdp"]);
  $date=date('y-m-d');
  if(!empty($username) and !empty($email) and !empty($nom) and !empty($prenom) and !empty($sexe) and !empty($naissance) and !empty($mdp) and !empty($rmdp)){
  $sql = "SELECT * FROM utilisateur WHERE username=:username OR email=:email ";
  $query=$bdd->prepare($sql);
  $query->execute(array('username' => $_POST['username'],'email' => $_POST['email']));
  $count=$query->rowCount();
  // OU logique, le pseudo OU l'email ne doivent pas être pris.
  if ($count>0){
      // output data of each row
      header('Location: index.php?res=email ou utilisateur est deja pris !&style=btn btn-warning#res');
      }else{
// pas d'enregistrement, faire l'insert
    if(strlen($mdp)>6){
      if($mdp==$rmdp){
        $mdp=sha1($mdp);
        //tout est bien donc a l'attack au bdd :p
        $sql = "INSERT INTO utilisateur (id,username, nom, prenom,email,mdp,sexe,naissance,date,dernier_date)
                VALUES ('',:username,:nom,:prenom,:email,:mdp,:sexe,:naissance,:date,:dernier_date)";
                $query=$bdd->prepare($sql);
                $query->execute(array('username' => $username,
                                      'nom' => $nom,
                                      'prenom' => $prenom,
                                      'email' => $email,
                                      'mdp' => $mdp,
                                      'sexe' => $sexe,
                                      'naissance' => $naissance,
                                      'date' => $date,
                                      'dernier_date'=>date(y-m-d)
                                      ));
        if ($bdd->query($sql) === TRUE) {
          header('Location: index.php?res=inscription avec succée , vous pouvez vous connectez !&style=btn btn-success#res');
        }else{
          echo "Error: " . $sql . "<br>" . $bdd->error;
        }

      }else{
        header('Location: index.php?res=les deux mots de passe sont pas identiques !!&style=btn btn-warning#res');
      }
    }else {
      header('Location: index.php?res=le mot de passe est trop court!&style=btn btn-warning#res');
    }
  }
  }else{
    header('Location: index.php?res=vous avez oublié quelque champs!&style=btn btn-warning#res');
  }
 }else{header('Location: index.php');}

?>
