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

<header class="header bg-light dker bg-gradient"> 

<p>Widgets</p> </header> <section class="scrollable"> 

<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 938px;"><div class="slim-scroll wrapper" data-height="auto" data-disable-fade-out="true" data-distance="0" style="overflow: hidden; width: auto; height: 938px;"> 

<div class="row"> 

<div class="col-lg-8"> 

<div class="row"> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading bg-primary lter no-borders"> 

<div class="clearfix"> <a href="#" class="pull-left thumb avatar border m-r"> <img src="images/avatar.jpg" class="img-circle"> </a> 

<div class="clear"> 

<div class="h3 m-t-xs m-b-xs">John.Smith <i class="fa fa-circle text-success pull-right text-xs m-t-sm"></i>
</div> <small class="text-muted">Art director</small> 
</div> 
</div> </header> 

<div class="list-group no-radius alt"> <a class="list-group-item" href="#"> 

<span class="badge bg-success">25
</span> <i class="fa fa-comment icon-muted"></i> Messages </a> <a class="list-group-item" href="#"> 

<span class="badge bg-info">16
</span> <i class="fa fa-envelope icon-muted"></i> Inbox </a> <a class="list-group-item" href="#"> 

<span class="badge bg-light">5
</span> <i class="fa fa-eye icon-muted"></i> Profile visits </a> <a class="list-group-item" href="#"> 

<span class="badge bg-light">21
</span> <i class="fa fa-clock-o icon-muted"></i> Watch later </a> 
</div> </section> <section class="panel"> 

<header class="panel-heading">Chat</header> <section class="chat-list panel-body"> <article id="chat-id-1" class="chat-item left"> <a href="#" class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> <section class="chat-body"> 

<div class="panel text-sm m-b-none"> 

<div class="panel-body"> 

<span class="arrow left">
</span>Hi John, What's up 
</div> 
</div> <small class="text-muted"><i class="fa fa-check text-success"></i> 2 minutes ago</small> </section> </article> <article id="chat-id-1" class="chat-item right"> <a href="#" class="pull-right thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> <section class="chat-body"> 

<div class="panel bg bg-success text-sm m-b-none"> 

<div class="panel-body"> 

<span class="arrow right">
</span>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod... 
</div> 
</div> <small class="text-muted"><i class="fa fa-check text-success"></i> 1 minutes ago</small> </section> </article> 
<!-- chat form --> <article class="chat-item" id="chat-form"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> <section class="chat-body"> 

<form action="" class="m-b-none"> 

<div class="input-group"> 
<input type="text" class="form-control" placeholder="Say something"> 

<span class="input-group-btn"> <button class="btn btn-success" type="button">SEND</button> 
</span> 
</div> 
</form> </section> </article> </section> </section> 
</div> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading bg-success"> 
<ul class="nav nav-tabs nav-justified text-uc"> 
<li class="active"><a href="#popular" data-toggle="tab">Popular</a></li> 
<li><a href="#comment" data-toggle="tab">Comment</a></li> 
<li><a href="#recent" data-toggle="tab">Recent</a></li> 
</ul> </header> 

<div class="panel-body"> 

<div class="tab-content"> 

<div class="tab-pane active" id="popular"> <article class="media"> <a class="pull-left thumb m-t-xs"> <img src="images/thumb_1.jpg"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a> 

<div class="text-xs block m-t-xs"><i class="fa fa-thumbs-up"></i> 1,141 likes
</div> 
</div> </article> 

<div class="line line-dashed">
</div> <article class="media m-t-none"> <a class="pull-left thumb m-t-xs"> <img src="images/thumb_2.jpg"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a> 

<div class="text-xs block m-t-xs text-danger"><i class="fa fa-thumbs-up"></i> 3,021 likes
</div> 
</div> </article> 

<div class="line line-dashed">
</div> <article class="media m-t-none"> <a class="pull-left thumb m-t-xs"> <img src="images/thumb_3.jpg"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut laoreet</a> 

<div class="text-xs block m-t-xs"><i class="fa fa-thumbs-up"></i> 281 likes
</div> 
</div> </article> 
</div> 

