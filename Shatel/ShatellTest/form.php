<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['user_input_name']) && isset($_POST['user_input_password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Info Form</title>

    <!-- Map Css -->
    <style>
      .mapouter{position:relative;text-align:right;height:500px;width:600px;}
      .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
    </style>
  </head>
  <body>

  <?php
      function getUserIpAddr(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
      }
    
     echo 'User Real IP - '.getUserIpAddr();
    ?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-10">
            <h1 class="text-center text-secondary">
            Please Fill the Form.
            </h1>  
            <form action="#"  class="form-signin " method="post">  
              <div class="form-group">
                <label for="user_input_name">Name</label>
                <!-- <input type="text" required  autofocus class="form-control" name="user_input_name" id="user_input_name" aria-describedby="helpId" placeholder="Full Name"> -->
                <input type="text"  class="form-control" name="user_input_name" id="user_input_name" aria-describedby="helpId" placeholder="Full Name">
                <small id="helpId" class="form-text text-muted">Enter Your Full Name Please</small>
              </div>
              <div class="form-group">
                <label for="user_input_password">Password</label>
                <!-- <input type="password" class="form-control" required name="user_input_password" id="user_input_password" aria-describedby="helpId" > -->
                <input type="password" class="form-control"  name="user_input_password" id="user_input_password" aria-describedby="helpId" >

                <small id="helpId" class="form-text text-muted">Enter Valid Password</small>
              </div>
           
              <div class="form-group">
                <label for="user_input_email">Email</label>
                <input type="text"class="form-control" name="user_input_email" id="user_input_email"   aria-describedby="helpId" placeholder="YourEmail@example.com">
                <small id="helpId" class="form-text text-muted">Enter Your Email Address</small>
              </div>
              <div class="form-group">
                <label for="user_input_phone_number">Phone Number</label>
                <input type="text" class="form-control" name="user_input_phone_number" id="user_input_phone_number">
               <small id="helpId" class="form-text text-muted">Enter Whit Area Code</small>
              </div>
              <div class="form-group">
              
                <label for="user_input_city">City</label>
                <select id="user_input_city" class="form-control" name="user_input_city" >
                  <option value="tehran" >tehtan</option>
                  <option value="qom">Qom</option>
                  <option value="esfahan">Esfahan</option>
                  <option value="mashhad">Mashhad</option>
                  <option value="tabriz" selected>Tabriz</option>
                  <option value="gilan">Gilan</option>
                  <option value="khozestan">Khozestan</option>
                  <option value="kashan">Kashan</option>
                </select>
                <button type="submit" class="btn-success" name="submit_btn" value="submit_city" >City Submit</button>
             
              </div>
             
            <div class="form-group">
              <label for="user_input_address">Address</label>
             <textarea class="form-control" name="user_input_address" id="user_input_address" cols="30" rows="4"></textarea>
             </div>
             <button type="submit" class="btn-success" value="submit_form" >Form Submit</button>
             
           </form>
        </div> 

        <div class="mapouter">
          <div class="gmap_canvas">
            <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
              // the request method is fine
          
          } else {
          
            exit('Invalid Request');
          
          }

            $user_city="tehran";

            if ($_REQUEST["submit_btn"]==="submit_city") {
              # code...
              if(!isset($_POST["user_input_city"])){
                $user_city="tehran";
               }
               $user_city=$_POST["user_input_city"];
            } else {
              # code...
              // test Valid input
              if (!empty($_POST['user_input_name']) && !empty($_POST['user_input_email']) && !empty($_POST['user_input_password'])) {

                $user_name= trim(htmlspecialchars($_POST['user_input_name']));
                $user_email = trim(htmlspecialchars($_POST['user_input_email']));
                $user_email = filter_var($user_email, FILTER_VALIDATE_EMAIL);
                $user_password=password_hash($_POST['user_input_password'], PASSWORD_DEFAULT);
	              if ($user_email === false) {
	              	exit('Invalid Email');
	              }
               
              }
              
              // print_r($_POST);
              echo($user_name);
              echo($user_password);
              
              // $user_password=
              // $user_phone=
              // $user_address=
              // $user_email=


               $user_city=$_POST["user_input_city"];
             
              }
              
             
              // If the values are posted, insert them into the database.
            //   if (isset($_POST['username']) && isset($_POST['password'])){
            //       $username = $_POST['username'];
            // $email = $_POST['email'];
            //       $password = $_POST['password'];
           
                  // $query = "INSERT INTO `user` (user_name, user_password, user_email) VALUES ('$user_name', '$user_password', '$user_email')";
                  // $result = mysqli_query($connection, $query);
                  // if($result){
                  //     $smsg = "User Created Successfully.";
                  // }else{
                  //     $fmsg ="User Registration Failed";
                  // }
              
              
             
           ?>
            
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php if($user_city===""){
                $user_city="tehran";
               }
               $user_city=$_POST["user_input_city"];
            echo($user_city) ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
            <!-- <a href="https://www.enable-javascript.net">enable-javascript.net</a> -->
            </div>

         </div>
    
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>