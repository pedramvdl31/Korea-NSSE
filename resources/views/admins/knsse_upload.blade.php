@extends($layout)
@section('stylesheets')
  {!! Html::style('assets/css/users/registration.css') !!}
  {!! Html::style('/assets/css/general.css') !!}
@stop
@section('scripts')
  <script src="/assets/js/admins/knsse_upload.js"></script>
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        K-NSSE Upload
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admins"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">K-NSSE Upload</li>
      </ol>
    </section>


    
    <div class="panel panel-default" style="margin: 15px">
      <div class="panel-body">
        
        <!-- UPLOAD DIV -->
        <div class="form-group ind-box col-md-12 col-sm-12 col-xs-12">
            <div class="file-container"> 
              <span class="file-wrapper" style="    float: left;" > 
                <input type="file" id="form-submit-btn"/>
                <span class="button" id="sub-btn">Choose File</span>
              </span>
              <div id="loading-container2">
                <div id="loading-icons-1" style="display: none">
                  <i style="margin: 4px 0 0 0;" class="fa fa-cog fa-spin fa-3x fa-fw"></i>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
            </div>
        </div>

        <hr>

        <!-- RESULTS DIV -->


      </div>
    </div>



@stop