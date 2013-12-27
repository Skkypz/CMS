<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 

<?php include 'head.php' ?>
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
		<?php include 'sidebar.php' ?>
		



		<section id="content"> <section class="vbox"> 

<header class="header bg-light dker bg-gradient"> 

<p>Components</p> </header> <section class="scrollable wrapper"> 

<div class="row"> 

<div class="col-lg-12"> 
<!-- .breadcrumb --> 
<ul class="breadcrumb"> 
<li><a href="#"><i class="fa fa-home"></i>Home</a></li> 
<li><a href="#"><i class="fa fa-list-ul"></i>Elements</a></li> 
<li class="active">Components</li> 
</ul> 
<!-- / .breadcrumb --> 
</div> 

<div class="col-lg-6"> 
<!-- .crousel slide --> <section class="panel"> 

<div class="carousel slide auto panel-body" id="c-slide"> 
<ol class="carousel-indicators out"> 
<li data-target="#c-slide" data-slide-to="0" class=""></li> 
<li data-target="#c-slide" data-slide-to="1" class="active"></li> 
<li data-target="#c-slide" data-slide-to="2" class=""></li> 
</ol> 

<div class="carousel-inner"> 

<div class="item"> 

<p class="text-center"> <em class="h4 text-mute">Save your time</em>
<br> <small class="text-muted">Many components</small> </p> 
</div> 

<div class="item active"> 

<p class="text-center"> <em class="h4 text-mute">Nice and easy to use</em>
<br> <small class="text-muted">Full documents</small> </p> 
</div> 

<div class="item"> 

<p class="text-center"> <em class="h4 text-mute">Mobile header first</em>
<br> <small class="text-muted">Mobile/Tablet/Desktop</small> </p> 
</div> 
</div> <a class="left carousel-control" href="#c-slide" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#c-slide" data-slide="next"> <i class="fa fa-angle-right"></i> </a> 
</div> </section> 
<!-- / .carousel slide --> 
</div> 

<div class="col-lg-6"> 
<!-- .crousel fade --> <section class="panel bg-dark"> 

<div class="carousel slide carousel-fade panel-body" id="c-fade"> 
<ol class="carousel-indicators out"> 
<li data-target="#c-fade" data-slide-to="0" class=""></li> 
<li data-target="#c-fade" data-slide-to="1" class="active"></li> 
<li data-target="#c-fade" data-slide-to="2" class=""></li> 
</ol> 

<div class="carousel-inner"> 

<div class="item"> 

<p class="text-center"> <em class="h4 text-mute">Save your time</em>
<br> <small class="text-muted">Many components</small> </p> 
</div> 

<div class="item active"> 

<p class="text-center"> <em class="h4 text-mute">Nice and easy to use</em>
<br> <small class="text-muted">Full documents</small> </p> 
</div> 

<div class="item"> 

<p class="text-center"> <em class="h4 text-mute">Mobile header first</em>
<br> <small class="text-muted">Mobile/Tablet/Desktop</small> </p> 
</div> 
</div> <a class="left carousel-control" href="#c-fade" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="right carousel-control" href="#c-fade" data-slide="next"> <i class="fa fa-angle-right"></i> </a> 
</div> </section> 
<!-- / .carousel fade --> 
</div> 

<div class="col-lg-6"> 
<!-- .accordion --> 

<div class="panel-group m-b" id="accordion2"> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Collapsible Group Item #1 </a> 
</div> 

<div id="collapseOne" class="panel-collapse in"> 

<div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
</div> 
</div> 
</div> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Collapsible Group Item #2 </a> 
</div> 

<div id="collapseTwo" class="panel-collapse collapse"> 

<div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
</div> 
</div> 
</div> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> Collapsible Group Item #3 </a> 
</div> 

<div id="collapseThree" class="panel-collapse collapse"> 

<div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
</div> 
</div> 
</div> 
</div> 
<!-- / .accordion --> 
<!-- .nav-justified --> <section class="panel"> 

