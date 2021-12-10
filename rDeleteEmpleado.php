<!--Stephanie M. Ramos Camacho
	Recibe los datos y todos los que coincidan con los datos especificados seran borrados. Devuelve un mensaje indicando si pudo borrar la informacion. Da la opcion de ir a ver todos los empleados.-->

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
        <h2>DELETE EMPLOYEE</h2>
</head>
<body>
	<?php
        $phone = mysqli_real_escape_string($dbconnection, $_REQUEST['ephone']);


        if(!empty($phone))
        {
            $conditions = "ephone=".$phone;
        }

        $sql = "delete FROM Empleado where ".$conditions.";";
        
        if(mysqli_query($dbconnection, $sql))
        {
            echo "Done";
        } 
        else
        {
            echo "ERROR: Can't be delete. " . mysqli_error($dbconnection);
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