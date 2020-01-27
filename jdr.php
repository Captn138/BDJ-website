
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>BDJ - Les JDR</title>
		<link rel="icon" type="image/png" href="img/crusaders.png" />
		<link rel="stylesheet" href="style/generic.css">
		
	</head>
	<body>
	
		<?php include("templates/header.php"); ?>
		
		<div class="main_part" >
            <div class="text_zone">
				<h1>Se préinscrire au prochain JDR</h1>
				<table style=>
					<tr>
						<td class="col1">Nom :</td><td class="col2"><input class="submitfield" id="nom" type="text" size="50" placeholder="Nom" pattern="[A-Za-z]+[ -]?[A-Za-z]*" required></td>
					</tr>
					<tr>
						<td class="col1">Email :</td><td class="col2"><input class="submitfield" id="email" type="email" size="50" placeholder="email@email.com" required></td>
					</tr>
					<tr>
						<td class="col1">Pourquoi t'inscrire?</td><td class="col2"><textarea class="submitfield" id="demande" cols="120" rows="5" required></textarea></td>
					</tr>
				</table>
				<h1 style="padding-top:100px;">Dernier JDR filmé</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLsNdpOyerVdZOyuENIzrH51MZWGJi_1uU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="border:2px solid red;" allowfullscreen></iframe>
            </div>
		</div>		
		
		<?php include("templates/footer.php"); ?>

	</body>
</html>
