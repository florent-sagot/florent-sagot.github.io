<!DOCTYPE html>
<html>
<head>
	<?php include "../msc/head.html" ?>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
	<!--------------------->
	<!------ HEADER ------->
	<!--------------------->
	<header>
		<!----- Title ----->
		<?php include "../msc/title.html" ?>
		<!----- Menu ------>
		<?php include "../msc/menu.html" ?>
	</header>

	<!--------------------->
	<!------- MAIN -------->
	<!--------------------->
	<main>
		<!---- Spacing ---->
		<div id="spacing"></div>
		<!---- Content ---->
		<div id="content">

			<!-- Introduction section -->
			<div class="section" id="introduction">
				<p class="section_title"> Introduction au projet </p>
				<div class="section_content">

					<!-- Birth Section -->
					<div class="subsection">
						<p class="subsection_title"> Naissance du projet : </p>
						<div class="subsection_content">
							<p>
								<span STYLE="padding:0 0 0 2em;"> Le projet Dungeon BattleRush est né le 5 décembre 2020, et a pour objectif le développement d’un jeu vidéo éponyme en C#, sous le moteur de jeu Unity. La réalisation du jeu vidéo que nous avons imaginé, inspiré de nos expériences vidéo ludiques personnelles mises au goût du jour, représente un vrai défi que nous voulons surmonter pour notre premier projet à l’EPITA. C’est ainsi que nous avons imaginé Dungeon BattleRush, un jeu 3D sur ordinateur permettant les modessolo et multijoueur, mêlant fantastique, combat et aventure dans un décor médiéval.
							</p>
						</div>
					</div>

				</div>
			</div>


			<!-- Game Section -->
			<div class="section" id="game_section">
				<p class="section_title"> Le jeu </p>
				<div class="section_content">
					<!-- Concept subsection -->
					<div class="subsection" id="concept">
						<p class="subsection_title"> Concept du jeu </p>
						<div class="subsection_content">
							<p>
								<span STYLE="padding:0 0 0 2em;"> Dungeon BattleRush est la combinaison d’un “Dungeon crawler”, d’un “Battle Royal” et d’un jeu d’arène, en 3D, dont le but est d’être le dernier survivant du donjon. À travers les différentes salles, vous affronterez des monstres, surmonterez des obstacles et résoudrez des énigmes afin de récupérer des items à mettre dans votre inventaire. Ils vous permettront d’affronter, dans une arène, le boss final. Dans ce jeu dynamique, seul ou à plusieurs, vos principaux ennemis ne sont pas uniquement les monstres, mais également le temps !
							</p>
						</div>
					</div>

					<!-- Progress subsection -->
					<div class="subsection" id="progress">
						<p class="subsection_title"> Déroulement du jeu </p>
						<div class="subsection_content">
							<p> 
								<span STYLE="padding:0 0 0 2em;"> Le jeu se déroule endeux parties. Premièrement, avec la récupération d’items et l’augmentation des statistiques de jeu, et secondement avec l’affront final.
							</p>
							<p>
								<span STYLE="padding:0 0 0 2em;"> Dans un premier temps, en mode solo, le joueur débute la partie dans l’une des salles choisies aléatoirement du donjon. Il progresse à travers les salles remplies de monstres ou d’énigmes. Dans le cas de l’affront de monstres, la porte menant à la salle suivante n’est pas fermée, le joueur peut alors choisir entre les tuer et ainsi augmenter ses statistiques, ou passer à la salle suivante, sachant que les ennemis encore vivants le suivront. En revanche, s’il est confronté à la résolution d’une énigme, sa progression dans le donjon est bloquée puisque la porte permettant d’accéder à la salle suivante se ferme. Le joueur doit alors résoudre celle-ci afin de récupérer un équipement (arme ou bouclier). Mais gare aux monstres qu’il n’aura pas tués sur son chemin !
							</p>
							<p>
								<span STYLE="padding:0 0 0 2em;"> En mode multijoueur, la progression se fait selon un principe très simple. Un donjon est créé aléatoirement, et se décline suivant le nombre d’équipes dans la partie. Chacune d’entre elles progresse individuellement dans une version qui lui est propre (bien que celle initiale soit la même pour tous), et ce sans connaître l’avancée de ses adversaires. En revanche, dans le cas d’un affront à deux (entre coéquipiers ou avec des NPC), chaque équipe progresse en binôme dans leur propre donjon.
							</p>
							<p>
								<span STYLE="padding:0 0 0 2em;"> Dans un second temps, à la fin du temps imparti, le ou les joueurs sont téléportés dans l’arène finale, où le dernier combat a lieu. Que ce soit face à ses amis ou à des NPC, c’est ici que les équipements récupérés ainsi que l’expérience acquise feront la différence, et mèneront le joueur vers la victoire.
							</p>
							<p>
								<span STYLE="padding:0 0 0 2em;"> Lorsqu’un joueur n’a plus de vie, il doit patienter une durée déterminée, avant de reprendre la partie. S’il possède un totem, il réapparaît à l’endroit même où il est mort, sinon à la toute première salle du donjon. Mais le temps ne s’arrête pas pour autant...
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!--------------------->
	<!------ FOOTER ------->
	<!--------------------->
	<footer>
		<!-- Copyrights --->
		<?php include "../msc/footer.html" ?>
	</footer>

	<!------- Video ------->
	<?php include "../msc/video.html" ?>
</body>
</html>