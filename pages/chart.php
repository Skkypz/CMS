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

<header class="header bg-dark bg-gradient"> 
<ul class="nav nav-tabs"> 
<li class="active"><a href="#sparkline" data-toggle="tab">Sparkline</a></li> 
<li class=""><a href="#morris" data-toggle="tab">Morris</a></li> 
<li class=""><a href="#easy-pie-chart" data-toggle="tab">Easy pie chart</a></li> 
</ul> </header> <section class="scrollable wrapper"> 

<div class="tab-content"> 

<div class="tab-pane active" id="sparkline"> 

<div class="row"> 

<div class="col-lg-12"> <section class="panel"> 

<header class="panel-heading"> Stats </header> 

<div class="panel-body"> 

<div class="btn-group" data-toggle="buttons"> 
<label class="btn btn-sm btn-white active"> 
<input type="radio" name="options" id="option1"> Day 
</label> 
<label class="btn btn-sm btn-white"> 
<input type="radio" name="options" id="option2"> Week 
</label> 
<label class="btn btn-sm btn-white"> 
<input type="radio" name="options" id="option2"> Month 
</label> 
<label class="btn btn-sm btn-white"> 
<input type="radio" name="options" id="option2"> Year 
</label> 
</div> 

<div class="line line-lg pull-in">
</div> 

<div class="sparkline" data-type="line" data-resize="true" data-height="185" data-width="100%" data-line-width="1" data-line-color="#afcf6f" data-spot-color="#afcf6f" data-fill-color="rgba(240,240,240,0.5)" data-highlight-line-color="#e1e5e9" data-spot-radius="4" data-data="[120,250,200,325,400,380,250,320,345,250,250,250,200,325,300,365,250,210,200,180,150,160,250,250,250,200,300,310,330,250,320,205]" data-composite-config="{&quot;lineColor&quot;:&quot;#dddddd&quot;,&quot;fillColor&quot;:&quot;#ffffff&quot;,&quot;spotColor&quot;:&quot;#dddddd&quot;,&quot;spotRadius&quot;:&quot;4&quot;}" data-composite-data="[325,220,250,200,350,380,250,320,345,250,250,250,200,325,300,365,250,210,200,180,150,160,250,250,250,200,300,310,330,250,320,205]"><canvas style="display: inline-block; width: 951px; height: 185px; vertical-align: top;" width="951" height="185"></canvas></div> 
<ul class="list-inline text-muted axis axis-full">
<li>12:00
<br>am</li>
<li>2:00</li>
<li>4:00</li>
<li>6:00</li>
<li>8:00</li>
<li>10:00</li>
<li>12:00
<br>pm</li>
<li>2:00</li>
<li>4:00</li>
<li>6:00</li>
<li>8:00</li>
<li>10:00</li>
</ul> 
</div> </section> 
</div> 
</div> 

<div class="row"> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading">Pie</header> 

<div class="panel-body text-center"> 

<div class="sparkline inline" data-type="pie" data-height="150" data-slice-colors="['#99c7ce','#f2f2f2']"><canvas width="150" height="150" style="display: inline-block; width: 150px; height: 150px; vertical-align: top;"></canvas></div> 

<div class="line pull-in">
</div> 

<div class="text-xs"> <i class="fa fa-circle text-info"></i> 60% <i class="fa fa-circle text-muted"></i> 40% 
</div> 
</div> </section> 
</div> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading">Composite</header> 

<div class="text-center bg-success clearfix"> 

<div class="m-t-lg padder"> 

<div class="sparkline" data-type="line" data-resize="true" data-height="100" data-width="100%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[120,250,200,325,400,380,250,320,345,250,250,250]"><canvas style="display: inline-block; width: 951px; height: 100px; vertical-align: top;" width="951" height="100"></canvas></div> 

<div class="sparkline inline" data-type="bar" data-height="57" data-bar-width="6" data-bar-spacing="10" data-bar-color="#a4d55d"><canvas width="214" height="57" style="display: inline-block; width: 214px; height: 57px; vertical-align: top;"></canvas></div> 
</div> 
</div> <footer class="panel-footer text-sm">Check more data</footer> </section> 
</div> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading">Stacked</header> 

<div class="panel-body text-center"> 

