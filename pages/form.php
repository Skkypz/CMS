<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 
<?php include 'head.php' ?>

<link rel="stylesheet" href="js/select2/select2.css" type="text/css" /> 
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" /> 
<link rel="stylesheet" href="js/slider/slider.css" type="text/css" />  
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
		<?php include 'sidebar.php' ?>
		



		<section id="content"> <section class="vbox"> 

		<header class="header bg-dark bg-gradient"> 
<ul class="nav nav-tabs"> 
<li class="active"><a href="#basic" data-toggle="tab">Elements</a></li> 
<li class=""><a href="#validation" data-toggle="tab">Validation</a></li> 
<li class=""><a href="#wizard" data-toggle="tab">Form wizard</a></li> 
</ul> </header> <section class="scrollable wrapper"> 

<div class="tab-content"> <section class="tab-pane active" id="basic"> 

<div class="row"> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading font-bold">Basic form</header> 

<div class="panel-body"> 

<form role="form"> 

<div class="form-group"> 
<label>Email address
</label> 
<input type="email" class="form-control" placeholder="Enter email"> 
</div> 

<div class="form-group"> 
<label>Password
</label> 
<input type="password" class="form-control" placeholder="Password"> 
</div> 

<div class="checkbox"> 
<label> 
<input type="checkbox"> Check me out 
</label> 
</div> <button type="submit" class="btn btn-sm btn-default">Submit</button> 
</form> 
</div> </section> 
</div> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading font-bold">Horizontal form</header> 

<div class="panel-body"> 

<form class="bs-example form-horizontal"> 

<div class="form-group"> 
<label class="col-lg-2 control-label">Email
</label> 

<div class="col-lg-10"> 
<input type="email" class="form-control" placeholder="Email"> 

<span class="help-block m-b-none">Example block-level help text here.
</span> 
</div> 
</div> 

<div class="form-group"> 
<label class="col-lg-2 control-label">Password
</label> 

<div class="col-lg-10"> 
<input type="password" class="form-control" placeholder="Password"> 
</div> 
</div> 

<div class="form-group"> 

<div class="col-lg-offset-2 col-lg-10"> 

<div class="checkbox"> 
<label> 
<input type="checkbox"> Remember me 
</label> 
</div> 
</div> 
</div> 

<div class="form-group"> 

<div class="col-lg-offset-2 col-lg-10"> <button type="submit" class="btn btn-sm btn-default">Sign in</button> 
</div> 
</div> 
</form> 
</div> </section> 
</div> 
</div> <section class="panel"> 

<header class="panel-heading font-bold"> Inline form </header> 

<div class="panel-body"> 

<form class="form-inline" role="form"> 

<div class="form-group"> 
<label class="sr-only" for="exampleInputEmail2">Email address
</label> 
<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"> 
</div> 

<div class="form-group"> 
<label class="sr-only" for="exampleInputPassword2">Password
</label> 
<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"> 
</div> 

<div class="checkbox m-l-xs m-r-xs"> 
<label> 
<input type="checkbox"> Remember me 
</label> 
</div> <button type="submit" class="btn btn-default">Sign in</button> <a href="#modal-form" class="btn btn-success" data-toggle="modal">Form in a modal</a> 
</form> 
</div> </section> <section class="panel"> 

<header class="panel-heading font-bold"> Form elements </header> 

<div class="panel-body"> 

<form class="form-horizontal" method="get"> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Rounded
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control rounded"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">With help
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control"> 

<span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.
</span> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label" for="input-id-1">Label focus
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control" id="input-id-1"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Password
</label> 

<div class="col-sm-10"> 
<input type="password" name="password" class="form-control"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Placeholder
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control" placeholder="placeholder"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-lg-2 control-label">Disabled
</label> 

<div class="col-lg-10"> 
<input class="form-control" type="text" placeholder="Disabled input here..." disabled> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-lg-2 control-label">Static control
</label> 

<div class="col-lg-10"> 

<p class="form-control-static">email@example.com</p> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Checkboxes and radios
</label> 

<div class="col-sm-10"> 

<div class="checkbox"> 
<label> 
<input type="checkbox" value=""> Option one is this and that&mdash;be sure to include why it's great 
</label> 
</div> 

