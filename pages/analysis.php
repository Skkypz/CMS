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
		



		<section> <section class="vbox"> <section class="scrollable"> 

<div class="header b-b bg-white-only"> 

<div class="row"> 

<div class="col-sm-4"> <h4 class="m-t m-b-none">Statistics</h4> 
</div> 

<div class="col-sm-8"> 

<div class="clearfix m-t m-b-sm pull-right pull-none-xs"> 

<div class="pull-left"> 

<div class="pull-left m-r-xs"> 

<span class="h4">432k
</span> <i class="fa fa-level-up text-success"></i> 
</div> 

<div class="clear"> 

<div class="sparkline inline" data-type="bar" data-height="20" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#ccc']"><canvas width="40" height="20" style="display: inline-block; width: 40px; height: 20px; vertical-align: top;"></canvas></div> 
</div> 
</div> 

<div class="pull-left m-l-lg"> 

<div class="pull-left m-r-xs"> 

<span class="h4">$4k
</span> <i class="fa fa-level-down text-danger"></i> 
</div> 

<div class="clear"> 

<div class="sparkline inline" data-type="bar" data-height="20" data-bar-width="4" data-bar-spacing="2" data-bar-color="#fb6b5b"><canvas width="40" height="20" style="display: inline-block; width: 40px; height: 20px; vertical-align: top;"></canvas></div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 

<div class="wrapper"> <section class="panel"> 

<header class="panel-heading font-bold">Site statistics</header> 

<div class="panel-body"> 

<div id="flot-color" style="height: 250px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 826px; height: 250px;" width="826" height="250"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 14px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 86px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 159px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 231px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 304px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 376px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 449px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 521px; text-align: center;">7</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 594px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 666px; text-align: center;">9</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 736px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 68px; top: 235px; left: 808px; text-align: center;">11</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 223px; left: 6px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 179px; left: 6px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 0px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 92px; left: 0px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 48px; left: 0px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 5px; left: 0px; text-align: right;">25</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 826px; height: 250px;" width="826" height="250"></canvas></div> 
</div> <footer class="panel-footer"> 

<div class="row text-center"> 

<div class="col-xs-3 b-r"> 

<p class="h3 font-bold m-t">5,860</p> 

<p class="text-muted">Orders</p> 
</div> 

<div class="col-xs-3 b-r"> 

<p class="h3 font-bold m-t">10,450</p> 

<p class="text-muted">Selling Items</p> 
</div> 

<div class="col-xs-3 b-r"> 

<p class="h3 font-bold m-t">21,230</p> 

<p class="text-muted">Items</p> 
</div> 

<div class="col-xs-3"> 

<p class="h3 font-bold m-t">7,230</p> 

<p class="text-muted">Customers</p> 
</div> 
</div> </footer> </section> 

<div class="row"> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Multiple</header> 

<div class="panel-body"> 

<div id="flot-chart" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 14px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 74px; text-align: center;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 133px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 193px; text-align: center;">3</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 252px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 312px; text-align: center;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 371px; text-align: center;">6</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 213px; left: 6px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 198px; left: 6px; text-align: right;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 184px; left: 6px; text-align: right;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 170px; left: 6px; text-align: right;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 156px; left: 6px; text-align: right;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 142px; left: 0px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 128px; left: 0px; text-align: right;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 114px; left: 0px; text-align: right;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 99px; left: 0px; text-align: right;">16</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 85px; left: 0px; text-align: right;">18</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 71px; left: 0px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 57px; left: 0px; text-align: right;">22</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 43px; left: 0px; text-align: right;">24</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 29px; left: 0px; text-align: right;">26</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 15px; left: 0px; text-align: right;">28</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">30</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="legend"><div style="position: absolute; width: 86px; height: 34px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(82,73,130);overflow:hidden"></div></div></td><td class="legendLabel">Unique Visits</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(137,203,78);overflow:hidden"></div></div></td><td class="legendLabel">Page Views</td></tr></tbody></table></div></div> 
</div> </section> 
</div> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Real-time update</header> 

<div class="panel-body"> 

