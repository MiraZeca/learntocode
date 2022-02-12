<?php
include("includes/config.php");
include("includes/functions.php");
?>
<!DOCTYPE html>
<html lang="sr">

<head>
	<?php include("templates/header.php"); ?>
</head>

<body id="gallery">

	<?php include("templates/main_header.php"); ?>

	<main>
		<!-- Intro Section -->
		<section class="intro-section">
			<?php include("templates/intro_section.php"); ?>

		</section>
		<!-- Intro Section END -->

		<?php // debug($_GET['id']);exit; 
		?>
		<div class="white-container">
			<h1 style="text-align: center;">Galerija</h1>
			<?php include("templates/gallery_views.php"); ?>
		</div>

	</main>
	<?php include("templates/footer.php"); ?>

</body>

</html>