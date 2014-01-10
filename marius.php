<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">A little piece of heaven</h4>
		</div>



		<div class="modal-body">
			<form>

				<input type="text" class="form-control m-b" placeholder="Rename Container">
				<span class="m-t m-b">Contained Articles</span>
 				

<div style="border:1px solid balck; width:100px; height:100px; ">
 				<img src="<?php print_r($_GET['param']);?>"></a>
</div>

				<ul class="list-group bg-white m-t icon-no-float">
					<li href="#" class="list-group-item">
						<button class="btn btn-danger btn-xs pull-right" target="_blank">Remove</button>
						<i class="fa fa-chevron-right"></i>
						<span class="m-l article-title"><a href="http://www.google.ro" target="_blank">A little piece of Heaven</a></span>
					</li>

					<li href="#" class="list-group-item">
						<button class="btn btn-danger btn-xs pull-right" target="_blank">Remove</button>
						<i class="fa fa-chevron-right"></i>
						<span class="m-l article-title"><a href="http://www.google.ro" target="_blank">Things to know before you come</a></span>
					</li>

					<li href="#" class="list-group-item">
						<button class="btn btn-danger btn-xs pull-right" target="_blank">Remove</button>
						<i class="fa fa-chevron-right"></i>
						<span class="m-l article-title"><a href="http://www.google.ro" target="_blank">Nightlife in Cluj-Napoca</a></span>
					</li>

					<li href="#" class="list-group-item">
						<button class="btn btn-danger btn-xs pull-right" target="_blank">Remove</button>
						<i class="fa fa-chevron-right"></i>
						<span class="m-l article-title"><a href="http://www.google.ro" target="_blank">Budget trip in Romania</a></span>
					</li> 
				</ul>
			</form>

			<form>
				<span class="m-t m-b">Add articles</span>

				<div class="list-group bg-white m-t">
					<a href="#" class="list-group-item">
						<i class="fa fa-chevron-right"></i> 
						<input type="checkbox" class="m-r">
						<span class="m-l article-title">A little piece of Heaven</span>
					</a>

					<a href="#" class="list-group-item">
						<i class="fa fa-chevron-right"></i> 
						<input type="checkbox" class="m-r">
						<span class="m-l article-title">The beauty of the Carpahean Mountains</span>
					</a>

					<a href="#" class="list-group-item">
						<i class="fa fa-chevron-right"></i> 
						<input type="checkbox" class="m-r">
						<span class="m-l article-title">Romanian countryside - peace and quiet</span>
					</a>

					<a href="#" class="list-group-item">
						<i class="fa fa-chevron-right"></i> 
						<input type="checkbox" class="m-r">
						<span class="m-l article-title">A little piece of Heaven</span>
					</a>
				</div>
			</form>
		</div><!-- modal body -->
		



		<div class="modal-footer">
			<a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

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

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
       
        <td class="no-padding width-120">
        cdbxnvzschjdsvgfhjdsgf
              {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
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



