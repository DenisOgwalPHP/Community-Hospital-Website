<?php		
// starting to test for password match
if($_POST['password1'] == $_POST['confirmpassword']){
			$password = $_POST['confirmpassword'];
			}else{
			//TODO: Passwords did not match, throw the user out!
			unset($_POST);
				echo '<script type="application/javascript">';
				echo'alert("passwords Do not match");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
		}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	
// getting inputs from the form		
	$password = $_POST['confirmpassword'];
	$encryptedpassword = md5($password);
	$staffno = $_POST['emailaddress1'];
	require_once('connect/connect.php');
	
			$count ="SELECT COUNT('Email') AS Counter FROM `users` WHERE `Email` = '".$staffno."'";
			$result=mysqli_query($link,$count);
			$row=mysqli_fetch_assoc($result);
		if($row['Counter'] == 0){
			$query = "INSERT INTO `users` (Email,Password) VALUES('$staffno','$encryptedpassword')";
			mysqli_query($link,$query);
			
			$to = $staffno;
			$subject = 'Confirm Account';
			$message = 'Click this link to confirm your account with Kawempe Community School of Health Sciences https://communityhospitallugoba.org/emailapproval.php?email='.$to;
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
			$headers = 'From: kawempechealthsciences@gmail.com ' . "\r\n" .'Reply-To: kawempechealthsciences@gmail.com ' . "\r\n" .'X-Mailer: PHP/' . phpversion();
			mail($to, $subject, $message, $headers);
			
	//Checking if the account is created
			$newcount ="SELECT COUNT('Email')As Counter1 FROM `users` WHERE `Email` = '".$staffno."'";
			$result1=mysqli_query($link,$newcount);
			$row1=mysqli_fetch_assoc($result1);	
			if($row1['Counter1']== 1){
				
				echo '<script type="application/javascript">';
				echo'alert("Your Account Has Been Created, Approve it from Your Email to begin Using it");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
			}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Account Could not be created");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
			}
			}else{
			//Wrong username or password message
				echo '<script type="application/javascript">';
				echo'alert("Account Already Exists");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
	}
?>