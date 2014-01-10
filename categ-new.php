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
	<?php include 'top-nav.php' ?>
	
	<section class="sub-header">
		<p>Create new category</p>
		<button>Toggle</button>
		<div class="clear"></div>
	</section>


	<div class="page-content">
		<form action="" class="new-categ-form left form" id="create-catefogy-form">

			<select name="parent" class="select-parent">
				<option value="Parent">Parent</option>
				<option value="Parent">Second</option>
			</select>

			<select name="parent" class="select-parent">
				<option value="Parent">Parent</option>
				<option value="Parent">Second</option>
			</select>
		
			<input type="text" class="input categ-name" placeholder="Category Name">
		
			<textarea name="description" id="categ-description" cols="30" rows="10" placeholder="Describe the category"></textarea><br>
			
			<select name="tags" id="select-tag">
				<option value="tag1">Hunting</option>
				<option value="tag2">Fishing</option>
				<option value="tag3">Skying</option>
			</select><br>

			<button type="submit">Create category</button>
		</form>


		<aside>
			sad
		</aside>
	</div><!-- page-content -->

</section><!-- content -->

<?php include 'scripts.php' ?>
</body>
</html>