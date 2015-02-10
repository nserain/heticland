<?php include('connect.php' );

$sql= "SELECT nameUser from users";
$reponse = $db->prepare($sql);
$reponse->execute();
$donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);

var_dump(in_array($_POST['name'],$donnees));

if(in_array($_POST['name'],$donnees)){
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
				'".$_POST['pass1']."',
			)";
	$reponse1 = $db->prepare($sqlInsert);
	$reponse1->execute();


	echo "Vous êtes maintenant inscrit!";
}

