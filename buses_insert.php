<style>
    body{
    background-image: url(bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
</style>
<?php
@include 'db.php'; 




if(isset($_POST['submitvalue'])){
    $bname=$_POST['bus_name'];
    $from=$_POST['source'];
    $to=$_POST['destination'];
    $fare=$_POST['fare'];
    $seat_available=$_POST['seats_available'];
   
 

if(!$db){
    die ('connection error' . mysqli_connect_error());
}

    $query=" INSERT INTO `bus_detail`(`bus_name`, `source`, `destination`, `fare`, `seats_available`)
     VALUES ('$bname', '$from', '$to', '$fare','$seat_available') ";


 $result=mysqli_query($db,$query);

 if($result){
  

  header('location:buses.php');
 }
 else{
    echo 'error while inserting';
 }
}


?>