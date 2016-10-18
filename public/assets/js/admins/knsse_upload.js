$(document).ready(function(){
	knsseup.pageLoad();
	knsseup.events();
	knsseup.file_upload();
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
				                var percentComplete = evt.loaded / evt.total;
				                console.log(percentComplete);
				                //Do something with upload progress here
				            }
				       }, false);

				       xhr.addEventListener("progress", function(evt) {
				           if (evt.lengthComputable) {
				               var percentComplete = evt.loaded / evt.total;
				               console.log(percentComplete);
				               //Do something with download progress
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
request = {

};
