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
			        			MakeGraph('#chart1 svg',data.charts_data);
			        			setTimeout(function(){ 

			        				request.save_image(JSON.stringify($(document).find('.curchart').html()),1);
			        			 
			        				var sphtml = getSpBaseHtml();
				        			$('#chart-wrapper').html(sphtml);
				        			//MAKE SPIDER GRAPH
				        			setTimeout(function(){ 
				        				MakeSpiderGraph('#chart','#sc');

				        				setTimeout(function(){ 
					        				request.save_image(JSON.stringify($(document).find('.curchart').html()),99);
					        			}, 1000);

				        			}, 1000);

			        			 }, 1000);



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

function getSpBaseHtml(){
	var html = '<style>'+
          '.nv-boxplot-box{fill: none !important;}'+
          '.nv-boxplot-tick,.nv-boxplot-whisker,.nv-boxplot-box{stroke:black !important;}'+
          'text {font:12px sans-serif;}'+
          'svg {display:block;}'+
          'svg {margin:0px;padding:0px;height:100% !important;width: 100% !important;}'+
        '</style>'+
	'<div class="curchart" id="sc" style="width:950px !important;height: 1000px; float: left !important">'+
        '<div id="chart" style="width:950px !important;height: 1000px; float: left !important">'+
          '<svg></svg>'+
        '</div>'+
      '</div>';
      return html;
}

function MakeSpiderGraph(p1,p2){
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
    RadarChart.draw(p1, d);

    ////////////////////////////////////////////
    /////////// Initiate legend ////////////////
    ////////////////////////////////////////////

    var svg = d3.select(p2)
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