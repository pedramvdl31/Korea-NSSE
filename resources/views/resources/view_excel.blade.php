@extends($layout)
@section('stylesheets')
@stop
@section('scripts')
@stop
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
  <style type="text/css">
  	.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #313131;
}

  </style>
    {!!$html_table!!}
  </div>
</div>
@stop