@extends($layout)
@section('stylesheets')
@stop
@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{ Html::script('/assets/js/costs/index.js') }}

@stop
@section('content')
<style type="text/css">
@page
{
size: landscape;
margin: 2cm;
}
</style>
<style type="text/css" media="print">
@page
{
size: landscape;
margin: 2cm;
}
</style>
<div class="jumbotron">
	<h1>Costs</h1>
	<ol class="breadcrumb">
		<li class="active">Costs Overview</li>
	</ol>
</div>

<style type="text/css">
	.grid {
	  background: white;
	  margin: 0 0 $pad 0;
	}

	.chart {
	  height: 600px;
	}
	/* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
		.chart {
		  width: 600px; 
		  height: 600px;
		}
    }

    /* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
        .chart {
		  width: 600px; 
		  height: 600px;
		}
    }

</style>

	<div  class="panel panel-default">
		<div class="panel-body page-content">
		  <div style="overflow-y: hidden !important;" class="col-md-12 col-sm-12" style="overflow: auto">
		    <div style="overflow-y: hidden !important;" id="chart_div2" class="chart"></div>
		  </div>
		  <style type="text/css">
		  tr th,.gr{
		  	background-color:#DEDEDE;
		  }
		  .re-td{
		  	cursor: pointer;
		  }
		  </style>



		  	<div class="col-md-12" style="padding: 0">
				<div class="table-responsive"> 
					<table class="table table-bordered"> 
						<thead> 
							<tr> 
								<th>업체명</th> 
								<th>2015년 1월</th> 
								<th>2월</th> 
								<th>3월</th> 
								<th>4월</th> 
								<th>5월</th> 
								<th>6월</th> 
								<th>7월</th> 
								<th>8월</th> 
								<th>9월</th> 
								<th>10월</th> 
								<th>11월</th> 
								<th>12월</th>
								<th>계</th>
							</tr> 
						</thead> 
						<tbody id="report_table_body"> 
								{!!$tbh!!}
						</tbody> 
					</table> 
				</div>

				  <div class="progress hide " >
				    <div id="pbar" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
				      0%
				    </div>
				  </div>

		  	</div>
		  	<a  id="cup" class="hide" style="color: #d9534f;cursor: pointer;">Click to Update Table and Chart*</a>

		</div>
		<div class="panel-footer clearfix">
			<div class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right">
				<a href="{!!route('gen_excel_link')!!}" style="margin: 1px 0" class="btn btn-primary btn-block">Download Excel&nbsp<i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
			</div>

			<div class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right" >
				<a href="{!!route('gen_pdf_link')!!}" style="margin: 1px 0" class="btn btn-info btn-block">Download PDF&nbsp<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
			</div>

			<div  class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right" >
				<a href="{!!route('gen_print_link')!!}" target="_blank" style="margin: 1px 0" class="btn btn-default btn-block">Print&nbsp<i class="fa fa-print" aria-hidden="true"></i></a>
			</div>

		</div>
	</div>
@stop