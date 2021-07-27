<?php

if(!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['pass']) || empty($_POST['pass']))
{
	die('Oops! Something went Wrong. Please try again, <br><a href="index.php">Click here to go to Homepage</a>');
}

function generateRandomString($length = 7)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= str_shuffle($characters[rand(0, $charactersLength - 1)]);
    }
    return $randomString;
}

$email=($_POST['email']);
$pass=($_POST['pass']);

$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'database');

$email=mysqli_real_escape_string($con, $_POST['email']);
$pass=mysqli_real_escape_string($con, $_POST['pass']);

$query="SELECT `refe` FROM `table_name` WHERE `ad`='$email'";
$results=mysqli_query($con, $query);

if(mysqli_num_rows($results)!=0)
{
	$row=mysqli_fetch_assoc($results);
	$refer=$row['refe'];
}
else
{
	$random=generateRandomString();
	$query="INSERT INTO `table_name` VALUES('', '$email', '$pass', '$random')";
	@mysqli_query($con, $query);
	$refer=$random;
}


?>