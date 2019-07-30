
<?php
$connection = mysqli_connect('localhost', 'root', 'javadasdf');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}else{
    echo("connect");
}

$select_db = mysqli_select_db($connection, 'shatelTest');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
else{
    echo(" db connect");
}
?>
