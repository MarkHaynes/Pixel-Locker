<?php
/*
Template Name: Custom Contact Page
*/
?>

<?php get_header(); ?>

<?php
		function stripcleantohtml($s){
	
			return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
		}

		$complete = false;

 		if (isset($_POST['submit'])) {
 			$human = stripcleantohtml($_POST['txtHuman']);

 			if ($human == "Pixel Locker" || $human == "PixelLocker" || $human == "pixel locker" || $human == "pixellocker" || $human == "pixellocker.co.uk" || $human == "Locker" || $human == "locker") {

 				$humanConfirm = true;
	 			$requiredField = array($_POST['txtFullname'], $_POST['txtTelephone'], $_POST['txtEnquiry']);
	 			$errorRequired = array();
	 			$errorMessage = array();

	 			foreach ($requiredField as $key => $value) {
	 				if (empty($value)) {
	 					$errorRequired [] = $value;
	 				}
	 			}

	 			if (in_array($_POST['txtFullname'], $errorRequired)) {
	 				$errorMessage[] = "We need to know who you are, can you provide your name?";
	 			}
	 			if (in_array($_POST['txtTelephone'], $errorRequired)) {
	 				$errorMessage[] = "We need to be able to contact you, a phone number would be great.";
	 			}
	 			if (in_array($_POST['txtEnquiry'], $errorRequired)) {
	 				$errorMessage[] = "Can you provide us some details of what you wish to achieve.";
	 			}

	 			if (empty($errorRequired)) {
	 				
	 				$email_message = "<style>label {display:block;}</style>";

	 				$email_message .= "<h1>";
					$email_message .= "Pixel Locker Enquiry";
					$email_message .= "</h1>";
					$email_message .= "\n\n\n\n";

					$email_message .= "<label>Fullname:<br>";
					$email_message .= stripcleantohtml($_POST['txtFullname']);
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Company:<br>";
					$email_message .= stripcleantohtml($_POST['txtCompany']);
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Email:<br>";
					$email_message .= stripcleantohtml($_POST['txtEmail']);
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Telephone:<br>";
					$email_message .= stripcleantohtml($_POST['txtTelephone']);
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Address:<br>";
					$email_message .= stripcleantohtml(nl2br($_POST['txtAddress']));
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<h1>Enquiry:</h1>";
					$email_message .= stripcleantohtml(nl2br($_POST['txtEnquiry']));
					$email_message .= "<br>";

					$email_message .= "<h2>Contact the client by: </h2>";
					$email_message .= "<br>";

					$email_message .= "<label>Call:<br>";
					$email_message .= $_POST['chkCall'];
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Email:<br>";
					$email_message .= $_POST['chkEmail'];
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>Post:<br>";
					$email_message .= $_POST['chkPost'];
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<label>When to call:<br>";
					$email_message .= stripcleantohtml($_POST['txtTime']);
					$email_message .= "</label>";
					$email_message .= "<br>";

					$email_message .= "<br>";
					$email_message .= "Please contact them soon!";			


	 				$message = $email_message;
				    $to = "hello@pixellocker.co.uk"; 
				    $from = "hello@pixellocker.co.uk"; 
				    $subject = "Pixel Locker - Enquiry"; 

					$headers = "From: " . $from . "\r\n";
					$headers .= "Reply-To: ". $to . "\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";




				   // now we just send the message
				   if (@mail($to, $subject, $message, $headers)){
				   	$completed =  true;
				   }
				      
				   else{
				      $error = "There has been a problem sending your message";
				   }

	 			}
	 			else {
					$error =  "There has been a problem sending your message.";
				}
	 		}
	 		else {
	 			$error =  "Well this is odd, you failed our Human test :( Try again and enter Pixel Locker in our Company name.";
	 		}
	 	}
 	?>

	<main>
		<section id="topStrip">
			<div class="wrap">
				
				<h1 class="title">Let's discuss your next project!</h1>

				<span class="tagline">We can consider any project, none are too big or too small. We can help bring your idea into a reality and we are also happy to provide you with advice you require. </span>
			
			</div>
		</section>

		<section class="whiteStrip">
			<div class="contentWrap">


				<?php 

				if ($completed == true) { ?>
					<div style="text-align: center;">
						<h1 class="title">Thank you for contacting us, we are excited to contact you shortly.</h1>
					</div>
				<?php }
				
				else {
				?>

			
					<ul class="formError">
					<?php echo $error;?><br>
						<?php 

						if (!empty($errorMessage)) {

							foreach ($errorMessage as $key => $value) {
								echo "<li>" . $value . "</li>";
							} 
						}?>
					</ul>
			
					
			   		<form id="frmContact" action="" method="post">
				   		<label>
				   			Full Name:<br>
				   			<input name="txtFullname" type="text"  autofocus value="<?php echo stripcleantohtml($_POST['txtFullname']);?>">
				   		</label>
				   		<br>

				   		<label>
				   			Company Name:<br>
				   			<input name="txtCompany" type="text" value="<?php echo stripcleantohtml($_POST['txtCompany']);?>">
				   		</label>
				   		<br>

				   		<label>
				   			Email Address:<br>
				   			<input name="txtEmail" type="email" value="<?php echo stripcleantohtml($_POST['txtEmail']);?>">
				   		</label>
				   		<br>

				   		<label>
				   			Telephone:<br>
				   			<input name="txtTelephone" type="tel"  value="<?php echo stripcleantohtml($_POST['txtTelephone']);?>">
				   		</label>
				   		<br>

				   		<label>
				   			Your Address:<br>
				   			<textarea name="txtAddress" ><?php echo stripcleantohtml($_POST['txtAddress']);?></textarea>
				   		</label>
				   		<br>

				   		<label>
				   			Your Enquiry: <br>
				   			(Please detail what would wish your project to achieve.)<br>
				   			<textarea name="txtEnquiry" ><?php echo stripcleantohtml($_POST['txtEnquiry']);?></textarea>
				   		</label>
				   		<br>

				   		<label>
				   			How would you like us to get in touch?<br>
				   			<input name="chkCall" id="chkCall"  value="Yes" type="checkbox"><label for="chkCall"><span>Phone</span></label><br>
				   			<input name="chkEmail" id="chkEmail" value="Yes" type="checkbox"><label for="chkEmail"><span>Email</span></label><br>
				   			<input name="chkPost" id="chkPost" value="Yes" type="checkbox"><label for="chkPost"><span>Post</span></label><br>
				   		</label>
				   		<br>

				   		<label>
				   			What time would be best for us to call you?<br>
				   			<input type="text" name="txtTime" value="<?php echo stripcleantohtml($_POST['txtTime']);?>">
				   		</label>
				   		<br>

				   		<?php if ($humanConfirm == true) {
				   				echo '<div style="display:none;>"';
				   			}
				   			 else {
				   			 	echo '<div style="display:block;>"'; 
				   			}
				   		?>

					   		<label class"required">
					   			Just to check your Human, what's the name of OUR Company? Hint Pixel...<br>
					   			<input type="text" name="txtHuman" value="<?php echo stripcleantohtml($_POST['txtHuman']);?>">
					   		</label>
					   		<br>

				   		</div>

				   		<label>
				   			<input name="submit" type="Submit" value="Send Enquiry">
				   		</label>

			   		</form>
			   <?php } ?>

	 		</div>
	 	</section>

 	</main>



<?php get_footer(); ?>