<header class="panel-heading bg-light"> 
<ul class="nav nav-tabs nav-justified"> 
<li class="active"><a href="#home" data-toggle="tab">Home</a></li> 
<li><a href="#profile" data-toggle="tab">Profile</a></li> 
<li><a href="#messages" data-toggle="tab">Messages</a></li> 
<li><a href="#settings" data-toggle="tab">Settings</a></li> 
</ul> </header> 

<div class="panel-body"> 

<div class="tab-content"> 

<div class="tab-pane active" id="home">home
</div> 

<div class="tab-pane" id="profile">profile
</div> 

<div class="tab-pane" id="messages">message
</div> 

<div class="tab-pane" id="settings">settings
</div> 
</div> 
</div> </section> 
<!-- / .nav-justified --> 
<!-- left tab --> <section class="panel"> 

<header class="panel-heading bg-light"> 
<ul class="nav nav-tabs pull-right"> 
<li class="active"><a href="#messages-1" data-toggle="tab"><i class="fa fa-comments text-default"></i></a></li> 
<li><a href="#profile-1" data-toggle="tab"><i class="fa fa-user text-default"></i> Profile</a></li> 
<li><a href="#settings-1" data-toggle="tab"><i class="fa fa-cog text-default"></i> Settings</a></li> 
</ul> 

<span class="hidden-sm">Right tab
</span> </header> 

<div class="panel-body"> 

<div class="tab-content"> 

<div class="tab-pane active" id="messages-1">message
</div> 

<div class="tab-pane" id="profile-1">profile
</div> 

<div class="tab-pane" id="settings-1">settings
</div> 
</div> 
</div> </section> 
<!-- / left tab --> 
<!-- right tab --> <section class="panel"> 

<header class="panel-heading text-right bg-light"> 
<ul class="nav nav-tabs pull-left"> 
<li><a href="#messages-2" data-toggle="tab"><i class="fa fa-comments text-default"></i></a></li> 
<li class="active"><a href="#profile-2" data-toggle="tab"><i class="fa fa-user text-default"></i> Profile</a></li> 
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog text-default"></i> Settings <b class="caret"></b></a> 
<ul class="dropdown-menu text-left"> 
<li><a href="#dropdown1" data-toggle="tab">@fat</a></li> 
<li><a href="#dropdown2" data-toggle="tab">@mdo</a></li> 
</ul> </li> 
</ul> 

<span class="hidden-sm">Left tab
</span> </header> 

<div class="panel-body"> 

<div class="tab-content"> 

<div class="tab-pane fade" id="messages-2">message
</div> 

<div class="tab-pane fade active in" id="profile-2">profile
</div> 

<div class="tab-pane fade" id="dropdown1">dropdown1
</div> 

<div class="tab-pane fade" id="dropdown2">dropdown2
</div> 
</div> 
</div> </section> 
<!-- / right tab --> 
<!-- .dropdown --> <section class="panel pos-rlt clearfix"> 

<header class="panel-heading"> 
<ul class="nav nav-pills pull-right"> 
<li> <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a> </li> 
</ul> Dropdown </header> 

<div class="panel-body clearfix"> 

<div class="dropdown pull-left m-r"> 
<ul class="dropdown-menu pos-stc inline" role="menu" aria-labelledby="dropdownMenu"> 
<li><a tabindex="-1" href="#">Action</a></li> 
<li><a tabindex="-1" href="#">Another action</a></li> 
<li><a tabindex="-1" href="#">Something else here</a></li> 
<li class="divider"></li> 
<li class="dropdown-submenu"> <a tabindex="-1" href="#">Separated link</a> 
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
<li><a tabindex="-1" href="#">Action</a></li> 
<li><a tabindex="-1" href="#">Another action</a></li> 
<li><a tabindex="-1" href="#">Something else here</a></li> 
</ul> </li> 
</ul> 
</div> 

