<?php
include_once "session.php";
include_once "config_bdd.php";
include_once "security.php";
if(isset($_POST['submit'])){
$hush=sha1(microtime());
$data=array(
			'id'=>$_SESSION['id'],
			'titre'=>test_input($_POST['titre']),
			'description'=>test_input($_POST['description']),
			'language'=>test_input($_POST['language']),
			'statut'=>test_input($_POST['statut']),
			'code'=>test_input($_POST['code']),
			'date'=>date('y-m-d'),
			'hush'=>$hush
			);
	if(!empty($data['titre']) and !empty($data['description']) and !empty($data['language']) and !empty($data['statut']) and !empty($data['code'])){
		$sql = "INSERT INTO post (id,hush,id_user,code,titre,date_post,language,statut,resolu,description) 
		VALUES ('',:hush,:id_user,:code,:titre,:date_post,:language,:statut,'non',:description)";
		$query=$bdd->prepare($sql);
		$query->execute(array(	'hush'=>$data['hush'],
								'id_user'=>$data['id'],
								'code'=>$data['code'],
								'titre'=>$data['titre'],
								'date_post'=>$data['date'],
								'language'=>$data['language'],
								'statut'=>$data['statut'],
								'description'=>$data['description']));
		header("location: ajouter.php?res=un nouveau code a été ajouter&style=btn btn-success#res#res");
			
		}else{
			$missing="";
			foreach($data as $name => $value)
			{
				if(empty($value))
				{
				$missing=$missing." ".$name;
					}
				}
			header("location: ajouter.php?res=vous avez oublié de remplir certain champs , $missing&style=btn btn-warning#res");
			
			}
 
}
 
?>
