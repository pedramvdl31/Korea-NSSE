@extends($layout)
@section('stylesheets')
  {!! Html::style('assets/css/users/registration.css') !!}
  {!! Html::style('/assets/css/general.css') !!}
  <link href="/assets/js/d3/nv.d3.css" rel="stylesheet" type="text/css">
@stop
@section('scripts')
  <script src="/assets/js/d3/d3.min.js" charset="utf-8"></script>
  <script src="/assets/js/d3/nv.d3.js"></script>
  <script src="/assets/js/d3/RadarChart.js"></script>

  <script src="/assets/js/admins/knsse_upload.js"></script>
@stop

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding: 15px 15px 15px 15px;">
    <h1>
      K-NSSE Upload
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admins"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">K-NSSE Upload</li>
    </ol>
  </section>

  
  <div id="html-content-holder" class="panel panel-default" style="margin: 0px 15px 0 15px;">
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
            <br>
          </div>
      </div>
      <div id="pbarv" class="progress hide" style="width: 100%">
        <div id="pbari" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
        </div>
      </div>

      <hr>

    </div>
  </div>


  <div class="panel panel-default" style="margin: 15px 15px 0 15px;">
  <div class="panel-body" style="overflow: auto">
    <center id="whole-wrapper">
      <div id="chart-wrapper" class="curchart">
        <div class="gallery" id="chart1" style="width:950px !important;height: 1000px">
          <svg></svg>
        </div>
      </div>
    </center>
  </div>
  </div>



@stop