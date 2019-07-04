
	
<link rel="stylesheet" type="text/css" href="includes/style.php">
<?php require('includes/header.php');
	require('includes/database.php');

		$select="SELECT * FROM login_table  " ;

		$display=mysqli_query($connect, $select);

					if ($display) {
						echo "";
					}else{ echo "baddddd";}

		while ($result=mysqli_fetch_array($display)) {
			$textt= $result['first_text'];
			$texttt=$result['name_text'];
			$textttt=$result['second_text'];
			$description=$result['main_page'];
			$dp="'upload/".$result['displaypic']."'";
			
		}

?>

	
		<div class="row">
			<div class="col-md-2 side_bar">	</div>


			<div class="col-md-8 middle">
				<div class="row">
					

					<div class="col-lg-12 col-sm-12 col-xs-12  page_content">

						<span class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 image"> 
							<img class="dp "src= <?php echo $dp; ?> ></br>
						</span>

						<span class="col-lg-8 col-md-12 col-sm-12 col-xs-12 details">

							<h5><?php echo $textt; ?></h5>
							<h2> <?php echo $texttt; ?></h2>
							<h5><?php echo $textttt; ?></h5>
						</span>

					</div></br>
				</div>

							<hr>


					<div class="  col-lg-12 col-sm-12 col-xs-12">
						<h5 class="links ">

							<a href="https://facebook.com"> <img src="images/face.png" class="link"></a>
							<a href="https://twitter.com"> <img src="images/twitter.png" class="link"></a>
							<a href="https://instagram.com"> <img src="images/instagram.png" class="link"></a>
							<a href="https://linkedin.org"> <img src="images/linkedin.png" class="link"></a>
						</h5>
					</div>
						

					
					
					<div class="col-md-12 description">
						<p><?php echo $description; ?> </p>
					</div>
					
				
			</div>


			<div class="col-md-2 side_bar">	</div>
			
			
		</div>

<?php require('includes/footer.php'); ?>