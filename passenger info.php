<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passengers Info</title>
    <link rel="stylesheet" href="passenger info.css">
<link rel="stylesheet" href="landing page.css" >
</head>

<body>

    <h1>
        <u>Passenger Information</u>
    </h1>
   
    <div class="container_pssngr_1">
       
            <?php
            session_start();
            $a = $_SESSION['frm'];
            $b = $_SESSION['to'];
            $c = $_SESSION['dt'];
            $d = $_SESSION['bus'];
            $e = $_SESSION['fare'];
            $f = $_SESSION["seat"];

            print("From: " . $a);
            
            print("<br>");
            print("<br>");
            print("<br>");

            print("To: " . $b);

            print("<br>");
            print("<br>");
            print("<br>");

            print("Date: " . $c);

            print("<br>");
            print("<br>");
            print("<br>");

           print("Bus Name: " . $d);

            print("<br>");
            print("<br>");
            print("<br>");

            print("Bus Fare: " . $e);

            print("<br>");
            print("<br>");

            print("seat no: " . $f);
            
            print("<br>");
            print("<br>"); 

if(isset($_POST['submit'])){
$user_id = $_SESSION['user_id'];
$Passenger_name =$_POST['Name'];
$Address =$_POST['Address'];
$Contact_Number = $_POST['PNumber'];
$bus_id = $_SESSION['bus_id'];

 $select = "SELECT * FROM passengers WHERE Passenger_name = '$Passenger_name' AND user_id = '$user_id'";
 $db = mysqli_connect('localhost', 'root', '', 'bus') or die("Database connection failed");
    $result = mysqli_query($db, $select);

   if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $passenger_id = $row['user_id'];
   }  else {
        // insert new passenger
        $insert_passenger = "INSERT INTO passengers (user_id, bus_id, Passenger_name, Passenger_Address, Passenger_PNumber) 
                             VALUES ('$user_id','$bus_id','$Passenger_name','$Address','$Contact_Number')";
        if(mysqli_query($db, $insert_passenger)){
            $passenger_id = mysqli_insert_id($db); 
             $_SESSION['passenger_id'] = $passenger_id;

    header("Location: ticket page.php"); 
    exit; 
        } else {
            die("Error inserting passenger: " . mysqli_error($db));
           header('location:ticket page.php');
           
        }
    }

  
 
};

 ?>
    </div>
    
    <form  method="post" >
    

        <div class="container_pssngr_2">
              Name: <input type="text" name="Name" id="num_id" required placeholder="type ur name">     
                <br>
                <br>
                <br>    
              Address: <input type="text" name="Address" id="num_id" required placeholder="type ur Address">  
                <br>
                <br>
                <br>        
              Phone Number: <input type="text" name="PNumber" id="num_id" required placeholder="type ur Phone Number">              
                <br>
                <br>
                <br>
      <input type="submit" name="submit" class="btn_pssngr" value="Go to Ticket">
</div>
        </form>
    </div> 

</body>

</html>
