<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 
<?php include 'head.php' ?>
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
<link rel="stylesheet" href="js/datatables/datatables.css" type="text/css" /> 
</head>

<body> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
		<?php include 'sidebar.php' ?>
		



		<section id="content"> <section class="vbox"> 

<header class="header bg-success bg-gradient"> 
<ul class="nav nav-tabs"> 
<li class="active"><a href="#static" data-toggle="tab">Static table</a></li> 
<li class=""><a href="#datagrid" data-toggle="tab">Datagrid</a></li> 
<li class=""><a href="#datatable" data-toggle="tab">Datatable</a></li> 
</ul> </header> <section class="scrollable wrapper"> 

<div class="tab-content"> 

<div class="tab-pane active" id="static"> 

<div class="row"> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading"> 

<span class="label bg-danger pull-right">4 left
</span> Tasks </header> 
<table class="table table-striped m-b-none text-sm"> 
<thead> 
<tr> 
<th>Progress
</th> 
<th>Item
</th> 
<th width="70">
</th> 
</tr> </thead> <tbody> 
<tr> 
<td> 

<div class="progress progress-sm progress-striped active m-t-xs m-b-none"> 

<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%">
</div> 
</div> 
</td> 
<td>App prototype design
</td> 
<td class="text-right"> 

<div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</td> 
</tr> 
<tr> 
<td> 

<div class="progress progress-xs m-t-xs m-b-none"> 

<div class="progress-bar progress-bar-info" data-toggle="tooltip" data-original-title="40%" style="width: 40%">
</div> 
</div> 
</td> 
<td>Design documents
</td> 
<td class="text-right"> 

<div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</td> 
</tr> 
<tr> 
<td> 

<div class="progress progress-xs m-t-xs m-b-none"> 

<div class="progress-bar progress-bar-warning" data-toggle="tooltip" data-original-title="20%" style="width: 20%">
</div> 
</div> 
</td> 
<td>UI toolkit
</td> 
<td class="text-right"> 

<div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</td> 
</tr> 
<tr> 
<td> 

<div class="progress progress-xs m-t-xs m-b-none"> 

<div class="progress-bar progress-bar-danger" data-toggle="tooltip" data-original-title="15%" style="width: 15%">
</div> 
</div> 
</td> 
<td>Testing
</td> 
<td class="text-right"> 

<div class="btn-group"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-pencil"></i></a> 
<ul class="dropdown-menu pull-right"> 
<li><a href="#">Action</a></li> 
<li><a href="#">Another action</a></li> 
<li><a href="#">Something else here</a></li> 
<li class="divider"></li> 
<li><a href="#">Separated link</a></li> 
</ul> 
</div> 
</td> 
</tr> </tbody> 
</table> </section> 
</div> 

<div class="col-sm-6"> <section class="panel"> 

<header class="panel-heading">Stats</header> 
<table class="table table-striped m-b-none text-sm"> 
<thead> 
<tr> 
<th>Graph
</th> 
<th>Item
</th> 
<th width="70">
</th> 
</tr> </thead> <tbody> 
<tr> 
<td> 

<div class="sparkline" data-bar-color="#5cb85c" data-type="bar" data-height="19"><canvas width="70" height="19" style="display: inline-block; width: 70px; height: 19px; vertical-align: top;"></canvas></div> 
</td> 
<td>App downloads
</td> 
<td class="text-success"> <i class="fa fa-level-up"></i> 40% 
</td> 
</tr> 
<tr> 
<td> 

<div class="sparkline" data-bar-color="#61a1e1" data-type="bar" data-height="19"><canvas width="76" height="19" style="display: inline-block; width: 76px; height: 19px; vertical-align: top;"></canvas></div> 
</td> 
<td>Social connection
</td> 
<td class="text-success"> <i class="fa fa-level-up"></i> 20% 
</td> 
</tr> 
<tr> 
<td> 

<div class="sparkline" data-bar-color="#999900" data-type="bar" data-height="19"><canvas width="70" height="19" style="display: inline-block; width: 70px; height: 19px; vertical-align: top;"></canvas></div> 
</td> 
<td>Revenue
</td> 
<td class="text-warning"> <i class="fa fa-level-down"></i> 5% 
</td> 
</tr> 
<tr> 
<td> 

<div class="sparkline" data-bar-color="#ff5f5f" data-type="bar" data-height="19"><canvas width="70" height="19" style="display: inline-block; width: 70px; height: 19px; vertical-align: top;"></canvas></div> 
</td> 
<td>Customer increase
</td> 
<td class="text-danger"> <i class="fa fa-level-down"></i> 20% 
</td> 
</tr> </tbody> 
</table> </section> 
</div> 
</div> <section class="panel"> 

