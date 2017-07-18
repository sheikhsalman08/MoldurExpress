<head>	
	<link rel = "stylesheet" href="style.css"/>
</head>
<?php 
	require_once('classes.php');
	session_start();
 	$moldura = new MolduraExpress_ruff('localhost','root','');

 	$moldura -> create_database('moldura');
 	
 	if(isset($_SESSION['user_id'])){
 	$user_id = $moldura->getting_data_by_another_field('users','user_first_name','user_id',$_SESSION['user_id']);
	define("user_name","$user_id");
	require_once('auto_create_table.php');
}