<div class="sparkline inline" data-type="bar" data-height="160" data-bar-width="12" data-bar-spacing="10" data-stacked-bar-color="['#afcf6f', '#eee']"><canvas width="210" height="160" style="display: inline-block; width: 210px; height: 160px; vertical-align: top;"></canvas></div> 
<ul class="list-inline text-muted axis">
<li style="width: 12px; margin-right: 10px;">1</li>
<li style="width: 12px; margin-right: 10px;">2</li>
<li style="width: 12px; margin-right: 10px;">3</li>
<li style="width: 12px; margin-right: 10px;">4</li>
<li style="width: 12px; margin-right: 10px;">5</li>
<li style="width: 12px; margin-right: 10px;">6</li>
<li style="width: 12px; margin-right: 10px;">7</li>
<li style="width: 12px; margin-right: 10px;">8</li>
<li style="width: 12px; margin-right: 10px;">9</li>
<li style="width: 12px; margin-right: 10px;">10</li>
</ul> 
</div> </section> 
</div> 
</div> 
</div> 

<div class="tab-pane" id="morris"> 

<div class="row"> 

<div class="col-lg-6"> <section class="panel"> 

<header class="panel-heading"> Jaguar 'E' Type vehicles in the UK </header> 

<div id="hero-graph" class="graph">
</div> </section> 
</div> 

<div class="col-lg-6"> <section class="panel"> 

<header class="panel-heading"> Donut flavours </header> 

<div id="hero-donut" class="graph">
</div> </section> 
</div> 

<div class="col-lg-6"> <section class="panel"> 

<header class="panel-heading"> Quarterly Apple iOS device unit sales </header> 

<div id="hero-area" class="graph">
</div> </section> 
</div> 

<div class="col-lg-6"> <section class="panel"> 

<header class="panel-heading"> iPhone CPU benchmarks </header> 

<div id="hero-bar" class="graph">
</div> </section> 
</div> 
</div> 
</div> 

<div class="tab-pane" id="easy-pie-chart"> 

<div class="row"> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading"> Conversion </header> 

<div class="panel-body text-center"> <h4>62.5<small> hrs</small></h4> <small class="text-muted block">Updated at 2 minutes ago</small> 

<div class="inline"> 

<div class="easypiechart easyPieChart" data-percent="75" data-line-width="16" data-loop="false" data-size="188" style="width: 188px; height: 188px; line-height: 188px;"> 

<span class="h2">75</span>% 

<div class="easypie-text"><button class="btn btn-link m-t-n-sm" data-toggle="class:pie"><i class="fa fa-play text text-muted"></i><i class="fa fa-pause text-active text-muted"></i></button>
</div> 
<canvas width="188" height="188"></canvas></div> 
</div> 
</div> 

<div class="panel-footer"><small>% of avarage rate of the Conversion</small>
</div> </section> 
</div> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading"> Bounce rate </header> 

<div class="panel-body text-center"> <h4><small>last </small>12<small> hrs</small></h4> <small class="text-muted block">yesterday: 20%</small> 

<div class="inline"> 

<div class="easypiechart easyPieChart" data-percent="25" data-line-width="6" data-loop="false" data-size="188" style="width: 188px; height: 188px; line-height: 188px;"> 

<span class="h2">25</span>% 

<div class="easypie-text">Today
</div> 
<canvas width="188" height="188"></canvas></div> 
</div> 
</div> 

<div class="panel-footer"><small>% of change</small>
</div> </section> 
</div> 

<div class="col-lg-4"> <section class="panel"> 

<header class="panel-heading"> New visitors </header> 

<div class="panel-body text-center"> <h4>3,450</h4> <small class="text-muted block">Worldwide visitors</small> 

<div class="inline"> 

<div class="easypiechart easyPieChart" data-percent="60" data-line-width="30" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#fff" data-loop="false" data-size="188" style="width: 188px; height: 188px; line-height: 188px;"> 

<span class="h2">60</span>% 

<div class="easypie-text">new visits
</div> 
<canvas width="188" height="188"></canvas></div> 
</div> 
</div> 

<div class="panel-footer"><small>% of avarage rate of the visits</small>
</div> </section> 
</div> 
</div> 
</div> 
</div> </section> </section> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/charts/morris/raphael-min.js" cache="false">
</script> 
<script src="js/charts/morris/morris.min.js" cache="false"></script> 
</body>
</html>