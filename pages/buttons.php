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
		



		<section id="content"> <section class="vbox"> 

<header class="header bg-light dker"> 

<p>Buttons</p> </header> <section class="scrollable wrapper"> 

<div class="row"> 

<div class="col-lg-6"> <h4 class="m-t-xs">Button options</h4> 

<div class="doc-buttons"> <a href="#" class="btn btn-s-md btn-default">Default</a> <a href="#" class="btn btn-s-md btn-primary">Primary</a> <a href="#" class="btn btn-s-md btn-success">Success</a> <a href="#" class="btn btn-s-md btn-info">Info</a> <a href="#" class="btn btn-s-md btn-warning">Warning</a> <a href="#" class="btn btn-s-md btn-danger">Danger</a> <a href="#" class="btn btn-s-md btn-white">White</a> <a href="#" class="btn btn-s-md btn-white disabled">Disabled</a> 
</div> <h4 class="m-t">Button size</h4> 

<p> <a href="#" class="btn btn-white btn-lg">Large button</a> <a href="#" class="btn btn-default btn-lg">Button</a> </p> 

<p> <a href="#" class="btn btn-white">Default button</a> <a href="#" class="btn btn-default">Button</a> </p> 

<p> <a href="#" class="btn btn-white btn-sm">Small button</a> <a href="#" class="btn btn-default btn-sm">Button</a> </p> 

<p> <a href="#" class="btn btn-white btn-xs">Extra small button</a> <a href="#" class="btn btn-default btn-xs">Button</a> </p> <h4 class="m-t-lg">Button dropdowns</h4> 

<p class="text-muted">Single button dropdowns</p> 

<div class="m-b-sm"> 

<div class="btn-group"> <button class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 

<div class="btn-group"> <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</div> 

<div class="m-b-sm"> 

<div class="btn-group"> <button class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 

<div class="btn-group"> <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</div> 

<div class="m-b-sm"> 

<div class="btn-group"> <button class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 

<div class="btn-group"> <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</div> 

<p class="text-muted">Split button dropdowns &amp; variation </p> 

<div class="m-b-sm"> 

<div class="btn-group"> <button class="btn btn-white">Action</button> <button class="btn btn-white dropdown-toggle" data-toggle="dropdown">

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 

<div class="btn-group dropup"> <button class="btn btn-white">Action</button> <button class="btn btn-white dropdown-toggle" data-toggle="dropdown">

<span class="caret">
</span></button> 
<ul class="dropdown-menu"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</div> <h4 class="m-t-lg">Button with icon</h4> 

<p> <a href="#" class="btn btn-white"><i class="fa fa-html5"></i> Html5</a> <a href="#" class="btn btn-info"><i class="fa fa-css3"></i> CSS3</a> </p> 

<p> <a href="#" class="btn btn-white btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a> </p> 

<p> <a href="#" class="btn btn-white btn-block"><i class="fa fa-bars pull-left"></i> Block button with icon</a> </p> <h4 class="m-t-lg">Select Button</h4> 

<div class="select btn-group" data-resize="auto"> <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"> 

<span class="dropdown-label" style="width: 65px;">Item One</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu"> 
<li data-value="1"><a href="#">Item One</a></li> 
<li data-value="2"><a href="#">Item Two</a></li> 
<li data-value="3" data-fizz="buzz"><a href="#">Item Three</a></li> 
<li class="divider"></li> 
<li data-value="4"><a href="#">Item Four</a></li> 
</ul> 
</div> 
</div> 

<div class="col-lg-6"> <h4 class="m-t-xs">Rounded button</h4> 

<div class="doc-buttons"> <a href="#" class="btn btn-s-md btn-default btn-rounded">Default</a> <a href="#" class="btn btn-s-md btn-primary btn-rounded">Primary</a> <a href="#" class="btn btn-s-md btn-success btn-rounded">Success</a> <a href="#" class="btn btn-s-md btn-info btn-rounded">Info</a> <a href="#" class="btn btn-s-md btn-warning btn-rounded">Warning</a> <a href="#" class="btn btn-s-md btn-danger btn-rounded">Danger</a> <a href="#" class="btn btn-s-md btn-white btn-rounded">White</a> <a href="#" class="btn btn-s-md btn-white btn-rounded disabled">Disabled</a> 
</div> <h4 class="m-t-lg">Button groups</h4> 

<div class="m-b-sm"> 

<div class="btn-group"> <button type="button" class="btn btn-white">Left</button> <button type="button" class="btn btn-white">Middle</button> <button type="button" class="btn btn-white">Right</button> 
</div> 
</div> 

<p class="text-muted">Vertical button groups</p> 

