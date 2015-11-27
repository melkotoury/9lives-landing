<?php

$con =mysqli_connect("localhost","root","root","rcnl_registration")
or die("Failed to Connect to DB Server" .mysqli_connect_error());
//gender
if(isset($_POST['gender'])){
    $gender=$_POST['gender'];
    if($gender=='male'){
        $gender='m';
    }elseif($gender=="female"){
        $gender='f';
    }
}else{
$gender="not defined";
}
//age group
if(isset($_POST['age-group'])){
    $age=$_POST['age-group'];
    switch ($age) {
        case 0:
            $age="not defined";
        break;
        case 1:
            $age="15-20";
        break;
        case 2:
            $age="21-25";
        break;
        case 3:
            $age="26-30";
        break;
            case 4:
                $age="31-40";
        break;
            case 5:
                $age="50+";
        break;
        default:
            $age="Something went wrong";
    }
}else{
    $age="not defined";
}



$name=mysqli_real_escape_string($con,$_POST['name']);
$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$discount_code=mysqli_real_escape_string($con,$_POST['discount-code']);
//$gender=mysqli_real_escape_string($con,$_POST['gender']);
//$age=mysqli_real_escape_string($con,$_POST['age']);

$query="INSERT INTO registration (full_name,mobile,email,discount_code,gender,age) 
VALUES('$name','$mobile','$email','$discount_code','$gender','$age')";
 if (!mysqli_query($con,$query)) {
echo "Error ".mysqli_error($con); 
}else{
	header("location:index.php?msg=1");
}

//age group

?>