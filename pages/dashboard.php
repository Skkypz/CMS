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
		



		<section class="scrollable" id="pjax-container"> 

<header> 

<div class="row b-b m-l-none m-r-none"> 

<div class="col-sm-4"> <h3 class="m-t m-b-none">Dashboard</h3> 

<p class="block text-muted">Welcome to application</p> 
</div> 

<div class="col-sm-8"> 

<div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs"> 

<div class="pull-left"> 

<div class="pull-left m-r-xs"> 

<span class="block">Users 

<span class="badge up bg-danger">+5
</span>
</span> 

<span class="h4">432k
</span> <i class="fa fa-level-up text-success"></i> 
</div> 

<div class="clear"> 

<div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-stacked-bar-color="['#afcf6f', '#eee']"><canvas width="40" height="35" style="display: inline-block; width: 40px; height: 35px; vertical-align: top;"></canvas></div> 
</div> 
</div> 

<div class="pull-left m-l-lg"> 

<div class="pull-left m-r-xs"> 

<span class="block">Profit
</span> 

<span class="h4">$4k
</span> <i class="fa fa-level-down text-danger"></i> 
</div> 

<div class="clear"> 

<div class="sparkline inline" data-type="bar" data-height="35" data-bar-width="4" data-bar-spacing="2" data-bar-color="#fb6b5b"><canvas width="40" height="35" style="display: inline-block; width: 40px; height: 35px; vertical-align: top;"></canvas></div> 
</div> 
</div> 
</div> 
</div> 
</div> 

<div class="wrapper bg-light font-bold"> <a href="#" class="m-r"><i class="fa fa-bar-chart-o fa-2x icon-muted v-middle"></i> Analysis</a> <a href="#" class="m-r">

<span class="badge up m-r-n bg-danger">4
</span><i class="fa fa-envelope fa-2x icon-muted v-middle"></i> Message</a> <a href="#" class="m-r"><i class="fa fa-calendar fa-2x icon-muted v-middle"></i> My Calendar</a> <a href="#"><i class="fa fa-cog fa-2x icon-muted v-middle"></i> Settings</a> 
</div> </header> <section class="hbox"> <aside class="bg-white-only"> 

<header class="bg-light"> 
<ul class="nav nav-tabs"> 
<li class="active"><a href="#tab1" data-toggle="tab">Trade Market</a></li> 
<li class=""><a href="#tab2" data-toggle="tab">Events</a></li> 
<li class=""><a href="#tab3" data-toggle="tab">Interaction</a></li> 
</ul> </header> 

<div class="tab-content"> 

<div class="tab-pane active" id="tab1"> 

<div class="wrapper"> 

