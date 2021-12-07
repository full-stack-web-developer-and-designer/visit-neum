<div id="request">
<div class="modal_heading">
	<h2>Izvršite Vašu rezervaciju na vrijeme!</h2>
</div><!-- end .modal_heading -->
<div class="modal-body">
<form id='form' class='form' name='form' action='success.php' method='POST'> 
		<div class="comment-text-area">
        <fieldset>
            <legend>Vaši podaci</legend>
               <div class="form-control halb">
                <input minlength="7" type="text" class="input" name="fname" id="fname" placeholder="Vaše ime i prezime..." value="<?php echo htmlspecialchars($fname);?>" autofocus><span class="error"><?=$fname_error?></span></div><!-- end .form-control -->
				
				<div class="form-control halb"><input minlength="9" type="text" class="input" name="phone" id="phone" placeholder="Vaš broj telefona..." value="<?php echo htmlspecialchars($phone);?>"><span class="error"><?=$phone_error ?></span></div><!-- end .form-control -->
				
				<div class="form-control">
                <input type="text" class="input" name="mail" id="mail" placeholder="Vaš e-mail..." value="<?php echo htmlspecialchars($mail);?>"><span class="error"><?=$mail_error?></span>
                </div><!-- end .form-control -->
				
				<div class="form-control"><textarea maxlength="500" name="message" class="textinput" cols="46" rows="8" id="message" placeholder="Vaša poruka..."><?php echo htmlspecialchars($message);?></textarea><span class="error"><?=$message_error?></span></div><!-- end .form-control -->
				</fieldset><div class="success"><?=$success;?></div>
				<input type="submit" id="submit" class="btn_submit" name="submit" value="POŠALJI"/></form></div><!-- end .comment-text-area -->
				</div><script>
$(document).ready(function() {
    $('input:text').focus(
    function(){
        $(this).css({'background-color' : '#FF9', 'color' : '#0B60D4'});
    });
    $('input:text').blur(
    function(){
        $(this).css({'background-color' : '#FFF', 'color' : '#000'});
    });
	$("textarea").focus(
    function(){
        $(this).css({'background-color' : '#FF9', 'color' : '#0B60D4'});
    });
    $('textarea').blur(
    function(){
        $(this).css({'background-color' : '#FFF', 'color' : '#000'});
    });
});
</script><script src="inc/form-validation.js"></script>
</div><!-- end #request -->