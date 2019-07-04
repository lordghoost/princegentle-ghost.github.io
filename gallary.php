<?php

require('includes/header.php');
require('includes/database.php');

if (isset($_POST['upload'])) {
	
	$galaryimg=$_FILES['galary_img'] ['name'];

	$targetfolder="galaryfolder/".basename($_FILES['galary_img']['name']);

	$insert="INSERT INTO galarytable(images)
	VALUES ('$galaryimg')";

	$result=mysqli_query($connect, $insert);
	if (!$result){
		echo "error";
	}else{echo "good";
			}
		if (move_uploaded_file($_FILES['galary_img']['tmp_name'], $targetfolder)) {
			echo "uploaded";
		}else{echo "not uploaded";
				}
}

function getImages()
{
	global $connect;
	$select="SELECT * FROM galarytable";
	$result=mysqli_query($connect, $select);

	while ($image = mysqli_fetch_array($result) )
	{
		echo "<div class='galarydisplay' style='float:left; margin:5px 2px;'><img src='galaryfolder/$image[images]' width='160px' height='180px' class='pic' /> </div>";
	}
}

?>


<div class="row">

	<div class="col-md-12">
	<form method="POST" action="#" enctype="multipart/form-data">

		<div class="galary-upload">
			<div style="overflow:hidden" > <?=getImages()?> </div></br></br>

			<label>upload image</label></br>
			<input type="file" name="galary_img" >

			<input type="submit" name="upload" value="Upload" class="bnt-primary">
		</div>
	</form>
	</div>
	
</div>

<?php

require('includes/footer.php');

?>