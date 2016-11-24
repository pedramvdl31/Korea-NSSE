$(document).ready(function(){
	knsseup.pageLoad();
	knsseup.events();
	knsseup.file_upload();
	myCharts.Init();
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


                      GenPBGraph(data.charts_data);
                      GenRDGraph(data.charts_data);
                      GenLineGraph(data.charts_data);

                      GenPBGraph(data.charts_data);
                      GenRDGraph(data.charts_data);
                      GenLineGraph(data.charts_data);

                      GenPBGraph(data.charts_data);
                      GenRDGraph(data.charts_data);
                      GenLineGraph(data.charts_data);

                      GenPBGraph(data.charts_data);
                      GenRDGraph(data.charts_data);
                      GenLineGraph(data.charts_data);

                      GenPBGraph(data.charts_data);
                      GenRDGraph(data.charts_data);
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
  MakeGraph('#chart'+boxplotnum+' svg',data);
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

function GenLineGraph(data) {
  var linenum = LineHtml();
  
  var chart = c3.generate({
        bindto: '#chart'+linenum,
        size: {
            height: 200,
            width: 530
        },
        data: {
            columns: [
                ['data1', 30, 20, 10, 40, 15, 25, 50, 10, 25, 25],
                ['data2', 10, 10, 12, 40, 35, 25, 50, 20, 15, 50]
            ]
        },point: {
          r: function (d) {
            return d.id === 'data2' ? 5 : 3;
          }
        },
        axis: {
            x: {
              show: false,
              type: 'category',
              categories: ['', '', '', '', '', '', '', '', '']
            },
            y: {
                max: 50,
                min: 10,
                tick: {
                  format: function (d) {if (d != "15" && d != "25" && d != "35" && d != "45" ) return d}
                }
            }
        },
        tooltip: {
            show: false
        },
        legend: {
          show: false
        },
        grid: {
          y: {
              show: true
          }
        }
    });
}
function LineHtml(){
  var linelen = $(document).find('.chrts').length;
  var html= '<div id="picturediv"> <div id="chartwrapper"> <div id="containermy" style=""> <div class="chrts" id="chart'+linelen+'"></div> <div class="cs relat" id="table"> <table class="mytable"> <tr> <th class="t2td" style="border:none !important"></th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습고차 학습학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> <th>고차원 학습</th> </tr> <tr> <td class="frth"><span class="hrt2"><hr id="lhr" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> </tr> <tr> <td class="frth"><span class="hrt2"><hr id="lhr2" align="left" width="100%"></span><span class="textt2">&nbsp;2014년 전체</span></td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> <td>45.3</td> </tr> </table> </div> </div> </div> </div>';
  $('#ww').append(html);
  return linelen;
}



function MakeGraph(elem, data){
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

    d3.select('#chart1 svg')
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
                {axis:"다양한",value:0.48},
                {axis:"다양한",value:0.23},
                {axis:"다양한",value:0.11},
                {axis:"다양한",value:0.28},
                {axis:"다양한",value:0.32},
                {axis:"다양한",value:0.23},
                {axis:"다양한",value:0.11},
                {axis:"다양한",value:0.52},
                {axis:"다양한",value:0.15},
                {axis:"다양한",value:0.14},
                {axis:"다양한",value:0.24}
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