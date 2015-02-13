<?php 
// CONNECTION BASE DE DONNEE
include("php/connect.php");
// HP BOSS
$askHpBoss = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = 'Carlier';
				";
$resultats=$db->query($askHpBoss);
$resultats->setFetchMode(PDO::FETCH_OBJ);
$resultat = $resultats->fetch();
$hpBoss= $resultat->hp;
// HP USER
$askHpUser = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = '".$_SESSION['nameCharacter']."'
				";

$resultats=$db->query($askHpUser);
$resultats->setFetchMode(PDO::FETCH_OBJ);
$resultat = $resultats->fetch();
$hpUser= $resultat->hp;



// ATTAQUES ET DEGATS BOSS
$askAttakBoss = "	SELECT
							nameAttak,
							damage

					FROM
							attaks
					WHERE
							owner = 'Carlier';
				";


if(!($result3 = $db->query($askAttakBoss))){
	die('erreur SQL attak user');
};
while( $row= $result3->fetch()):
	$AttakDmgBoss[]= $row['damage'];
	$AttakNameBoss[]= $row['nameAttak'];
endwhile;

// ATTAQUES ET DEGATS USER
$askAttakUser = "	SELECT
							nameAttak,
							damage
					FROM
							attaks
					WHERE
							owner = '".$_SESSION['nameCharacter']."'
				";


if(!($result3 = $db->query($askAttakUser))){
	die('erreur SQL attak user');
};
while( $row= $result3->fetch()):
	$AttakDmgUser[]= $row['damage'];
	$AttakNameUSer[]= $row['nameAttak'];
endwhile;
