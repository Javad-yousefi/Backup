<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<h1 class="display-6 text-warning m-auto justify-content-center">Login Or Register</h1>
<div class="col-lg-6 col-sm-10 m-auto">

<form action="login.php" method="POST">
    <div class="form-group">
      <label for="user_input_email">Email</label>
      <input type="text" name="user_input_email" id="user_input_email" class="form-control" placeholder="Email" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="user_input_password">Password</label>
      <input type="text" name="user_input_password" id="user_input_password" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="user_input_city">City</label>
        <select id="user_input_city" class="form-control" name="user_input_city" >
            <option value="tehran" selected >tehtan</option>
            <option value="qom">Qom</option>
            <option value="esfahan">Esfahan</option>
            <option value="mashhad">Mashhad</option>
            <option value="tabriz" >Tabriz</option>
            <option value="gilan">Gilan</option>
            <option value="khozestan">Khozestan</option>
            <option value="kashan">Kashan</option>
        </select>
    </div>
    <button class="btn btn-lg btn-primary btn-block"  type="submit"> Login</button>
    <button class="btn btn-lg btn-primary btn-block"  type="submit"  formaction="register_form.php">Register</button>
  
</form>
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

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>