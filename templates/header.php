<link rel="stylesheet" href="style/header.css" />

<script type="text/javascript">

	function list_showHide(value1, value2){
		document.getElementById("list_menuH").className=value1;
		document.getElementById("list_linkH").className=value2;
	}
	function game_showHide(value1, value2){
		document.getElementById("game_menuH").className=value1;
		document.getElementById("game_linkH").className=value2;
	}

</script>


<header>
	
	<a href="index.php">
		<img src="img/logo_dark.png" alt="logo BDJ" width="500" height="133"/>
	</a>
	<nav class="header_nav">
		<div class="menu">
			
			<div class="menu_elt">
				<a class="main_link" href="index.php">
					<h3>Accueil</h3>			
				</a>
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt" onmouseover="list_showHide('show', 'main_link_over');" onmouseout="list_showHide('hide', 'main_link');">
				<a id="list_linkH" class="main_link" href="association.php">
					<h3>L'association</h3>
				</a>
				<div id="list_menuH" class="hide">
					<div class="list_menu">
						<dt> 
							<dd><a class="link" href="equipe.php?liste=2019">Liste 2019 : Crusaders</a></dd> 
							<dd><a class="link" href="equipe.php?liste=2018">Liste 2018 : Reset</a></dd>
							<dd><a class="link" href="equipe.php?liste=2017">Liste 2017 : The Game</a></dd>
						</dt>
					</div>
				</div>
			</div>

			<div class="sectionner"></div>
			
			<div class="menu_elt">
				<a class="main_link" href="news.php">
					<h3>News</h3>
				</a>
			</div>

			<div class="sectionner"></div>
			
			<div class="menu_elt">
				<a class="main_link" href="evenements.php">
					<h3>Les évènements</h3>
				</a>
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt" onmouseover="game_showHide('show', 'main_link_over');" onmouseout="game_showHide('hide', 'main_link');">
				<a  id="game_linkH" class="main_link" href="materiel.php">
					<h3>Matériel</h3>
				</a>
				<div id="game_menuH" class="hide">
					<div class="game_menu">
						<dt>
							<dd><a class="link" href="serveurs.php">Serveurs</a></dd>
							<dd><a class="link" href="jeux.php">Jeux</a></dd> 
							<dd><a class="link" href="jdr.php">JDR</a></dd> 
						</dt>
					</div>
				</div>
				
			</div>

			<div class="sectionner"></div>

			<div class="menu_elt">
				<a class="main_link" href="assistance.php?send=no">
					<h3>Assistance technique</h3>
				</a>
			</div>
			
			<div class="sectionner"></div>

			<div class="menu_elt">
				<a class="main_link" href="apropos.php">
					<h3>A propos</h3>
				</a>
			</div>
			
		</div>
		
	</nav>
	
</header>
	
