<?php
if(empty($row['id'])){header('location:profil.php');};
if($_SESSION['id']==$row['id']){
//SI L'UTILISATEUR = LE PROFIL VISITER
?>
<form method="POST" action="mod_bio.php">
<table>
<tr><td>
<textarea name="bio" placeholder="<?php echo $row['bio']; ?>" >
</textarea>
</td></tr>
<tr><td>
<input type="submit" name="modifier" value="modifier"/>
</td></tr>
</table>
</form>
<?php
}else{
//SI L'UTILISATEUR <> LE PROFIL VISITER
?>
<p><?php echo $row['bio']; ?></p>
<?php
}
?>
