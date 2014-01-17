<!DOCTYPE html>
<html lang="en">

<head> 
<title>Backend</title> 

<?php include 'head.php' ?>
<link rel="stylesheet" href="js/select2/select2.css" type="text/css" /> 
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" /> 
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" /> 
<link rel="stylesheet" href="js/slider/slider.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/language-tabs.css" />
</head>

<body class="overflow-hidden"> 
<section class="vbox"> 
	<?php include 'header.php' ?>

	<section>
		<section class="hbox stretch">
			<?php include 'sidebar.php' ?>
			



			<section id="content" class="scrollable scrollbar-hidden"> <!-- page content starts here --> 
				<section class="vbox">
					<?php include 'includes/create-article-wizzard.php' ?>
				</section>
			</section> <!-- page content ends -->





			<aside class="bg-light lter b-l aside-sm"> 
				<div class="wrapper">
					<div class="clearfix m-t-lg m-b-sm pull-right pull-none-xs"> 
						<div class="pull-left"> 
							<div class="pull-left m-r-xs"> 
								<span class="block">Articles</span> 
								<span class="h4">432</span>
								<i class="fa fa-level-up text-success"></i> 
							</div>  
						</div> 
						<div class="pull-left m-l-lg"> 
							<div class="pull-left m-r-xs"> 
								<span class="block">Profit</span> 
								<span class="h4">$4k</span>
								<i class="fa fa-level-down text-danger"></i>
							</div>  
						</div> 
					</div> 

					<div class="inline"> 
						<div class="easypiechart easyPieChart" data-percent="75" data-line-width="16" data-loop="false" data-size="120" style="width: 188px; height: 188px; line-height: 188px;"> 
						<span class="h2">51</span>% 
						<div class="easypie-text"><button class="btn btn-link m-t-n-sm active" data-toggle="class:pie"><i class="fa fa-play text text-muted"></i><i class="fa fa-pause text-active text-muted"></i></button>
						</div> 
						<canvas width="120" height="120"></canvas><canvas width="120" height="120"></canvas></div> 
					</div>



				</div> <!-- wrapper -->
			</aside> 
		</section> 
	</section> 


<!-- you can add a footer here with a class .footer -->
</section><!-- vbox -->







<?php include 'scripts.php' ?>
<script src="js/fuelux/fuelux.js"></script> 
<!-- datepicker --> 
<!-- <script src="js/datepicker/bootstrap-datepicker.js"></script>  -->
<!-- slider --> 
<!-- <script src="js/slider/bootstrap-slider.js"></script>  -->
<!-- file input --> 
<!-- <script src="js/file-input/bootstrap.file-input.js"></script>  -->
<!-- combodate --> 
<!-- <script src="js/libs/moment.min.js"></script>  -->
<!-- <script src="js/combodate/combodate.js" cache="false"></script>  -->
<!-- parsley --> 
<script src="js/prasley/parsley.min.js" cache="false"></script> 
<!-- <script src="js/prasley/parsley.extend.js" cache="false"></script>  -->
<!-- select2 --> 
<!-- <script src="js/select2/select2.min.js" cache="false"></script>  -->
<!-- wysiwyg --> 
<script src="js/wysiwyg/jquery.hotkeys.js" cache="false"></script> 
<script src="js/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script> 
<script src="js/wysiwyg/demo.js" cache="false"></script> 
<!-- markdown --> 
<script src="js/markdown/epiceditor.min.js" cache="false"></script> 
<!-- <script src="js/markdown/demo.js" cache="false"></script> -->
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>.




<!-- --------------------------------------- -->
<!-- De aici incep scripturile pentru upload -->
<!-- --------------------------------------- -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start btn-xs" disabled>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel btn-xs">
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td class="no-padding width-60">
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td class="no-padding">
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td class="no-padding width-120">
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete  btn-xs" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <span>Delete</span>
                </button>
                <a href="includes/edit-image.php?param={%=file.url%}" data-toggle="ajaxModal" class="btn btn-xs btn-info">Edit</a>
                
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
            {% if (file.url) { %}
               
                {% }
             %}
        </td>
    </tr>
{% } %}
</script>



<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/upload/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<!-- merge scriptul si fara -->
<script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/upload/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/upload/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/upload/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/upload/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/upload/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/upload/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/upload/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/upload/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/upload/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>
</html>

