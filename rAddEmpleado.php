<!--Stephanie M. Ramos Camacho
Recibe los datos e inserta los valores en la tabla. Devuelve un mensaje indicando si pudo agregar la informacion. Da la opcion de ir a ver todos los empleados.-->

<?php

$db_hostname = "localhost";
$db_username = "skylights";
$db_password = "skylight";
$db_database = "skylights";

mysqli_report(MYSQLI_REPORT_STRICT);

try
{
	$dbconnection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or $error=1;
}
catch(Exception $ex)
{
	die("Failed to connect to the database: " . $ex->getMessage());
}

mysqli_set_charset($dbconnection, "utf8");
?>

<html>
<head>
<style>
table, th, td 
{
        border: 2px solid midnightblue;
}
</style>
        <h2>ADD</h2>
</head>
<body>
    <?php
        $nombre = mysqli_real_escape_string($dbconnection, $_REQUEST['ename']);
        $phone = mysqli_real_escape_string($dbconnection, $_REQUEST['ephone']);
        $salario1 = mysqli_real_escape_string($dbconnection, $_REQUEST['salary1']);
        $salario2 = mysqli_real_escape_string($dbconnection, $_REQUEST['salary2']);
        $salario3 = mysqli_real_escape_string($dbconnection, $_REQUEST['salary3']);
        $salario4 = = mysqli_real_escape_string($dbconnection, $_REQUEST['salary4']);
        $incomeTax = ($salario1*.10) + ($salario2*.10) + ($salario3*.10) + ($salario4*.10);
        $salarioT = ($salario1 + $salario2 + $salario3 + $salario4) - ($incomeTax);
 
        $sql = "INSERT INTO Empleado (ename, ephone, salary, tax) VALUES ('$nombre', '$phone', '$salarioT', '$incomeTax');";
        
        if(mysqli_query($dbconnection, $sql))
        {
            echo "Done";
        } 
        else
        {
            echo "ERROR: Can't be add. " . mysqli_error($dbconnection);
        }
         
        mysqli_close($dbconnection);
    ?>

    <a href="Empleados.php">
    <?php print "EMPLOYEES" ?>
    </a>

    <a href="home.php">
    <?php print "Home Page" ?>
    </a>

</body>
</html>