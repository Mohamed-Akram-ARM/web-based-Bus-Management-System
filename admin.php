<?php

@include 'db.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

  
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
   .buttons{
      display: flex;
    justify-content: space-around;
    align-items: center;
   }
   .buttons button{
     width: 100%;
     background-color:rgb(152, 152, 136);

   }
   .font-a{
      border:2px solid red;
      height: 200px;
   width:200px ;
   display: flex;
   margin-left: 5px;

   }
</style>
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome Admin</h1>
      
      <div class="buttons">
         <div class="font-a">  <button type="button" onclick=" location.href='addadmin.php' " >add admin</button></div>
         
          
         <div class="font-a"><button type="button" onclick=" location.href='buses.php' " >busses</button></div>
      
      <div class="font-a"> <button type="button" onclick=" location.href='passengers_Details.php' " >passengers Details</button></div>
     
      <div class="font-a"> <button type="button" onclick=" location.href='booking.php' " >booking</button></div>
      
      <div class="font-a"> <button type="button" onclick=" location.href='userdet.php' " >uer deatails</button></div>
      
     
</div>  

   </div>

</div>

</body>
</html>