<?php 
	class MolduraExpress_ruff
	{
		function __construct($dbhost,$dbuser,$dbpass){
			$this->dbhost = $dbhost;
			$this->dbuser = $dbuser;
			$this->dbpass = $dbpass;
			$this->connection = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);
		mysqli_connect_errno($this->connection);
		mysqli_connect_error($this->connection);
		mysqli_error($this->connection);
		mysqli_errno($this->connection);
		}		//end of construct function

		function create_database($dbname){ 	// creating and using database;

			mysqli_query($this->connection,'CREATE DATABASE '.$dbname);
			mysqli_query($this->connection,'USE '.$dbname);

		}		//end of creating and using database

		function create_table($table_name,$table_values){		//creating new table
			$query = "CREATE TABLE ".$table_name."(".$table_values.")";
			// echo "<br/><br/>".$query."<br/><br/>";
			mysqli_query($this->connection,$query);
		}		//end of creating new table

		function insert_into_table($query){		//inserting into table
			
			mysqli_query($this->connection,$query);
		}		//end of insert_into_table function

		function update_into_table_by_id($table_name,$menu_name,$value,$id_num){		//
				$query = "UPDATE ".$table_name."
			  	SET ".$menu_name."='".$value."'
			 	WHERE id = ".$id_num;
			 mysqli_query($this->connection,$query);
		}		//end of updating inside table

		function delete_from_table_by_id($table_name,$id){

				$query = "DELETE FROM ".$table_name." WHERE id= ".$id;
			mysqli_query($this->connection,$query);

		}		//end of deleting inside table

		

		function show_sorted_row_values($table_name,$order_by_menu,$order_by){
			$query = "SELECT * FROM ". $table_name ." ORDER BY ".$order_by_menu." ".$order_by;
			return mysqli_query($this->connection,$query);
			//fetch in the query data and and show by while loop
		}		//end of shwowing particular values with ASC/DESC


		function show_sorted_value_of_user($table_name,$user_data_col_name,$user_data_col_name_value,$order_by_menu,$order_by){
			$query = "SELECT * FROM ". $table_name ." WHERE ".$user_data_col_name." = ".$user_data_col_name_value." ORDER BY ".$order_by_menu." ".$order_by;

			return mysqli_query($this->connection,$query);
			//fetch in the query data and and show by while loop
		}		//end of show_sorted_value_of_user

		function show_user_user_pass($table_name,$userorpass){
			$query = "SELECT * FROM '. $table_name .' WHERE '.$userorpass.'";
			return mysqli_query($this->connection,$query);
			//fetch in the query data and and show by while loop
		}		//end of shwowing particular values with ASC/DESC

		function show_menu_column_of_table($table_name){
			$query = "SHOW COLUMNS FROM ".$table_name;
			$query = mysqli_query($this->connection,$query);
			while($queryy = mysqli_fetch_row($query)){
				echo "<th style='text-align:center'>".$queryy[0]."</th>";
			}		//end of while loop
		}		//end of shwoing menu columns 


		function row_number($table_name){
			$query = "SELECT * FROM ". $table_name;
			$query = mysqli_query($this->connection,$query);
			$query = mysqli_num_rows($query);
			
		}		//end of row_number();

		function email_existance($table_name,$email_field,$email_value){
			$query = "SELECT * FROM ".$table_name." WHERE ".$email_field." = '".$email_value."'";
			$query = mysqli_query($this->connection,$query);
			if(mysqli_num_rows($query) > 0){
				return true;
			}else{
				return false;
			}
		 }		//end of email_existance

		 function finding_email_pass($table_name,$pass_field,$email_field,$email_value){
		 	$query = "SELECT ".$pass_field." FROM ".$table_name." WHERE ".$email_field." = '".$email_value."'";
		 	$query = mysqli_query($this->connection,$query);
		 	while($fetches = mysqli_fetch_assoc($query)){
		 		return $fetches[$pass_field];
		 	}		//end of  while($fetches = mysqli_fetch_assoc($query)){
		 }		//end of  function finding email pass


		function getting_data_by_another_field($table_name,$for_field,$from_field,$from_field_value){
		 	$query = "SELECT ".$for_field." FROM ".$table_name." WHERE ".$from_field." = '".$from_field_value."'";
		 	
		 	$query = mysqli_query($this->connection,$query);
		 	while($fetches = mysqli_fetch_assoc($query)){
		 		return $fetches["$for_field"];
		 }		//end of while($fetch = mysqli_fetch_assoc($query)){
		}	//end of function getting_data_by_another_field


		 function finding_email_id($table_name,$id_field,$email_field,$email_value){
		 	$query = "SELECT ".$id_field." FROM ".$table_name." WHERE ".$email_field." = '".$email_value."'";
		 	$query = mysqli_query($this->connection,$query);
		 	while($fetches = mysqli_fetch_assoc($query)){
		 		return $fetches['admin_id'];
		 }		//end of while($fetch = mysqli_fetch_assoc($query)){
		}	//end of function finding email pass

		function insert_into_cart($query){
			$the_this = "INSERT INTO CART (cart_id,cus_id,frame_id,picture_id,order_price) VALUES('','','','','')";
			
			return mysqli_query($this->connection,$query);
		}		//end of insert_into_cart

		function show_particular_value($table_name,$field_name,$field_value){
			$query = "SELECT * FROM ". $table_name ." WHERE ".$field_name." = '".$field_value."'";
			return mysqli_query($this->connection,$query);
			//fetch in the query data and and show by while loop
		}		//end of shwowing particular values







 		function shown(){
 			echo "working";
 		}


	 }		//end of class











	// 	function image_uploader($image_name){
				
	// 				if(getimagesize($_FILES['$image_name']['tmp_name']) == FALSE){
	// 					echo "<h1>No image</h1>";
	// 				}else{
	// 					$image = addslashes($_FILES['$image_name']['tmp_name']);
	// 					$image = file_get_contents($image);
	// 					$image = base64_encode($image);
	// 					echo $image;
	// 				}		//		if(getimagesize($_FILES['$image_name']['tmp_name']) == FALSE)
	// 	}		//end of image_uploader function



