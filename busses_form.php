<style>
    body{
    background-image: url(bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
</style>
<form action="buses_insert.php" method="POSt">
bus_name:<input type="name" name="bus_name"> <br><br>
from:<input type="name" name="source"> <br><br>
to<input type="name" name="destination"><br><br>
fare:<input type="number" name="fare"> <br><br>
seat_available:<input type="number" name="seats_available"> <br><br>
<input type="submit" name="submitvalue" value="insert">
<br><br><br>

<a href="buses.php">see deatails</a>



</form>
