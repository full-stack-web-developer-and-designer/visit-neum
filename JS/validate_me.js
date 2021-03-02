jQuery(document).ready(function (){

jQuery.validator.addMethod('validName', function (value, element) {
		if (/^[a-zšđčćžA-ZŠĐČĆŽ' ]+$/gi.test(value)) {
			return true;
		} else {
			return false;
		};
	});
	
jQuery.validator.addMethod('validPhone', function (value, element) {
		if (/^[\+]?[0-9]{9,15}$/gm.test(value)) {
			return true;
		} else {
			return false;
		};
	});
	
jQuery.validator.addMethod('validEmail', function (value, element) {
		if (/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)) {
			return true;
		} else {
			return false;
		};
	});
	
jQuery.validator.addMethod('validMessage', function (value, element) {
		if (/^[a-zšđčćžA-ZŠĐČĆŽ 0-9 .,!?:;-]+$/gi.test(value)) {
			return true;
		} else {
			return false;
		};
	});

jQuery("#contact_me").submit(function(event){
	
		event.preventDefault();
	}).validate({
	rules: {
		name: {
		  required: true,
		  validName: true,
		  minlength: 6
		},
		phone: {
		  required: true,
		  validPhone: true
		},
		email: {
		  required: true,
		  // Specify that email should be validated
			// by the built-in "email" rule
		  email: true,
		  validEmail: true
		},
		message:{
		  required: true,
		  validMessage: true,
		  maxlength: 500
	  }
	},
	messages: {
		name: {
		  required: 'Ime i prezime ne može biti prazno!',
		  validName: 'Ime i prezime mogu da sadrže samo slova!',
		  minlength: 'Ime i prezime moraju imati minimalno 6 slova'
		},
		phone: {
		  required: 'Broj telefona ne može biti prazan!',
		  validPhone: 'Broj telefona može imati najviše 15 brojeva!',
		  minlength: 'Broj telefona treba da sadrži minimalno 9 brojeva!'
		},
		email:{
			required: 'E-mail adresa ne može biti prazna!',
			validEmail: 'E-mail adresa nije ispravna!',
			email: 'Unesite <em>validan</em> email!'
		 },
	  message: {
		  required: 'Sadržaj poruke ne može biti prazan!',
		  validMessage: 'Sadržaj poruke ne mogu biti specijalni znaci!',
		  maxlength: 'Poruka može da sadrži maksimalno 500 karaktera!'
	  }
	 },
	        submitHandler: function (_form) {
				//Your code for AJAX starts    
				var values = jQuery('#contact_me').serialize();
				jQuery.ajax({
					url: '/inc/form_process.php',
					type: "post",
					data: values,
					dataType: 'json',
					cache: false,
					success: function (data) {
						//alert("success");
						jQuery("#response").text(data.content);
					},
					error: function (data) {
						//alert("error");
						jQuery("#response").text("An error occurred");
					}
					//Your code for AJAX Ends
				});
				// Clear all data after submit
				var form = document.getElementById('contact_me').reset();
				return false;
			}
	});
	});	