<div class="radio"> 
<label> 
<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great 
</label> 
</div> 

<div class="radio"> 
<label> 
<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one 
</label> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Inline checkboxes
</label> 

<div class="col-sm-10"> 
<label class="checkbox-inline"> 
<input type="checkbox" id="inlineCheckbox1" value="option1"> a 
</label> 
<label class="checkbox-inline"> 
<input type="checkbox" id="inlineCheckbox2" value="option2"> b 
</label> 
<label class="checkbox-inline"> 
<input type="checkbox" id="inlineCheckbox3" value="option3"> c 
</label> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Select
</label> 

<div class="col-sm-10"> 
<select name="account" class="form-control m-b"> 

<option>option 1</option> 

<option>option 2</option> 

<option>option 3</option> 

<option>option 4</option> 
</select> 

<div class="col-lg-4 m-l-n"> 
<select multiple class="form-control"> 

<option>option 1</option> 

<option>option 2</option> 

<option>option 3</option> 

<option>option 4</option> 
</select> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group has-success"> 
<label class="col-sm-2 control-label">Input with success
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group has-warning"> 
<label class="col-sm-2 control-label">Input with warning
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group has-error"> 
<label class="col-sm-2 control-label">Input with error
</label> 

<div class="col-sm-10"> 
<input type="text" class="form-control"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Control sizing
</label> 

<div class="col-sm-10"> 
<input class="form-control input-lg m-b" type="text" placeholder=".input-lg"> 
<input class="form-control m-b" type="text" placeholder="Default input"> 
<input class="form-control input-sm" type="text" placeholder=".input-sm"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Column sizing
</label> 

<div class="col-sm-10"> 

<div class="row"> 

<div class="col-md-2"> 
<input type="text" class="form-control" placeholder=".col-md-2"> 
</div> 

<div class="col-md-3"> 
<input type="text" class="form-control" placeholder=".col-md-3"> 
</div> 

<div class="col-md-4"> 
<input type="text" class="form-control" placeholder=".col-md-4"> 
</div> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Input groups
</label> 

<div class="col-sm-10"> 

<div class="input-group m-b"> 

<span class="input-group-addon">@
</span> 
<input type="text" class="form-control" placeholder="Username"> 
</div> 

<div class="input-group m-b"> 
<input type="text" class="form-control"> 

<span class="input-group-addon">.00
</span> 
</div> 

<div class="input-group m-b"> 

<span class="input-group-addon">$
</span> 
<input type="text" class="form-control"> 

<span class="input-group-addon">.00
</span> 
</div> 

<div class="input-group m-b"> 

<span class="input-group-addon"> 
<input type="checkbox"> 
</span> 
<input type="text" class="form-control"> 
</div> 

<div class="input-group"> 

<span class="input-group-addon"> 
<input type="radio"> 
</span> 
<input type="text" class="form-control"> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Button addons
</label> 

<div class="col-sm-10"> 

<div class="input-group m-b"> 

<span class="input-group-btn"> <button class="btn btn-white" type="button">Go!</button> 
</span> 
<input type="text" class="form-control"> 
</div> 

<div class="input-group"> 
<input type="text" class="form-control"> 

<span class="input-group-btn"> <button class="btn btn-white" type="button">Go!</button> 
</span> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">With dropdowns
</label> 

<div class="col-sm-10"> 

<div class="input-group m-b"> 

<div class="input-group-btn"> <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action 

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
<!-- /btn-group --> 
<input type="text" class="form-control"> 
</div> 

<div class="input-group"> 
<input type="text" class="form-control"> 

<div class="input-group-btn"> <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action 

<span class="caret">
</span></button> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div>
<!-- /btn-group --> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Segmented
</label> 

<div class="col-sm-10"> 

<div class="input-group m-b"> 

<div class="input-group-btn"> <button type="button" class="btn btn-white" tabindex="-1">Action</button> <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">

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
<!-- /btn-group --> 
<input type="text" class="form-control"> 
</div> 

<div class="input-group"> 
<input type="text" class="form-control"> 

<div class="input-group-btn"> <button type="button" class="btn btn-white" tabindex="-1">Action</button> <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">

<span class="caret">
</span></button> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div>
<!-- /btn-group --> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Custom Radio and Checkbox (Retina display)
</label> 