<header class="panel-heading"> Responsive Table </header> 

<div class="row text-sm wrapper"> 

<div class="col-sm-5 m-b-xs"> 
<select class="input-sm form-control input-s-sm inline"> 

<option value="0">Bulk action</option> 

<option value="1">Delete selected</option> 

<option value="2">Bulk edit</option> 

<option value="3">Export</option> 
</select> <button class="btn btn-sm btn-white">Apply</button> 
</div> 

<div class="col-sm-4 m-b-xs"> 

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
</div> 
</div> 

<div class="col-sm-3"> 

<div class="input-group"> 
<input type="text" class="input-sm form-control" placeholder="Search"> 

<span class="input-group-btn"> <button class="btn btn-sm btn-white" type="button">Go!</button> 
</span> 
</div> 
</div> 
</div> 

<div class="table-responsive"> 
<table class="table table-striped b-t text-sm"> 
<thead> 
<tr> 
<th width="20">
<input type="checkbox">
</th> 
<th class="th-sortable" data-toggle="class">Project 

<span class="th-sort"> <i class="fa fa-sort-down text"></i> <i class="fa fa-sort-up text-active"></i> <i class="fa fa-sort"></i> 
</span> 
</th> 
<th>Task
</th> 
<th>Date
</th> 
<th width="30">
</th> 
</tr> </thead> <tbody> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="2">
</td> 
<td>Idrawfast
</td> 
<td>4c
</td> 
<td>Jul 25, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="3">
</td> 
<td>Formasa
</td> 
<td>8c
</td> 
<td>Jul 22, 2013
</td> 
<td> <a href="#" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="4">
</td> 
<td>Avatar system
</td> 
<td>15c
</td> 
<td>Jul 15, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="4">
</td> 
<td>Throwdown
</td> 
<td>4c
</td> 
<td>Jul 11, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="5">
</td> 
<td>Idrawfast
</td> 
<td>4c
</td> 
<td>Jul 7, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="6">
</td> 
<td>Formasa
</td> 
<td>8c
</td> 
<td>Jul 3, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="7">
</td> 
<td>Avatar system 
</td> 
<td>15c
</td> 
<td>Jul 2, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> 
<tr> 
<td>
<input type="checkbox" name="post[]" value="8">
</td> 
<td>Videodown
</td> 
<td>4c
</td> 
<td>Jul 1, 2013
</td> 
<td> <a href="#" class="active" data-toggle="class"><i class="fa fa-check text-success text-active"></i><i class="fa fa-times text-danger text"></i></a> 
</td> 
</tr> </tbody> 
</table> 
</div> <footer class="panel-footer"> 

<div class="row"> 

<div class="col-sm-4 hidden-xs"> 
<select class="input-sm form-control input-s-sm inline"> 

<option value="0">Bulk action</option> 

<option value="1">Delete selected</option> 

<option value="2">Bulk edit</option> 

<option value="3">Export</option> 
</select> <button class="btn btn-sm btn-white">Apply</button> 
</div> 

<div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> 
</div> 

<div class="col-sm-4 text-right text-center-xs"> 
<ul class="pagination pagination-sm m-t-none m-b-none"> 
<li><a href="#"><i class="fa fa-chevron-left"></i></a></li> 
<li><a href="#">1</a></li> 
<li><a href="#">2</a></li> 
<li><a href="#">3</a></li> 
<li><a href="#">4</a></li> 
<li><a href="#">5</a></li> 
<li><a href="#"><i class="fa fa-chevron-right"></i></a></li> 
</ul> 
</div> 
</div> </footer> </section> 
</div> 

<div class="tab-pane" id="datagrid"> <section class="panel"> 

<header class="panel-heading"> DataGrid <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data." data-original-title="" title=""></i> </header> 

<div class="table-responsive"> 
<table id="MyStretchGrid" class="table table-striped datagrid m-b-sm"> 
<thead> 
<tr> 
<th colspan="5"> 

<div class="row"> 

<div class="col-sm-8 m-t-xs m-b-xs"> 

<div class="select filter" data-resize="auto"> <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 

<span class="dropdown-label" style="width: 105px;">All</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu"> 
<li data-value="all"><a href="#">All</a></li> 
<li data-value="lt5m"><a href="#">Population &lt; 5M</a></li> 
<li data-value="gte5m"><a href="#">Population &gt;= 5M</a></li> 
</ul> 
</div> 
</div> 

