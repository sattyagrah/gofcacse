<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='golubhai1998@gmail.com';
		$subject='Form Submission';
		$message="Name: " .$name. "\n" ."Phone_Number: ". "\n".$phone. "Wrote the following: ". "\n\n".$msg;
		$headers="From: ".$email;


		if(mail($to, $Subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank You!"."\n".$name."</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>