<?php

session_start();
include "db.php";


if (isset($_POST['final_submit'])) {
    $frm   = $_POST['src_name'];
    $to    = $_POST['to_name'];
    $dt    = $_POST['date_name'];
    $bus   = $_POST['bus_name'];
    $fare  = $_POST['fare'];
    $seat  = $_POST['seat_number'];
    $user_id = $_SESSION['user_id'];

   $bus_id  = $_POST['bus_id'];


    // Insert booking
    $insert = "INSERT INTO bookings (user_id,bus_id,src_name, to_name, date_name, bus_name, fare, seat_number) 
               VALUES ('$user_id','$bus_id','$frm','$to','$dt','$bus','$fare','$seat')";
    if (mysqli_query($db, $insert)) {
        $_SESSION['user_id']=$user_id;
        $_SESSION["frm"]   = $frm;
        $_SESSION["to"]    = $to;
        $_SESSION["dt"]    = $dt;
        $_SESSION["bus"]   = $bus;
        $_SESSION["fare"]  = $fare;
        $_SESSION["seat"]  = $seat;
          $_SESSION["bus_id"] = $bus_id;

        header("Location: passenger info.php");
        exit;
    } else {
        die("Insert failed: " . mysqli_error($db));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
<style>
    h3{
        color: #fbfbfbff;
        background-color: rgba(0, 0, 0, 0.5);
             width: max-content;
             margin-left: 35%;
    }
        #seatsDiagram { border-collapse: collapse; margin: 20px auto; }
        #seatsDiagram td {
            width: 40px; height: 40px; text-align: center;
            vertical-align: middle; border: 1px solid #ccc;
            border-radius: 6px; font-weight: bold; cursor: pointer;
        }
        #form{
            color: white;
    padding: 25px;
    width: max-content;
    margin: 100px auto;
    font-size: 20px;
    border: 1px solid black;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 25px;
        }
        #seatsDiagram td:hover{
            background-color: #92df46ff;
           transition: 0.5s linear;
        }
       
        .available { background: green; color: white; }
        .booked { background: red; color: white; cursor: not-allowed; }
        .space { background: transparent; border: none; cursor: default; }
    </style>

     <script>
        function selectSeat(seatNumber, isBooked) {
            if (isBooked) {
                alert("Seat " + seatNumber + " is already booked!");
            } else {
                document.getElementById("seat_input").value = seatNumber;
            }
        }
    </script>

    <link rel="stylesheet" href="landing page.css" >
</head>




<body>
    <center>
        <h1><u>Ticket Reservations</u></h1>
    </center>


    <form action="" method="post" class="firstform">
<input type='hidden' name='bus_id' value='{$bus['id'])>

        from: <select name="src_name" id="src_id">
       
            <option value="Colombo">Colombo</option>
<option value="Ampara">Ampara</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Gampaha">Gampaha</option>
<option value="Ja-Ela">Ja-Ela</option>
<option value="Kelaniya">Kelaniya</option>
<option value="Negombo">Negombo</option>
<option value="Kalutara">Kalutara</option>
<option value="Kandy">Kandy</option>
<option value="Jaffna">Jaffna</option>
<option value="Kilinochchi">Kilinochchi</option>
<option value="Mannar">Mannar</option>
<option value="Vavniya">Vavniya</option>
<option value="Gampola">Gampola</option>
<option value="Nuwaraeliya">Nuwaraeliya</option>
<option value="Nawalapitiya">Nawalapitiya</option>
<option value="Anuradhapura">Anuradhapura</option>
<option value="Dambulla">Dambulla</option>
<option value="Horowpothana">Horowpothana</option>
<option value="Mathale">Mathale</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Balangoda">Balangoda</option>
<option value="Kegalle">Kegalle</option>
<option value="Rathnapura">Rathnapura</option>
<option value="Ambalanthota">Ambalanthota</option>
<option value="Galle">Galle</option>
<option value="Mathara">Mathara</option>
<option value="Badulla">Badulla</option>
<option value="Bandarawela">Bandarawela</option>
<option value="Mahiyanganaya">Mahiyanganaya</option>
<option value="Chilaw">Chilaw</option>
<option value="Kurunegala">Kurunegala</option>
<option value="Puttalam">Puttalam</option>
<option value="Wennappuwa">Wennappuwa</option>

            
        </select><br>
        to: <select name="to_name" id="to_id">
        <option value="Colombo">Colombo</option>
