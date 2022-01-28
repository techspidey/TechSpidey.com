<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connected";
}else{
	echo "Disconnected";
}

mysqli_select_db($con, 'test website user');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userdata (user, email, mobile, comment) values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con,$query);

echo "$query";

header('location:contact.php');

?>