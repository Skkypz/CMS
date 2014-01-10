<!DOCTYPE>
<html>
<head>
	<title>Codefic Content Manager</title>
	<?php include 'head.php' ?>
</head>
<body>


<section id="side">
	<?php include 'side.php' ?>
</section><!-- side -->

<section class="content">
	<?php include 'notes-top-bar.php' ?>
	
	<div class="page-content no-margin no-padding">
		<form action="" class="note left">
			<div class="paper">
				<textarea name="note" id="note"></textarea>
				<div class="clear"></div>
			</div>
		</form>
		<div class="note-select right">
			<ul class="list notes-list">
				<li>
					<h5>First note title</h5>
					<p>and here is some description</p>
					<i>11.11.2013</i>
				</li>
				<li>
					<h5>First note title</h5>
					<p>and here is some description</p>
					<i>11.11.2013</i>
				</li>
				<li>
					<h5>First note title</h5>
					<p>and here is some description</p>
					<i>11.11.2013</i>
				</li>
			</ul>
		</div>
	</div>

</section><!-- content -->

<?php include 'scripts.php' ?>
</body>
</html>