<div id="flot-live" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 225px; left: 12px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 180px; left: 6px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 6px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 6px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 45px; left: 6px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas></div> 
</div> </section> 
</div> 
</div> 

<div class="row"> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Vertical bar</header> 

<div class="panel-body"> 

<div id="flot-bar" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 31px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 71px; text-align: center;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 112px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 152px; text-align: center;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 193px; text-align: center;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 233px; text-align: center;">35</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 273px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 314px; text-align: center;">45</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 34px; top: 225px; left: 354px; text-align: center;">50</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 213px; left: 12px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 170px; left: 6px; text-align: right;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 128px; left: 6px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 85px; left: 6px; text-align: right;">75</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 43px; left: 0px; text-align: right;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">125</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="legend"><div style="position: absolute; width: 66px; height: 51px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #5dcff3;overflow:hidden"></div></div></td><td class="legendLabel">Product 1</td></tr><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #594f8d;overflow:hidden"></div></div></td><td class="legendLabel">Product 2</td></tr><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #92cf5c;overflow:hidden"></div></div></td><td class="legendLabel">Product 3</td></tr></tbody></table></div></div> 
</div> </section> 
</div> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Horizontal bar</header> 

<div class="panel-body"> 

<div id="flot-bar-h" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 14px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 70px; text-align: center;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 130px; text-align: center;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 189px; text-align: center;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 248px; text-align: center;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 305px; text-align: center;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 54px; top: 225px; left: 364px; text-align: center;">120</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 213px; left: 6px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 177px; left: 0px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 142px; left: 0px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 107px; left: 0px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 71px; left: 0px; text-align: right;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 36px; left: 0px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">35</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="legend"><div style="position: absolute; width: 66px; height: 51px; right: 14px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;right:14px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #5dcff3;overflow:hidden"></div></div></td><td class="legendLabel">Product 1</td></tr><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #594f8d;overflow:hidden"></div></div></td><td class="legendLabel">Product 2</td></tr><tr><td class="legendColorBox"><div style="border:1px solid none;padding:1px"><div style="width:4px;height:0;border:5px solid #92cf5c;overflow:hidden"></div></div></td><td class="legendLabel">Product 3</td></tr></tbody></table></div></div> 
</div> </section> 
</div> 
</div> 

<div class="row"> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Pie Chart</header> 

<div class="panel-body"> 

<div id="flot-pie" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 67px; left: 279.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(92,103,124);">Series1<br>40%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 186px; left: 91.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(89,79,141);">Series2<br>46%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 2px; left: 119.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(146,207,92);">Series3<br>15%</div></span></div> 
</div> </section> 
</div> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading font-bold">Donut pie</header> 

<div class="panel-body"> 

<div id="flot-pie-donut" style="height: 240px; padding: 0px; position: relative;">
<canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 382px; height: 240px;" width="382" height="240"></canvas><div class="legend"><div style="position: absolute; width: 54px; height: 51px; top: 5px; right: 5px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(92,103,124);overflow:hidden"></div></div></td><td class="legendLabel">Series1</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(89,79,141);overflow:hidden"></div></div></td><td class="legendLabel">Series2</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(146,207,92);overflow:hidden"></div></div></td><td class="legendLabel">Series3</td></tr></tbody></table></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 56px; left: 241.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(92,103,124);">Series1<br>36%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 207px; left: 110.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(89,79,141);">Series2<br>39%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 28px; left: 66.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(146,207,92);">Series3<br>25%</div></span></div> 
</div> </section> 
</div> 
</div> 
</div> </section> </section> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>

<script src="js/charts/flot/jquery.flot.min.js" cache="false">
</script> 
<script src="js/charts/flot/jquery.flot.tooltip.min.js" cache="false">
</script> 
<script src="js/charts/flot/jquery.flot.resize.js" cache="false">
</script> 
<script src="js/charts/flot/jquery.flot.orderBars.js" cache="false">
</script> 
<script src="js/charts/flot/jquery.flot.pie.min.js" cache="false">
</script> 
<script src="js/charts/flot/demo.js" cache="false"></script>
</body>
</html>