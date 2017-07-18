<?php
	require('../functions.php');
	
?>

<?php
	if(isset($_POST['submit'])){
		if(!empty($_POST['email']) && !empty($_POST['pass'])){
			if(!empty($moldura->email_existance('admins','admin_email',$_POST['email']))){
				if($moldura->finding_email_pass('admins','admin_pass','admin_email',$_POST['email']) == $_POST['pass']){
					$_SESSION['admin_id'] = $moldura->finding_email_id('admins','admin_id','admin_email',$_POST['email']);
					
				}else{
					echo "password didin't match";
				}	//if/else for error password
			}else{
				echo "No email with this name";
			}	//if/else for error e-mail
		}else{
			echo "Please fill up the form first";
		}	//if/else for !empty place
	}else{}	//if else for submit
?>
<?php if(!isset($_SESSION['admin_id'])): 

 ?>
<form method="POST">
	<label>E-mail</label><br>
	<input type='email' value='' name='email' /><br>
	<label>Password</label><br>
	<input type='Password' value='' name='pass' /><br>
	<input type='submit' name='submit' value='submit' />
</form>	
<?php else: 	//if session set else
   $User_name = $moldura->getting_data_by_another_field('admins','admin_name','admin_id',$_SESSION['admin_id']);
	echo 'Welcome '.$User_name;
					echo "</br><a href='log_out.php'>Log Out</a>";
?>
<ul>
	<li> <a href="admin_comments.php">Admin Comment</a></li>
	<li> <a href="admin_orders.php">Admin Order</a></li>
	<li> <a href="admin_upload.php">Admin Upload</a></li>
	<li> <a href="admin_user.php">Admin User</a></li>
	<li> <a href="index.php">Home</a></li>
	<li> <a href="log_out.php">Log Out</a></li>
</ul>
<?php 
		if(isset($_POST['frame_submit'])){
			
			if(!empty($_POST['frame_tag_name']) && !empty($_POST['frame_price']) && !empty($_POST['frame_des']) && !empty($_FILES['frame_img']['tmp_name']) ){
			$image = $_FILES['frame_img']['tmp_name'];
			$image = file_get_contents($image);
			$image = base64_encode($image);
					$moldura->insert_into_table('INSERT INTO frames(frame_tag_name,frame_price,frame_des,frame_img)VALUES("'.$_POST["frame_tag_name"].'",
						"'.$_POST["frame_price"].'",
						"'.$_POST["frame_des"].'","'.$image.'")');
			}else{
				echo "</br>Can't keep fields blank";
			}	//end of if/else if all filled setted
		}		//isset($_POST['frame_submit'])
		
?>
			<h3>Upload Full frame</h3>

			<form method="POST" action="" enctype = "multipart/form-data">
				<label>Frame tag name</label></br>
				<input type="text" name="frame_tag_name" value=""/></br>
				<label>Frame price</label></br>
				<input type="text" name="frame_price" value=""/></br>
				<label>Frame description</label></br>
				<input type="text" name="frame_des" value=""/></br>
				<label>Frame image</label></br>
				<input type="file" name="frame_img" value=""/></br></br>
				<input type="submit" name="frame_submit"/>
			</form>
			<hr>
		<?php 
			if(isset($_POST['image_submit'])){
					if(!empty($_POST['image_tag_name']) && !empty($_POST['image_des']) && !empty($_FILES['image_img']['tmp_name']) ){
					$image = $_FILES['image_img']['tmp_name'];
					$image = file_get_contents($image);
					$image = base64_encode($image);
					$moldura->insert_into_table('INSERT INTO images(image_tag_name,image_des,image_img)VALUES(
							"'.$_POST["image_tag_name"].'","'.$_POST["image_des"].'","'.$image.'"
						)');
					}else{
						echo "Can't keep fields blank";
					}	//end of if/else fields not empty
			}		// end of if image submit
		?>
			<h3>Upload Image</h3>
			<form method="POST" action="" enctype = "multipart/form-data">
				<label>Image tag name</label><br>
				<input type="text" name="image_tag_name" value="" /><br>
				<label>Image description</label><br>
				<input type="text" name="image_des" value="" /><br>
				<label>image</label><br>
				<input type="file" name="image_img" value="" /><br></br>

				<input type="submit" name="image_submit"/>
			</form>
			<hr>
		<?php 
			if(isset($_POST['sin_frame_submit'])){
					if(!empty($_POST['sin_frame_tag_name']) && !empty($_POST['sin_frame_price']) && !empty($_POST['sin_frame_des']) && !empty($_FILES['sin_frame_img']['tmp_name'])){
					$image = $_FILES['sin_frame_img']['tmp_name'];
					$image = file_get_contents($image);
					$image = base64_encode($image);
					$moldura->insert_into_table('INSERT INTO single_frames(single_frame_tag_name,single_frame_price,single_frame_des,single_frame_img)VALUES(
							"'.$_POST["sin_frame_tag_name"].'",
							"'.$_POST["sin_frame_price"].'",
							"'.$_POST["sin_frame_des"].'","'.$image.'"
						)');
					}else{
						echo "Can't keep fileds blank";
					}	// end of if/else for !empty fields
			}		//isset $_post['submit'];
		?>

			<h3>Upload single frame</h3>
			<form method="POST" action="" enctype = "multipart/form-data">
				<label>Single Frame Tag Name</label><br>
				<input type="text" name="sin_frame_tag_name" value=""/><br>
				<label>Single Frame Price</label><br>
				<input type="text" name="sin_frame_price" value=""/><br>
				<label>Single Frame Description</label><br>
				<input type="text" name="sin_frame_des" value=""/><br>
				<label>Single Frame Image</label><br>
				<input type="file" name="sin_frame_img" value=""/><br></br>
				<input type="submit" name="sin_frame_submit"/>
			</form>



<?php endif;  	//if session not set end	?>
<?php 
	
?>