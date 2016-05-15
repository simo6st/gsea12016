<?php
include_once "session.php";
include_once "security.php";
include_once "config_bdd.php";
if(empty($_SESSION['id'])){header('location: profil.php');};
if(!empty($_POST['bio']))
{
$bio=test_input($_POST['bio']);
$sql = "UPDATE utilisateur SET bio=:bio WHERE id=:id  ";
$query=$bdd->prepare($sql);
$query->execute(array('bio' => $bio,
                      'id'=>$_SESSION['id']
                    ));

}
header("location:profil.php?modifier=<i style='color:green;'>la modification est fait!</i>");  
?>