<div class="col-sm-10"> 

<div class="row"> 

<div class="col-sm-6"> 
<!-- radio --> 

<div class="radio"> 
<label class="radio-custom"> 
<input type="radio" name="radio" checked="checked"> <i class="fa fa-circle-o"></i> Item one checked 
</label> 
</div> 

<div class="radio"> 
<label class="radio-custom"> 
<input type="radio" name="radio"> <i class="fa fa-circle-o"></i> Item two 
</label> 
</div> 

<div class="radio"> 
<label class="radio-custom"> 
<input type="radio" name="radio" disabled="disabled"> <i class="fa fa-circle-o"></i> Item three disabled 
</label> 
</div> 

<div class="radio"> 
<label class="radio-custom"> 
<input type="radio" checked="checked" disabled="disabled"> <i class="fa fa-circle-o"></i> Item four checked disabled 
</label> 
</div> 
</div> 

<div class="col-sm-6"> 
<!-- checkbox --> 

<div class="checkbox"> 
<label class="checkbox-custom"> 
<input type="checkbox" name="checkboxA" checked="checked"> <i class="fa fa-square-o"></i> Item one checked 
</label> 
</div> 

<div class="checkbox"> 
<label class="checkbox-custom"> 
<input type="checkbox" name="checkboxB" id="2"> <i class="fa fa-square-o"></i> Item two 
</label> 
</div> 

<div class="checkbox"> 
<label class="checkbox-custom"> 
<input type="checkbox" name="checkboxC" disabled="disabled"> <i class="fa fa-square-o"></i> Item three disabled 
</label> 
</div> 

<div class="checkbox"> 
<label class="checkbox-custom"> 
<input type="checkbox" name="checkboxD" checked="checked" disabled="disabled"> <i class="fa fa-square-o"></i> Item four checked disabled 
</label> 
</div> 
</div> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Combobox
</label> 

<div class="col-sm-10"> 

<div id="myCombobox" class="input-group dropdown combobox"> 
<input class="form-control" name="combobox" type="text"> 

<div class="input-group-btn"> <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="caret"></i></button> 
<ul class="dropdown-menu pull-right"> 
<li data-value="1" data-selected="true"><a href="#">Item One</a></li> 
<li data-value="2"><a href="#">Item Two</a></li> 
<li data-value="3" data-fizz="buzz"><a href="#">Item Three</a></li> 
<li class="divider"></li> 
<li data-value="4"><a href="#">Item Four</a></li> 
</ul> 
</div> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Spinner
</label> 

<div class="col-sm-10"> 

<div id="MySpinner" class="spinner input-group" data-min="1" data-max="10"> 
<input type="text" class="form-control spinner-input" value="1" name="spinner" maxlength="3"> 

<div class="btn-group btn-group-vertical input-group-btn"> <button type="button" class="btn btn-white spinner-up"> <i class="fa fa-chevron-up text-muted"></i> </button> <button type="button" class="btn btn-white spinner-down"> <i class="fa fa-chevron-down text-muted"></i> </button> 
</div> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Dropdown select
</label> 

<div class="col-sm-10"> 

<div class="btn-group m-r"> <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 

<span class="dropdown-label">Option1
</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu dropdown-select"> 
<li class="active"><a href="#">
<input type="radio" name="d-s-r" checked="">Option1</a></li> 
<li><a href="#">
<input type="radio" name="d-s-r">Option2</a></li> 
<li><a href="#">
<input type="radio" name="d-s-r">Option3</a></li> 
<li class="disabled"><a href="#">
<input type="radio" name="d-s-r" disabled="">I'm disabled</a></li> 
</ul> 
</div> 

<div class="btn-group m-r"> <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 

<span class="dropdown-label" data-placeholder="Please select">Please select
</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu dropdown-select"> 
<li><a href="#">
<input type="checkbox" name="d-s-c-1">Option1</a></li> 
<li><a href="#">
<input type="checkbox" name="d-s-c-2">Option2</a></li> 
<li><a href="#">
<input type="checkbox" name="d-s-c-3">Option3</a></li> 
<li><a href="#">
<input type="checkbox" name="d-s-c-4">Option4</a></li> 
<li><a href="#">
<input type="checkbox" name="d-s-c-5">Option5</a></li> 
</ul> 
</div> 

