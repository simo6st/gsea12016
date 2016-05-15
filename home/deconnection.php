<?php
session_start();
include_once "config_bdd.php";
$dernier_date=date('y-m-d');
$sql = "UPDATE utilisateur SET dernier_date=:dernier_date WHERE id=:id  ";
$query=$bdd->prepare($sql);
$query->execute(array('id' => $_SESSION['id'],
                        'dernier_date'=>$dernier_date
                      ));
session_unset();
session_destroy();
header('Location:../');
exit();
?>
