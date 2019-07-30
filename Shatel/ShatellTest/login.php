<?php
require('conect_db.php');
print_r($_POST);
$username = mysqli_real_escape_string($connection, $_POST['user_input_name']);
$email = $_POST['user_input_email'];
$password = $_POST['user_input_password'];
$city=$_POST["user_city"];
$phone=$_POST['user_input_phone_number'];
$address=$_POST["user_input_address"];
echo($email);
echo($password);
// $query = "SELECT * FROM  'shatelTest'.'user' WHERE 'user'.'user_email' == '". $email ."' AND 'user'.'user_password'== '".$password."';";
$query = "SELECT * FROM  user WHERE user_email='". $email ."'AND user_password='".$password."'";

$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
echo($count);
if (mysqli_num_rows($result) == 1) {
//Pass
echo("user Exist");
} else {
//Fail
echo("not");
}
?>
<br>
