<section class="tab-pane active" id="wizard"> 
	<div class="panel panel-100-height"> 
		<div class="wizard clearfix" id="form-wizard"> 
			<ul class="steps"> 
			<li data-target="#step1" class="active">
			<span class="badge badge-info">1
			</span>Write</li> 
			<li data-target="#step2">
			<span class="badge">2
			</span>Translate</li> 
			<li data-target="#step3">
			<span class="badge">3
			</span>Add Images</li> 
			<li data-target="#step4">
			<span class="badge">4
			</span>Final Details</li> 
			</ul> 
		</div> 


		<div class="step-content">
			<div class="actions m-t pull-right top-actions">
				<button type="button" class="btn btn-info btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
				<button type="button" class="btn btn-info btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button> 
			</div>


				<div class="step-pane active" id="step1">
					<p>Article Title</p>
					<input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Title"> 
					<p class="m-t">Article Content</p>
					<!-- <input type="text" class="form-control" data-trigger="change" data-required="true" data-type="email" placeholder="email address">  -->
					<div class="clear"></div>
					<?php include 'includes/editor.php' ?>
				</div>
				<div class="step-pane" id="step2">
					<input type="text" class="form-control hidden" data-trigger="change" data-required="true" data-type="email" placeholder="email address" value="as@sa.cc">
					<?php include 'includes/language-tabs.php' ?>
				</div><!-- step 2 -->
				<div class="step-pane" id="step3">
					<input type="text" class="form-control hidden" data-trigger="change" data-required="true" data-type="email" placeholder="email address" value="example@mail.com"> 					
						<?php include 'img-upload.html' ?>
				</div>
				<div class="step-pane" id="step4">
					<p><b>Select Parent</b></p>
					<form class="form-inline" role="form"> 
						<div class="form-group m-r"> 
							<select name="parent" id="parent" class="form-control">Parent
								<option value="1">First</option>
								<option value="2">Secondasdrgeregerg erggewger</option>
								<option value="3">Third</option>
								<option value="4">Fourth</option>
							</select>
						</div> 
						<div class="form-group m-r"> 
							<select name="parent" id="parent" class="form-control">Parent
								<option value="1">First</option>
								<option value="2">Second</option>
								<option value="3">Third</option>
								<option value="4">Fourth</option>
							</select>
						</div> 
						<div class="form-group m-r"> 
							<select name="parent" id="parent" class="form-control">Parent
								<option value="1">First</option>
								<option value="2">Second</option>
								<option value="3">Third (some category)</option>
								<option value="4">Fourth</option>
							</select>
						</div> <!-- select parent -->
					</form>
					
					<div class="line line-dashed line-lg2 pull-in"></div>

					<p><b>Search Engine Optimization</b></p>
					<form action="" class="form">
						<input type="text" class="form-control m-b" placeholder="Page Title">
						<input type="text" class="form-control m-b" placeholder="Keywords - separate them with comma">
						<textarea name="desc" class="form-control m-b" placeholder="Describe the page"></textarea>
					</form>

					<div class="line line-dashed line-lg2 pull-in"></div>

					<p><b>Tag this article</b></p>
					<div id="MyPillbox" class="pillbox clearfix"> 
						<ul> 
							<li class="label bg-dark">Item One</li> 
							<li class="label bg-success">Item Two</li> 
							<li class="label bg-warning">Item Three</li> 
							<li class="label bg-danger">Item Four</li> 
							<li class="label bg-info">Item Five</li> 
							<li class="label bg-success">Item Six</li> 
							<input type="text" placeholder="add a pill"> 
						</ul> 
					</div>

					<div class="line line-dashed line-lg2 pull-in"></div>

					<p><b>State</b></p>
					<div class="form-group"> 
						<select name="state" id="state" class="form-control">State
							<option value="1">Activated</option>
							<option value="2">Deactivated</option>
							<option value="3">Draft</option>
							<option value="4">Incomplete</option>
							<option value="4">Published</option>
						</select>
					</div> <!-- select parent -->

					<div class="line line-dashed line-lg2 pull-in"></div>
				</div> <!-- step 4 -->
			
			<div class="actions m-t">
				<button type="button" class="btn btn-info btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
				<button type="button" class="btn btn-info btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button> 
			</div>
		</div>
	</div>
</section>