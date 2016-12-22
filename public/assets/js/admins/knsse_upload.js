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
                                var uninames = jQuery.parseJSON(data.uni_names);
                                var cdata = data.charts_data;
                                knsseup.MakeFolders(uninames,cdata);
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
	},
    MakeFolders: function(this_data,cdata){
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/crtunifldrs',
            {
                "_token": token,
                "data": this_data
            },
            function(result){
                var status = result.status;
                switch(status) {
                    case 200:
                        knsseup.GenerateCharts(this_data,cdata);
                    break;
                    case 400:
                    break;
                }
            }
            );
    },
    GenerateCharts: function(uninames,cdata){
        charts_data = cdata;
        var unis = uninames.length;
        var numcharts = 9;
        window.exe_flag = unis * numcharts;
        $.each(uninames, function( ind, va ) {
            GenRDGraph(charts_data,10,377,1,ind);
            GenRDGraph(charts_data,10,377,0,ind);
            GenRDGraph(charts_data,10,377,0,ind);
            GenRDGraph(charts_data,10,377,0,ind);
            GenLineGraph(charts_data,250,630,0,ind);
            GenLineGraph(charts_data,250,630,0,ind);
            GenLineGraph(charts_data,250,630,0,ind);
            // GenPBGraph(charts_data,200,330,0,ind);
            GenPBGraph(charts_data,200,330,9,ind);
        });

        setTimeout(function(){ 
            knsseup.MakeDocs(uninames);
        }, 20000);
    },
    MakeDocs: function(uninms){
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/makedocs',
            {
                "_token": token,
                "data": uninms
            },
            function(result){
                var status = result.status;
                switch(status) {
                    case 200:
                        knsseup.RenameFolders(uninms);
                    break;
                    case 400:
                    break;
                }
            }
        );
    },
    RenameFolders: function(uninms){
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/rnamunitokrn',
            {
                "_token": token,
                "data": uninms
            },
            function(result){
                var status = result.status;
                switch(status) {
                    case 200:
                        knsseup.DwnldZip();
                    break;
                    case 400:
                    break;
                }
            }
        );
    },
    DwnldZip: function(){
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/dwnldzip',
            {
                "_token": token
            },
            function(result){
                var status = result.status;
                switch(status) {
                    case 200:
                        window.location = result.file_path;
                    break;
                    case 400:
                    break;
                }
            }
        );
    }
}


myCharts = {
	Init: function() {


	}
}


request = {
    save_image: function(bdata,wi,he,pnum,uname) {
        exe_flag 
        console.log('current val is: '+exe_flag);
        exe_flag = exe_flag - 1;
        console.log('new val is: '+exe_flag);
        var token = $('meta[name=csrf-token]').attr('content');
        $.post(
            '/save-as-image',
            {
                "_token": token,
                "hdata": bdata,
                "pnum":pnum,
                "width":wi,
                "height":he,
                "uname":uname
            },
            function(result){
                var status = result.status;
                switch(status) {
                    case 200:
                        
                    break;
                    case 9:
                        window.location = result.file_path;
                    break;
                }
            }
            );
    }
};

function GenPBGraph(data,wi,he,pnum,uname) {
  var elnum = AppendBoxPlotHtml();
  var width = 300,
      height = 300;

    nv.addGraph(graph_initialize, myCallback);

    function graph_initialize(){
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


        d3.select('#ch'+elnum+' svg')
          .datum(data)
          .call(chart);

        d3.select('#ch'+elnum+' svg')
          .append("text")
          .attr("x", 180)             
          .attr("y", 15)
          .attr("text-anchor", "middle")  
          .attr("font-weight", "900")  
          .text("효과적 교수활동");
        return chart;        
    }
    function myCallback(){
          d3.selectAll(".mean").remove();
          var count = 0;
          d3.selectAll("#ch"+elnum+" svg .nv-boxplot-box")[0].forEach(function(r){
            window.setTimeout(function(){
                count+=1;
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
                if (count==3) {
                    //SAVE GRAPH AS IMAGE
                    var htmlel = $(document).find('.pd'+elnum).html();
                    request.save_image(htmlel,wi,he,pnum,uname); 
                }  
            },600)
          });
    }
}
function AppendBoxPlotHtml(){
    var linelen = randomid();
    while(($(document).find('#ch'+linelen).length)!=0){
    linelen = randomid();
    }
    var html= '<div class="curchartx pd'+linelen+' picturediv">'+
                '<div class="chrts gallery bpcrt" id="ch'+linelen+'" style="width:310px !important;height: 400px">'+
                  '<svg></svg>'+
                '</div>'+
              '</div>';
    $('#ww').append(html);
    return linelen;
}

