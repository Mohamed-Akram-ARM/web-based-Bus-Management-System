<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Page</title>
    <link href="ticket page.css" rel="stylesheet">
</head>

<body>
    <script>
        function prnt() {
            window.print();

        }
    </script>
    <div class="container_ticket">
        <h1 class="mainhead"><b><u>ARM TRAVEL LINK TICKET</u></b></h1>

        <?php
        session_start();

        ?>
       
   <br><br>
        Date of Journey: <input type="text" value="<?php print($_SESSION['dt']) ?>" readonly>
        <br><br>
        Bus Name: <input type="text" value="<?php print($_SESSION['bus']) ?>" readonly>
        <br><br>
        From: <input type="text" value="<?php print($_SESSION['frm']) ?>" readonly>
        <br><br>
        To: <input type="text" value="<?php print($_SESSION['to']) ?>" readonly>
        <br><br>
          Seat No: <input type="text" value="<?php print($_SESSION["seat"]) ?>" readonly>
        <br><br>
        Fare: <input type="number" value="<?php print(($_SESSION['fare'])) ?>" readonly>
        <br><br>
    </div>
    <input type="button" value="print" onclick="prnt()">
</body>

</html>