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
		
		var doc = new jsPDF();
		var specialElementHandlers = {
		    '#editor': function (element, renderer) {
		        return true;
		    }
		};
		$("#topdfbtn").click(function(){
		    doc.fromHTML($('#test').html(), 15, 15, {
		        'width': 170,
		            'elementHandlers': specialElementHandlers
		    });
		    doc.save('sample-file.pdf');
		});















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
		        		case 'success':
		        			
		        			// var image_name = data.image_name;
		        			// var image_type = data.image_type;
		        			// var html = '/assets/images/profile-images/tmp/'+image_name+'.'+image_type;
		        			// $('.profile-picture').attr('src',html);

		        			// var hidden_form = '<input type="hidden" id="profile-pic" name="profile-image" value="'+image_name+'.'+image_type+'">';
		        			// $('#profile-pic').remove();
		        			// $('.form-frame').append(hidden_form);
		        		break;
		        		case 'error':

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







	}
}


request = {

};
