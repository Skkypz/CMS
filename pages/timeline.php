<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 

<?php include 'head.php' ?>
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" cache="false" /> 
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
		<?php include 'sidebar.php' ?>
		



		<section id="content"> <section class="vbox"> <section class="bg-light lter w-f"> <section class="hbox stretch"> 
<!-- .aside --> <aside> <section class="vbox"> <section class="scrollable wrapper"> 

<div class="timeline"> <article class="timeline-item active"> 

<div class="timeline-caption"> 

<div class="panel bg-success lter no-borders"> 

<div class="panel-body"> 

<span class="timeline-icon"><i class="fa fa-bell-o time-icon bg-success"></i>
</span> 

<span class="timeline-date">7:30 am
</span> <h5> 

<span>Wake up
</span> Me </h5> 

<div class="m-t-sm timeline-action"> 

<span class="h3 pull-left m-r-sm">4:51
</span> <button class="btn btn-sm btn-white"><i class="fa fa-pause"></i> Pause</button> <button class="btn btn-sm btn-white"><i class="fa fa-check"></i> Confirm</button> 
</div> 
</div> 
</div> 
</div> </article> <article class="timeline-item"> 

<div class="timeline-caption"> 

<div class="panel"> 

<div class="panel-body"> 

<span class="arrow left">
</span> 

<span class="timeline-icon"><i class="fa fa-phone time-icon bg-primary"></i>
</span> 

<span class="timeline-date">12:25 am
</span> <h5> 

<span>Call to
</span> Jason Cokde (021-254-3523) </h5> 
</div> 
</div> 
</div> </article> <article class="timeline-item alt"> 

<div class="timeline-caption"> 

<div class="panel"> 

<div class="panel-body"> 

<span class="arrow right">
</span> 

<span class="timeline-icon"><i class="fa fa-male time-icon bg-success"></i>
</span> 

<span class="timeline-date">10:00 am
</span> <h5> 

<span>Appointment
</span> Carmark Sook (.inc company) </h5> 

<p>Morbi nec nunc condimentum, egestas dui nec, </p> 
</div> 
</div> 
</div> </article> <article class="timeline-item"> 

<div class="timeline-caption"> 

<div class="panel"> 

<div class="panel-body"> 

<span class="arrow left">
</span> 

<span class="timeline-icon"><i class="fa fa-plane time-icon bg-dark"></i>
</span> 

<span class="timeline-date">8:00 am
</span> <h5> 

<span>Fly to
</span> Newyork City </h5> 

<p>82°, Very hot with some sun</p> 
</div> 
</div> 
</div> </article> <article class="timeline-item alt"> 

<div class="timeline-caption"> 

<div class="panel"> 

<div class="panel-body"> 

<span class="arrow right">
</span> 

<span class="timeline-icon"><i class="fa fa-file-text time-icon bg-info"></i>
</span> 

<span class="timeline-date">9:30 am
</span> <h5> 

<span>Meeting
</span> Office A - 2 floor </h5> 

<p>Iaculis lorem justo porttitor orci. Vivamus vestibulum tortor augue. Donec elementum mollis velit.</p> 
</div> 
</div> 
</div> </article> <article class="timeline-item"> 

<div class="timeline-caption"> 

<div class="panel"> 

<div class="panel-body"> 

<span class="arrow left">
</span> 

<span class="timeline-icon"><i class="fa fa-code time-icon bg-dark"></i>
</span> 

<span class="timeline-date">9:00 am
</span> <h5> 

<span>Work on
</span> Web application project </h5> 

<p>Iaculis lorem justo porttitor orci. Donec elementum mollis velit.</p> 
</div> 
</div> 
</div> </article> 

<div class="timeline-footer"><a href="#"><i class="fa fa-plus time-icon inline-block bg-dark"></i></a>
</div> 
</div> </section> </section> </aside> 
<!-- /.aside --> 
<!-- .aside --> <aside class="aside-lg bg-light"> 

<div class="wrapper"> <h4 class="m-t-none">Timeline(36)</h4> 

<form> 

<div class="form-group"> 
<label>Name
</label> 
<input type="text" placeholder="Event name" class="input-sm form-control"> 
</div> 

<div class="form-group"> 
<label>Date
</label> 
<input type="text" placeholder="Event name" class="datepicker input-sm form-control"> 
</div> 

<div class="form-group"> 
<label>Time
</label> 
<input type="text" placeholder="eg. 3:00 pm" class="input-sm form-control"> 
</div> 

<div class="form-group"> 
<label>Type
</label> 

<div> 

<div class="btn-group"> <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 

<span class="dropdown-label">Choose a type
</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu dropdown-select"> 
<li><a href="#">
<input type="radio" name="d-s-r">Travel</a></li> 
<li class=""><a href="#">
<input type="radio" name="d-s-r">Phone</a></li> 
<li class=""><a href="#">
<input type="radio" name="d-s-r">Meeting</a></li> 
<li class=""><a href="#">
<input type="radio" name="d-s-r">Appointment</a></li> 
</ul> 
</div> 
</div> 
</div> 

<div class="m-t-lg"><button class="btn btn-sm btn-default">Add an event</button>
</div> 
</form> 
</div> </aside> 
<!-- /.aside --> </section> </section> <footer class="footer bg-light dker bg-gradient"> 

<p>Timeline</p> </footer> </section> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/fuelux/fuelux.js">
</script> 
<!-- datepicker --> 
<script src="js/datepicker/bootstrap-datepicker.js">
</script>

</body>
</html>

