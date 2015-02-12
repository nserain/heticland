<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/02/2015
 * Time: 15:54
 */

// CONNECTION BASE DE DONNEE
include("php/connect.php");
// HP BOSS
$askHpBoss = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = 'Carlier' // variable
				";
// HP USER
$askHpUser = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = '".$_SESSION['nameCharacter']."'
				";
// ATTAQUES ET DEGATS BOSS
$askAttakBoss = "	SELECT
							nameAttak,
							damage
					FROM
							attaks
					WHERE
							detenteur = 'Carlier'
				";
// ATTAQUES ET DEGATS USER
$askAttakUser = "	SELECT
							nameAttak,
							damage
					FROM
							attaks
					WHERE
							detenteur = '".$_SESSION['nameCharacter']."'
				";

				// exécution des requetes
if(!($result = $db->query($askHpBoss))){
    die('erreur SQL');
};
$row=$result->fetch_assoc();
$HpBoss= $row['hp'];

if(!($result1 = $db->query($askHpUser))){
    die('erreur SQL');
};
$row1=$result->fetch_assoc();
$HpUser= $row1['hp'];

if(!($result2 = $db->query($askAttakBoss))){
    die('erreur SQL');
};
while( $row2 = $result2->fetch_assoc()):
    $AttakDmgBoss[]= $row2['damage'];
    $AttakNameBoss[]= $row2['nameAttak'];
endwhile;

if(!($result3 = $db->query($askAttakUser))){
    die('erreur SQL attak user');
};
while( $row3 = $result3->fetch_assoc()):
    $AttakDmgUser[]= $row3['damage'];
    $AttakNameUser[]= $row3['nameAttak'];
endwhile;

/*
function Round($AttakDmgUser,$AttakNameUser){
    global $HpBoss;
    global $HpUser;
    $HpBoss = $HpBoss + $AttakDmgUser;
    echo "Tu as utilise l'attaque : ". $AttakNameUser ." ,il ne lui reste plus que : ". $HpBoss. "\n";
    $AttakName_keys = array_rand($AttakNameBoss);
    $AttakDmg_keys = array_rand($AttakDmgBoss);
    $HpUser = $HpUser + $AttakDmgBoss[$AttakDmg_keys];
    echo "Le Boss utilise l'attaque : ". $AttakNameBoss[$AttakName_keys] ." ,il ne te reste plus que : ". $HpUser. "\n";
}


switch(  ){
    case '<=0':
        echo "Bravo vous avez gagné !";
        require('requete.php');
        break;
    default:
        echo "continue le combat biatch";
        die();
        break;
}



*/
?>

<!-- <div>
	<a href="" onClick="ModifLife0()"><?php echo $AttName[0]; ?></a>
	<a href=""><?php echo $AttName[1]; ?></a>
	<a href=""><?php echo $AttName[2]; ?></a>
	<a href=""><?php echo $AttName[3]; ?></a>
</div> -->