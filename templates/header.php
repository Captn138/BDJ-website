<link rel="stylesheet" href="templates/header.css" />

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
		<img src="img/site_title.png" alt="logo BDJ" width="500" height="133"/>
	</a>
	<nav class="header_nav">
		<div class="menu">
			
			<div class="menu_elt">
				<a class="main_link" href="index.php">
					<h3>News</h3>			
				</a>
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt">
				<a class="main_link" href="association.php">
					<h3>L'association</h3>
				</a>
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt">
				<a class="main_link" href="prochains_evenements.php">
					<h3>Les évènements</h3>
				</a>
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt" onmouseover="game_showHide('show', 'main_link_over');" onmouseout="game_showHide('hide', 'main_link');">
				<a  id="game_linkH" class="main_link" href="jeux.php">
					<h3>Les jeux</h3>
				</a>
				<div id="game_menuH" class="hide">
					<div class="game_menu">
						<dt> 
							<dd><a class="link" href="jeux.php">Serveurs</a></dd> 
							<dd><a class="link" href="jdr.php">JDR</a></dd> 
						</dt>
					</div>
				</div>
				
			</div>
			
			<div class="sectionner"></div>
			
			<div class="menu_elt" onmouseover="list_showHide('show', 'main_link_over');" onmouseout="list_showHide('hide', 'main_link');">
				<a id="list_linkH" class="main_link" href="equipe.php">
					<h3>L'équipe</h3>
				</a>
				<div id="list_menuH" class="hide">
					<div class="list_menu">
						<dt> 
							<dd><a class="link" href="equipe.php?liste=2019">2019 - Crusaders</a></dd> 
							<dd><a class="link" href="equipe.php?liste=2018">2018 - Reset</a></dd> 
						</dt>
					</div>
				</div>
			</div>
			
		</div>
		
	</nav>
	
</header>
	