function GenRDGraph(data,wi,he,pnum,uname) {
    var elnum = getRDBaseHtml();
    var p1 = '#ch'+elnum;
    var p2 = '#sc'+elnum;
    var w = 300,h = 300;
    var colorscale = d3.scale.category10();
    //Legend titles
    var LegendOptions = ['전국','수도건大','수도건大','가나대학교'];
    //Data
    var d = [
              [
                {axis:"다양한 그룹과 토론",value:59},
                {axis:"다양한",value:56},
                {axis:"다양한",value:52},
                {axis:"다양한",value:54},
                {axis:"다양한",value:58},
                {axis:"다양한",value:54},
                {axis:"다양한",value:51},
                {axis:"다양한",value:55},
                {axis:"다양한",value:57},
                {axis:"다양한",value:52},
                {axis:"다양한",value:57}
              ],[
                {axis:"다양한",value:48},
                {axis:"다양한",value:41},
                {axis:"다양한",value:47},
                {axis:"다양한",value:48},
                {axis:"다양한",value:46},
                {axis:"다양한",value:49},
                {axis:"다양한",value:41},
                {axis:"다양한",value:40},
                {axis:"다양한",value:45},
                {axis:"다양한",value:49},
                {axis:"다양한",value:44}
              ],[
                {axis:"다양한",value:28},
                {axis:"다양한",value:24},
                {axis:"다양한",value:23},
                {axis:"다양한",value:20},
                {axis:"다양한",value:26},
                {axis:"다양한",value:29},
                {axis:"다양한",value:21},
                {axis:"다양한",value:40},
                {axis:"다양한",value:25},
                {axis:"다양한",value:29},
                {axis:"다양한",value:24}
              ],[
                {axis:"다양한",value:58},
                {axis:"다양한",value:53},
                {axis:"다양한",value:51},
                {axis:"다양한",value:58},
                {axis:"다양한",value:50},
                {axis:"다양한",value:53},
                {axis:"다양한",value:41},
                {axis:"다양한",value:52},
                {axis:"다양한",value:55},
                {axis:"다양한",value:54},
                {axis:"다양한",value:54}
              ]
            ];

    var mycfg = {
      w: w,
      h: h,
      maxValue: 60,
      levels: 6,
      ExtraWidthX: 150
    }

    //Call function to draw the Radar chart
    //Will expect that data is in %'s
    RadarChart.draw(p1, d,mycfg);

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
        .attr("x1", w - 20)
        .attr("x2", w - 2)
        .attr("y1", function(d, i){ return ((i * 20)+5);})
        .attr("y2", function(d, i){ return ((i * 20)+5);})
        .style("stroke-dasharray",function(d, i){ return dstl[i];})//dashed array for line
        .style("stroke", function(d, i){ return lcol2[i];});
    //Create text next to squares
    legend.selectAll('text')
      .data(LegendOptions)
      .enter()
      .append("text")
      .attr("x", w)
      .attr("y", function(d, i){ return i * 20 + 9;})
      .attr("font-size", "11px")
      .style("font-weight", "900")
      .attr("fill", "#737373")
      .text(function(d) { return d; });

    //SAVE GRAPH AS IMAGE
    var htmlel = $(document).find('.pd'+elnum).html();
    request.save_image(htmlel,wi,he,pnum,uname);
}

function getRDBaseHtml(){
    var linelen = randomid();
    while(($(document).find('#ch'+linelen).length)!=0){
        linelen = randomid();
    }
    var h = '<style>'+
          '.nv-boxplot-box{fill: none !important;}'+
          '.nv-boxplot-tick,.nv-boxplot-whisker,.nv-boxplot-box{stroke:black !important;}'+
          'text {font:12px sans-serif;}'+
          'svg {display:block;}'+
          'svg {margin:0px;padding:0px;height:100% !important;width: 100% !important;}'+
          '</style>'+
          '<div class="curchart pd'+linelen+' picturediv" id="sc'+linelen+'">'+
            '<div class="chrts rdcrt" id="ch'+linelen+'" style="width:450px !important;height: 400px;float:left;">'+
              '<svg></svg>'+
            '</div>'+
          '</div>';
    $('#ww').append(h);
    return linelen;
}

function GenLineGraph(el,wi,he,pnum,uname) {
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
    var margin = {top: 10, right: 10, bottom: 10, left: 50},
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

    var svg = d3.select('#ch'+elnum).append("svg")
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
      "data": [-0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2]
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

        $(document).find('#leg'+i).css('color',color(i));
        // Individual points
        $(document).find('#hr'+i).css('border-color',color(i));
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

    });


    //SAVE GRAPH AS IMAGE
    var htmlel = $(document).find('.pd'+elnum).html();
    request.save_image(htmlel,wi,he,pnum,uname);
}
function LineHtml(){
  var linelen = randomid();
  while(($(document).find('#ch'+linelen).length)!=0){
    linelen = randomid();
  }
  var html= '<div class="pd'+linelen+' picturediv" style="height:900px"> <div id="chartwrapper"> <div id="containermy" style=""> <div class="chrts" id="ch'+linelen+'"></div> <div class="cs relat" id="table"> <table class="mytable"> <tr> <th class="t2td" style="border:none !important"> </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습고차 학습학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> <th>고차원 학습 </th> </tr> <tr> <td class="frth" id="leg0"> <span class="hrt2"> <hr id="hr0" align="left" width="100%"> <span class="lsymb">•</span></span> <span class="textt2">&nbsp;2014년 전체 </span> </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> </tr> <tr> <td class="frth" id="leg1"> <span class="hrt2 "> <hr id="hr1" align="left" width="20px"> <span class="lsymb lsymbd">♦</span> </span> <span class="textt2">&nbsp;2014년 전체 </span> </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> <td>45.3 </td> </tr> </table> </div> </div> </div> </div>';
  $('#ww').append(html);
  return linelen;
}

function randomid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for( var i=0; i < 10; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}