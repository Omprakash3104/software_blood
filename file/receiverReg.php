<?php
if(isset($_POST['rregister'])){
	require 'connection.php';
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rpassword=$_POST['rpassword'];
	$rphone=$_POST['rphone'];
	$raddress=$_POST['raddress'];
	$rbg=$_POST['rbg'];
	$rdonationhistory=$_POST['rdonationhistory'];
	$rhealthhistory=$_POST['rhealthhistory'];
	$check_email = mysqli_query($conn, "SELECT remail FROM receivers where remail = '$remail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO receivers (rname, remail, rpassword, rphone, raddress, rbg,rdonationhistory,rhealthhistory)
	VALUES ('$rname','$remail', '$rpassword', '$rphone', '$raddress', '$rbg','$rdonationhistory','$rhealthhistory')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>