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
        <h2>WRITE SUPPLIER'S NAME TO DELETE SUPPLIER</h2>
</head>
<body>
        <form action="rDeleteSuplidor.php" method="post">
           Necessary to erase data:<br><br>
            <input type="checkbox" name="sname" id="sname"> <label for="sname">Name:</label>
            <input type="text" name="sname" id="sname"><br>

            <input type="submit" value="Delete">
        </form>

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>