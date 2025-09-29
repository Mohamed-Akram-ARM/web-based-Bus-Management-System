<?php
 
@include 'db.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($db, $_POST['name']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($db, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO `user_form`( `name`, `email`, `password`,`user_type`) VALUES ('$name','$email','$pass','$user_type')";
        if(!$insert){
            die("not inserted");
        }
        
         mysqli_query($db, $insert);
         header('location:login_page.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin register form</title>

   
   <link href="sign-u.css" rel="stylesheet">

</head>
<body>
   
<center>
            <h1>
                <u>Sign-Up Form</u>
            </h1>
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <div class="container_signup">
                    <div class="inputclass">
                    username: <input type="text" name="name" required placeholder="enter your name">
                    </div>
                    <div class="inputclass">
                    email:  <input type="email" name="email" required placeholder="enter your email">
                    </div>
                    <div class="inputclass">
                    password:  <input type="password" name="password" required placeholder="enter your password">
                    </div>
                    <div class="inputclass">
                    confirm password:  <input type="password" name="cpassword" required placeholder="confirm your password">
                    </div>
                    <div class="inputclass">
                   
                    <select name="user_type">            
         <option value="user">user</option>
        
        
      </select>
      </div>
      </div>
      <br><br>
                <div class="btnn">
      <input type="submit" class="btn_signup" name="submit" value="register" >
      </div>
   </form>
   </center>
    </div>


</body>
</html>      
</body>