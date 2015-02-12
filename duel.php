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

    <div class="salledeclasse">
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

		<div class="duel">
		<h2>Attaques</h2>
			<table>
				<tr>
					<td><a href=""><img src="images/salledeclasse/attaque.png" alt="" class="attaque"></a></td>
					<td><a href=""><img src="images/salledeclasse/attaque.png" alt="" class="attaque"></a></td>
					<td><a href=""><img src="images/salledeclasse/attaque.png" alt="" class="attaque"></a></td>
					<td><a href=""><img src="images/salledeclasse/attaque.png" alt="" class="attaque"></a></td>
				</tr>
				<tr>
					<td><p>Dragon de feu</p></td>
					<td><p>Div DTC</p></td>
					<td><p>Plume</p></td>
					<td><p>pouêt</p></td>
				</tr>
			</table>
		</div>

</body>
</html>