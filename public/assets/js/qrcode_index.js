$(document).ready(function(){
	qrr.pageLoad();
	qrr.events();

});
qrr = {
	// pedram31/ds^&%3^4*F%2#3^Df%a+@df/110110
	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		var qrt2;
		qrt2 = new QCodeDecoder();
		var qrcode = new QRCode(document.getElementById("qrcode"), {
			width : 200,
			height : 200
		});

		//start showing camera
		StartCam(qrt2,qrcode);

		$(".ifs").keyup(function(){
			var elText = $('#pnum').val()+'\n'+$('#empname').val()+'\n'+$('#machid').val()+'\n'+$('#cdate').val()+'\n'+$('#comment').val();
			qrcode.makeCode(elText);
		});

		$("#pnum").keyup(function(){
			var tv = $(this).val();
			var rl = tv.length
			if (rl>10) {
				$(this).val(tv.substring(0, 10));
				var elText = $('#pnum').val()+'\n'+$('#empname').val()+'\n'+$('#machid').val()+'\n'+$('#cdate').val()+'\n'+$('#comment').val();
				qrcode.makeCode(elText);
			}
		});
		
		$('#print-qr').click(function(e){
            e.preventDefault();
            var w = window.open();
            var printOne = $('#qrcode').html();
            w.document.write('<html><body>'+printOne+'</body></html>');
            w.window.print();
            w.window.close();
            return false;
        });

	    $('.camera-btn').click(function(){
	    	if ($('#cam-wrap').hasClass('hide')) {
	    		$('#cam-wrap').removeClass('hide');
	    		StartCam(qrt2,qrcode);
	    	} else {
	    		$('#cam-wrap').addClass('hide');
				clearInterval(myVar);
	    	}
	    });

	},
	events: function() {

	}
}
requestq = {

};
function StartCam(qrt2,qrcode)
{
	$('#cam-wrap').removeClass('hide');
	Webcam.set({
		width: 320,
		height: 240,
		force_flash: true,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach( '#my_camera' );
	myVar = setInterval(function(){ 
		Webcam.snap( function(data_uri) {
			qrt2.decodeFromImage(data_uri, function (err, result) {
				// COOPER>IF QR FOUND
				if (typeof(result) != "undefined" && result !== null) {
					var result_exp = result.split('/ds^&%3^4*F%2#3^Df%a+@df/');
					if (typeof(result_exp[0]) != "undefined" && result_exp[0] !== null & typeof(result_exp[1]) != "undefined" && result_exp[1] !== null) {
						console.log('Success!');
						$('#username-input').val(result_exp[0]);
						$('#password-input').val(result_exp[1]);
						$('#empname').val(result_exp[0]);
						$('#cam-wrap').addClass('hide');
						clearInterval(myVar);
						setTimeout(function(){ 
							$('.upform').addClass('hide');
							$('.secform').removeClass('hide');



								function makeCode () {    
								var elText = result_exp[0];
								qrcode.makeCode(elText);
								}
								makeCode();

							setInterval(function(){ 
								var currentdate = new Date(); 
							    var datetime = currentdate.getDate() + "/"
						                + (currentdate.getMonth()+1)  + "/" 
						                + currentdate.getFullYear() + " "  
						                + currentdate.getHours() + ":"  
						                + currentdate.getMinutes() + ":" 
						                + currentdate.getSeconds();
								$('#cdate').val(datetime);

							}, 1000);


						 }, 200);
			    		
						
					} else {
						alert('Detected, err QRcode wrong format!');
						console.log('Detected, err QRcode wrong format!');
					}
				} else {
					console.log('unreadable!');
				}
		    });
		});
	 }, 500);
}

