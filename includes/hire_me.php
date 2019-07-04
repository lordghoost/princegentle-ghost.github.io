<?php


require('include/header.php');
?>

<div class="row">

	<div class="col-lg-4 side_bar">	</div>

	<div class="col-lg-8 col-md-8 ">
		<form method="POST" action="#">
		<P>you can reach out to me using the contact form below.</P>
			<label>Your Name : </label>
			<input type="text" name="customer_name" class="form-control" >

			<label>Your Email : </label>
			<input type="email" name="email" class="form-control" >

			<label> Subject : </label>
			<input type="text" name="subject" class="form-control">

			<label> Your message.</label>
			<textarea type="text" name="message" class="form-control"></textarea>
		</form>
	</div>
	<div class="col-lg-3 side_bar">	</div>
	
</div>
