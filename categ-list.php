<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 
<?php include 'head.php' ?>
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
<link rel="stylesheet" href="js/datatables/datatables.css" type="text/css" /> 
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
		<?php include 'sidebar.php' ?>

		<section> <!-- page content starts here --> 
			<div class="wrapper"> 
				<?php include 'includes/categ-table.php' ?>
			</div> 
		</section> <!-- page content ends -->

		</section> <!-- hbox stretch -->
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<!-- fuelux --> 
<script src="js/fuelux/fuelux.js"></script> 
<script src="js/libs/underscore-min.js"></script> 
<script src="js/datatables/jquery.dataTables.min.js"></script> 


</body>
</html>