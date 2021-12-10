<!--Stephanie M. Ramos Camacho
	Muestra las posibles opciones para realizar la busqueda (usando los campos disponibles) y las opciones para realizar los cambios deseados (usando los campos disponibles). Todos estos datos son enviados a otro enlace para poder ser actualizados de la tabla.-->

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>UPDATE SUPPLIER</h2>
</head>
<body>
	<form action="rUpdateSuplidor.php" method="post">
		Necesary to update supplier's data:<br><br>
		<input type="checkbox" name="name" id="name"> <label for="name">Name:</label> <input type="text" name="name" id="name"><br><br>

        Data to update:<br><br>
        <input type="checkbox" name="Nsname" id="Nsname"> <label for="Nsname">Name:</label> <input type="text" name="Nsname" id="Nsname"><br>
		<input type="checkbox" name="Naddress" value="Naddress"> <label for="Naddress">Address:</label> <input type="text" name="Naddress" id="Naddress"><br>
        <input type="checkbox" name="Nsphone" value="Nsphone"> <label for="Nsphone">Phone:</label> <input type="text" name="Nsphone" id="Nsphone"><br>
        <input type="checkbox" name="Nemail" value="Nemail"> <label for="Nemail">Email:</label> <input type="text" name="Nemail" id="Nemail"><br><br>
            <input type="submit" value="Update">
        </form>

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>