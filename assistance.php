<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>BDJ - Assistance</title>
		<link rel="icon" type="image/png" href="img/crusaders.png" />
		<link rel="stylesheet" href="style/generic.css">
		
	</head>
	<body>
	
		<?php include("templates/header.php"); ?>
		
		<div class="main_part" >
            <div class="text_zone">
                <h1>Ticket de demande d'aide</h1>
                <table id="helpform">
                    <tr>
                        <td class="col1">Nom :</td><td class="col2"><input class="submitfield" id="nom" type="text" size="50" placeholder="Nom" pattern="[A-Za-z]+[ -]?[A-Za-z]*" required></td>
                    </tr>
                    <tr>
                        <td class="col1">Email :</td><td class="col2"><input class="submitfield" id="email" type="email" size="50" placeholder="email@email.com" required></td>
                    </tr>
                    <tr>
                        <td class="col1">Ta demande :</td><td class="col2"><textarea class="submitfield" id="demande" cols="120" rows="5" required></textarea></td>
                    </tr>
                </table>
                <input class="submitfield" type="button" id="submit" onclick="submitform()" Value="Envoyer">

                <h1>Tickets envoyés</h1>
                <table id="a_toi_de_jouer">
                    <tr>
                        <th class="col3">Nom</th><th class="col3">Email</th><th class="col4">Demande</th>
                    </tr>
                </table>
            </div>
		</div>
		
		<?php include("templates/footer.php"); ?>

        <script src="script/assistance.js"></script>

	</body>
</html>
