'use strict';
jQuery(document).ready(function () {
  jQuery.validator.addMethod("validFname", function (value, _element) {
    if (/^[a-zšđčćžA-ZŠĐČĆŽ ]+$/gi.test(value)){
      return true;
    }else{
      return false;
    }
  });
  jQuery.validator.addMethod("validTel", function (value, _element) {
    if(/^[\+]?[0-9]{9,15}$/gm.test(value)){
      return true;
    }else{
      return false;
    }
  });
  jQuery.validator.addMethod("validUserMail", function (value, _element){
    if(/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)){
      return true;
    }else{
      return false;
    }
  });
  jQuery.validator.addMethod("validUserMessage", function(value, _element){
    if(/^[a-zšđčćžA-ZŠĐČĆŽ 0-9 .,!?:;]+$/gi.test(value)){
      return true;
    }else{
      return false;
    }
  });
  jQuery("#contactOwner").submit(function(e){
    e.preventDefault();
  }).validate({
    rules:{
      fname:{
        required: true,
        validFname: true,
        minlength: 6
      },
      tel:{
        required: true,
        validTel: true,
        minlength: 9
      },
     /*txtFrom: {
          required: true
      },
      txtTo: {
          required: true
      },*/
      userMail:{
        required: true,
        email: true,
        validUserMail: true
      },
      userMessage:{
        required: true,
        validUserMessage: true,
        maxlength: 1000
      }
    },
    messages:{
      fname:{
        required: 'Ime i prezime ne može biti prazno!',
        validFname: 'Ime i prezime mogu da sadrže samo slova!',
        minlength: 'Ime i prezime moraju imati minimalno 6 slova'
      },
      tel:{
        required: 'Broj telefona ne može biti prazan!',
        validTel: 'Broj telefona može imati najviše 15 brojeva!',
        minlength: 'Broj telefona treba da sadrži minimalno 9 brojeva!'
      },
      /*txtFrom: {
           required: 'Datum dolaska ne može biti prazan!'
       },
       txtTo: {
           required: 'Datum odlaska ne može biti prazan!'
       },*/
      userMail:{
        required: "E-mail adresa ne može biti prazna!",
        validUserMail: "E-mail adresa nije ispravna!",
        email: 'Unesite <em>validan</em> email!'
      },
      userMessage:{
        required: "Sadržaj poruke ne može biti prazan!",
        validUserMessage: "Sadržaj poruke ne mogu biti specijalni znaci i ENTER!",
        maxlength: "Poruka može da sadrži maksimalno 1000 karaktera!"
      }
    },
    submitHandler: function(_form){  
      var formData=jQuery("#contactOwner").serialize();
      console.log(formData);
      jQuery(document).ready(function (){
      // Code for AJAX starts  
      jQuery.ajax({
        url: "/classes/Form_process.class.php",
        type: "post",
        dataType: "json",
        data: formData,
        success:function(jsonData) {
         jQuery("#responseOwner").text(jsonData[0].content);
         console.log(jsonData[0]);
         console.log(jsonData[0].content);
         console.log(jsonData[0].hasOwnProperty("response"));
         console.log(jsonData[0].hasOwnProperty("content"));
        },
        error: function (jqXHR, textStatus, errorThrown) {
					console.log(JSON.stringify(jqXHR));
					console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
				  }
        /*error:function(jsonData){
         jQuery("#responseOwner").text("An error occurred");
          console.log(jsonData);
        }*/
  }); //Your code for AJAX Ends
});
      // Clear all data after submit
      var resetForm = document.getElementById('contactOwner').reset();
      return false;
    } //submitHandler
  });//validate
});	//document ready