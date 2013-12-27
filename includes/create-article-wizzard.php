<section class="tab-pane active" id="wizard"> 
	<div class="panel"> 
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
			<span class="badge">3
			</span>Add Images</li> 
			</ul> 
		</div> 
		<div class="step-content">
			<form>
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
				</div>
				<div class="step-pane" id="step4">This is step 4</div>
			</form>
			<div class="actions m-t">
				<button type="button" class="btn btn-info btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
				<button type="button" class="btn btn-info btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last="Finish">Next</button> 
			</div>
		</div>
	</div>
</section>