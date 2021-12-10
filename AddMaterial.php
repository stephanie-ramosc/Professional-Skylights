<!--Stephanie M. Ramos Camacho
Muestra los campos requeridos para guardar la informacion de los materiales, luego envia los datos a otro enlace.-->

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>ADD MATERIAL</h2>
</head>
<body>
        <form action="rAddMaterial.php" method="post">
            <p>
                <label for="mname">Name:</label>
                <input type="text" name="mname" id="mname">
            </p>
            <p>
                <label for="tipo">Type:</label>
                <input type="text" name="tipo" id="tipo">
            </p>
            <p>
                <label for="color">Color:</label>
                <input type="text" name="color" id="color">
            </p>
            <p>
                <label for="mcantidad">Quantity:</label>
                <input type="text" name="mcantidad" id="mcantidad">
            </p>
            <input type="submit" value="Add">
        </form> 

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>