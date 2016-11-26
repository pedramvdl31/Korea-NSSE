$(document).ready(function(){
	knsseup.pageLoad();
	knsseup.events();
	knsseup.file_upload();
	myCharts.Init();

    window.dstl = ["10, 0","5, 1", "5, 5","2, 2"];
    window.cls = ["#0070ff","blue", "yellow","green"];
    window.lcol = ["#d4e3f6","#99a86a", "#51181e","#232323"];
    window.lcol2 = ["#0070ff","#99a86a", "#51181e","#232323"];
    window.cop = ["0.2","0", "0","0"];
});
knsseup = {
	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
	},
	events: function() {

	},
	file_upload: function(){
		$('#form-submit-btn').change(function () {
			$('#loading-icons-1').fadeIn();

			event.stopPropagation(); // Stop stuff happening
		    event.preventDefault(); // Totally stop stuff happening

		    // START A LOADING SPINNER HERE

		    // Create a formdata object and add the files
		    var this_file = new FormData();
		    $.each(this.files, function(key, value)
		    {
		        this_file.append(key, value);
		    });
		 	$.ajax({
		 		    xhr: function() {
				        var xhr = new window.XMLHttpRequest();
				        xhr.upload.addEventListener("progress", function(evt) {
				            if (evt.lengthComputable) {
				            	$('#pbarv').removeClass('hide');
				                var percentComplete = (evt.loaded / evt.total) * 100;
				                $('#pbari').attr('aria-valuenow',percentComplete).css('width',percentComplete+'%').text(percentComplete.toFixed(2)+'%');
				                //Do something with upload progress here
				            }
				       }, false);
				       return xhr;
				    },
			        url: '/admins/knsse-file-upload',
			        type: 'POST',
			        data: this_file,
			        cache: false,
			        dataType: 'json',
			        processData: false, // Don't process the files
			        contentType: false, // Set content type to false as jQuery will tell the server its a query string request
			        success: function(data, textStatus, jqXHR)
			        {
			        	var status = data.status;
			        	$('#loading-icons-1').fadeOut();
			        	switch (status){
			        		case 200:
			        			// var mdata = jQuery.parseJSON(chartsdata);
			        			//MAKE BOX PLOT GRAPH


                      // GenPBGraph(data.charts_data);
                      // GenRDGraph(data.charts_data);
                      GenLineGraph(data.charts_data);

			        			





			        		break;
			        		case 400:

			        		break;
			        	}
			        },
			        error: function(jqXHR, textStatus, errorThrown)
			        {

			        }
			    });
			});
	}
}


myCharts = {
	Init: function() {


	}
}


request = {
    save_image: function(bdata,fst) {
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/save-as-image',
            {
                "_token": token,
                "hdata": bdata,
                "fst":fst
            },
            function(result){
                var status = result.status;
                switch(status) {

                }
            }
            );
    }
};

function GenPBGraph(data) {
  var boxplotnum = AppendBoxPlotHtml();
  MakeBPGraph('#chart'+boxplotnum+' svg',data,boxplotnum);
}
function AppendBoxPlotHtml(){
  var bpcrtlen = $(document).find('.chrts').length;
  var html=  '<div class="curchart">'+
                '<div class="chrts gallery bpcrt" id="chart'+bpcrtlen+'" style="width:950px !important;height: 400px">'+
                  '<svg></svg>'+
                '</div>'+
              '</div>';
    $('#ww').append(html);
    return bpcrtlen;
}

function GenRDGraph(data) {
  var rdcrtlen = getRDBaseHtml();
  MakeRadarGraph('#chart'+rdcrtlen,'#sc'+rdcrtlen);
}
function getRDBaseHtml(){
  var rdcrtlen = $(document).find('.chrts').length;
  var html = '<style>'+
              '.nv-boxplot-box{fill: none !important;}'+
              '.nv-boxplot-tick,.nv-boxplot-whisker,.nv-boxplot-box{stroke:black !important;}'+
              'text {font:12px sans-serif;}'+
              'svg {display:block;}'+
              'svg {margin:0px;padding:0px;height:100% !important;width: 100% !important;}'+
              '</style>'+
              '<div class="curchart" id="sc'+rdcrtlen+'" style="">'+
                '<div class="chrts rdcrt" id="chart'+rdcrtlen+'" style="width:450px !important;height: 400px;float:left;">'+
                  '<svg></svg>'+
                '</div>'+
              '</div>';
  $('#ww').append(html);
  return rdcrtlen;
}

