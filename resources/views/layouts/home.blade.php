<?php
/**
* Declare or set any page wide variables here
*/
?>

<!DOCTYPE Html>
<Html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta http-equiv="Content-Type" content="text/Html; charset=utf-8" />
  <title>cfihe</title>

  <!-- Bootstrap -->
  {!! Html::style('http://fonts.googleapis.com/css?family=Lobster|Oswald:400,300,700') !!}
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  {!! Html::style('/assets/css/image_lightbox.css') !!}
  {!! Html::style('/packages/totop/css/ui.totop.css') !!}
  {!! Html::style('/assets/css/home_layout.css')!!}
  {!! Html::style('/assets/css/general_styling/gs_1.css')!!}
  @yield('stylesheets')

<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
<script src="http://Html5shim.googlecode.com/svn/trunk/Html5.js"></script>
<![endif]-->
</head>
<body id="top" class="clearfix homepoint" data-spy="scroll" data-target="#nav">
 @include('flash::message')

@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
{!! Html::script('/assets/js/home_layout.js') !!}
@yield('scripts')

</script>
</body>
</Html>