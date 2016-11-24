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
  <script src="/packages/c3-0.4.11/c3.min.js"></script>

  <script src="/assets/js/admins/knsse_upload.js"></script>
@stop

@section('content')

<style type="text/css">
  *{
        box-sizing: content-box;
  }
</style>
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
      <div id="ww">


        <style type="text/css">
          #picturediv{
          width: 610px;
          height: 500px;
          position: relative;
          float: left;
          overflow: hidden;
          }
          .curchart{
            width:950px;
            height: 400px;
            float: left;
            position: relative;
            width: 100%;
          }
          .grid .tick {
          stroke: lightgrey;
          opacity: 0.7;
          shape-rendering: crispEdges;
          }
          .grid path {
          stroke-width: 0;
          }
          .axis path {
          fill: none;
          stroke: #bbb;
          shape-rendering: crispEdges;
          }
          .axis path,
          .axis line {
          fill: none;
          stroke: #000;
          shape-rendering: crispEdges;
          }
          path {
          stroke: steelblue;
          stroke-width: 2;
          fill: none !important; 
          }
          g{
          background: transparent !important; 
          background-color: transparent !important; 
          }
          .x.axis path {
          display: none;
          }

          .lineCPI { 
          fill: none;
          stroke: #858abe;
          stroke-width: 2px;
          }

          .lineRPIJ {
          fill: none;
          stroke: #D8565F;
          stroke-width: 2px;
          }

          .grid .tick {
          stroke: lightgrey;
          stroke-opacity: 0.7;
          stroke-dasharray: ("3, 3");  
          shape-rendering: crispEdges;
          }
          .grid path {
          stroke-width: 0;
          }
          .axis text {
          fill: #555;
          }

          .axis line {  
          stroke: #e7e7e7;
          shape-rendering: crispEdges;
          }

          .axis .axis-label {
          font-size: 14px;
          }

          .line {
          fill: none;
          stroke-width: 1.5px;
          }

          .dot {
          /* consider the stroke-with the mouse detect radius? */
          stroke: transparent;
          stroke-width: 10px;  
          cursor: pointer;
          }

          .dot:hover {
          stroke: rgba(68, 127, 255, 0.3);
          }
          .c3-chart-lines .c3-target-data2 {
          stroke-dasharray: 3, 3
          }
          .cs{
          width: 590px;
          float: left;
          top: -8px;
          left: -71px;
          }
          }
          .textt2{
          position: relative;
          float: left;
          width: 70%;
          }
          #containermy{
          height: 300px;
          width: 100%;
          position: relative;
          }
          .relat{
          position: relative !important;
          }
          #chartwrapper{
          position: absolute;
          left: 70px;
          }
            .c3 line {
          fill: none;
          stroke: gray !important;
          }
          path.domain{
          stroke: gray !important;
          stroke-width: 1px !important;
          }
          .mytable tr:first-child td:nth-child(1), .mytable tr:first-child td:nth-child(2) {
          border:1px transparent;    
          }
          .mytable th,.frth{
          width: 100px !important;
          max-width: 100px !important;
          min-width: 100px !important;
          font-weight: 900;
          }
          .mytable th, td {
          font-size: 15px;
          border: 1px solid gray;
          border-collapse: collapse;
          padding: 5px;
          text-align: center;
          }
          .mytable th, td{
          min-width: 37.015624px !important;
          }
          #lhr{
          margin: 0 !important;
          padding: 0 !important;
          border: solid 1px black !important;
          }
          #lhr2{
          margin: 0 !important;
          padding: 0 !important;
          border: dashed 1px black !important;
          }
          table {
          background-color: transparent;
          }
          table {
          border-spacing: 0;
          border-collapse: collapse;
          }
          .mytable{
          width: 481.81px !important;
          }
        </style>







      </div>
    </div>
  </div>




@stop