<div id="hero-area" class="graph" style="position: relative;"><svg height="250" version="1.1" width="810" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.0.1</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="50.5" y="208" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,208H785" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="162.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,162.25H785" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="116.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,116.5H785" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="70.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,70.75H785" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63,25H785" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="651.6835096957116" y="220.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,8.5)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">2012</tspan></text><text x="331.46073616525746" y="220.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,8.5)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.5">2011</tspan></text><path fill="#b4e1ef" stroke="#000000" d="M63,175.5907C83.16928256797124,172.2357,123.50784770391371,165.2726097565119,143.67713027188495,162.1707C163.8555516176396,159.0673847565119,204.2123943091489,155.0161664921466,224.39081565490355,150.7698C244.35904511163992,146.5676664921466,284.2955040251127,129.63056061565018,304.26373348184904,128.3767C324.00349349400034,127.13718561565017,363.48301351830287,139.88435907945959,383.22277353045416,140.7963C403.3920560984254,141.7280840794596,443.73062123436785,135.13106558323895,463.8999038023391,135.7516C484.07832514809377,136.37241558323896,524.4351678396031,156.77695863874345,544.6135891853577,145.7617C564.581818642094,134.86118363874346,604.5182775555668,53.40586678873882,624.4865070123032,48.08849999999998C644.4455976912561,42.77356678873882,684.3637790491621,95.4358164654976,704.322869728115,103.23249999999999C724.4921522960863,111.1112914654976,764.8307174320288,108.90092499999999,785,110.79039999999999L785,208L63,208Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#5dcff3" d="M63,175.5907C83.16928256797124,172.2357,123.50784770391371,165.2726097565119,143.67713027188495,162.1707C163.8555516176396,159.0673847565119,204.2123943091489,155.0161664921466,224.39081565490355,150.7698C244.35904511163992,146.5676664921466,284.2955040251127,129.63056061565018,304.26373348184904,128.3767C324.00349349400034,127.13718561565017,363.48301351830287,139.88435907945959,383.22277353045416,140.7963C403.3920560984254,141.7280840794596,443.73062123436785,135.13106558323895,463.8999038023391,135.7516C484.07832514809377,136.37241558323896,524.4351678396031,156.77695863874345,544.6135891853577,145.7617C564.581818642094,134.86118363874346,604.5182775555668,53.40586678873882,624.4865070123032,48.08849999999998C644.4455976912561,42.77356678873882,684.3637790491621,95.4358164654976,704.322869728115,103.23249999999999C724.4921522960863,111.1112914654976,764.8307174320288,108.90092499999999,785,110.79039999999999" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="175.5907" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="143.67713027188495" cy="162.1707" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="224.39081565490355" cy="150.7698" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="304.26373348184904" cy="128.3767" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="383.22277353045416" cy="140.7963" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="463.8999038023391" cy="135.7516" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="544.6135891853577" cy="145.7617" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="624.4865070123032" cy="48.08849999999998" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="704.322869728115" cy="103.23249999999999" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785" cy="110.79039999999999" r="4" fill="#5dcff3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#e8eaee" stroke="#000000" d="M63,191.7374C83.16928256797124,188.06825,123.50784770391371,180.27400954133634,143.67713027188495,177.0608C163.8555516176396,173.84613454133634,204.2123943091489,167.7827,224.39081565490355,166.0259C244.35904511163992,164.28740000000002,284.2955040251127,164.4929731588032,304.26373348184904,163.0796C324.00349349400034,161.6823981588032,363.48301351830287,156.74400897641402,383.22277353045416,154.7836C403.3920560984254,152.780533976414,443.73062123436785,147.1426063250283,463.8999038023391,147.2257C484.07832514809377,147.3088313250283,524.4351678396031,163.9389335078534,544.6135891853577,155.4485C564.581818642094,147.0465085078534,604.5182775555668,84.63778999771115,624.4865070123032,79.656C644.4455976912561,74.67648999771114,684.3637790491621,110.37340088818036,704.322869728115,115.60329999999999C724.4921522960863,120.88827588818036,764.8307174320288,120.18744999999998,785,121.71549999999999L785,208L63,208Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#aeb6cb" d="M63,191.7374C83.16928256797124,188.06825,123.50784770391371,180.27400954133634,143.67713027188495,177.0608C163.8555516176396,173.84613454133634,204.2123943091489,167.7827,224.39081565490355,166.0259C244.35904511163992,164.28740000000002,284.2955040251127,164.4929731588032,304.26373348184904,163.0796C324.00349349400034,161.6823981588032,363.48301351830287,156.74400897641402,383.22277353045416,154.7836C403.3920560984254,152.780533976414,443.73062123436785,147.1426063250283,463.8999038023391,147.2257C484.07832514809377,147.3088313250283,524.4351678396031,163.9389335078534,544.6135891853577,155.4485C564.581818642094,147.0465085078534,604.5182775555668,84.63778999771115,624.4865070123032,79.656C644.4455976912561,74.67648999771114,684.3637790491621,110.37340088818036,704.322869728115,115.60329999999999C724.4921522960863,120.88827588818036,764.8307174320288,120.18744999999998,785,121.71549999999999" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="191.7374" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="143.67713027188495" cy="177.0608" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="224.39081565490355" cy="166.0259" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="304.26373348184904" cy="163.0796" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="383.22277353045416" cy="154.7836" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="463.8999038023391" cy="147.2257" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="544.6135891853577" cy="155.4485" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="624.4865070123032" cy="79.656" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="704.322869728115" cy="115.60329999999999" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785" cy="121.71549999999999" r="4" fill="#aeb6cb" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#a2ded1" stroke="#000000" d="M63,191.7374C83.16928256797124,191.5666,123.50784770391371,192.76638710079277,143.67713027188495,191.0542C163.8555516176396,189.34123710079277,204.2123943091489,178.7948607329843,224.39081565490355,178.0368C244.35904511163992,177.28663573298428,284.2955040251127,186.47685195627156,304.26373348184904,185.0213C324.00349349400034,183.58240195627158,363.48301351830287,167.89442065491184,383.22277353045416,166.459C403.3920560984254,164.99234565491184,443.73062123436785,171.89596868629673,463.8999038023391,173.413C484.07832514809377,174.93071868629673,524.4351678396031,185.8053256544503,544.6135891853577,178.598C564.581818642094,171.46575065445026,604.5182775555668,120.52931143854428,624.4865070123032,116.0547C644.4455976912561,111.58213643854428,684.3637790491621,137.7720614210886,704.322869728115,142.8093C724.4921522960863,147.8995864210886,764.8307174320288,153.125925,785,156.5648L785,208L63,208Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#59dbbf" d="M63,191.7374C83.16928256797124,191.5666,123.50784770391371,192.76638710079277,143.67713027188495,191.0542C163.8555516176396,189.34123710079277,204.2123943091489,178.7948607329843,224.39081565490355,178.0368C244.35904511163992,177.28663573298428,284.2955040251127,186.47685195627156,304.26373348184904,185.0213C324.00349349400034,183.58240195627158,363.48301351830287,167.89442065491184,383.22277353045416,166.459C403.3920560984254,164.99234565491184,443.73062123436785,171.89596868629673,463.8999038023391,173.413C484.07832514809377,174.93071868629673,524.4351678396031,185.8053256544503,544.6135891853577,178.598C564.581818642094,171.46575065445026,604.5182775555668,120.52931143854428,624.4865070123032,116.0547C644.4455976912561,111.58213643854428,684.3637790491621,137.7720614210886,704.322869728115,142.8093C724.4921522960863,147.8995864210886,764.8307174320288,153.125925,785,156.5648" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63" cy="191.7374" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="143.67713027188495" cy="191.0542" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="224.39081565490355" cy="178.0368" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="304.26373348184904" cy="185.0213" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="383.22277353045416" cy="166.459" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="463.8999038023391" cy="173.413" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="544.6135891853577" cy="178.598" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="624.4865070123032" cy="116.0547" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="704.322869728115" cy="142.8093" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="785" cy="156.5648" r="4" fill="#59dbbf" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 697px; top: 54px; display: none;"><div class="morris-hover-row-label">2012 Q2</div><div class="morris-hover-point" style="color: #59dbbf">
  iPhone:
  8,432