<div class="tab-pane" id="comment"> <article class="media"> <a class="pull-left thumb-sm m-t-xs"> <img src="images/avatar.jpg" class="img-circle"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</a> 

<div class="text-xs block m-t-xs"><i class="fa fa-clock-o"></i> 10 minutes ago
</div> 
</div> </article> 

<div class="line line-dashed">
</div> <article class="media m-t-none"> <a class="pull-left thumb-sm m-t-xs"> <img src="images/avatar_default.jpg" class="img-circle"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a</a> 

<div class="text-xs block m-t-xs"><i class="fa fa-clock-o"></i> 1 hour ago
</div> 
</div> </article> 

<div class="line line-dashed">
</div> <article class="media m-t-none"> <a class="pull-left thumb-sm m-t-xs"> <img src="images/avatar_default.jpg" class="img-circle"> </a> 

<div class="media-body"> <a href="#" class="font-semibold">Sed diam nonummy nibh euismod tincidunt ut</a> 

<div class="text-xs block m-t-xs"><i class="fa fa-clock-o"></i> 2 hours ago
</div> 
</div> </article> 
</div> 

<div class="tab-pane" id="recent"> 

<p class="text-center m-t-sm"><i class="fa fa-spinner fa fa-spin fa fa-2x"></i></p> 
</div> 
</div> 
</div> </section> <section class="panel no-borders hbox"> <aside class="bg-info r-l text-center v-middle"> 

<div class="wrapper"> <i class="fa fa-sun-o fa-4x"></i> 
</div> </aside> <aside> 

<div class="wrapper text-center"> 

<p class="h1">79°</p> 

<span>Partial sunshine
</span> 
</div> </aside> </section> <section class="panel bg-warning no-borders"> 

<div class="row"> 

<div class="col-xs-6"> 

<div class="wrapper"> 

<p>All time sales</p> 

<p class="h2 font-bold">32.5%</p> 

<div class="progress progress-xs progress-striped active m-b-sm"> 

<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="32.5%" style="width: 32.5%">
</div> 
</div> 

<div class="text-sm">of visitors purchased this item.
</div> 
</div> 
</div> 

<div class="col-xs-6 wrapper text-center"> 

<div class="inline m-t-sm"> 

<div class="easypiechart easyPieChart" data-percent="32.5" data-line-width="8" data-bar-color="#ffffff" data-track-color="#c79d43" data-scale-color="false" data-size="100" style="width: 100px; height: 100px; line-height: 100px;"> 

<span class="h2">32</span>% 
<canvas width="100" height="100"></canvas></div> 
</div> 
</div> 
</div> </section> 
</div> 
</div> 
</div> 

<div class="col-lg-4"> <section class="panel"> 

<div class="panel-body"> 

<div class="clearfix text-center m-t"> 

<div class="inline"> 

<div class="easypiechart easyPieChart" data-percent="75" data-line-width="5" data-loop="false" data-bar-color="#92cf5c" data-track-color="#f5f5f5" data-scale-color="false" data-size="150" style="width: 150px; height: 150px; line-height: 150px;"> 

<div class="thumb-lg"> <img src="images/avatar.jpg" class="img-circle"> 
</div> 
<canvas width="150" height="150"></canvas></div> 

<div class="h4 m-t m-b-xs">John.Smith
</div> <small class="text-muted m-b">Art director</small> 
</div> 
</div> 
</div> <footer class="panel-footer bg-dark lter text-center"> 

<div class="row pull-out"> 

<div class="col-xs-4"> 

<div class="padder-v"> 

<span class="m-b-xs h4 block">245
</span> <small class="text-muted">Followers</small> 
</div> 
</div> 

<div class="col-xs-4 bg-success"> 

<div class="padder-v"> 

<span class="m-b-xs h4 block">55
</span> <small class="text-muted">Following</small> 
</div> 
</div> 

<div class="col-xs-4"> 

<div class="padder-v"> 

<span class="m-b-xs h4 block">2,035
</span> <small class="text-muted">Tweets</small> 
</div> 
</div> 
</div> </footer> </section> <section class="panel text-center bg-danger dker"> 

