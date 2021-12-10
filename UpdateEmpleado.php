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
        <h2>UPDATE EMPLOYEE</h2>
</head>
<body>
	<form action="rUpdateEmpleado.php" method="post">
		Necesary to update employee's data:<br><br>
        <input type="checkbox" name="phone" id="ephone"> <label for="phone">Phone:</label> <input type="text" name="phone" id="phone"><br><br>

        Data to update:<br><br>
        <input type="checkbox" name="Nename" value="Nename"> <label for="Nename">Name:</label> <input type="text" name="Nename" id="Nename"><br>
        <input type="checkbox" name="Nephone" id="Nephone"> <label for="Nephone">Phone:</label> <input type="text" name="Nephone" id="Nephone"><br>
        <input type="checkbox" name="Nsalary" value="Nsalary"> <label for="Nsalary">Salary(monthly): $</label> <input type="text" name="Nsalary" id="Nsalary"><br>
        <input type="checkbox" name="Ntax" value="Ntax"> <label for="Ntax">Income Tax: $</label> <input type="text" name="Ntax" id="Ntax"><br>
        <br><br>

            <input type="submit" value="Update">
        </form>

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>