</div><div class="morris-hover-point" style="color: #aeb6cb">
  iPad:
  5,713
</div><div class="morris-hover-point" style="color: #5dcff3">
  iPod Touch:
  1,791
</div></div></div> 

<div class="row m-t-lg"> 

<div class="col-md-6"> <section class="panel"> 

<header class="panel-heading">Composite</header> 

<div class="text-center clearfix"> 

<div class="m-t-lg padder"> 

<div class="sparkline" data-type="line" data-resize="true" data-height="100" data-width="100%" data-line-width="1" data-line-color="#dddddd" data-spot-color="#afcf6f" data-fill-color="" data-highlight-line-color="#eee" data-spot-radius="4" data-data="[330,250,200,325,350,380,250,320,345,450,250,250]"><canvas style="display: inline-block; width: 358px; height: 100px; vertical-align: top;" width="358" height="100"></canvas></div> 

<div class="sparkline inline" data-type="bar" data-height="57" data-bar-width="6" data-bar-spacing="10" data-bar-color="#c5d5d5"><canvas width="214" height="57" style="display: inline-block; width: 214px; height: 57px; vertical-align: top;"></canvas></div> 
</div> 
</div> <footer class="panel-footer text-sm">Check more data</footer> </section> 
</div> 

<div class="col-md-6"> <section class="panel"> 

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
</div> 

