<!--Stephanie M. Ramos Camacho
Muestra los campos requeridos para guardar la informacion de los suplidore, luego envia los datos a otro enlace.-->

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>ADD EMPLOYEE</h2>
</head>
<body>
        <form action="rAddEmpleado.php" method="post">
            <p>
                <label for="ename">Name:</label>
                <input type="text" name="ename" id="ename">
            </p>
            <p>
                <label for="ephone">Phone:</label>
                <input type="text" name="ephone" id="ephone">
            </p>
            <p>
                <label for="salary1">Week 1 Salary: $</label>
                <input type="text" name="salary1" id="salary1">
            </p>
            <p>
                <label for="salary2">Week 2 Salary: $</label>
                <input type="text" name="salary2" id="salary2">
            </p>
            <p>
                <label for="salary3">Week 3 Salary: $</label>
                <input type="text" name="salary3" id="salary3">
            </p>
            <p>
                <label for="salary4">Week 4 Salary: $</label>
                <input type="text" name="salary4" id="salary4">
            </p>
            <input type="submit" value="Add">
        </form> 

        <a href="home.php">
        <?php print "Home Page" ?>
        </a>

</body>
</html>