<div class="dropdown dropup pull-left"> 
<ul class="dropdown-menu bg-inverse pos-stc inline" role="menu" aria-labelledby="dropdownMenu"> 
<li><a tabindex="-1" href="#">Action</a></li> 
<li><a tabindex="-1" href="#">Another action</a></li> 
<li><a tabindex="-1" href="#">Something else here</a></li> 
<li class="divider"></li> 
<li class="dropdown-submenu"> <a tabindex="-1" href="#">Separated link</a> 
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
<li class="dropdown-submenu pull-left"> <a tabindex="-1" href="#">Action</a> 
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
<li><a tabindex="-1" href="#">Action</a></li> 
<li><a tabindex="-1" href="#">Another action</a></li> 
<li><a tabindex="-1" href="#">Something else here</a></li> 
</ul> </li> 
<li><a tabindex="-1" href="#">Another action</a></li> 
<li><a tabindex="-1" href="#">Something else here</a></li> 
</ul> </li> 
</ul> 
</div> 
</div> </section> 
<!-- / .dropmenu --> 
<!-- .tooltip & popup --> <section class="panel text-sm doc-buttons"> 

<div class="panel-body"> <button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button> <button class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">On right</button> <button class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">On bottom</button> <button class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">On left</button> <button class="btn btn-sm btn-info" data-toggle="popover" data-html="true" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="&lt;button type=&quot;button&quot; class=&quot;close pull-right&quot; data-dismiss=&quot;popover&quot;&gt;×&lt;/button&gt;Popover on top">Popover on top</button> <a href="modal.html" data-toggle="ajaxModal" class="btn btn-sm btn-white">Modal</a> 
</div> </section> <section class="panel"> 

<div class="wizard clearfix"> 
<ul class="steps"> 
<li data-target="#step1" class="active">

<span class="badge badge-info">1
</span>Step 1</li> 
<li data-target="#step2">

<span class="badge">2
</span>Step 2</li> 
<li data-target="#step3">

<span class="badge">3
</span>Step 3</li> 
</ul> 

<div class="actions"> <button type="button" class="btn btn-white btn-xs btn-prev" disabled="disabled">Prev</button> <button type="button" class="btn btn-white btn-xs btn-next" data-last="Finish">Next</button> 
</div> 
</div> 

<div class="step-content"> 

<div class="step-pane active" id="step1">This is step 1
</div> 

<div class="step-pane" id="step2">This is step 2
</div> 

<div class="step-pane" id="step3">This is step 3
</div> 
</div> </section> <section class="panel clearfix"> 

<div class="wizard wizard-vertical clearfix" id="wizard-2"> 
<ul class="steps"> 
<li data-target="#step4" class="active">

<span class="badge badge-info">1
</span>Get it!</li> 
<li data-target="#step5">

<span class="badge">2
</span>Unzip it</li> 
<li data-target="#step6">

<span class="badge">3
</span>Finish</li> 
</ul> 
</div> 

<div class="step-content"> 

<div class="step-pane active" id="step4"> 

<p>You can get this theme at <a href="http://themeforest.net/user/Flatfull/portfolio"><strong>here</strong></a> 
<br><small class="text-muted">Do not forget to rate it when you get it.</small></p> 
</div> 

<div class="step-pane" id="step5"> 

<p>Unzipping this file, please wait it complete...</p> 

<div class="progress progress-xs m-t-sm"> 

<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%">
</div> 
</div> 

<p class="text-muted"><small>Some features you need know...</small></p> 
</div> 

<div class="step-pane" id="step6"> 

<p>Thank you for choose this theme for your web application. 
<br>Have Fun!</p> 
</div> 

<div class="actions m-t text-right"> <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#wizard-2" data-wizard="previous" disabled="disabled">Prev</button> <button type="button" class="btn btn-white btn-sm btn-next" data-target="#wizard-2" data-wizard="next" data-last="Finish">Next</button> 
</div> 
</div> </section> 
</div> 

<div class="col-lg-6"> <section class="panel" id="progressbar"> 

<header class="panel-heading"> 
<ul class="nav nav-pills pull-right"> 
<li><a href="#" data-toggle="progress" data-target="#progressbar">Random</a></li> 
</ul> Progress bar </header> 
<ul class="list-group"> 
<li class="list-group-item"> 