<div class="tab-pane" id="tab2"> 
<ul class="list-group m-b-none m list-group-lg list-group-sp"> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 minuts ago</small> <strong class="block">Drew Wllon</strong> <small>Wellcome and play this web application template ... </small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong class="block">Jonathan George</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">2 hours ago</small> <strong class="block">Josh Long</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 day ago</small> <strong class="block">Jack Dorsty</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 days ago</small> <strong class="block">Morgen Kntooh</strong> <small>Mobile first web app for startup...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">Jun 21</small> <strong class="block">Yoha Omish</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">May 10</small> <strong class="block">Gole Lido</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">Jan 2</small> <strong class="block">Jonthan Snow</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item" href="#email-content" data-toggle="class:show"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 minuts ago</small> <strong class="block">Drew Wllon</strong> <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong class="block">Jonathan George</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">2 hours ago</small> <strong class="block">Josh Long</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 day ago</small> <strong class="block">Jack Dorsty</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 days ago</small> <strong class="block">Morgen Kntooh</strong> <small>Mobile first web app for startup...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">Jun 21</small> <strong class="block">Yoha Omish</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">May 10</small> <strong class="block">Gole Lido</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">Jan 2</small> <strong class="block">Jonthan Snow</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item" href="#email-content" data-toggle="class:show"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 minuts ago</small> <strong class="block">Drew Wllon</strong> <small>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 hour ago</small> <strong class="block">Jonathan George</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">2 hours ago</small> <strong class="block">Josh Long</strong> <small>Vestibulum ullamcorper sodales nisi nec...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar_default.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">1 day ago</small> <strong class="block">Jack Dorsty</strong> <small>Morbi nec nunc condimentum...</small> </a> </li> 
<li class="list-group-item"> <a href="#" class="thumb-sm pull-left m-r-sm"> <img src="images/avatar.jpg" class="img-circle"> </a> <a href="#" class="clear"> <small class="pull-right">3 days ago</small> <strong class="block">Morgen Kntooh</strong> <small>Mobile first web app for startup...</small> </a> </li> 
</ul> 
</div> 

<div class="tab-pane" id="tab3"> 

<div class="text-center wrapper"> <i class="fa fa-spinner fa fa-spin fa fa-large"></i> 
</div> 
</div> 
</div> </aside> <aside class="b-l aside-lg bg-light"> <section class="wrapper"> 

<div class="text-center m-b"> 

<div class="inline"> 

<div class="easypiechart easyPieChart" data-percent="65" data-line-width="25" data-track-color="#eee" data-bar-color="#afcf6f" data-scale-color="#ddd" data-loop="false" data-size="180" style="width: 180px; height: 180px; line-height: 180px;"> 

<span class="h2">65</span>% 

<div class="easypie-text">Processing
</div> 
<canvas width="180" height="180"></canvas></div> 
</div> 
</div> 

<div class="panel-group m-b" id="accordion2"> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Collapsible Group Item #1 </a> 
</div> 

<div id="collapseOne" class="panel-collapse in"> 

<div class="panel-body text-sm"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt. 
</div> 
</div> 
</div> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Collapsible Group Item #2 </a> 
</div> 

<div id="collapseTwo" class="panel-collapse collapse"> 

<div class="panel-body text-sm"> Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. 
</div> 
</div> 
</div> 

<div class="panel"> 

<div class="panel-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> Collapsible Group Item #3 </a> 
</div> 

<div id="collapseThree" class="panel-collapse collapse"> 

<div class="panel-body text-sm"> Sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
</div> 
</div> 
</div> 
</div> </section> </aside> </section> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/libs/jquery.pjax.js" cache="false">
</script> 
<!-- Sparkline Chart --> 
<!-- Easy Pie Chart --> 
<!-- Morris --> 
<script src="js/charts/morris/raphael-min.js" cache="false">
</script> 
<script src="js/charts/morris/morris.min.js" cache="false">
</script>
</body>
</html>
