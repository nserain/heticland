<?php include('connect.php' );

$sql= "SELECT nameUser from users";
$resultats=$db->query($sql);
$resultats->setFetchMode(PDO::FETCH_OBJ);
$exist=false;
while( $resultat = $resultats->fetch(PDO::FETCH_OBJ) )
{
	if($_POST['name'] == $resultat->nameUser ){
		$exist=true;
	}
}

if($exist){
	echo "Ce Pseudo existe déjà, Veuillez en choisir un autre!";
}
else
{
	$sqlInsert = "INSERT INTO
				users
			(
				nameUser,
				password
			) VALUES (
				'".$_POST['name']."',
				'".$_POST['pass1']."'
			)";

	$db->exec($sqlInsert);

	echo "Vous êtes maintenant inscrit!";
}

