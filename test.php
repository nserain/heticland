<?php 
session_start();// CONNECTION BASE DE DONNEE
try {
        $db = new PDO("mysql:host=localhost;dbname=heticland", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    catch ( Exception $e ) {
        echo "Connection à MySQL impossible : ", $e->getMessage();
        die();
    }
	// ".$_SESSION['nameCharacter']."
// HP BOSS
$askHpBoss = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = 'Carlier'
				";
// HP USER
$askHpUser = 	"	SELECT
							hp
					FROM
							characters
					WHERE
							nameCharacter = 'test'
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
							detenteur = 'test'
				";
?>

<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
$( document ).ready(function() {
	$('#attaque1').click( function(){
		$.get( "training2.php")
		.done( function( data ){
			var resultats_yay = jQuery.parseJSON( data );
			$( '#InformationCombat' ).val(resultats_yay[1]);
							$( '#HP' ).val(resultats_yay[2]);
						} );;
	});
});
		</script>
	</head>
<body>

	<input type="button" value="1" id="attaque1">
	<textarea id="InformationCombat"></textarea><br/>
	<input id="HP"><br/>
</body>
</html>