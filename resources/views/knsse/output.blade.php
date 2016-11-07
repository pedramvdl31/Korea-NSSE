<!DOCTYPE html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <script src="/assets/plugins/jQuery/jquery-2.2.3.min.js" charset="utf-8"></script>
    <link href="/assets/js/d3/nv.d3.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/d3/d3.min.js" charset="utf-8"></script>
    <script src="/assets/js/d3/nv.d3.js"></script>


    <script src="/assets/js/knsse/output.js"></script>
    
<!--     <script src="{!!public_path()!!}/assets/plugins/jQuery/jquery-2.2.3.min.js" charset="utf-8"></script>
    <link href="{!!public_path()!!}/assets/js/d3/nv.d3.css" rel="stylesheet" type="text/css">
    <script src="{!!public_path()!!}/assets/js/d3/d3.min.js" charset="utf-8"></script>
    <script src="{!!public_path()!!}/assets/js/d3/nv.d3.js"></script>


    <script src="{!!public_path()!!}/assets/js/knsse/output.js"></script> -->


  <script type="text/javascript">
    window.chartsdata = '{!!$data!!}';
  </script>


  </head>

  <body>
 
   <div id="wrap1" style="width:950px !important;height: 1000px">
       <style>
          .nv-boxplot-box{
              fill: none !important;
          }
          .nv-boxplot-tick,.nv-boxplot-whisker,.nv-boxplot-box{
              stroke: black !important;
          }
          text {
            font: 12px sans-serif;
          }
          
          svg {
            display: block;
          }
          
          html,
          body,
          svg {
            margin: 0px;
            padding: 0px;
            height: 100%;
            width: 100%;
          }
        </style>
    <div class="gallery" id="chart1" style="width:950px !important;height: 1000px">
      <svg></svg>
    </div>
   </div>




  </body>

</html>