function GenLineGraph(el) {
    var elnum = LineHtml();
    var color = function(i) {
        var colors = ["#0a2469", "#49abe5",
                      "#6d0000", "#c34949"];
        return colors[i % colors.length]
    };

    // What symbols are we going to use for the different
    // datasets.
    var symbol = function(i) {
        var symbols = ["circle", "diamond", "square",
                       "triangle-up", "triangle-down", "cross"];
        return d3.svg.symbol()
                 .size(40)
                 .type(symbols[i % symbols.length]);
    };

    // Define the dimensions of the visualization.
    var margin = {top: 80, right: 170, bottom: 50, left: 50},
        width = 706 - margin.left - margin.right,
        height = 436 - margin.top - margin.bottom;

    var x = d3.time.scale()
        .range([0, width]);

    var y = d3.scale.linear()
        .range([height, 0]);

    var xAxis = d3.svg.axis()
        .scale(x)
        .tickSize(0, 0, 0)
        .tickPadding(10)
        .tickFormat(d3.time.format("%b"))
        .orient("bottom");

    var yAxis = d3.svg.axis()
        .scale(y)
        .tickSize(-width, 0, 0)
        .tickPadding(10)
        .orient("left");

    var line = d3.svg.line()
        .x(function(d) { return x(d.date); })
        .y(function(d) { return y(d.temp); });

    var svg = d3.select('#chart'+elnum).append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
      .append("g")
        .attr("transform", "translate(" + margin.left +
              "," + margin.top + ")");

    // Define the data
    var datasets = [{
      "name": "2014년 3학년",
      "data": [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3]
     },{
      "name": "2015년 4학년",
      "data": [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1]
     }];

    datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function(d,i) {
            return {
                "date": d3.time.month.offset(
                            new Date(2013,0,1), i),
                "temp": d
            };
        });
    })

    var xMin = new Date(2013,0,1),
        xMax = d3.time.month.offset(xMin,
                   d3.max(datasets,function(dataset) {
                       return dataset.data.length-1;
               }));
    x.domain([d3.time.day.offset(xMin,-16),
          d3.time.day.offset(xMax,15)]);

    // For the y-values, we want the chart to show the minimum
        // and maximum valuesfrom all the datasets.
        var yMin = d3.min(datasets, function(dataset) {
        return d3.min(dataset.data, function(d) {
                return d.temp;
        });
        });
        var yMax = d3.max(datasets, function(dataset) {
        return d3.max(dataset.data, function(d) {
            return d.temp;
        });
    });

    // The `.nice()` function gives the domain nice
    // rounded limits.
    y.domain([yMin, yMax]).nice();


    // For the y-axis, we add a label.
    svg.append("g")
        .attr("class", "y axis")
        .call(yAxis);

    svg.selectAll(".axis line, .axis path")
        .attr("fill", "none")
        .attr("stroke", "#bbbbbb")
        .attr("stroke-width", "2px")
        .attr("shape-rendering", "crispEdges");

    svg.selectAll(".axis text")
        .attr("font-size", "14");

    svg.selectAll(".axis .tick line")
        .attr("stroke", "#d0d0d0")
        .attr("stroke-width", "1");


    // Plot the data and the legend
    datasets.forEach(function(dataset, i) {

        // Individual points
        svg.selectAll(".point.dataset-" + i)
            .data(dataset.data)
          .enter().append("path")
            .attr("class", "point dataset-" + i)
            .attr("fill", color(i))
            .attr("stroke", color(i))
            .attr("d", symbol(i))
            .attr("transform", function(d) {
                return "translate(" + x(d.date) +
                                  "," + y(d.temp) + ")";
            });

        // Connect the points with lines
        svg.append("path")
            .datum(dataset.data)
            .attr("class", "line dataset-" + i)
            .attr("fill", "none")
            .attr("stroke", color(i))
            .attr("stroke-width", "2")
            .style("stroke-dasharray",dstl[i])
            .attr("d", line);

        d3.select("svg").append("path")
            .attr("class", "point dataset-" + i)
            .attr("fill", color(i))
            .attr("stroke", color(i))
            .attr("d", symbol(i))
            .attr("transform", "translate(" +
                (margin.left + width + 40) + "," +
                (20*i + margin.top + height/2 -
                 20*datasets.length/2 - 6) + ")");

        d3.select("svg").append("line")
            .attr("class", "line dataset-" + i)
            .attr("stroke", color(i))
            .attr("stroke-width", "2")
            .style("stroke-dasharray",dstl[i])
            .attr("x1", margin.left + width + 30)
            .attr("x2", margin.left + width + 50)
            .attr("y1", 20*i + margin.top + height/2 -
                        20*datasets.length/2 - 6)
            .attr("y2", 20*i + margin.top + height/2 -
                        20*datasets.length/2 - 6);

        d3.select("svg").append("text")
            .attr("transform", "translate(" +
                (margin.left + width + 60) + "," +
                (20*i + margin.top + height/2 -
                 20*datasets.length/2) + ")")
            .attr("class", "legend")
            .attr("font-size", "15")
            .attr("text-anchor", "left")
            .text(dataset.name);

    });
}
function LineHtml(){
  var linelen = $(document).find('.chrts').length;
  var html= '<div id="picturediv" style="height:900px"> <div id="chartwrapper"> <div id="containermy" style=""> <div class="chrts" id="chart'+linelen+'"></div> <div class="cs relat" id="table"> <table class="mytable"> <tr> <th class="t2td" style="border:none !important"></th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습고차 학습학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> </tr> <tr> <td class="frth"><span class="hrt2"><hr id="lhr" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> </tr> <tr> <td class="frth"><span class="hrt2"><hr id="lhr2" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> </tr> </table> </div> </div> </div> </div>';
  $('#ww').append(html);
  return linelen;
}



