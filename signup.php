<?php
    session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_firstname = $_POST['firstName'];
		$user_secondname = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

		if(!empty($user_firstname) && !empty($user_secondname)&& !empty($email)&& !empty($password) && !is_numeric($user_firstname)&& !is_numeric($user_secondname))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_firstname,user_secondname,email,password) values ('$user_id','$user_firstname','$user_secondname','$email','$password')";

			mysqli_query($con, $query);

			header("Location: ./george/index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>