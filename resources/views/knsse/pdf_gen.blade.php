<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="/packages/fusioncharts/js/fusioncharts.js"></script>
      <script type="text/javascript" src="/packages/fusioncharts/js/themes/fusioncharts.theme.fint.js"></script>
      <script src="/assets/js/admins/knsse_upload.js"></script>
      <script type="text/javascript" >
        FusionCharts.ready(function () {
            var salaryDistribution = new FusionCharts({
                type: 'boxandwhisker2d',
                animation:0,
                renderAt: 'chart-container',
                width: '500',
                height: '350',
                dataFormat: 'json',
                dataSource:
                {
                    "chart": {
                        "caption": "Distribution of annual salaries",
                        "subcaption": "By Gender",                
                        "xAxisName": "Pay Grades",
                        "YAxisName": "Salaries (In USD)",                
                        "numberPrefix": "$",
                        "theme": "fint",
                        "usePlotGradientColor": "",
                        "showValues": "0",
                        "showMean": "1"
                    },
                    "categories": [
                        {
                            "category": [
                                {
                                    "label": "Grade 1"
                                }, 
                                {
                                    "label": "Grade 2"
                                }, 
                                {
                                    "label": "Grade 3"
                                }
                            ]
                        }
                    ],
                    "dataset": [
                        {
                            "seriesname": "Male",
                            "lowerboxcolor": "#008ee4",
                            "upperboxcolor": "#6baa01",
                            "data": [
                                {
                                    "value": "2400,2000,2500,2800,3500,4000, 3700, 3750, 3880, 5000,5500,7500,8000,8200, 8400, 8500, 8550, 8800, 8700, 9000, 14000"
                                }, 
                                {
                                    "value": "7500,9000,12000,13000,14000,16500,17000, 18000, 19000, 19500"
                                }, 
                                {
                                    "value": "15000,19000,25000,32000,50000,65000"
                                }
                            ]
                        }, {
                            "seriesname": "Female",
                            "lowerboxcolor": "#e44a00",
                            "upperboxcolor": "#f8bd19",
                            "data": [
                                {
                                    "value": "1900,2100,2300,2350,2400,2550,3000,3500,4000, 6000, 6500, 9000"
                                }, 
                                {
                                    "value": "7000,8000,8300,8700,9500,11000,15000, 17000, 21000"
                                }, 
                                {
                                    "value": "24000,32000,35000,37000,39000, 58000"
                                }
                            ]
                        }
                    ]
                }                
            }).render();
        });

      </script>

    </head>
    <body style="width: 100%">
        <div id="chart-container">FusionCharts will render here</div>
    </body>
</html>
