<style>
    body{
    background-image: url(bg3.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
</style>
<form action="bus_roots_insert.php" method="POST">

bus_name:<input type="name" name="bus_name"> <br><br>
source:<input type="name" name="source"> <br><br>
destination<input type="name" name="destination"><br><br>
fare:<input type="number" name="fare"> <br><br>
seats_available:<input type="number" name="seats_available"> 

<input type="submit" name="submitvalue" value="insert">
<br><br><br>

<a href="bus_roots.php">see deatails</a>



</form>
