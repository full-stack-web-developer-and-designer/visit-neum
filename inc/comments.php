<div id="comments" class="modal">
<div class="modal_heading">
<h2>Pogledajte komentare za ovaj objekat!</h2><a href="#" rel="modal:close"><button class="close_btn">&times;</button></a>
</div><!-- end .contact_heading-->
<div class="modal-body">
<?php
require_once 'core/init.php';
$error = false;
// define variables and set to empty values
$user_comment = "";
$user_comment_error = "";
if (isset($_POST['submitComment'])) {
	$user_comment = $_POST['user_comment'];
	if(empty($_POST["user_comment"])) {
		$error = true;
		$user_comment_error = "Molimo Vas unesite Vaš komentar!";
	}else{
		$user_comment = $_POST['user_comment'];
		// check if name only contains letters and whitespace	
		if(!preg_match("/^[a-zšđčćžA-ZŠĐČĆŽ\s]*$/", $user_comment)){
			$user_comment_error = "Komentar može da sadrži samo slova i razmak!";
		}
	}
	if($user_comment_error = ""){
		$comments = new Comments;
		$comments->users_id = 2;
		$comments->pages_id = 1;
		$comments->user_comment = $_POST['user_comment'];
		$comments->insert();
	}
}
if(isset($_SESSION['register_name'])){
	?>

<form  spellcheck="false" autocomplete="off" autocorrect="off" id='komentar' class='form' name='komentar' action='' method='POST'>
<h4 id="responseOwner" class="success"><!-- This will hold response from the server --></h4>
  <fieldset>
    <legend>Vaši podaci</legend>
		<div class="form-control InputIconBg"><textarea maxlength="1000" name="user_comment" class="textinput message" cols="46" rows="8" placeholder="Vaš komentar..."><?php echo Input::get('user_Comment'); ?></textarea><i class="fas fa-pencil-alt owner_icon" aria-hidden="true"></i><span class="error"><?=$user_comment_error; ?></span></div><!-- end .form-control -->
			
	</fieldset>
	<input type="hidden" name="token" value="<?php //echo Token::generate(); ?>">
	<input type="submit" class="btn_submit" id="submitComment" name="submitComment" value="POŠALJI"/>
</form>
<?php
} else {
	echo "<p style='color:red'>Morate biti prijavljeni da biste mogli komentarisati objekte</p>";
}
?>
<script src="/JS/form_color.js"></script>

</div><!-- end .modal-->
</div><!-- end #contact_owner -->