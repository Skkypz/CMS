<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 

<?php include 'head.php' ?>
<link rel="stylesheet" href="js/select2/select2.css" type="text/css" /> 
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" /> 
<link rel="stylesheet" href="js/slider/slider.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/language-tabs.css" />
</head>

<body class="overflow-hidden"> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
			<?php include 'sidebar.php' ?>
			



			<section id="content" class="scrollable scrollbar-hidden"> <!-- page content starts here --> 
				<section class="vbox">
					<?php include 'includes/create-article-wizzard.php' ?>
				</section>
			</section> <!-- page content ends -->





			<aside class="bg-light lter b-l aside-sm"> 
				<div class="wrapper">
					<div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs"> 
						<div class="pull-left"> 
							<div class="pull-left m-r-xs"> 
								<span class="block">Articles</span> 
								<span class="h4">432</span>
								<i class="fa fa-level-up text-success"></i> 
							</div>  
						</div> 
						<div class="pull-left m-l-lg"> 
							<div class="pull-left m-r-xs"> 
								<span class="block">Profit</span> 
								<span class="h4">$4k</span>
								<i class="fa fa-level-down text-danger"></i> 
							</div>  
						</div> 
					</div> 
				</div> <!-- wrapper -->
			</aside> 
		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/fuelux/fuelux.js"></script> 
<!-- datepicker --> 
<!-- <script src="js/datepicker/bootstrap-datepicker.js"></script>  -->
<!-- slider --> 
<!-- <script src="js/slider/bootstrap-slider.js"></script>  -->
<!-- file input --> 
<!-- <script src="js/file-input/bootstrap.file-input.js"></script>  -->
<!-- combodate --> 
<!-- <script src="js/libs/moment.min.js"></script>  -->
<!-- <script src="js/combodate/combodate.js" cache="false"></script>  -->
<!-- parsley --> 
<script src="js/prasley/parsley.min.js" cache="false"></script> 
<!-- <script src="js/prasley/parsley.extend.js" cache="false"></script>  -->
<!-- select2 --> 
<!-- <script src="js/select2/select2.min.js" cache="false"></script>  -->
<!-- wysiwyg --> 
<script src="js/wysiwyg/jquery.hotkeys.js" cache="false"></script> 
<script src="js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script> 
<script src="js/wysiwyg/demo.js" cache="false"></script> 
<!-- markdown --> 
<script src="js/markdown/epiceditor.min.js" cache="false"></script> 
<!-- <script src="js/markdown/demo.js" cache="false"></script> -->
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
</body>
</html>

