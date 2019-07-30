<?php
require('conect_db.php');
echo("register ok");
print_r($_POST);
$connec= mysqli_connect('localhost', 'root', 'javadasdf');
if (!$connec){
    die("Database Connection Failed" . mysqli_error($connec));
}else{
    echo("connect");
}

$select_db = mysqli_select_db($connec, 'shatelTest');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
else{
    echo(" db connect");
}

if (isset($_POST['user_input_name']) && isset($_POST['user_input_password'])&& isset($_POST["user_input_email"])){
    
    $username = mysqli_real_escape_string($connection, $_POST['user_input_name']);
    $email = $_POST['user_input_email'];
    $password = $_POST['user_input_password'];
    $city=$_POST["user_city"];
    $phone=$_POST['user_input_phone_number'];
    $address=$_POST["user_input_address"];
    $active=1;
    $query ="INSERT INTO `user` (user_name, user_password, user_email,user_current_location,user_active,user_phone_number,user_address)
     VALUES ('$username','$password','$email','$city','$active','$phone','$address');";

    // $query ="INSERT INTO `user` (user_name, user_password, user_email,user_current_location,user_active,user_phone_number,user_address) VALUES ('".$username."', '".$password."', '".$email."','".$city."','".$active."','".$phone."','".$address."');";
    $result1 = mysqli_query($connec, $query);
    if($result1){
        $smsg = "User Created Successfully.";
    }else{
        $fmsg ="User Registration Failed";
    }
}
?>
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>