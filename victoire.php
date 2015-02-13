<?php include('php/connexion.php'); ?>
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

<body>
		<div class="infos">
			<table>	
				<tbody>
				<thead><h2>Bonjour <?php echo $_SESSION['nameCharacter']; ?></h2></thead>
					<tr>
						<td class="vide"><a href="javascript:history.go(-1)"><img src="images/infos/retour.png" alt=""></a></td>
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
		
		<div class="victoire">
		<embed src="sons/victoire.mp3" autostart="true" loop="true"
width="2" height="0">
		</embed>
		</div>
		<div id="sounddiv"><bgsound id="sound"></div>

</body>
</html>