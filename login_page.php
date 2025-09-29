<?php

@include 'db.php';

session_start();


if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($db, $_POST['email']);
   $pass = md5($_POST['password']);
   
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($db, $select);

   if(mysqli_num_rows($result) > 0){

     $row = mysqli_fetch_assoc($result);

      //  session after fetching row
      $_SESSION['user_id'] = $row['id'];  
      $_SESSION['user_type'] = $row['user_type'];  
      $_SESSION['user_name'] = $row['name']; 

      if($row['user_type'] == 'admin'){
        echo "adm";
        
         header('location:admin.php');
          exit;

      }elseif($row['user_type']== 'user'){
        echo "user";
        header('location:landing_page.php');
         exit;
      }   
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>


   <link href="sign-u.css" rel="stylesheet">

</head>
<body>
   
<center>
        <h1>
            <u>Login page</u>
        </h1>
        <div class="container_login">

   <form action="" method="post">
      <h3>login now</h3>
     
       email:  <input type="email" name="email" id="email_login_id" required placeholder="enter your email">
       <br><br>
       password:<input type="password" name="password"  id="pass_login_id" required placeholder="enter your password">
   
       <div class="btnn"><br><br>
       <input type="submit" name="submit" value="login now" class="form-btn">
       </div>
       <br> 
           <h4>----OR-----</h4>
            <br>
            <div class="btnn"><br>
          
               <button class="btn-s" onclick="location.href='sign_up.php'">SIGN UP</button>
            </div>
           </form>
        </div>
    </center>
   
   </form>

</div>

</body>
</html>

