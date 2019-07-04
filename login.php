

<?php
session_start();
require('includes/headerlogin.php');

require('includes/style.php');


require('includes/database.php');


$errorlogin="";

if (isset($_POST['submit'])) {
	
	 $_SESSION['username']=$_POST['username'];
	 $password=$_POST['pass'];


	$search = "SELECT username, password FROM login_table WHERE username = '".$_SESSION['username']."' AND password = '$password' ";
			#SELECT * FROM `login_table` WHERE `username` = 'admin' AND `password` = 'admin'
	$result= mysqli_query($connect, $search);

		if(mysqli_num_rows($result)>0) {
		 	# code...
		 
			header("location:homepage-copy.php");
		}
		else{
			$errorlogin ="wrong username or password";
		}
	
}



?>

<style type="text/css">
	
	.login_wrapper{
		text-shadow:0 5px 0 #f4e0c9;
		margin: 30%;
		
	}

	.sidebar{
		background-color: #2a3f54;
	}

	.loginbg{
		border: 1px solid gray;
		background-color: #2a3f54;

	}

	admin h5:before{
		background: #fff;
		position: fixed;
		float: left;
	}

	admin h5:after{
		background: #000;
		position: fixed;
		right:px;
	}

	admin h5:before,
	admin h5:after{
		content: "";
		height: 5px;
		width: 10%;
		
	}
	admin{
		
		border:3px solid blue;
	}

	
	.inputt{
		background-color: #faffbd;

	}
</style>
<div class="row">
	
	

	<div class="col-md-12 loginbg">

		<div class="login_wrapper">

				<form action="#" method="POST" >
					<div class="admin">
						<h5 style="font-size:28px;" >Admin Login... </h5></br>
					</div>	
					<input type="name" name="username" required="true" placeholder="princegentle" class="form-control inputt"></br>

					
					<input type="password" name="pass" required="true" placeholder="******" class="form-control inputt">
					<p style="color:red" ><?php echo $errorlogin ; ?></p></br>

					

					<input type="Submit" name="submit" value="Login" class="btn-warning form-control">
						<hr style="background:#fff;">
				</form>
		</div>
	</div>

	

</div>

<?php require('includes/footer.php');