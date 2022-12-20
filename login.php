<?php
session_start();
// getting inputs from the form		
	$email = $_POST['emailaddress'];
	$password = $_POST['password'];
	$encryptedpassword = md5($password);
	require_once('connect/connect.php');
			$newfetch ="SELECT Email,Password,Usertype FROM `users` WHERE Email = '".$email."' and Approval='Approved'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)>=1){
				$email=$row2[0];
				$fetchedpassword=$row2[1];
				$usertype=$row2[2];
			if($fetchedpassword ==$encryptedpassword){
				if($usertype=="Admin"){
				$_SESSION['kacoshes']=$email;
				header('Location: Applications.php');
				}else{
				$_SESSION['kacoshes']=$email;
				header('Location: Apply.php');
				}
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Registered Password");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("Account Does Not exist OR its not yet Approved");';
				echo'window.location.href="loginform.php";';
				echo '</script>';
				}
			
?>