<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>BDJ - Les listes</title>
		<link rel="icon" type="image/png" href="img/crusaders.png" />
		<link rel="stylesheet" href="templates/generic.css">
		
	</head>
	<body>
	
		<?php include("templates/header.php"); ?>

		<div class="main_part" >
			
			<nav class="list_nav">
			
			</nav>
			
			
			
			<?php 
				//ce code php gère l'affichage des pages de liste
			if(isset($_GET['liste']))
			{
				$_GET['liste']= (int) $_GET['liste'];
				if($_GET['liste'] >=2018 AND $_GET['liste']<=2019){
					include('listes/liste_' .$_GET['liste'] . '.php');
				}
				else{
					include("listes/liste_2019.php");
				}
			}
			else{
				include("listes/liste_2019.php");
			}
			?>
			
		</div>

		
		
		<?php include("templates/footer.php"); ?>
	</body>
</html>