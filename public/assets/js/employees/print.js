$(document).ready(function(){
	kprsd.pageLoad();
	kprsd.events();

});
kprsd = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		setTimeout(function(){ window.print() }, 1000);
	},
	events: function() {
	}
}
requestssd = {

};

