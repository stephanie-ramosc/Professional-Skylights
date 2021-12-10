<!--Stephanie M. Ramos Camacho
Muestra las posibles ociones para realizar la busqueda (usando los campos disponibles) y enviarlos a otro enlace para poder ser borrados de la tabla.-->

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>WRITE EMPLOYEE'S PHONE TO DELETE EMPLOYEE</h2>
</head>
<body>
        <form action="rDeleteEmpleado.php" method="post">
           Necessary to erase data:<br><br>
            <input type="checkbox" name="ephpne" id="ephone"> <label for="ephone">Phone:</label> <input type="text" name="ephone" id="ephone"><br>

            <input type="submit" value="Delete">
        </form>

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>