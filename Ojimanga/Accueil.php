<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('includes/head.html') ?>
	<title>Ojimanga : Vêtements, Coques, Posters</title>
</head>

<body>

	<div class="haut-de-page"></div>

	<section id="home" class="home-container">

		<!-- Image de fond d'accueil -->
		<img class="image-accueil" src="assets/images/image-accueil-reduite.jpg">

		<?php include('includes/navbar.html') ?>

	</section>


	<!-- Infos sur la livraison et le paiement -->
	<section id="delivery" class="delivery-container">

		<div class="delivery">
			<i class="icone-livraison fas fa-truck"></i>
			<p class="box-content">
				Livraison gratuite à domicile
			</p>
		</div>

		<div class="points-relais">
			<i class="icone-livraison fas fa-search-location"></i>
			<p class="box-content">
				Retrait en points relais
			</p>
		</div>

		<div class="paiements">
			<i class="icone-livraison fas fa-credit-card"></i>
			<p class="box-content">
				Paiements sécurisés
			</p>
		</div>

	</section>

	<!-- Bas de page (footer) -->
	<footer id="footer" class="footer">
		<span class="copyrights">&copy; 2020 - Ojimanga.fr</span>
		<a href="#" class="conditions">Conditions générales de vente</a>
	</footer>

	<script>
		const burgerContainer = document.querySelector('.burger-container');
		const navLinks = document.querySelector('.nav-links');

		burgerContainer.addEventListener('click', () => {
			burgerContainer.classList.toggle('active');
			navLinks.classList.toggle('active');
		})
	</script>
   
</body>

</html>