<div class="inline v-middle"> 

<div class="input-group input-s-sm"> 
<input type="text" id="appendedInput" class="input-sm form-control"> 

<div class="input-group-btn"> <button class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown"> 

<span class="dropdown-label">USD
</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu dropdown-select pull-right"> 
<li class="active"> <a href="#">
<input type="radio" value="USD" name="pay_unit" checked="">USD</a> </li> 
<li> <a href="#">
<input type="radio" value="GBP" name="pay_unit">GBP</a> </li> 
</ul> 
</div> 
</div> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Pillbox
</label> 

<div class="col-sm-10"> 

<div id="MyPillbox" class="pillbox clearfix"> 
<ul> 
<li class="label bg-dark">Item One</li> 
<li class="label bg-success">Item Two</li> 
<li class="label bg-warning">Item Three</li> 
<li class="label bg-danger">Item Four</li> 
<li class="label bg-info">Item Five</li> 
<li class="label bg-success">Item Six</li> 
<input type="text" placeHolder="add a pill"> 
</ul> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Slider
</label> 

<div class="col-sm-10"> 
<input class="slider slider-horizontal form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="10" data-slider-orientation="horizontal" > 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Vertical slider
</label> 

<div class="col-sm-10"> 
<input class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="10" data-slider-orientation="vertical"> 
<input class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="15" data-slider-orientation="vertical"> 
<input class="slider slider-vertical form-control" type="text" value="" data-slider-min="5" data-slider-max="20" data-slider-step="1" data-slider-value="10" data-slider-orientation="vertical"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Range selector
</label> 

<div class="col-sm-10"> 
<input type="text" class="slider form-control" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,750]" id="sl2" > 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Switch
</label> 

<div class="col-sm-10"> 
<label class="switch"> 
<input type="checkbox"> 

<span>
</span> 
</label> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Select2
</label> 

<div class="col-sm-10"> 

<div class="m-b"> 
<select id="select2-option" style="width:260px"> <optgroup label="Alaskan/Hawaiian Time Zone"> 

<option value="AK">Alaska</option> 

<option value="HI">Hawaii</option> </optgroup> <optgroup label="Pacific Time Zone"> 

<option value="CA">California</option> 

<option value="NV">Nevada</option> 

<option value="OR">Oregon</option> 

<option value="WA">Washington</option> </optgroup> <optgroup label="Mountain Time Zone"> 

<option value="AZ">Arizona</option> 

<option value="CO">Colorado</option> 

<option value="ID">Idaho</option> 

<option value="MT">Montana</option>

<option value="NE">Nebraska</option> 

<option value="NM">New Mexico</option> 

<option value="ND">North Dakota</option> 

<option value="UT">Utah</option> 

<option value="WY">Wyoming</option> </optgroup> <optgroup label="Central Time Zone"> 

<option value="AL">Alabama</option> 

<option value="AR">Arkansas</option> 

<option value="IL">Illinois</option> 

<option value="IA">Iowa</option> 

<option value="KS">Kansas</option> 

<option value="KY">Kentucky</option> 

<option value="LA">Louisiana</option> 

<option value="MN">Minnesota</option> 

<option value="MS">Mississippi</option> 

<option value="MO">Missouri</option> 

<option value="OK">Oklahoma</option> 

<option value="SD">South Dakota</option> 

<option value="TX">Texas</option> 

<option value="TN">Tennessee</option> 

<option value="WI">Wisconsin</option> </optgroup> <optgroup label="Eastern Time Zone"> 

<option value="CT">Connecticut</option> 

<option value="DE">Delaware</option> 

<option value="FL">Florida</option> 

<option value="GA">Georgia</option> 

<option value="IN">Indiana</option> 

<option value="ME">Maine</option> 

<option value="MD">Maryland</option> 

<option value="MA">Massachusetts</option> 

<option value="MI">Michigan</option> 

<option value="NH">New Hampshire</option>

<option value="NJ">New Jersey</option> 

<option value="NY">New York</option> 

<option value="NC">North Carolina</option> 

<option value="OH">Ohio</option> 

<option value="PA">Pennsylvania</option>

<option value="RI">Rhode Island</option>

<option value="SC">South Carolina</option> 