function MakeBPGraph(elem, data,gid){
  var width = 300,
      height = 300;

	nv.addGraph(function() {
	var chart = nv.models.boxPlotChart()
    .margin({top: 20, right:0, bottom:0, left:35})
	  .x(function(d) {
	    return d.label
	  })
	  .y(function(d) {
	    return d.values.Q3
	  })
    .width(300)
    .height(300)
	  .yDomain([10, 60]);



  	d3.select(elem)
  	  .datum(data)
  	  .call(chart);

    d3.select('#chart'+gid+' svg')
      .append("text")
      .attr("x", 180)             
      .attr("y", 15)
      .attr("text-anchor", "middle")  
      .attr("font-weight", "900")  
      .text("효과적 교수활동");

	nv.utils.windowResize(function(){chart.update(); makeMarkOnMean();});
	makeMarkOnMean();
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
	      d3.select(r.parentNode).append("text").attr("class", "mean").style("font-size", "16px").text("◆").style("fill", "#000").attr("x",((line_x1+line_x2)/2)).attr("y", y).attr('text-anchor','middle');
	      //RE-RENDER LINE TO BRING TO FRONT
	      d3.select(r.parentNode).append("line").attr("class", "nv-boxplot-median").attr("x1",line_x1).attr("y1", line_y1).attr("x2",line_x2).attr("y2", line_y2).attr("stroke-width", '2px');
	    },500)
	  });
	  
	}
	return chart;
});
}

