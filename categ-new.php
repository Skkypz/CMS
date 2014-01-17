<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 

<?php include 'head.php' ?>
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
			<?php include 'sidebar.php' ?>
			


			<section id="content" class="height-100p overflow-hidden"> <!-- page content starts here --> 
				<header class="header bg-white b-b">
					<p>Create new category</p>
					<a href="#"><span class="badge bg-info pull-right m-t">Veiw Page</span></a>
					<span class="badge bg-danger pull-right m-t m-r">16 Articles</span>
				</header>

				<section class="scrollable scrollbar-small">
					<div class="wrapper">
						<section class="panel">
							<div class="wrapper">
								<?php include 'includes/categ-new-form.php' ?>
							</div>
						</section>
					</div>
				</section>
			</section> <!-- page content ends -->

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
</body>
</html>