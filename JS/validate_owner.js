"use strict";
jQuery(document).ready(function () {
  jQuery.validator.addMethod('validFname', function (value, element) {
    if (/^[a-zšđčćžA-ZŠĐČĆŽ ]+$/gi.test(value)) {
      return true;
    } else {
      return false;
    }
  });
  jQuery.validator.addMethod('validTel', function (value, element) {
    if (/^[\+]?[0-9]{9,15}$/gm.test(value)) {
      return true;
    } else {
      return false;
    }
  });
  jQuery.validator.addMethod('validUserMail', function (value, element) {
    if (/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)) {
      return true;
    } else {
      return false;
    }
  });
  jQuery.validator.addMethod('validUserMessage', function (value, element) {
    if (/^[a-zšđčćžA-ZŠĐČĆŽ 0-9 .,!?:;-]+$/gi.test(value)) {
      return true;
    } else {
      return false;
    }
  });

  jQuery("#contactOwner").submit(function (event) {
    event.preventDefault();
  }).validate({
    rules: {
      fname: {
        required: true,
        validFname: true,
        minlength: 6
      },
      tel: {
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
      userMail: {
        required: true,
        email: true,
        validUserMail: true
      },
      userMessage: {
        required: true,
        validUserMessage: true,
        maxlength: 1000
      }
    },
    messages: {
      fname: {
        required: 'Ime i prezime ne može biti prazno!',
        validFname: 'Ime i prezime mogu da sadrže samo slova!',
        minlength: 'Ime i prezime moraju imati minimalno 6 slova'
      },
      tel: {
        required: 'Broj telefona ne može biti prazan!',
        validTel: 'Broj telefona može imati najviše 15 brojeva!',
        minlength: 'Broj telefona treba da sadrži minimalno 9 brojeva!'
      },
      /* txtFrom: {
           required: 'Datum dolaska ne može biti prazan!'
       },
       txtTo: {
           required: 'Datum odlaska ne može biti prazan!'
       },*/
      userMail: {
        required: 'E-mail adresa ne može biti prazna!',
        validUserMail: 'E-mail adresa nije ispravna!',
        email: 'Unesite <em>validan</em> email!'
      },
      userMessage: {
        required: 'Sadržaj poruke ne može biti prazan!',
        validUserMessage: 'Sadržaj poruke ne mogu biti specijalni znaci i ENTER!',
        maxlength: 'Poruka može da sadrži maksimalno 1000 karaktera!'
      }
    },
    submitHandler: function (_form) {
      //Your code for AJAX starts    
      var formData = jQuery("#contactOwner").serialize();
      console.log(formData);
      jQuery.ajax({
        url: "/classes/Form_process.class.php",
        type: "post",
        //data: JSON.stringify(formData),
        data: formData,
        //data: JSON.parse(formData),
        dataType: "json",
        //async: true,
        //cache: false,
        success: function(response){
         // alert(response);
         // alert(response[content]);
         //var jsonData=['{"response":"success", "content" : response.content}'];
          //var decodedArray = JSON.parse(response);
          //jQuery("#responseOwner").text(decodedArray['content']);
          //jQuery("#responseOwner").text(response['content']);
          //console.log(escape(rez));
          //console.log(decodedArray);
         // console.log (JSON.stringify(rez));
          console.log(response);
         
          //console.log(JSON.parse(response));
          console.log(response.hasOwnProperty('content'));
          //debugger;
          //console.log(decodedArray[0].hasOwnProperty('content'));
        },
        error: function (jqXHR, textStatus, errorThrown){
           console.log(JSON.stringify(jqXHR));
           console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
          // debugger;
         //}
         // alert("error");
         //jQuery("#responseOwner").text("An error occurred");
          //console.log(JSON.stringify(data));
          //console.dir("Response: " + data);
          //console.log(rez[0].content);
          //console.log(decodedArray[1]);
        }
        /*error: function(jqXHR, exception) {
          if (jqXHR.status === 0) {
            console.log('Not connect.\n Verify Network.');
          } else if (jqXHR.status == 404) {
            console.log('Requested page not found. [404]');
          } else if (jqXHR.status == 500) {
            console.log('Internal Server Error [500].');
          } else if (exception === 'parsererror') {
            console.log('Requested JSON parse failed.');
          } else if (exception === 'timeout') {
            console.log('Time out error.');
          } else if (exception === 'abort') {
            console.log('Ajax request aborted.');
          } else {
            console.log('Uncaught Error.\n' + jqXHR.responseText);
          }
        }*/
      }); //Code for AJAX Ends
/*
    .done(function (response) {
      alert(response);
      console.log('done');
      console.log(response);
  }).fail(function (error) {
      console.log(error);
  });*/
      // Clear all data after submit
      var resetForm = document.getElementById('contactOwner').reset();
      return false;
    } //submitHandler
  });
});	//document ready