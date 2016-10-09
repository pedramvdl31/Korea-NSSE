$(document).ready(function(){
	costsind.pageLoad();
	costsind.events();

});
costsind = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		
		var enc_de = jQuery.parseJSON(enc);
		window.costs_a = jQuery.parseJSON(costs_array);


      	google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart2);
		function drawChart2() {
	        // Some raw data (not necessarily accurate)
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

		  	var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
		  	chart.draw(data, options);
		}
		$(window).resize(function(){
		  drawChart2();
		});


	},
	events: function() {

        $('#gen_print').click(function(e){
            e.preventDefault();
            var w = window.open();
            var printOne = $('.page-content').html();
            w.document.write('<html><body>'+printOne+'</body></html>');
            w.window.print();
            return false;
        });

        $(document).on('dblclick','.re-td',function(){
        	var tt = $(this).text();
        	$( ".tmp-inp" ).remove();
        	var inp = '<input style="width:100px" type="text" class="form-control tmp-inp" placeholder="'+tt+'">'
         	$(this).html(inp);
         	$( ".tmp-inp" ).focus();

        });

        $(document).on('blur','.tmp-inp',function(){
        	$t_len = $('.tmp-inp').length;
        	if ($t_len>0) {
        		var this_company = $('.tmp-inp').parents('.re-td:first').attr('company');
        		var this_month = $('.tmp-inp').parents('.re-td:first').attr('month');
        		var pre_inp_t  = $('.tmp-inp').val();
        		if ($.isBlank(pre_inp_t) || !$.isNumeric(pre_inp_t)) {
        			var pre_inp_t  = $('.tmp-inp').attr('placeholder');
        		}
	        	var isin = 0;
	        	if (this_company in costs_a) {
	        		if (this_month in costs_a[this_company]) {
	        			isin = 1;
	        			costs_a[this_company][this_month]['value'] = pre_inp_t;
	        			costs_a[this_company][this_month]['updated'] = "1";
	        		}
	        	}
				if (isin==0) {
					costs_a[this_company][this_month]={value:pre_inp_t, user_id:"-",updated:'1'};
				}
        		$('.tmp-inp').parents('.re-td:first').text(pre_inp_t);
        	}
        	if ($('#cup').hasClass('hide')) {
         		$('#cup').removeClass('hide');
         	}
        	request_ci.update_report(JSON.stringify(costs_a));
        });
        $(document).on('click','#cup',function(){
        	request_ci.update_report(JSON.stringify(costs_a));
        });

	}
}
request_ci = {
	update_report: function(data_array) {
	$('.progress').removeClass('hide');
		setTimeout(function(){ pbaranim(10) }, 10);
		setTimeout(function(){ pbaranim(29) }, 200);
		setTimeout(function(){ pbaranim(37) }, 200);
		setTimeout(function(){ pbaranim(67) }, 400);
		var token = $('meta[name=csrf-token]').attr('content');
		$.post(
			'/admins/costs/update-report',
			{
				"_token": token,
				"data_array":data_array
			},
			function(result){
				var status = result.status;
				var table_html = result.tbh;
				var chart_array = result.chart_array;
				pbaranim(100);
				setTimeout(function(){ 
					$('.progress').addClass('hide');
					pbaranim(0);
				 }, 500);

				switch(status) {
					case 200: // Approved
						if (!$.isBlank(table_html)) {
							$('#report_table_body').html(table_html);
	        			}
						if (!$.isBlank(chart_array)) {
							var n_enc_de = jQuery.parseJSON(chart_array);
		        			$('#chart_div2').html('');
					      	// google.charts.load('current', {'packages':['corechart']});
					      	google.charts.setOnLoadCallback(drawChart2);
							function drawChart2() {
						        // Some raw data (not necessarily accurate)
					      		var data = google.visualization.arrayToDataTable(n_enc_de);
							    var options = {
							      title : '거래처별 매출액',
							      vAxis: {title: 'Total'},
							      hAxis: {title: 'Month'},
							      seriesType: 'bars',
							      series: {5: {type: 'line'}},
							      bar: { groupWidth: '75%' },
							      isStacked: true,

							    };

							  	var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
							  	chart.draw(data, options);
							}
							drawChart2();
							$(window).resize(function(){
							  drawChart2();
							});
	        			}
					break;				
					case 400: // Approved

					break;
					default:
					break;
				}
			}
			);
	}
};
(function($){
  $.isBlank = function(obj){
    return(!obj || $.trim(obj) === "");
  };
})(jQuery);
function pbaranim(vald){
	$('#pbar').css('width',vald+'%').attr('aria-valuenow',vald).text(vald+'%');
}