<option value="VT">Vermont</option>

<option value="VA">Virginia</option> 

<option value="WV">West Virginia</option> </optgroup> 
</select> 
</div> 

<div> 
<input type="hidden" id="select2-tags" style="width:260px" value="brown"/> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Datepicker
</label> 

<div class="col-sm-10"> 
<input class="input-sm input-s datepicker-input form-control" size="16" type="text" value="12-02-2013" data-date-format="dd-mm-yyyy" > 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Combodate
</label> 

<div class="col-sm-10"> 
<input type="text" class="combodate form-control" data-format="DD-MM-YYYY HH:mm" data-template="D MMM YYYY - HH : mm" name="datetime" value="21-12-2012 20:30"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Markdown
</label> 

<div id="epiceditor" class="col-lg-10">
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Wysiwyg
</label> 

<div class="col-sm-10"> 

<div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor"> 

<div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a> 
<ul class="dropdown-menu"> 
</ul> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a> 
<ul class="dropdown-menu"> 
<li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li> 
<li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li> 
<li><a data-edit="fontSize 1"><font size="1">Small</font></a></li> 
</ul> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a> <a class="btn btn-white btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a> <a class="btn btn-white btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a> <a class="btn btn-white btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a> <a class="btn btn-white btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a> <a class="btn btn-white btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a> <a class="btn btn-white btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a> <a class="btn btn-white btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a> <a class="btn btn-white btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a> <a class="btn btn-white btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a> 

<div class="dropdown-menu"> 

<div class="input-group m-l-xs m-r-xs"> 
<input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/> 

<div class="input-group-btn"> <button class="btn btn-white btn-sm" type="button">Add</button> 
</div> 
</div> 
</div> <a class="btn btn-white btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a> 
<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /> 
</div> 

<div class="btn-group"> <a class="btn btn-white btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a> <a class="btn btn-white btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a> 
</div> 
<input type="text" class="form-control-trans pull-left" data-edit="inserttext" id="voiceBtn" x-webkit-speech="" style="width:25px;height:28px;"> 
</div> 

<div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px"> Go ahead&hellip; 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Drag and Drop
</label> 

<div class="col-sm-10"> 

<div class="dropfile visible-lg"> <small>Drag and Drop file here</small> 
</div> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 

<div class="col-sm-4 col-sm-offset-2"> <button type="submit" class="btn btn-white">Cancel</button> <button type="submit" class="btn btn-primary">Save changes</button> 
</div> 
</div> 
</form> 
</div> </section> </section> <section class="tab-pane" id="validation"> 

<div class="row"> 

<div class="col-sm-6"> 

<form data-validate="parsley"> <section class="panel"> 

<header class="panel-heading"> 

<span class="h4">Register
</span> </header> 

<div class="panel-body"> 

<p class="text-muted">Please fill the information to continue</p> 

<div class="form-group"> 
<label>Username
</label> 
<input type="text" class="form-control" data-required="true"> 
</div> 

<div class="form-group"> 
<label>Email
</label> 
<input type="text" class="form-control" data-type="email" data-required="true"> 
</div> 

<div class="form-group pull-in clearfix"> 

<div class="col-sm-6"> 
<label>Enter password
</label> 
<input type="password" class="form-control" data-required="true" id="pwd"> 
</div> 

<div class="col-sm-6"> 
<label>Confirm password
</label> 
<input type="password" class="form-control" data-equalto="#pwd" data-required="true"> 
</div> 
</div> 

<div class="form-group"> 
<label>Phone
</label> 
<input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" data-required="true"> 
</div> 

<div class="checkbox"> 
<label> 
<input type="checkbox" name="check" checked data-required="true"> I agree to the <a href="#" class="text-info">Terms of Service</a> 
</label> 
</div> 
</div> <footer class="panel-footer text-right bg-light lter"> <button type="submit" class="btn btn-success btn-s-xs">Submit</button> </footer> </section> 
</form> 
</div> 

<div class="col-sm-6"> 

<form data-validate="parsley"> <section class="panel"> 

<header class="panel-heading"> 

<span class="h4">Contact
</span> </header> 

<div class="panel-body"> 

<p class="text-muted">Need support? please fill the fields below.</p> 

