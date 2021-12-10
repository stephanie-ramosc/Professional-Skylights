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
	<form action="rUpdateMaterial.php" method="post">
		Necesary to update supplier's data:<br><br>
		<input type="checkbox" name="name" id="name"> <label for="name">Name:</label> <input type="text" name="name" id="name"><br><br>

        Data to update:<br><br>
        <input type="checkbox" name="Nmname" id="Nmname"> <label for="Nmname">Name:</label> <input type="text" name="Nmname" id="Nmname"><br>
        <input type="checkbox" name="Ntipo" value="Ntipo"> <label for="Ntipo">Type:</label> <input type="text" name="Ntipo" id="Ntipo"><br>
        <input type="checkbox" name="Ncolor" value="Ncolor"> <label for="Ncolor">Color:</label> <input type="text" name="Ncolor" id="Ncolor"><br>
        <input type="checkbox" name="Nmcantidad" value="Nmcantidad"> <label for="Nmcantidad">Quantity:</label> <input type="text" name="Nmcantidad" id="Nmcantidad"><br><br>
            <input type="submit" value="Update">
        </form>

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>