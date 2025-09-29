<?php

@include 'db.php';

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>


   <link rel="stylesheet" href="css/style.css">
<style>
   body{
    background-image: url(bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
   .resultdable, .resultdable th, .resultdable td {
      border:1px solid black;
      border-collapse:collapse;
      padding:8px;

   }
    .resultdable{
      width: 800px;
      margin:auto;
   }
   .resultdable tr:nth-child(odd){
      background-color:#b2d0d6;

   }
   .resultdable tr:nth-child(even){
      background-color:lightcyan;

   }
</style>
</head>
<body>
   
<div class="container">

   <div class="content">
      
     
      <a href="admin.php"> home</a>

  <?php


if(!$db){
   die( "connection error" . mysqli_connect_error());
}

 $quary= "  SELECT * FROM `user_form`";

 $result=mysqli_query($db,$quary);

 $numrow=mysqli_num_rows( $result);

 if($numrow > 0){


   echo '<table class="resultdable">';
   echo '<tr>';
   echo '<th> name </th>';
   echo '<th> email </th>';
   echo '<th> password </th>';
   echo '<th> user_type </th>';
   echo '</tr>';
   while( $row=mysqli_fetch_assoc($result)){
      echo '<tr>';
      echo '<td>' .$row['name'].   '</td>';
      echo '<td>' .$row['email'].   '</td>';
      echo '<td>' .$row['password'].   '</td>';
      echo '<td>' .$row['user_type'].   '</td>';
      echo '</tr>';
  }
  echo '</table>';
   
 }
 else{
   echo "recoud not fount";
 }
  ?>
   </div>

</div>

</body>
</html>