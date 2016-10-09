@extends($layout)
@section('stylesheets')
	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="/packages/blueimp/css/jquery.fileupload.css">
	<link rel="stylesheet" href="/packages/blueimp/css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript><link rel="stylesheet" href="/packages/blueimp/css/jquery.fileupload-noscript.css"></noscript>
	<noscript><link rel="stylesheet" href="/packages/blueimp/css/jquery.fileupload-ui-noscript.css"></noscript>
	{!! Html::style('/packages/magnific/dist/magnific-popup.css') !!}
@stop
@section('scripts')
	{!! Html::script('/packages/lazy/lazyload.min.js') !!}
	{!! Html::script('/assets/js/resource_manage.js') !!}
	{!! Html::script('/packages/magnific/dist/jquery.magnific-popup.min.js') !!}
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<!-- blueimp Gallery script -->
	<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.iframe-transport.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-process.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-image.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-audio.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-video.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-validate.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-jquery-ui.js"></script>
	<script type="text/javascript" src="/packages/jQuery-File-Upload-9.11.2/js/jquery.fileupload-ui.js"></script>
	<!-- The template to display files available for upload -->
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

	        </td>
	        <td>
	            {% if (!i) { %}
	                <button class="btn btn-warning cancel">
	                    <i class="glyphicon glyphicon-ban-circle"></i>
	                    <span>Cancel</span>
	                </button>
		            <button type="button" class="btn btn-success remove hide rem-{%=file.size%}" imgSrc="">
		                <i class="glyphicon glyphicon-ok"></i>
		                <span>Saved</span>
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
	        <td>
	            <span class="preview">
	                {% if (file.thumbnailUrl) { %}
	                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
	                {% } %}
	            </span>
	        </td>
	        <td>
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
	        <td>
	            {% if (file.deleteUrl) { %}
	                <button class="btn btn-success saved" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
	                    <i class="glyphicon glyphicon-trash"></i>
	                    <span>Saved</span>
	                </button>
	            {% } else { %}
	                <button class="btn btn-warning cancel">
	                    <i class="glyphicon glyphicon-ban-circle"></i>
	                    <span>Cancel</span>
	                </button>
	            {% } %}
	        </td>
	    </tr>
	{% } %}
	</script>

@stop
@section('sidebar')
<div class="nav nav-stacked hide list-group" id="sidebar-inner">
	<a href="#top" class="list-group-item">Top of page</a>
	<a href="#step1" class="list-group-item">Resource Upload</a>
	<a href="#step2" class="list-group-item">Resource Manage</a>

</div>    
@stop
@section('content')
<style type="text/css">
	.mfp-close{
		cursor: pointer !important;
	}
	.rep_excel_not{
		position: relative;
		z-index: 99;
		margin-bottom: 0;
	}
	.rep_excel_not>p{
		margin: 0;
	}
	.cap-title{
		word-break: break-all;
	}
	.thumbnail{
		overflow: auto;
		/*height: 350px !important;*/
	}
	.lp{
		margin-bottom: 0;
	}
	.thumbnail .caption {
    	padding-bottom: 0;
	}
