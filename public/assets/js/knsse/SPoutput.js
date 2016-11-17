$(document).ready(function(){
    Function.prototype.bind = Function.prototype.bind || function (thisp) {
        var fn = this;
        return function () {
            return fn.apply(thisp, arguments);
        };
    };
    output.Init();
    setTimeout(function(){ request.make_doc() }, 1000);
});

output = {
    Init: function(){
        var w = 500,
            h = 500;

        var colorscale = d3.scale.category10();

        //Legend titles
        var LegendOptions = ['Smartphone','Tablet'];

        //Data
        var d = [
                  [
                    {axis:"Email",value:0.59},
                    {axis:"Social Networks",value:0.56},
                    {axis:"Internet Banking",value:0.42},
                    {axis:"News Sportsites",value:0.34},
                    {axis:"Search Engine",value:0.48},
                    {axis:"View Shopping sites",value:0.14},
                    {axis:"Paying Online",value:0.11},
                    {axis:"Buy Online",value:0.05},
                    {axis:"Stream Music",value:0.07},
                    {axis:"Online Gaming",value:0.12},
                    {axis:"Navigation",value:0.27},
                    {axis:"App connected to TV program",value:0.03},
                    {axis:"Offline Gaming",value:0.12},
                    {axis:"Photo Video",value:0.4},
                    {axis:"Reading",value:0.03},
                    {axis:"Listen Music",value:0.22},
                    {axis:"Watch TV",value:0.03},
                    {axis:"TV Movies Streaming",value:0.03},
                    {axis:"Listen Radio",value:0.07},
                    {axis:"Sending Money",value:0.18},
                    {axis:"Other",value:0.07},
                    {axis:"Use less Once week",value:0.08}
                  ],[
                    {axis:"Email",value:0.48},
                    {axis:"Social Networks",value:0.41},
                    {axis:"Internet Banking",value:0.27},
                    {axis:"News Sportsites",value:0.28},
                    {axis:"Search Engine",value:0.46},
                    {axis:"View Shopping sites",value:0.29},
                    {axis:"Paying Online",value:0.11},
                    {axis:"Buy Online",value:0.14},
                    {axis:"Stream Music",value:0.05},
                    {axis:"Online Gaming",value:0.19},
                    {axis:"Navigation",value:0.14},
                    {axis:"App connected to TV program",value:0.06},
                    {axis:"Offline Gaming",value:0.24},
                    {axis:"Photo Video",value:0.17},
                    {axis:"Reading",value:0.15},
                    {axis:"Listen Music",value:0.12},
                    {axis:"Watch TV",value:0.1},
                    {axis:"TV Movies Streaming",value:0.14},
                    {axis:"Listen Radio",value:0.06},
                    {axis:"Sending Money",value:0.16},
                    {axis:"Other",value:0.07},
                    {axis:"Use less Once week",value:0.17}
                  ]
                ];

        //Call function to draw the Radar chart
        //Will expect that data is in %'s
        RadarChart.draw("#chart", d);

        ////////////////////////////////////////////
        /////////// Initiate legend ////////////////
        ////////////////////////////////////////////

        var svg = d3.select('#sc')
            .selectAll('svg')
            .append('svg')
            .attr("width", w+300)
            .attr("height", h)

        //Create the title for the legend
        var text = svg.append("text")
            .attr("class", "title")
            .attr('transform', 'translate(90,0)') 
            .attr("x", w - 70)
            .attr("y", 10)
            .attr("font-size", "12px")
            .attr("fill", "#404040")
            .text("What % of owners use a specific service in a week");
                
        //Initiate Legend   
        var legend = svg.append("g")
            .attr("class", "legend")
            .attr("height", 100)
            .attr("width", 200)
            .attr('transform', 'translate(90,20)') 
            ;
            //Create colour squares
            legend.selectAll('rect')
              .data(LegendOptions)
              .enter()
              .append("rect")
              .attr("x", w - 65)
              .attr("y", function(d, i){ return i * 20;})
              .attr("width", 10)
              .attr("height", 10)
              .style("fill", function(d, i){ return colorscale(i);})
              ;
            //Create text next to squares
            legend.selectAll('text')
              .data(LegendOptions)
              .enter()
              .append("text")
              .attr("x", w - 52)
              .attr("y", function(d, i){ return i * 20 + 9;})
              .attr("font-size", "11px")
              .attr("fill", "#737373")
              .text(function(d) { return d; }); 


            }
};

request = {
    make_doc: function() {
        var token = $('meta[name=csrf-token]').attr('content');
        var bdata =  $(document).find("#wrapper").html();
        $.post(
            '/make-doc',
            {
                "_token": token,
                "hdata": bdata
            },
            function(result){
                var status = result.status;

                switch(status) {

                }
            }
            );
    }
};


function exampleData() {
    return [{
      label: "알ㄴㅁ",
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
function MakeGraph(elem, data){
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

            d3.select(elem)
              .datum(data)
              .call(chart);
            nv.utils.windowResize(function(){chart.update(); makeMarkOnMean();});
            makeMarkOnMean()
            function makeMarkOnMean(){
              d3.selectAll(".mean").remove();
              d3.selectAll(".nv-boxplot-box")[0].forEach(function(r){
                window.setTimeout(function(){
                  var x = parseFloat(d3.select(r).attr("x")) + d3.select(r).attr("width")/2 - 3;
                  var y = parseFloat(d3.select(r).attr("y")) + parseFloat(d3.select(r).attr("height"))/2+12;   
                  var box_x = parseFloat(d3.select(r).attr("x"));
                  var box_y = parseFloat(d3.select(r).attr("y"));
                  var line_x1 = parseFloat(d3.select(r.nextElementSibling).attr("x1"));
                  var line_x2 = parseFloat(d3.select(r.nextElementSibling).attr("x2"));
                  var line_y1 = parseFloat(d3.select(r.nextElementSibling).attr("y1"));
                  var line_y2 = parseFloat(d3.select(r.nextElementSibling).attr("y2"));  


                  var upper_height =line_y1-box_y;
                  var lower_height =(d3.select(r).attr("height"))-upper_height;
                  //UPPER Quartiles
                  d3.select(r.parentNode).append("rect").attr("height",upper_height).style("fill", "gray").style("stroke", "#000").attr("x",line_x1).attr("y",box_y).attr("width",d3.select(r).attr("width"));
                  // LOWER Quartiles
                  d3.select(r.parentNode).append("rect").attr("height",lower_height).style("fill", "white").style("stroke", "#000").attr("x",line_x1).attr("y",line_y1).attr("width",d3.select(r).attr("width"));
                  //MEAN TRIANGLE
                  d3.select(r.parentNode).append("text").attr("class", "mean").style("font-size", "22px").text("▲").style("fill", "#000").attr("x",(line_x1+line_x2)/2).attr("y", y).attr('text-anchor','middle');
                  //RE-RENDER LINE TO BRING TO FRONT
                  d3.select(r.parentNode).append("line").attr("class", "nv-boxplot-median").attr("x1",line_x1).attr("y1", line_y1).attr("x2",line_x2).attr("y2", line_y2).attr("stroke-width", '2px');
                },500)
              });
              
            }
            return chart;
        });
}