<option value="Ampara">Ampara</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Gampaha">Gampaha</option>
<option value="Ja-Ela">Ja-Ela</option>
<option value="Kelaniya">Kelaniya</option>
<option value="Negombo">Negombo</option>
<option value="Kalutara">Kalutara</option>
<option value="Kandy">Kandy</option>
<option value="Jaffna">Jaffna</option>
<option value="Kilinochchi">Kilinochchi</option>
<option value="Mannar">Mannar</option>
<option value="Vavniya">Vavniya</option>
<option value="Gampola">Gampola</option>
<option value="Nuwaraeliya">Nuwaraeliya</option>
<option value="Nawalapitiya">Nawalapitiya</option>
<option value="Anuradhapura">Anuradhapura</option>
<option value="Dambulla">Dambulla</option>
<option value="Horowpothana">Horowpothana</option>
<option value="Mathale">Mathale</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Balangoda">Balangoda</option>
<option value="Kegalle">Kegalle</option>
<option value="Rathnapura">Rathnapura</option>
<option value="Ambalanthota">Ambalanthota</option>
<option value="Galle">Galle</option>
<option value="Mathara">Mathara</option>
<option value="Badulla">Badulla</option>
<option value="Bandarawela">Bandarawela</option>
<option value="Mahiyanganaya">Mahiyanganaya</option>
<option value="Chilaw">Chilaw</option>
<option value="Kurunegala">Kurunegala</option>
<option value="Puttalam">Puttalam</option>
<option value="Wennappuwa">Wennappuwa</option>
            
        </select><br><br>
        Date of journey: <input type="date" name="date_name" id="date_id">
        <br><br>
        
        <input name="submit" type="submit" value="GET DETAILS" class="submit">
        </div>
    </form>

        <?php
        if (isset($_POST['submit'])) {
            $frm = $_POST['src_name'];
            $to = $_POST['to_name'];
            $dt = $_POST['date_name'];

            $_SESSION["frm"] = $frm;
            $_SESSION["to"]  = $to;
            $_SESSION["dt"]  = $dt;

            $query = "SELECT * FROM bus_detail WHERE source='$frm' AND destination='$to'";
             $result = mysqli_query($db, $query);

        if ($result && mysqli_num_rows($result) > 0) {
        while ($bus = mysqli_fetch_assoc($result)) {
            $busName = $bus['bus_name'];
            $fare    = $bus['fare'];
            $from    = $bus['source'];
            $to      =$bus['destination'];
             $bus_id  = $bus['id'];

            echo "<h3  >Bus: {$busName} | Fare: Rs.{$fare}</h3>";
            echo "<br>";
             echo "<h3  >From: {$from} | To:{$to}</h3>";

            // Fetch booked seats for this bus and date
            $bookedSeats = [];
            $res = $db->query("SELECT seat_number FROM bookings 
                                 WHERE bus_name='$busName' AND date_name='$dt'");
            while ($row = $res->fetch_assoc()) {
                $bookedSeats[] = $row['seat_number'];
            }

            // Seat Layout
            echo '<form method="post" id="form">';
        echo'  <table id="seatsDiagram"> ';
      echo'  <tr>';
             for ($seatNum=1; $seatNum<=14; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
       echo '<tr>';

         echo'  <tr>';
             for ($seatNum=15; $seatNum<=28; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
       echo '<tr>';
  
        echo'  <tr>';
             for ($seatNum=1; $seatNum<=14; $seatNum++): 
               echo' <td class="space"></td>';
           endfor;
        echo '<tr>';

        echo'  <tr>';
             for ($seatNum=29; $seatNum<=39; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
             echo' <td class="space"></td>';
              for ($seatNum=40; $seatNum<=41; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
       echo '<tr>';

      echo'  <tr>';
             for ($seatNum=42; $seatNum<=52; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
             echo' <td class="space"></td>';
              for ($seatNum=53; $seatNum<=54; $seatNum++): 
                $isBooked = in_array($seatNum, $bookedSeats);
                $class = $isBooked ? "booked" : "available";
                $clickable = $isBooked ? "true" : "false"; 
               echo'  <td id='. $seatNum .' class='.$class .' data-name='. $seatNum .' onclick="selectSeat( '.$seatNum .', '. $clickable.' )">'.$seatNum .'</td>';
            endfor;
       echo '<tr>';

 echo'</table >';
            
            echo "
            <input type='hidden' name='bus_id' value='$bus_id'>
                <input type='hidden' name='src_name' value='$frm'>
                <input type='hidden' name='to_name' value='$to'>
                <input type='hidden' name='date_name' value='$dt'>
                <input type='hidden' name='bus_name' value='$busName'>
                <input type='hidden' name='fare' value='$fare'>
                  <input type='hidden' name='bus_id' value='{$bus['id']}'>
                <label id='selected_seat_l'>Selected Seat:</label>
                <input type='number' id='seat_input' name='seat_number' min='1' max='54' required readonly>
                <br><br>
                <input type='submit' name='final_submit' class='submit' value='Confirm Booking'>
                
            ";
            echo "</form>";
        }
    } else {
        echo "<p align='center'>No buses found for this route.</p>";
    }


}
   ?>
        
     
</body>

</html>