<!DOCTYPE html>
<html>
<head>
	<?php include "../msc/head.html" ?>
	<link rel="stylesheet" type="text/css" href="../css/documents.css">
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
		<div id="spacing">
			To be unseen
		</div>
		<!---- Content ---->
		<div id="content">
			<!-- Specification section -->
			<div class="section" id="specifications">
				<p class="section_title"> Cahier des Charges </p>
				<div class="section_content">
					<!--- Specification 1 --->
					<div class="subsection" id="s1">
						<p class="date"> 01/01/2021 </p>
						<a class="download" href="../download/spe/DBR_CdC_v1.1.pdf" target="_blank">
							<img class="download_img" src="../img/pdf.png">
							<p id="name"> Cahier des charges v1.pdf </p>
						</a>
					</div>
					<!--- Specification 2 --->
					<div class="subsection" id="s2">
						<p class="date"> 02/02/2021</p>
						<a class="download" href="../download/spe/DBR_CdC_v2.0.pdf" target="_blank">
							<img class="download_img" src="../img/pdf.png">
							<p id="name"> Cahier des charges v2.pdf </p>
						</a>
					</div>
				</div>
			</div>

			<!---- Defenses section ----->
			<div class="section" id="defenses">
				<p class="section_title"> Soutenances </p>
				<div class="section_content">
					<!------ Defense 1 ------>
					<div class="subsection" id="d1">
						<p class="date"> 02/03/2021 </p>
						<a class="download" href="../download/rep/DBR_Soutenance_1.pdf" target="_blank">
							<img class="download_img" src="../img/pdf.png">
							<p id="name"> Rapport de soutenance 1.pdf </p>
						</a>
					</div>
					<!------ Defense 2 ------>
					<div class="subsection" id="d2">
						<p class="date"> 30/04/2021 </p>
						<a class="download" href="../download/rep/DBR_Soutenance_2.pdf" target="_blank">
							<img class="download_img" src="../img/pdf.png">
							<p id="name"> Rapport de soutenance 2.pdf </p>
						</a>
					</div>
					<!------ Defense 3 ------>
					<div class="subsection" id="d3">
						<p class="date"> Indisponible</p>
						<a class="download" href="../download/rep/DBR_Soutenance_3" target="_blank">
							<img class="download_img" src="../img/pdf.png">
							<p id="name"> Rapport de soutenance 3.pdf </p>
						</a>
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