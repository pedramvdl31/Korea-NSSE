$(document).ready(function(){
	resourse_edit.pageLoad();
	resourse_edit.events();

});
resourse_edit = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		$("img.lazy").lazyload({
			effect : "fadeIn"
		});
		$('#fileupload').fileupload({
			// Uncomment the following to send cross-domain cookies:
			//xhrFields: {withCredentials: true},
			url: '/admins/resources/file-upload',
			dataType:'json',
			autoUpload: true,
			acceptFileTypes: /(\.|\/)(gif|jpe?g|png|mp4|pdf|xls|xlsx)$/i,

			done: function(e, data){
				r = data.result;
				if(r.success === true) {
					var path = r.path;
					$.each(data.files, function (index, file) {
						var tsize = file.size;
						$(document).find('.rem-'+tsize).removeClass('hide');
					});
					// Remove disabled button and add in cancel button
					$(document).find('#displayImagesTable-main tbody tr .cancel').addClass('hide');
					// $(this).find('.remove:first').removeClass('hide');
				}
			}
		});
	},
	events: function() {
		$("#addSlide").click(function(){
			var countLi = $("#step2_panel .slideshowDiv").length;
			var newCount = countLi +1;
			var newSlide = slide_show(newCount);
			$("#step2_panel").append(newSlide);

		});
		// $(document).on('click','.deleteImage',function(){
		// 	if(confirm('Are you sure you wish to delete this file?')) {
		// 		var src = $(this).attr('data-src');
		// 		element = $(this);
		// 		var delete_status = rerequest.request_delete(src, element);
		// 	}
		// });
		$(document).on('click','.delete-resource',function(){
			var tid = $(this).attr('this-id');
			var element = $(this);
			$(this).parents('.row-fluid:first').fadeOut();
			rerequest.request_delete(tid, element);
			
		});
		$('.popup-link').magnificPopup({
			type: 'image'
			// other options
		});
	}
}
rerequest = {
	request_delete: function(src, element) {
		var token = $('meta[name=_token]').attr('content');

		$.post(
			'/admins/resources/delete',
			{
				"_token": token,
                src: src
			},
			function(result){
				var status = result.status;
				switch(status) {
					case 200: 
						// element.parents('.row-fluid:first').remove();
					break;				
					case 400: 
						
					break;
					default:
					break;
				}
            }
        );

	}
};
function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'');
}

