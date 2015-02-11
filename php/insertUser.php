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
		// création du personnage par défaut
	//récupération de l'id
	$sqlId="SELECT
			idUser
			From
			users
			WHERE nameUser='".$_POST['name']."';
	";

	$resultats=$db->query($sqlId);
	$resultats->setFetchMode(PDO::FETCH_OBJ);

	$resultat = $resultats->fetch();

	// création du personnage avec des stats par défaut, avec le nom et l'id
	$_SESSION['userID']=$resultat->idUser;
	$sqlInsert = "INSERT INTO characters (nameCharacter, pnj, idRoom, hp, idUser, idAttak, moyenne) VALUES ('".$_POST['name']."', '0', '1', '500', '".$_SESSION['userID']."', '1', '0');";
	$db->exec($sqlInsert);

	header('Location: ../couloir.html');

}

