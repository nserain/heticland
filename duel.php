<?php include('php/connexion.php');?>

<!DOCTYPE html>
<html land="fr">
<head>
	<meta charset="UTF-8">
	<title>HETIC Land</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
	<script type="text/javascript" src="js/sound-mouseover.js"></script>
</head>

<body onload="window.location.href = '#openModal';">




<div id="openModal" class="modalDialog">
	<div>
		<?php
		include('php/connect.php');
		require('reqCombat.php');
		$salle = $_GET['salle'];

		$sql="SELECT nameRoom, imageGif from rooms where nameRoom='$salle' LIMIT 1;";

		$resultats=$db->query($sql);
		$resultat = $resultats->fetchAll(PDO::FETCH_ASSOC);

		?>
		<p>Vous avez obtenu <?php echo $_GET['nbAnswers'] ?> bonne(s) réponse(s)!</p>
		<p>Et maintenant ... place au DUEL !</p>
		<img src="<?php echo $resultat[0]['imageGif']; ?>" alt="duel" class="gifduel">
		<a href="#close" title="Close" class="close">Jouer</a>
	</div>
</div>

<div class="bigduel <?php echo $resultat[0]['nameRoom'] ?>">
	<div class="infos">
		<table>
			<tbody>
			<thead><h2>Bonjour <?php echo $_SESSION['nameCharacter']; ?></h2></thead>
			<tr>
				<td class="vide"><a href="couloir.php"><img src="images/infos/retour.png" alt=""></a></td>
				<td><img src="images/infos/chapeau.png" alt=""></td>
				<td><img src="images/infos/cafe.png" alt=""></td>
			</tr>
			<tr>
				<td><a href="php/deconnect.php"><img src="images/infos/quit.png" alt=""></a></td>
				<td>14/20</td>
				<td>0 café</td>
			</tr>
			</tbody>
		</table>
	</div>

	<div class="duel">
		<h2>Attaques</h2>
		<table>
			<tr>
				<td><a href="#" id="attaque1"><img src="images/salledeclasse/attaque.png"  alt="" class="attaque"></a></td>
				<td><a href="#" id="attaque2"><img src="images/salledeclasse/attaque.png"  alt="" class="attaque"></a></td>
				<td><a href="#" id="attaque3"><img src="images/salledeclasse/attaque.png"  alt="" class="attaque"></a></td>
				<td><a href="#" id="attaque4"><img src="images/salledeclasse/attaque.png"  alt="" class="attaque"></a></td>
			</tr>
			<tr>
				<td><p> <?php echo $AttakNameUSer[0] ;?></p></td>
				<td><p><?php echo $AttakNameUSer[1] ;?></p></td>
				<td><p><?php echo $AttakNameUSer[2] ;?></p></td>
				<td><p><?php echo $AttakNameUSer[3] ; ?></p></td>

			</tr>
		</table>
	</div>
</div>

<textarea id="texteCombat"> default</textarea>

</div>
<input type="text" id="hpUser2" value="100">
<input type="text" id="hpBoss" value="100">

<table style="visibility:hidden">
	<tr>
		<td id="hpUser"><?php echo $hpUser;?></td>
		<td id="hpBoss"><?php echo $hpBoss; ?></td>
		<td id="AttakDmgBoss"><?php echo $AttakDmgBoss; ?></td>
		<td id="AttakNameBoss"><?php echo $AttakNameBoss; ?></td>
		<td id="AttakDmgUser"><?php echo $AttakDmgUser; ?></td>
		<td id="AttakNameUSer"><?php echo $AttakNameUSer; ?></td>
	</tr>
</table>
<script>
	var hpUser = document.getElementById('hpUser').innerHTML;
	var hpBoss = document.getElementById('hpBoss').innerHTML;
	var AttakDmgBoss = document.getElementById('AttakDmgBoss').innerHTML;
	var AttakNameBoss = document.getElementById('AttakNameBoss').innerHTML;
	var AttakDmgUser = document.getElementById('AttakDmgUser').innerHTML;
	var AttakNameUser = document.getElementById('AttakNameUser').innerHTML;

	$( document ).ready(function() {
		$('#attaque1').click( function(){
			$.get( "include/ajax.php", { hpUser: hpUser , hpBoss: hpBoss, AttakDmgBoss: AttakDmgBoss,AttakNameBoss: AttakNameBoss, AttakDmgUser: AttakDmgUser, AttakNameUser: AttakNameUser } )
				.done( function( data ){
					var zoneCombat = $( '#texteCombat' ).val(data);
					var split = data.split('=');

					console.log(hpUser);
					document.getElementById('hpUser2').innerHTML = hpUser;
					hpUser = split[0];
					document.getElementById('hpBoss').innerHTML = hpBoss];
					hpBoss = split[1];
					console.log(split0);

					if (hpUser <= 0){
						console.log('DEFAITE');
						document.location.href='gameover.php';
					}
					if (hpBoss <= 0){
						console.log('VICTOIRE');
						document.location.href='victoire.php?';
					}
					document.getElementById('texteCombat').innerHTML += '</br>'+zoneCombat[0].value;
					var retour;
				} );
		});



</script>

</body>
</html>