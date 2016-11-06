<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.8.1/nv.d3.css" rel="stylesheet" type="text/css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/nvd3/1.8.1/nv.d3.js"></script>

  <style>
    text {
      font: 12px sans-serif;
    }
    
    svg {
      display: block;
    }
    
    html,
    body,
    #chart1,
    svg {
      margin: 0px;
      padding: 0px;
      height: 100%;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="gallery" id="chart1">
    <svg>
        <defs>
          <style type="text/css">
            .nv-boxplot-box{
                fill: none !important;
            }
            .nv-boxplot-tick,.nv-boxplot-whisker,.nv-boxplot-box{
                stroke: black !important;
            }
          </style>
        </defs>
    </svg>
  </div>

  <script>
    nv.addGraph(function() {
      var chart = nv.models.boxPlotChart()
        .x(function(d) {
          return d.label
        })
        .y(function(d) {
          return d.values.Q3
        })
        .staggerLabels(true)
        .maxBoxWidth(75) // prevent boxes from being incredibly wide 
        .yDomain([0, 500]);

      d3.select('#chart1 svg')
        .datum(exampleData())
        .call(chart);
      nv.utils.windowResize(function(){chart.update(); makeMarkOnMean();});
      makeMarkOnMean()
      function makeMarkOnMean(){
        d3.selectAll(".mean").remove();
        d3.selectAll(".nv-boxplot-box")[0].forEach(function(r){
          window.setTimeout(function(){
            var x = parseFloat(d3.select(r).attr("x")) + d3.select(r).attr("width")/2 - 3;
            var y = parseFloat(d3.select(r).attr("y")) + parseFloat(d3.select(r).attr("height"))/2+12;   
            var box_x = d3.select(r).attr("x");
            var box_y = d3.select(r).attr("y");
            var line_x1 = d3.select(r.nextElementSibling).attr("x1");
            var line_x2 = d3.select(r.nextElementSibling).attr("x2");
            var line_y1 = d3.select(r.nextElementSibling).attr("y1");
            var line_y2 = d3.select(r.nextElementSibling).attr("y2");  
            var upper_height =line_y1-box_y;
            var lower_height =(d3.select(r).attr("height"))-upper_height;
            //UPPER Quartiles
            d3.select(r.parentNode).append("rect").attr("height",upper_height).style("fill", "gray").style("stroke", "#000").attr("x",line_x1).attr("y",box_y).attr("width",d3.select(r).attr("width"));
            // LOWER Quartiles
            d3.select(r.parentNode).append("rect").attr("height",lower_height).style("fill", "white").style("stroke", "#000").attr("x",line_x1).attr("y",line_y1).attr("width",d3.select(r).attr("width"));
            //MEAN TRIANGLE
            d3.select(r.parentNode).append("text").attr("class", "mean").style("font-size", "25px").html("&#9650;").style("fill", "#000").attr("x",x-9).attr("y", y);
            //RE-RENDER LINE TO BRING TO FRONT
            d3.select(r.parentNode).append("line").attr("class", "nv-boxplot-median").attr("x1",line_x1).attr("y1", line_y1).attr("x2",line_x2).attr("y2", line_y2).attr("stroke-width", '2px');
          },500)
        });
        
      }
      return chart;
    });

    function exampleData() {
      return [{
        label: "Sample A",
        values: {
          Q1: 120,
          Q2: 150,
          Q3: 200,
          whisker_low: 115,
          whisker_high: 210
        },
      }, {
        label: "Sample B",
        values: {
          Q1: 300,
          Q2: 350,
          Q3: 400,
          whisker_low: 225,
          whisker_high: 425,
          outliers: [175]
        },
      }, {
        label: "Sample C",
        values: {
          Q1: 50,
          Q2: 100,
          Q3: 125,
          whisker_low: 25,
          whisker_high: 175,
          outliers: [0]
        },
      }];
    }



  </script>

</body>

</html>