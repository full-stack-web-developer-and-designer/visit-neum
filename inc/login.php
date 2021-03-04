<a href="#login" rel="modal:open">Prijava</a>
<div id="login" class="modal">
<div class="modal_heading">
<h2>Prijava  korisnika</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .modal_heading-->
<div class="modal-body">
<div class="comment-text-area">
<fieldset>
<legend>Vaši podaci</legend>
<form class='form' name='form' action='' method='POST'>

<div class="form-control"><input type="text" class="input mail" name="login_mail" id="login_mail" placeholder="Vaš e-mail..." value="<?php echo escape(Input::get('login_mail')); ?>"><span class="error"><?php echo $errors['login_mail']??''?></span></div><!-- end .form-control -->

<div class="form-control"><input minlength="6" type="password" class="input" name="register_password" id="register_password" placeholder="Unesite lozinku..."><span class="error"></span></div><!-- end .form-control -->

</fieldset><!--div class="success">--></div><input type="submit" id="submit_login" class="btn_submit" name="submit_login" value="Prijava"/></form>
<script src="/JS/form_color.js">
</script><script src="/inc/form-validation.js"></script>
<p id="centerRegister">Nemate nalog? Registrujte se <a href="#register" rel="modal:open">ovdje</a></p>
</div><!-- end .modal-body-->
</div><!-- end #login.modal-->



