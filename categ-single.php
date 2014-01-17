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
		



		<section> <!-- page content starts here --> 
			<div class="wrapper"> 
				<p class="h4"> This dashboard layout start with a vbox. </p> 
				<p>You can use the .hbox and .vbox to build the complicated layouts.</p> 
			</div> 
		</section> <!-- page content ends -->





		<aside class="bg-light lter b-l aside-sm"> 
			<div class="wrapper">
				<p>aside content</p>
			</div> 
		</aside> 

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
</body>
</html>