function MakeRadarGraph(p1,p2){
    var w = 350,
    h = 200;

    var colorscale = d3.scale.category10();
    //Legend titles
    var LegendOptions = ['전국','수도건大','수도건大','가나대학교'];
    //Data
    var d = [
              [
                {axis:"다양한 그룹과 토론",value:0.59},
                {axis:"다양한",value:0.56},
                {axis:"다양한",value:0.42},
                {axis:"다양한",value:0.34},
                {axis:"다양한",value:0.48},
                {axis:"다양한",value:0.14},
                {axis:"다양한",value:0.11},
                {axis:"다양한",value:0.05},
                {axis:"다양한",value:0.07},
                {axis:"다양한",value:0.12},
                {axis:"다양한",value:0.27}
              ],[
                {axis:"다양한",value:0.48},
                {axis:"다양한",value:0.41},
                {axis:"다양한",value:0.27},
                {axis:"다양한",value:0.28},
                {axis:"다양한",value:0.46},
                {axis:"다양한",value:0.29},
                {axis:"다양한",value:0.11},
                {axis:"다양한",value:0.14},
                {axis:"다양한",value:0.05},
                {axis:"다양한",value:0.19},
                {axis:"다양한",value:0.14}
              ],[
                {axis:"다양한",value:0.28},
                {axis:"다양한",value:0.4},
                {axis:"다양한",value:0.23},
                {axis:"다양한",value:0.78},
                {axis:"다양한",value:0.46},
                {axis:"다양한",value:0.29},
                {axis:"다양한",value:0.51},
                {axis:"다양한",value:0.64},
                {axis:"다양한",value:0.55},
                {axis:"다양한",value:0.79},
                {axis:"다양한",value:0.24}
              ],[
                {axis:"다양한",value:0.48},
                {axis:"다양한",value:0.53},
                {axis:"다양한",value:0.71},
                {axis:"다양한",value:0.18},
                {axis:"다양한",value:0.62},
                {axis:"다양한",value:0.23},
                {axis:"다양한",value:0.41},
                {axis:"다양한",value:0.72},
                {axis:"다양한",value:0.25},
                {axis:"다양한",value:0.44},
                {axis:"다양한",value:0.54}
              ]
            ];

    //Call function to draw the Radar chart
    //Will expect that data is in %'s
    RadarChart.draw(p1, d);

    var svg = d3.select(p2)
        .selectAll('svg')
        .append('svg')
        .attr("width", w+300)
        .attr("height", h)

    //Create the title for the legend
    // var text = svg.append("text")
    //     .attr("class", "title")
    //     .attr('transform', 'translate(90,0)') 
    //     .attr("x", w - 70)
    //     .attr("y", 10)
    //     .attr("font-size", "12px")
    //     .attr("fill", "#404040")
    //     .text("What % of owners use a specific service in a week");
            
    //Initiate Legend   
    var legend = svg.append("g")
        .attr("class", "legend")
        .attr("height", 100)
        .attr("width", 200)
        .attr('transform', 'translate(90,20)') 
        ;
    //Create colour squares
    // legend.selectAll('rect')
    //   .data(LegendOptions)
    //   .enter()
    //   .append("rect")
    //   .attr("x", w - 65)
    //   .attr("y", function(d, i){ return i * 20;})
    //   .attr("width", 10)
    //   .attr("height", 10)

    //   .style("fill", function(d, i){ return colorscale(i);})
    //   ;
    legend.selectAll('rect')
        .data(LegendOptions)
        .enter()
        .append("line")//making a line for legend
        .attr("x1", w - 68)
        .attr("x2", w - 50)
        .attr("y1", function(d, i){ return i * 20;})
        .attr("y2", function(d, i){ return i * 20;})
        .style("stroke-dasharray",function(d, i){ return dstl[i];})//dashed array for line
        .style("stroke", function(d, i){ return lcol2[i];});
    //Create text next to squares
    legend.selectAll('text')
      .data(LegendOptions)
      .enter()
      .append("text")
      .attr("x", w - 50)
      .attr("y", function(d, i){ return i * 20 + 9;})
      .attr("font-size", "11px")
      .attr("fill", "#737373")
      .text(function(d) { return d; }); 
}