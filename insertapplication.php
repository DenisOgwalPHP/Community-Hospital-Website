<?php session_start();
if (isset($_SESSION['kacoshes'])) {
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Login First");';
	echo 'window.location.href="loginform.php";';
	echo '</script>';
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	
	require_once('connect/connect.php');
	// getting inputs from the form	
	$country = mysqli_real_escape_string($link,$_POST['country']);
	$city = mysqli_real_escape_string($link,$_POST['city']);
	$firstname =  mysqli_real_escape_string($link,$_POST['firstname']);
	$lastname = mysqli_real_escape_string($link,$_POST['lastname']);
	$studentnames=$lastname." ".$firstname;
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$fathername = $_POST['fathername'];
	$fathercontact = $_POST['fathercontact'];
	$mothername = mysqli_real_escape_string($link,$_POST['mothername']);
	$mothercontact = $_POST['mothercontact'];
	$phone = $_POST['phone'];
	$emailaddress = $_POST['emailaddress'];
	$fulladdress=$_POST['fulladdress'];
	$postalcode = $_POST['postalcode'];
	$program=$_POST['programss'];
	$intake = $_POST['intake'];
	$fileName = $_FILES['Filename']['name'];
	$temp =$ext = pathinfo($fileName, PATHINFO_EXTENSION);
	$newfilename = $emailaddress. '.' .$temp;
	$target = 'ApplicationDocs/';
	$fileTarget = $target . $newfilename;
	$tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName, $fileTarget);
	
	$newfetch = "SELECT Email FROM `studentapplication` WHERE Email = '".$emailaddress."' and Intake='".$intake."'";
	$result4 = mysqli_query($link, $newfetch);
	$row2 = mysqli_fetch_row($result4);
	if (mysqli_num_rows($result4) >= 1) {
		echo '<script type="application/javascript">';
		echo 'alert("Your Application Was Received, Just keep Patience for the reply from our Admissions officer");';
		echo 'window.location.href="Apply.php";';
		echo '</script>';
	} else {
	
	$query2 = "INSERT INTO `studentapplication` (StudentNames,DOB,Gender,FatherName,FatherContact,MotherName,MotherContact,MobileNumber,Email,City,Country,FullAddress,PostalCode,Program,Intake)
	VALUES('$studentnames','$dob','$gender','$fathername','$fathercontact','$mothername','$mothercontact','$phone','$emailaddress','$city','$country','$fulladdress','$postalcode','$program','$intake')";
	$result2 = mysqli_query($link, $query2);
	$to="kawempechealthsciences@gmail.com";
	$subject = "Student Application";
	$booknotes= "My names are ".$studentnames." and i am applying for ".$program 
	$headers  = "From: ".$emailaddress."\r\n";
	$headers .= "Reply-To: ".$emailaddress."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n"; 

	$message ='<html><body>';
	$message .='<div style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 80%;background-color: #F0F0F0;margin: 0 auto;float: none;margin-bottom: 10px;border-radius: 30px 30px 30px 30px;">';
	$message .='<div style="text-align:center;background-color:#3383ff;width:100%;padding-top:10px;padding-bottom:10px;border-radius: 30px 30px 0px 0px;"><h1 style="text-align: center;padding:0px;font-size:20px;font-weight:500;color:white;">Booking From Panobooking</h1></div>';
	$message .='<p style="font-size:15px;padding:10px; margin:10px;text-align:justify">'.$booknotes.'</p>';
	$message .='<div style="padding:10px;text-align:center"><a href="https://communityhospitallugoba.org/SchoolAdmin"><button style="padding:10px;text-align:center;height:50px;border-radius: 10px;background-color:#3383ff; color:white;font-size:20px;">Check Application</button></a></div></div>';
	$message .= '</body></html>';
	mail($to, $subject, $message, $headers);
	
	if ($result2) {
		echo '<script type="application/javascript">';
		echo 'alert("Application successfully registered, Our Admissions Officer will get back to you shortly");';
		echo 'window.location.href="Apply.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Application Failed, Try Again or try calling the contacts on this form");';
		echo 'window.location.href="Apply.php";';
		echo '</script>';
	}
}
