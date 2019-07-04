<?php


require('includes/headerlogin.php');

	if (isset($_POST['submit'])) {
		
		$name=$_POST['customer_name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){

			$to ='princegentle4@gmail.com';
			$subject='contact form submitted';
			$body= $message;
			$header='FROM: '.$email;

			if(@mail($to, $subject, $body, $header)){

				echo "email sent successfully";
			}else{
				echo "error sending email";
			}


		}

	}


?>

<style type="text/css">
	
	.hiremiddle{
		border-radius: 10%;
		margin: 80px auto;
			}
	

</style>

<div class="row">

	<div class="col-lg-2 side_bar">	</div>

	<div class="col-lg-8 col-md-8 hiremiddle">
		<form method="POST" action="#">


		<legend>You can reach out to me using the contact form below.</legend></br>
			<label>Your Name : </label>
			<input type="text" name="customer_name" class="form-control" ></br>

			<label>Your Email : </label>
			<input type="email" name="email" class="form-control" ></br>

			<label> Subject : </label>
			<input type="text" name="subject" class="form-control"></br>

			<label> Your message.</label>
			<textarea type="text" name="message" class="form-control"></textarea></br>

			<input type="submit" name="submit" value="Send" class="form-control btn-primary">
		</form>

		<a href="homepage.php" >Back</a> 
		
	</div>

	  

	<div class="col-lg-2 side_bar">	</div>
	
</div>
<?php  require('includes/footer.php');