<div class="form-group pull-in clearfix"> 

<div class="col-sm-6"> 
<label>Your name
</label> 
<input type="text" class="form-control" placeholder="Name" data-required="true"> 
</div> 

<div class="col-sm-6"> 
<label>Email
</label> 
<input type="email" class="form-control" placeholder="Enter email" data-required="true"> 
</div> 
</div> 

<div class="form-group"> 
<label>Your website
</label> 
<input type="text" data-type="url" data-required="true" class="form-control" placeholder="Your website url"> 
</div> 

<div class="form-group"> 
<label>Message
</label> 
<textarea class="form-control" rows="6" data-minwords="6" data-required="true" placeholder="Type your message">
</textarea> 
</div> 
</div> <footer class="panel-footer text-right bg-light lter"> <button type="submit" class="btn btn-success btn-s-xs">Submit</button> </footer> </section> 
</form> 
</div> 
</div> 

<div class="row"> 

<div class="col-sm-6"> 

<form class="form-horizontal" data-validate="parsley"> <section class="panel"> 

<header class="panel-heading"> <strong>Basic constraints</strong> </header> 

<div class="panel-body"> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Required
</label> 

<div class="col-sm-9"> 
<input type="text" class="form-control" data-required="true" placeholder="required field"> 
<select data-required="true" class="form-control m-t"> 

<option value="">Please choose</option> 

<option value="foo">Foo</option> 

<option value="bar">Bar</option> 
</select> 
<label class="checkbox"> 
<input type="checkbox" name="inlineCheckbox1" value="option1" data-required="true" data-error-message="You must agree to the site policy."> Agree to the policy 
</label> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Not blank
</label> 

<div class="col-sm-9"> 
<input type="text" data-notblank="true" class="form-control" placeholder="not blank field"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Min Length
</label> 

<div class="col-sm-9"> 
<input type="text" data-minlength="6" class="form-control" placeholder="minlength = 6"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Max Length
</label> 

<div class="col-sm-9"> 
<input type="text" data-maxlength="6" class="form-control" placeholder="maxlength = 6"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Range Length
</label> 

<div class="col-sm-9"> 
<input type="text" data-rangelength="[5,10]" class="form-control" placeholder="data-rangelength = [5,10]"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Min
</label> 

<div class="col-sm-9"> 
<input type="text" data-min="6" class="form-control" placeholder="min = 6"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Max
</label> 

<div class="col-sm-9"> 
<input type="text" data-max="100" class="form-control" placeholder="max = 100"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Range
</label> 

<div class="col-sm-9"> 
<input type="text" data-range="[6, 100]" class="form-control" placeholder="data-range = [6, 100]"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">RegExp
</label> 

<div class="col-sm-9"> 
<input type="text" data-regexp="#[A-Fa-f0-9]{6}" class="form-control" placeholder="hexa color code"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Equal To
</label> 

<div class="col-sm-9"> 

<div class="row"> 

<div class="col-sm-6">
<input type="text" value="foo" id="foo" class="form-control">
</div> 

<div class="col-sm-6">
<input type="text" data-equalto="#foo" placeholder="equal to foo" class="form-control">
</div> 
</div> 
</div> 
</div> 
</div> <footer class="panel-footer text-right bg-light lter"> <button type="submit" class="btn btn-success btn-s-xs">Submit</button> </footer> </section> 
</form> 
</div> 

<div class="col-sm-6"> 

<form class="form-horizontal" data-validate="parsley"> <section class="panel"> 

<header class="panel-heading"> <strong>Type constraints</strong> </header> 

<div class="panel-body"> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Email
</label> 

<div class="col-sm-9"> 
<input type="text" class="form-control" data-type="email" data-required="true" placeholder="email"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Url
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="url" class="form-control" placeholder="url"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Url strict
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="urlstrict" class="form-control" placeholder="urlstrict"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Digits
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="digits" class="form-control" placeholder="digits"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Number
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="number" class="form-control" placeholder="number"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Alphanum
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="alphanum" class="form-control" placeholder="alphanumeric string"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Date Iso
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="dateIso" class="form-control" placeholder="YYYY-MM-DD"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Phone
</label> 

<div class="col-sm-9"> 
<input type="text" data-type="phone" class="form-control" placeholder="(XXX) XXXX XXX"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Min Words
</label> 