</style>
	<div id="top" class="jumbotron">
		<h1>Resources</h1>
		<ol class="breadcrumb">
			<li class="active">Manage Resources</li>
		</ol>
	</div>


	<form id="fileupload" action="/admins/resources/file-upload" method="POST" enctype="multipart/form-data">
		<div class="panel panel-default">
			
			<div class="panel-heading"><h4>Upload</h4></div>
	        <!-- The global progress state -->
	        <div class="col-lg-12 fileupload-progress fade">
	            <!-- The global progress bar -->
	            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
	                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
	            </div>
	            <!-- The extended global progress state -->
	            <div class="progress-extended">&nbsp;</div>
	        </div>
			<div id="step1_panel" class="panel-body">
				<!-- The table listing the files available for upload/download -->
		        <table id="displayImagesTable-main" kind="main" role="presentation" class="table table-striped top"><tbody class="files"></tbody></table>
			</div>
			<div class="panel-footer clearfix">
				<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
		        <div class="fileupload-buttonbar">
		            <div class="col-lg-7">
		                <!-- The fileinput-button span is used to style the file input field as button -->
		                <span class="btn btn-success fileinput-button">
		                    <i class="glyphicon glyphicon-plus"></i>
		                    <span>Add File</span>
		                    <input type="file" name="files[]" multiple>
		                </span>
		                <button type="reset" class="btn btn-warning cancel">
		                    <i class="glyphicon glyphicon-ban-circle"></i>
		                    <span>Cancel upload</span>
		                </button>
		                <!-- The global file processing state -->
		                <span class="fileupload-process"></span>
		            </div>
		        </div>
	    	</div>
		</div>	
    </form>

	<div id="step2" class="panel panel-default">
		




		<div class="panel-heading">

			<div>
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#images" aria-controls="home" role="tab" data-toggle="tab">Images</a></li>
			    <li role="presentation"><a href="#excels" aria-controls="profile" role="tab" data-toggle="tab">Excels</a></li>
			    <li role="presentation"><a href="#pdf" aria-controls="messages" role="tab" data-toggle="tab">PDFs</a></li>
			    <li role="presentation"><a href="#video" aria-controls="settings" role="tab" data-toggle="tab">Videos</a></li>
			  </ul>

			</div>

		</div>
		<style type="text/css">
			.ad-image-main-res {
	    		width: 100%;
	    		height: 149px;
	    		background-size: cover;
		    	background-repeat: no-repeat;
		    	background-position: 50% 21%;
				}
		</style>
		<div id="step1_panel" class="panel-body">
			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="images">
			    	@if(isset($resources['img']))
			    		@foreach($resources['img'] as $ik => $iv)
						<div class="row-fluid">
								<div class="col-sm-4 col-md-3" >
									<div class="thumbnail" style="height:300px;">
										<div class="ad-image-main-res lazy" style=" background-image: url(&quot;/assets/resources_file/1/{!!$iv['src']!!}&quot;);"></div>
										<div class="caption">
											<h5 class="cap-title">{!!$iv['src']!!}</h5>
											<p><span class="label label-success">Original name:</span> {!!$iv['or_name']!!}</p>
											<p><span class="label label-primary">Date Upload:</span> {!!$iv['created_at']!!}</p>
											<p class="lp">
												<a class="popup-link btn btn-default" href="/assets/resources_file/1/{!!$iv['src']!!}"><i class="glyphicon glyphicon-picture"></i></a>
												<a href="/assets/resources_file/1/{!!$iv['src']!!}" target="_blank" class="btn btn-info" role="button"><span class="glyphicon glyphicon-new-window"></span></a> 
												<a class="btn btn-danger delete-resource pull-right" this-id="{!!$iv['tid']!!}" role="button"><span class="glyphicon glyphicon-trash"></span></a> 
											</p>
										</div>
									</div>
								</div>
							</div>	
			    		@endforeach
			    	@endif
			    </div>
			    <div role="tabpanel" class="tab-pane" id="excels">
			    	@if(isset($resources['excel']))
			    		@foreach($resources['excel'] as $ek => $ev)
			    			<form class="fileupload-{{$ek}}" action="/admins/resources/file-upload-replace" method="POST" enctype="multipart/form-data">
								<div class="row-fluid">
									<div class="col-sm-4 col-md-3" >
										<div class="thumbnail" style="height:300px;">
											<div class="ad-image-main-res lazy" style=" background-image: url(&quot;/assets/images/icons/excel.png&quot;);"></div>
											<div class="caption">
												<h5 class="cap-title">{!!$ev['src']!!}</h5>
												<p><span class="label label-success">Original name:</span> {!!$ev['or_name']!!}</p>
												<p><span class="label label-primary">Date Upload:</span> {!!$ev['created_at']!!}</p>
												<div  class="lp">
													<a href="{!!route('resources_download_excel',$ev['src'])!!}" target="_blank" class="btn btn-info" role="button"><i class="fa fa-download" aria-hidden="true"></i></a> 

									                <span class="btn btn-success fileinput-button rep-excel" this-id="{!!$ek!!}">
									                    <i class="fa fa-retweet" aria-hidden="true"></i>
									                    <input type="file" name="files[]" multiple>
									                </span>
									                <a class="btn btn-warning btn-pw-{!!$ek!!} hide" role="button">Please Wait</a> 
									                <a style="display:none" class="btn btn-success btn-saved-{!!$ek!!}" role="button">Saved!</a> 


									                <a class="btn btn-danger delete-resource pull-right" this-id="{!!$ev['tid']!!}" role="button"><span class="glyphicon glyphicon-trash"></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</form>
								<script type="text/javascript">
							    	$(document).ready(function(){
								    		$('.fileupload-'+{!!$ek!!}).fileupload({
												// Uncomment the following to send cross-domain cookies:
												//xhrFields: {withCredentials: true},
												url: '/admins/resources/file-upload-replace',
												dataType:'json',
												autoUpload: true,
												formData: { "src":{{$ev['tid']}} },
												change: function (e, data) {
													$('.btn-pw-{!!$ek!!}').removeClass('hide');
											    },
												done: function(e, data){
													r = data.result;
													if(r.success === true) {
														var path = r.path;
														// Remove disabled button and add in cancel button
														$('.btn-pw-{!!$ek!!}').addClass('hide');
														$('.btn-saved-{!!$ek!!}').hide().fadeIn(1);
														setTimeout(function(){ 
															$('.btn-saved-{!!$ek!!}').fadeOut(500);
														 }, 1000);
														// setTimeout(function(){ 
														// 	$('#displayImagesTable-main-{!!$ek!!}').find('.files').html('');
														// 	$('#displayImagesTable-main-{!!$ek!!}').fadeIn();
														//  }, 2500);

													}
												}
											});
										});
						    	</script>
			    		@endforeach
			    	@endif

			    </div>
			    <div role="tabpanel" class="tab-pane" id="pdf">
			    	@if(isset($resources['pdf']))
			    		@foreach($resources['pdf'] as $pk => $pv)
							<div class="row-fluid">
								<div class="col-sm-4 col-md-3" >
									<div class="thumbnail" style="height:300px;">
										<div class="ad-image-main-res lazy" style=" background-image: url(&quot;/assets/images/icons/pdflogo.png&quot;);"></div>
										<div class="caption">
											<h5 class="cap-title">{!!$pv['src']!!}</h5>
											<p><span class="label label-success">Original name:</span> {!!$pv['or_name']!!}</p>
											<p><span class="label label-primary">Date Upload:</span> {!!$pv['created_at']!!}</p>
											<p class="lp">
												<a class="popup-link btn btn-default" href="/assets/resources_file/1/{!!$pv['src']!!}"><i class="glyphicon glyphicon-picture"></i></a>
												<a href="/assets/resources_file/1/{!!$pv['src']!!}" target="_blank" class="btn btn-info" role="button"><span class="glyphicon glyphicon-new-window"></span></a> 
												<a class="btn btn-danger delete-resource pull-right" this-id="{!!$pv['tid']!!}" role="button"><span class="glyphicon glyphicon-trash"></span></a>
											</p>
										</div>
									</div>
								</div>
							</div>	
			    		@endforeach
			    	@endif
			    </div>
			    <div role="tabpanel" class="tab-pane" id="video">
			    	@if(isset($resources['video']))
			    		@foreach($resources['video'] as $vk => $vv)
							<div class="row-fluid">
								<div class="col-sm-4 col-md-3" >
									<div class="thumbnail" style="height:300px;">
										<div class="embed-responsive embed-responsive-4by3">
											<video class="embed-responsive-item" controls>
											    <source src="/assets/resources_file/1/{!!$vv['src']!!}" type="video/mp4">
											</video>
										</div>
										<div class="caption">
											<h5 class="cap-title">{!!$vv['src']!!}</h5>
											<p><span class="label label-success">Original name:</span> {!!$vv['or_name']!!}</p>
											<p><span class="label label-primary">Date Upload:</span> {!!$vv['created_at']!!}</p>
											<p class="lp">
												<a href="/assets/resources_file/1/{!!$vv['src']!!}" target="_blank" class="btn btn-info" role="button"><span class="glyphicon glyphicon-new-window"></span></a> 
												<a class="btn btn-danger delete-resource pull-right" this-id="{!!$vv['tid']!!}" role="button"><span class="glyphicon glyphicon-trash"></span></a> 
											</p>
										</div>
									</div>
								</div>
							</div>	
			    		@endforeach
			    	@endif
			    </div>
			  </div>

		</div>
	</div>

@stop
