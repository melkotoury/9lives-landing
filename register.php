<?php

$con =mysqli_connect("localhost","root","root","rcnl_registration")
or die("Failed to Connect to DB Server" .mysqli_connect_error());

if(isset($_POST['gender'])){
}
$name=mysqli_real_escape_string($con,$_POST['name']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$discount_code=mysqli_real_escape_string($con,$_POST['discount-code']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$age=mysqli_real_escape_string($con,$_POST['age']);

$query="INSERT INTO registration (full_name,mobile,email,discount_code,gender,age) 
VALUES('$name','$mobile','$email','$discount_code','$gender','$age')";
 if (!mysqli_query($con,$query)) {
echo "Error ".mysqli_error($con); 
}else{
	header("location:index.php?msg=1");
}

?>