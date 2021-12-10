<!--Stephanie M. Ramos Camacho
Muestra los campos requeridos para guardar la informacion de los suplidores, luego envia los datos a otro enlace.-->

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>ADD SUPPLIER</h2>
</head>
<body>
        <form action="rAddSuplidor.php" method="post">
            <p>
                <label for="sname">Name:</label>
                <input type="text" name="sname" id="sname">
            </p>
            <p>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address">
            </p>
            <p>
                <label for="sphone">Phone:</label>
                <input type="text" name="sphone" id="sphone">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </p>
            <input type="submit" value="Add">
        </form> 

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>