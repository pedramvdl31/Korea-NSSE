@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')

	<div class="jumbotron">
		<h1>Check Sheet View</h1>
	</div>


	<div  class="panel panel-default">
		<div class="panel-body page-content">
			{!!$table_html!!}
		</div>
		<div class="panel-footer clearfix">
			<div class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right">
				<a href="{!!route('gen_excel_link')!!}" style="margin: 1px 0" class="btn btn-primary btn-block">Download Excel&nbsp<i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
			</div>

			<div class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right" >
				<a href="{!!route('gen_pdf_link_emp')!!}" style="margin: 1px 0" class="btn btn-info btn-block">Download PDF&nbsp<i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
			</div>

			<div  class="form-controll col-md-3 col-lg-3 col-sm-4 col-xs-12 pull-right" >
				<a href="{!!route('gen_print_link_emp')!!}" target="_blank" style="margin: 1px 0" class="btn btn-default btn-block">Print&nbsp<i class="fa fa-print" aria-hidden="true"></i></a>
			</div>

		</div>
	</div>
@stop