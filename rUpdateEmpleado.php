<!--Stephanie M. Ramos Camacho
	Recibe todos los datos, analiza los campos que seran utilizados para la busqueda y los que seran los cambios a realizarse. Devuelve un mensaje indicando si pudo actualizar la informacion. Da la opcion de ir a ver todos los empleados.-->

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
        <h2>UPDATE EMPLOYEE</h2>
</head>
<body>
	<?php
        $nombre = mysqli_real_escape_string($dbconnection, $_REQUEST['Nename']);
        $phone = mysqli_real_escape_string($dbconnection, $_REQUEST['Nephone']);
        $salario = mysqli_real_escape_string($dbconnection, $_REQUEST['Nsalary']);
        $taxes = mysqli_real_escape_string($dbconnection, $_REQUEST['Ntax']);
        

        $Pphone = mysqli_real_escape_string($dbconnection, $_REQUEST['phone']);

        
        $sqlEmpleados = sprintf("select * FROM Empleado");
        $resEmpleados = mysqli_query($dbconnection, $sqlEmpleados);

        while($rowEmpleados = mysqli_fetch_array($resEmpleados, MYSQLI_ASSOC))
        {
            $tel = $rowEmpleados['ephone'];
            if($tel == $Pphone)
            {
                $sql = "UPDATE Empleado SET ename = '$nombre', ephone = '$phone', salary = '$salario', tax = '$taxes' WHERE ephone = '$Pphone'";
            }
        }
        
        if(mysqli_query($dbconnection, $sql))
        {
            echo "Updated";
        } 
        else
        {
            echo "ERROR: Can't be update. " . mysqli_error($dbconnection);
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