<div class="col-sm-9"> 
<input type="text" data-minwords="6" class="form-control" placeholder="min 6 words"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Max Words
</label> 

<div class="col-sm-9"> 
<input type="text" data-maxwords="6" class="form-control" placeholder="max 6 words"> 
</div> 
</div> 

<div class="line line-dashed line-lg pull-in">
</div> 

<div class="form-group"> 
<label class="col-sm-3 control-label">Range Words
</label> 

<div class="col-sm-9"> 
<input type="text" data-rangewords="[6,10]" class="form-control" placeholder="min 6 words & max 10 words"> 
</div> 
</div> 
</div> <footer class="panel-footer text-right bg-light lter"> <button type="submit" class="btn btn-success btn-s-xs">Submit</button> </footer> </section> 
</form> 
</div> 
</div> </section> <section class="tab-pane" id="wizard"> 

<div class="panel"> 

<div class="wizard clearfix" id="form-wizard"> 
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
</div> 

<div class="step-content"> 

<form> 

<div class="step-pane active" id="step1"> 

<p>Your website:</p> 
<input type="text" class="form-control" data-trigger="change" data-required="true" data-type="url" placeholder="website"> 

<p class="m-t">Your email:</p> 
<input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address"> 
</div> 

<div class="step-pane" id="step2"> 

<p>Your email:</p> 
<input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address"> 
</div> 

<div class="step-pane" id="step3">This is step 3
</div> 
</form> 

<div class="actions m-t"> <button type="button" class="btn btn-white btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button> <button type="button" class="btn btn-white btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button> 
</div> 
</div> 
</div> </section> 
</div> </section> </section> </section> 
<!-- /.vbox --> </section> 

<div class="modal fade" id="modal-form"> 

<div class="modal-dialog"> 

<div class="modal-content"> 

<div class="modal-body"> 

<div class="row"> 

<div class="col-sm-6 b-r"> <h3 class="m-t-none m-b">Sign in</h3> 

<p>Sign in to meet your friends.</p> 

<form role="form"> 

<div class="form-group"> 
<label>Email
</label> 
<input type="email" class="form-control" placeholder="Enter email"> 
</div> 

<div class="form-group"> 
<label>Password
</label> 
<input type="password" class="form-control" placeholder="Password"> 
</div> 

<div class="checkbox m-t-lg"> <button type="submit" class="btn btn-sm btn-success pull-right text-uc m-t-n-xs"><strong>Log in</strong></button> 
<label> 
<input type="checkbox"> Remember me 
</label> 
</div> 
</form> 
</div> 

<div class="col-sm-6"> <h4>Not a member?</h4> 

<p>You can create an account <a href="#" class="text-info">here</a></p> 

<p>OR</p> <a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> <a href="#" class="btn btn-twitter btn-block m-b-sm"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a> <a href="#" class="btn btn-gplus btn-block"><i class="fa fa-google-plus pull-left"></i>Sign in with Google+</a> 
</div> 
</div> 
</div> 
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div> 






<?php include 'scripts.php' ?>
 
<script src="js/fuelux/fuelux.js"></script> 
<!-- datepicker --> 
<script src="js/datepicker/bootstrap-datepicker.js"></script> 
<!-- slider --> 
<script src="js/slider/bootstrap-slider.js"></script> 
<!-- file input --> 
<script src="js/file-input/bootstrap.file-input.js"></script> 
<!-- combodate --> 
<script src="js/libs/moment.min.js"></script> 
<script src="js/combodate/combodate.js" cache="false"></script> 
<!-- parsley --> 
<script src="js/parsley/parsley.min.js" cache="false"></script> 
<script src="js/parsley/parsley.extend.js" cache="false"></script> 
<!-- select2 --> 
<script src="js/select2/select2.min.js" cache="false"></script> 
<!-- wysiwyg --> 
<script src="js/wysiwyg/jquery.hotkeys.js" cache="false"></script> 
<script src="js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script> 
<script src="js/wysiwyg/demo.js" cache="false"></script> 
<!-- markdown --> 
<script src="js/markdown/epiceditor.min.js" cache="false"></script> 
<script src="js/markdown/demo.js" cache="false"></script>

</body>
</html>

