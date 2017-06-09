$(document).ready(function (){
	$('#loginForm').validate({
		rules:{
			uid:{
				required: true,
				minlength:5
			},
			pwd:{
				required: true,
				minlength: 5
			}
		},
	});
});
