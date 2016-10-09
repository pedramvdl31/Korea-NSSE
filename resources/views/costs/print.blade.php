<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {!! View::make('layouts.partials.javascript_vars'); !!}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" >
              var enc_de = jQuery.parseJSON(enc);
              function init() {
                  google.load("visualization", "1", { packages:["corechart"], callback: 'drawCharts' });
              }
              function drawCharts() {
                  drawAccountImpressions('chart-account-impressions');
              }

              
              function drawAccountImpressions(containerId) {
                var data = google.visualization.arrayToDataTable(enc_de);
                var options = {
                  title : '거래처별 매출액',
                  vAxis: {title: 'Total'},
                  hAxis: {title: 'Month'},
                  seriesType: 'bars',
                  series: {5: {type: 'line'}},
                  bar: { groupWidth: '75%' },
                  isStacked: true,
                };
                    var chart = new google.visualization.ComboChart(document.getElementById(containerId));
                    chart.draw(data, options);
                }
        </script>
        <script type="text/javascript" src="/assets/js/costs/print.js"></script>

    </head>
    <body onload="init()" style="width: 800px">
      <div id="chart-account-impressions" style="width: 800px"></div>



          <table class="table table-bordered" style="width: 800px"> 
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
            <tbody> 
                {!!$tbh!!}
            </tbody> 
          </table> 
    </body>
</html>
