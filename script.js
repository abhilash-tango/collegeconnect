$(document).ready(function(){


		$('#signupform').validate({
            ignore: [],
	    rules: {
	       fname: {
	        required: true,
	       required: true
	      },
		  
		 lname: {
	        required:true,
	        required: true
	      },
		  
		  password: {
				required: true,
				minlength: 6
			},
			cpassword: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
		  
	      email: {
	        required: true,
	        email: true
	      },
		  
	     
		   college: {
	      	required:true,
	        required: true
	      },
		  
		  terms: "required"
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

}); // end document.ready