$(document).ready(function(){
	output.Init();
});

output = {
	Init: function(){
		// console.log('ehre');
		var mdata = jQuery.parseJSON(chartsdata);
		MakeGraph('#chart1 svg',mdata);
		// setTimeout(function(){ request.make_doc(); }, 1000);
    }
};

request = {
	make_doc: function(data_array) {
		var token = $('meta[name=csrf-token]').attr('content');
		var bdata =  $("#wrap1").html();
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