<div class="col-sm-4 m-t-xs m-b-xs"> 

<div class="input-group search datagrid-search"> 
<input type="text" class="input-sm form-control" placeholder="Search"> 

<div class="input-group-btn"> <button class="btn btn-white btn-sm"><i class="fa fa-search"></i></button> 
</div> 
</div> 
</div> 
</div> 
</th> 
</tr> <tr><th data-property="toponymName" class="sortable">Name</th><th data-property="countrycode" class="sortable">Country</th><th data-property="population" class="sortable">Population</th><th data-property="fcodeName" class="sortable">Type</th><th data-property="geonameId" class="sortable">Edit</th></tr></thead><tbody><tr><td style="text-align:center;padding:20px;border-bottom:none;" colspan="5"><div class="progress progress-striped active" style="width:50%;margin:auto;"><div class="bar" style="width:100%;"></div></div></td></tr></tbody> <tfoot> 
<tr> 
<th class="row" colspan="5"> 

<div class="datagrid-footer-left col-sm-6 text-center-xs m-l-n" style="visibility: hidden;"> 

<div class="grid-controls m-t-sm"> 

<span> 

<span class="grid-start">
</span> - 

<span class="grid-end">
</span> of 

<span class="grid-count">
</span> 
</span> 

<div class="select grid-pagesize dropup" data-resize="auto"> <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle"> 

<span class="dropdown-label">20</span> 

<span class="caret">
</span> </button> 
<ul class="dropdown-menu"> 
<li data-value="5"><a href="#">5</a></li> 
<li data-value="10"><a href="#">10</a></li> 
<li data-value="20"><a href="#">20</a></li> 
<li data-value="50"><a href="#">50</a></li> 
<li data-value="100"><a href="#">100</a></li> 
</ul> 
</div> 

<span>Per Page
</span> 
</div> 
</div> 

<div class="datagrid-footer-right col-sm-6 text-right text-center-xs" style="visibility: hidden;"> 

<div class="grid-pager m-r-n"> <button type="button" class="btn btn-sm btn-white grid-prevpage"><i class="fa fa-chevron-left"></i></button> 

<span>Page
</span> 

<div class="inline"> 

<div class="input-group dropdown combobox"> 
<input class="input-sm form-control" type="text"> 

<div class="input-group-btn dropup"> <button class="btn btn-sm btn-white" data-toggle="dropdown"><i class="caret"></i></button> 
<ul class="dropdown-menu pull-right">
</ul> 
</div> 
</div> 
</div> 

<span>of 

<span class="grid-pages">
</span>
</span> <button type="button" class="btn btn-sm btn-white grid-nextpage"><i class="fa fa-chevron-right"></i></button> 
</div> 
</div> 
</th> 
</tr> </tfoot> 
</table> 
</div> </section> 
</div> 

<div class="tab-pane" id="datatable"> <section class="panel"> 

<header class="panel-heading"> DataTables <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data." data-original-title="" title=""></i> </header> 

<div class="table-responsive"> 
<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-sm-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label>Show <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div><div id="DataTables_Table_0_processing" class="dataTables_processing" style="visibility: visible;">Processing...</div></div><table class="table table-striped m-b-none dataTable" data-ride="datatables" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"> 
<thead> 
<tr role="row"><th width="20%" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine
: activate to sort column descending" style="width: 20px;">Rendering engine
</th><th width="25%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser
: activate to sort column ascending" style="width: 25px;">Browser
</th><th width="25%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s)
: activate to sort column ascending" style="width: 25px;">Platform(s)
</th><th width="15%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Engine version
: activate to sort column ascending" style="width: 15px;">Engine version
</th><th width="15%" class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade
: activate to sort column ascending" style="width: 15px;">CSS grade
</th></tr> </thead>  
<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">Loading...</td></tr></tbody></table><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_0_first">First</a><a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_0_previous">Previous</a><span></span><a tabindex="0" class="next paginate_button paginate_button_disabled" id="DataTables_Table_0_next">Next</a><a tabindex="0" class="last paginate_button paginate_button_disabled" id="DataTables_Table_0_last">Last</a></div></div></div></div> 
</div> </section> 
</div> 
</div> </section> </section> <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>

		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->

<?php include 'scripts.php' ?>
<!-- fuelux --> 
<script src="js/fuelux/fuelux.js">
</script> 
<script src="js/libs/underscore-min.js">
</script> 
<!-- datatables --> 
<script src="js/datatables/jquery.dataTables.min.js">
</script> 
</body>
</html>