<div class="panel-body"> <h4 class="text-uc">Join the newsletter</h4> 

<p>Get the latest news on todo</p> 

<form class="m-t-lg m-l m-r m-b-sm"> 

<div class="input-group input-group-lg"> 

<span class="input-group-addon lt no-border">@
</span> 
<input type="text" class="form-control input-lg no-border" placeholder="Your email"> 
</div> <button class="btn btn-danger m-t-lg">Subscribe</button> 
</form> 
</div> </section> 
</div> 
</div> 

<div class="row"> 

<div class="col-lg-6"> <section class="panel"> 

<header class="panel-heading"> 

<span class="label bg-dark">15
</span> Inbox </header> <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 230px;"><section class="panel-body slim-scroll" data-height="230px" style="overflow: hidden; width: auto; height: 230px;"> <article class="media"> 

<span class="pull-left thumb-sm"><img src="images/avatar.jpg" class="img-circle">
</span> 

<div class="media-body"> 

<div class="pull-right media-xs text-center text-muted"> <strong class="h4">12:18</strong>
<br> <small class="label bg-light">pm</small> 
</div> <a href="#" class="h4">Bootstrap 3 released</a> <small class="block"><a href="#" class="">John Smith</a> 

<span class="label label-success">Circle
</span></small> <small class="block m-t-sm">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small> 
</div> </article> 

<div class="line pull-in">
</div> <article class="media"> 

<span class="pull-left thumb-sm text-center"><i class="fa fa-user fa fa-2x text-muted"></i>
</span> 

<div class="media-body"> 

<div class="pull-right media-xs text-center text-muted"> <strong class="h4">17</strong>
<br> <small class="label bg-light">feb</small> 
</div> <a href="#" class="h4">Bootstrap documents</a> <small class="block"><a href="#" class="">John Smith</a> 

<span class="label label-info">Friends
</span></small> <small class="block m-t-sm">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small> 
</div> </article> 

<div class="line pull-in">
</div> <article class="media"> 

<div class="media-body"> 

<div class="pull-right media-xs text-center text-muted"> <strong class="h4">09</strong>
<br> <small class="label bg-light">jan</small> 
</div> <a href="#" class="h4 text-success">Mobile first html/css framework</a> <small class="block m-t-sm">Bootstrap, Ratchet</small> 
</div> </article> </section><div class="slimScrollBar" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 180.54607508532425px; background-position: initial initial; background-repeat: initial initial;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div></div> </section> <section class="panel"> 

<header class="panel-heading"> 
<ul class="nav nav-pills pull-right"> 
<li> <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a> </li> 
</ul> News 

<span class="badge bg-info">32
</span> </header> <section class="panel-body"> <article class="media"> 

<div class="pull-left"> 

<span class="fa fa-stack fa-2x"> <i class="fa fa-circle text-info fa-stack-2x"></i> <i class="fa fa-bold text-white fa-stack-1x"></i> 
</span> 
</div> 

<div class="media-body"> <a href="#" class="h4">Bootstrap 3: What you need to know</a> <small class="block m-t-xs">Sleek, intuitive, and powerful mobile-first front-end framework for faster and easier web development.</small> <em class="text-xs">Posted on 

<span class="text-danger">Feb 23, 2013
</span></em> 
</div> </article> 

<div class="line pull-in">
</div> <article class="media"> 

<div class="pull-left"> 

<span class="fa fa-stack fa-2x"> <i class="fa fa-circle text-primary fa-stack-2x"></i> <i class="fa fa-file text-white fa-stack-1x"></i> 
</span> 
</div> 

<div class="media-body"> <a href="#" class="h4">Bootstrap documents</a> <small class="block m-t-xs">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small> <em class="text-xs">Posted on 

<span class="text-danger">Feb 12, 2013
</span></em> 
</div> </article> 

<div class="line pull-in">
</div> <article class="media"> 

<div class="pull-left"> 

<span class="fa fa-stack fa-2x"> <i class="fa fa-circle text-default fa-stack-2x"></i> <i class="fa fa-star text-white fa-stack-1x"></i> 
</span> 
</div> 