<div class="btn-group-vertical m-b-sm"> <button type="button" class="btn btn-white">Top</button> <button type="button" class="btn btn-white">Middle</button> <button type="button" class="btn btn-white">Bottom</button> 
</div> 

<p class="text-muted">Nested button groups</p> 

<div class="btn-group m-b-sm"> <button type="button" class="btn btn-default">1</button> <button type="button" class="btn btn-success">2</button> <button type="button" class="btn btn-default">3</button> 

<div class="btn-group"> <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Dropdown 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu"> 
<li><a href="#">Dropdown link</a></li> 
<li><a href="#">Dropdown link</a></li> 
<li><a href="#">Dropdown link</a></li> 
</ul> 
</div> 
</div> 

<p class="text-muted">Justified button groups</p> 

<div class="m-b-sm"> 

<div class="btn-group btn-group-justified"> <a href="#" class="btn btn-primary">Left</a> <a href="#" class="btn btn-info">Middle</a> <a href="#" class="btn btn-success">Right</a> 
</div> 
</div> 

<p class="text-muted">Multiple button groups</p> 

<div class="btn-toolbar"> 

<div class="btn-group"> <button type="button" class="btn btn-default">1</button> <button type="button" class="btn btn-default active">2</button> <button type="button" class="btn btn-default">3</button> <button type="button" class="btn btn-default">4</button> 
</div> 

<div class="btn-group"> <button type="button" class="btn btn-default">5</button> <button type="button" class="btn btn-default">6</button> <button type="button" class="btn btn-default">7</button> 
</div> 

<div class="btn-group"> <button type="button" class="btn btn-default">8</button> 
</div> 
</div> <h4 class="m-t-lg">Button components</h4> 

<p class="text-muted"> 

<span>There are a few easy ways to quickly get started with Bootstrap, each one ...
</span> 

<span class="text-muted hide" id="moreless"> appealing to a different skill level and use case. Read through to see what suits your particular needs.
</span> </p> 

<p> <button href="#moreless" class="btn btn-sm btn-white" data-toggle="class:show"> <i class="fa fa-plus text"></i> 

<span class="text">More
</span> <i class="fa fa-minus text-active"></i> 

<span class="text-active">Less
</span> </button> </p> 

<p> <button class="btn btn-default" id="btn-1" href="#btn-1" data-toggle="class:btn-success"> <i class="fa fa-cloud-upload text"></i> 

<span class="text">Upload
</span> <i class="fa fa-check text-active"></i> 

<span class="text-active">Success
</span> </button> <button class="btn btn-white" data-toggle="button"> <i class="fa fa-heart-empty text"></i> <i class="fa fa-heart text-active text-danger"></i> </button> <button class="btn btn-white" data-toggle="button"> 

<span class="text"> <i class="fa fa-thumbs-up text-success"></i> 25 
</span> 

<span class="text-active"> <i class="fa fa-thumbs-down text-danger"></i> 10 
</span> </button> </p> 

<div class="m-b-sm"> 

<div class="btn-group" data-toggle="buttons"> 
<label class="btn btn-sm btn-info active"> 
<input type="radio" name="options" id="option1"> <i class="fa fa-check text-active"></i>Male 
</label> 
<label class="btn btn-sm btn-success"> 
<input type="radio" name="options" id="option2"> <i class="fa fa-check text-active"></i>Female 
</label> 
<label class="btn btn-sm btn-primary"> 
<input type="radio" name="options" id="option3"> <i class="fa fa-check text-active"></i>N/A 
</label> 
</div> 
</div> 

<div class="m-b-sm"> 

<div class="btn-group" data-toggle="buttons"> 
<label class="btn btn-sm btn-white"> 
<input type="checkbox" name="options" id="option1"> option1 
</label> 
<label class="btn btn-sm btn-white"> 
<input type="checkbox" name="options" id="option2"> option2 
</label> 
</div> 
</div> <h4 class="m-t-lg"> <a href="#" class="pull-right text-sm" data-toggle="class:btn-rounded" data-target="#social-buttons a">Toggle</a> Social buttons </h4> 

<p id="social-buttons"> <a href="#" class="btn btn-rounded btn-sm btn-twitter"><i class="fa fa-twitter"></i> Twitter</a> <a href="#" class="btn btn-rounded btn-sm btn-facebook"><i class="fa fa-facebook"></i> Facebook</a> <a href="#" class="btn btn-rounded btn-sm btn-gplus"><i class="fa fa-google-plus"></i> Google+</a> </p> 
</div> 
</div> </section> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>

<script src="js/fuelux/fuelux.js"></script>
</body>
</html>