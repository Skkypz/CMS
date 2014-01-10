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

<section class="content bg-blue-lighter">
	<?php include 'top-nav.php' ?>
	
	<div class="page-title">
		<h4>Category List</h4>
		<button class="create-categ">New Category</button>
	</div>

	<div class="filter-by">
		<h4>Filter by:</h4>
		<select name="Author" id="authors">
			<option value="Author">Author</option>
			<option value="John Snow">John Snow</option>
			<option value="Nick Halden">Nick Halden</option>
			<option value="Andy Larchin">Andy Larchin</option>
		</select>

		<select name="Parent" id="parent">
			<option value="parent">Parent</option>
			<option value="John Snow">John Snow</option>
			<option value="Nick Halden">Nick Halden</option>
			<option value="Andy Larchin">Andy Larchin</option>
		</select>

		<select name="Month" id="month">
			<option value="Month">Month</option>
			<option value="John Snow">January</option>
			<option value="Nick Halden">February</option>
			<option value="Andy Larchin">December</option>
		</select>

		<select name="state" id="state">
			<option value="state">State</option>
			<option value="Published">Published</option>
			<option value="Incomplete">Incomplete</option>
			<option value="Draft">Draft</option>
			<option value="Deleted">Deleted</option>
		</select>

		<input type="search" placeholder="search">
	</div>

	<div class="table-container">
		<?php include 'table-sample.php' ?>
	</div>

	<ul class="pagination">
		<li><a href="#">1</a></li>
		<li><a href="#">2</li>
		<li><a href="#">3</a></li>
		<li>...</li>
		<li><a href="#">7</a></li>
		<li><a href="#">8</a></li>
		<li><a href="#">29</a></li>
	</ul>
	
</section><!-- content -->

<?php include 'scripts.php' ?>
</body>
</html>