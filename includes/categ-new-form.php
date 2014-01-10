
<div class="row">
	<form class="form col-lg-6 m-b" role="form"> 
		<label class="m-r m-b"> Parent</label>
		<div class="form-group"> 
			<select name="parent" id="parent" class="form-control">Parent
				<option value="1">First</option>
				<option value="2">Secondasdrgeregerg erggewger</option>
				<option value="3">Third</option>
				<option value="4">Fourth</option>
			</select>
		</div> 
		<div class="form-group"> 
			<select name="parent" id="parent" class="form-control">Parent
				<option value="1">First</option>
				<option value="2">Second</option>
				<option value="3">Third</option>
				<option value="4">Fourth</option>
			</select>
		</div> 
		<div class="form-group"> 
			<select name="parent" id="parent" class="form-control">Parent
				<option value="1">First</option>
				<option value="2">Second</option>
				<option value="3">Third (some category)</option>
				<option value="4">Fourth</option>
			</select>
		</div>
	</form>
	<!-- select parent -->
	
	<div class="line line-dashed line-lg2 pull-in hidden show-lg"></div>
	
	<div class="categ-container col-lg-6">
		<label>Containers</label>
		<a href="includes/categ-create-container.php" data-toggle="ajaxModal" class="btn btn-sm btn-success pull-right">Add New</a>
	
		<div class="">
			<?php include 'includes/categ-container-table.php' ?>
		</div>
	</div><!-- choose container -->
</div>


<div class="line line-dashed line-lg2 pull-in"></div>


<div class="row">
	<form class="col-lg-6 m-b">
		<label class="m-r"> Main Info</label>
		<input type="text" class="form-control m-b" placeholder="Category Name" required="true">
		<textarea name="categ" id="categ" cols="30" rows="10" class="form-control lg-height-440" placeholder="Category Description"></textarea>
	</form>
	<!-- name and description -->
	
	
	<!-- <div class="line line-dashed line-lg2 pull-in"></div> -->
	
	
	
	
	<form class="form-inline col-lg-6" role="form"> 
		<label class="m-r"> Meta</label>
		<input type="text" class="form-control m-b" placeholder="Meta Title">
		<textarea name="" id="" cols="30" rows="10" class="form-control m-b" placeholder="Meta Description"></textarea>
		<textarea name="" id="" cols="30" rows="10" class="form-control m-b" placeholder="Meta Keywords"></textarea>
		
	</form>
</div>
<button class="btn btn-info btn-sm m-b">Create Category</button>