<div class="media-body"> <a href="#" class="h4 text-success">Mobile first html/css framework</a> <small class="block m-t-xs">Bootstrap, Ratchet</small> <em class="text-xs">Posted on 

<span class="text-danger">Feb 05, 2013
</span></em> 
</div> </article> </section> </section> 
</div> 

<div class="col-lg-6"> 
<!-- .comment-list --> <section class="comment-list block"> <article id="comment-id-1" class="comment-item"> <a class="pull-left thumb-sm avatar"> <img src="images/avatar.jpg" class="img-circle"> </a> 

<span class="arrow left">
</span> <section class="comment-body panel"> 

<header class="panel-heading"> <a href="#">John smith</a> 
<label class="label bg-info m-l-xs">Editor
</label> 

<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 24 minutes ago 
</span> </header> 

<div class="panel-body"> 

<div>Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
</div> 

<div class="comment-action m-t-sm"> <a href="#" data-toggle="class" class="btn btn-white btn-xs active"> <i class="fa fa-star-o text-muted text"></i> <i class="fa fa-star text-danger text-active"></i> Like </a> <a href="#comment-form" class="btn btn-white btn-xs"> <i class="fa fa-mail-reply text-muted"></i> Reply </a> 
</div> 
</div> </section> </article> 
<!-- .comment-reply --> <article id="comment-id-2" class="comment-item comment-reply"> <a class="pull-left thumb-sm avatar"> <img src="images/avatar.jpg" class="img-circle"> </a> 

<span class="arrow left">
</span> <section class="comment-body panel text-sm"> 

<div class="panel-body"> <a href="#">Mika Sam</a> 
<label class="label bg-dark m-l-xs">Admin
</label> Report this comment is helpful 

<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 10 minutes ago 
</span> 
</div> </section> </article> 
<!-- / .comment-reply --> <article id="comment-id-3" class="comment-item"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> 

<span class="arrow left">
</span> <section class="comment-body panel"> 

<header class="panel-heading"> <a href="#">By me</a> 
<label class="label bg-success m-l-xs">User
</label> 

<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> about 1 hour ago 
</span> </header> 

<div class="panel-body"> 

<div>This comment was posted by you.
</div> 

<div class="comment-action m-t-sm"> <a href="#comment-id-3" data-dismiss="alert" class="btn btn-white btn-xs"><i class="fa fa-trash-o text-muted"></i> Remove</a> 
</div> 
</div> </section> </article> <article id="comment-id-4" class="comment-item"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> 

<span class="arrow left">
</span> <section class="comment-body panel"> 

<header class="panel-heading"> <a href="#">Peter</a> 
<label class="label bg-primary m-l-xs">Vip
</label> 

<span class="text-muted m-l-sm pull-right"> <i class="fa fa-clock-o"></i> 2 hours ago 
</span> </header> 

<div class="panel-body"> 
<blockquote> 

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> <small>Someone famous in <cite title="Source Title">Source Title</cite></small> 
</blockquote> 

<div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...
</div> 

<div class="comment-action m-t-sm"> <a href="#" data-toggle="class" class="btn btn-white btn-xs"><i class="fa fa-star-o text-muted text"></i><i class="fa fa-star text-danger text-active"></i> Like</a> <a href="#comment-form" class="btn btn-white btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a> 
</div> 
</div> </section> </article> 
<!-- comment form --> <article class="comment-item media" id="comment-form"> <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a> <section class="media-body"> 

<form action="" class="m-b-none"> 

<div class="input-group"> 
<input type="text" class="form-control" placeholder="Input your comment here"> 

<span class="input-group-btn"> <button class="btn btn-primary" type="button">POST</button> 
</span> 
</div> 
</form> </section> </article> </section> 
<!-- / .comment-list --> 
</div> 
</div> 
</div><div class="slimScrollBar" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 0px; height: 683.6394716394716px; background-position: initial initial; background-repeat: initial initial;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px; background-position: initial initial; background-repeat: initial initial;"></div></div> </section> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<script src="js/slimscroll/jquery.slimscroll.min.js" cache="false">
</script> 
<script src="js/libs/moment.min.js">
</script> 
</body>
</html>