<div class="progress progress-xs m-t-sm"> 

<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%">
</div> 
</div> 

<div class="progress progress-xs progress-striped"> 

<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="10%" style="width: 10%">
</div> 
</div> 

<div class="progress progress-xs progress-striped"> 

<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="50%" style="width: 50%">
</div> 
</div> 

<div class="progress progress-xs progress-striped active"> 

<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="30%" style="width: 30%">
</div> 
</div> </li> 
<li class="list-group-item"> 

<div class="progress progress-sm m-t-sm"> 

<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="10%" style="width: 10%">
</div> 
</div> 

<div class="progress progress-sm progress-striped active"> 

<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="30%" style="width: 30%">
</div> 
</div> 

<div class="progress progress-sm progress-striped"> 

<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%">
</div> 
</div> 

<div class="progress progress-sm progress-striped"> 

<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="10%" style="width: 10%">
</div> 
</div> </li> 
<li class="list-group-item"> 

<div class="progress m-t-sm"> 

<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="40%" style="width: 40%">
</div> 

<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="10%" style="width: 10%">
</div> 

<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%">
</div> 
</div> </li> 
</ul> </section> 
</div> 

<div class="col-lg-6"> 
<!-- .label and .badge --> 

<div class="m-b-lg text-center"> 

<p> 

<span class="label bg-light">label
</span> 

<span class="label bg-primary">Primary
</span> 

<span class="label bg-success">Success
</span> 

<span class="label bg-info">Info
</span> 

<span class="label bg-dark">Inverse
</span> 

<span class="label bg-warning">Warning
</span> 

<span class="label bg-danger">Danger
</span> </p> 

<p class="m-b-none"> 

<span class="badge">15
</span> 

<span class="badge bg-primary">15
</span> 

<span class="badge bg-success">20
</span> 

<span class="badge bg-info">21
</span> 

<span class="badge bg-dark">13
</span> 

<span class="badge bg-warning">35
</span> 

<span class="badge bg-danger">32
</span> </p> 
</div> 
<!-- / .label and .badge --> 

<div class="alert alert-warning alert-block"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <h4><i class="fa fa-bell-alt"></i>Warning!</h4> 

<p>Best check yo self, you're not looking too good...</p> 
</div> 

<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <i class="fa fa-ban-circle"></i><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again. 
</div> 

<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <i class="fa fa-check-sign"></i><strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>. 
</div> 

<div class="alert alert-info"> <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button> <i class="fa fa-info-sign"></i><strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important. 
</div> 

<div class="text-center"> 
<ul class="pagination pagination-lg"> 
<li><a href="#"><i class="fa fa-chevron-left"></i></a></li> 
<li class="active"><a href="#">1</a></li> 
<li><a href="#">2</a></li> 
<li><a href="#">3</a></li> 
<li><a href="#">4</a></li> 
<li><a href="#">5</a></li> 
<li><a href="#"><i class="fa fa-chevron-right"></i></a></li> 
</ul> 
</div> 

<div class="text-center"> 
<ul class="pagination pagination"> 
<li><a href="#"><i class="fa fa-chevron-left"></i></a></li> 
<li><a href="#">1</a></li> 
<li><a href="#">2</a></li> 
<li><a href="#">3</a></li> 
<li><a href="#">4</a></li> 
<li><a href="#">5</a></li> 
<li><a href="#"><i class="fa fa-chevron-right"></i></a></li> 
</ul> 
</div> 

<div class="text-center"> 
<ul class="pagination pagination-sm"> 
<li><a href="#"><i class="fa fa-chevron-left"></i></a></li> 
<li><a href="#">1</a></li> 
<li><a href="#">2</a></li> 
<li><a href="#">3</a></li> 
<li><a href="#">4</a></li> 
<li><a href="#">5</a></li> 
<li><a href="#"><i class="fa fa-chevron-right"></i></a></li> 
</ul> 
</div> 
</div> 
</div> </section> </section> </section> 

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/fuelux/fuelux.js"></script>
</body>
</html>