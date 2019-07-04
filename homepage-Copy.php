
	

<?php
		
 session_start();

if(isset($_SESSION['username'])){

	


 require('includes/header.php');
require('includes/database.php');

	  

		if(isset($_POST['upload'])) {
		
		
			$image=$_FILES['picture']['name'];
			$text1=$_POST['first_text'];
			$text2=$_POST['second_text']; 
			$text3=$_POST['third_text'];
			$textarea=$_POST['description'];


			$target="upload/".basename($_FILES['picture']['name']);

			$update="UPDATE `login_table` SET `first_text`= '$text1', `name_text`='$text2', `second_text`='$text3',
			 `main_page`='$textarea',`displaypic`='$image' WHERE 12";

			#$insert=" INSERT INTO login_table( first_text, name_text, second_text, main_page, displaypic) 
			#VALUES('$text1', '$text2', '$text3', '$textarea', '$image')";

			$result =mysqli_query($connect, $update);

			if (!$result) {
				echo "";
			}
			else{
				echo "";
			}

			if(move_uploaded_file($_FILES['picture']['tmp_name'], $target)){
				echo "";
			}
			else{
				echo "";
			}
		

	}


 

				if (isset($_POST)) { 
					require('includes/database.php');
					
					$select="SELECT * FROM login_table";

					$display=mysqli_query($connect, $select);

					if ($display) {
						echo "";
					}else{ echo "baddddd";}

					while ($output=mysqli_fetch_array($display)) {
						$text= $output['first_text'];
						 $textt= $output['name_text'];
						$texttt= $output['second_text'];
						$description= $output['main_page'];
		  				$pic="'upload/".$output['displaypic']." '";
						
					}
				}
				

}else{
echo "you are unable to access this page please login as an administrator";

	exit();

	}
			?>


<style type="text/css">
	
	.page_contents{
		
		
		min-height: 460px;
	}

	.detail{
		
		float: right;
		clear: both;

	}
	.d{
		
		clear: both;
		 float: left;
		margin-top: 13px;
	}
	.side_bar{
		background-color: ;
	}
	.logout{
		float: right;
	}
	

</style>



		<div class="row">
			<div class="col-md-2 side_bar">	</div>


			<div class="col-md-8 middlee"  >
				
				<form method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  page_contents" >

							<span class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 image"> 
								
								<img class="dp" src= <?php echo $pic; ?> >	</br> 

								<input type="file" class="d" name="picture" required="required" img-responsive>
 
							</span>

							<span class="col-lg-8 col-md-12 col-sm-12 col-xs-12 detail">
								

								<h5><?php echo $text; ?></h5>
								<h2> <?php echo $textt; ?></h2>
								<h5><?php echo $texttt; ?></h5>

								<label>Enter your detials</label></br>
								<input type="text" name="first_text" class="form-control" required="required"></br>
								<input type="text" name="second_text" class="form-control" required="required" ></br>
								<input type="text" name="third_text" class="form-control"  required="required"></br></br>

							</span>

					</div>	</br></br>
				</div>

								

					<hr>
					<div class="  col-lg-12 col-sm-12 col-xs-12">
					<h5 class="links ">
							
							<a href="https://facebook.com"> <img src="images/face.png" class="link"></a>
							<a href="https://twitter.com"> <img src="images/twitter.png" class="link"></a>
							<a href="https://instagram.com"> <img src="images/instagram.png" class="link"></a>
							<a href="https://linkedin.org"> <img src="images/linkedin.png" class="link"></a>
					
					</h5></div>
						
						
						<div class="col-md-12 descriptions">

							<p> <?php echo $description; ?> </p></br></br>

							<legend>Describe your self and what your comanpay is about...</legend></br>


							<textarea class="text form-control" name="description" required="required" ></textarea></br></br>

						</div>

					<input type="submit" name="upload" value="Upload" class="btn-primary">
				
				
					<a href="logout.php" class="logout" style="color:red" style="float:right">Logout</a>
				</form>
			</div>

			                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              


			<div class="col-md-2 side_bar">	</div>
			
			
		</div>



<?php
        


require('includes/footer.php');

 ?>