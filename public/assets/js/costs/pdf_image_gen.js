$(document).ready(function(){
	costsind.pageLoad();
	costsind.events();

});
costsind = {

	pageLoad: function() {
    console.log(enc); // bar
    // function init() {
    //     google.load("visualization", "1", { packages:["corechart"], callback: 'drawCharts' });
    // }
    // var enc_de = jQuery.parseJSON(enc);
    // function drawCharts() {
    //     drawAccountImpressions('chart-account-impressions');
    // }

    
    // function drawAccountImpressions(containerId) {
    //   var data = google.visualization.arrayToDataTable(enc_de);
    //   var options = {
    //     title : '거래처별 매출액',
    //     vAxis: {title: 'Total'},
    //     hAxis: {title: 'Month'},
    //     seriesType: 'bars',
    //     series: {5: {type: 'line'}},
    //     bar: { groupWidth: '75%' },
    //     isStacked: true,
    //   };
    //       var chart = new google.visualization.ComboChart(document.getElementById(containerId));
    //       chart.draw(data, options);
    //   }


	},
	events: function() {

	}
}
request_ci = {

};

