<!--Stephanie M. Ramos Camacho
	Recibe todos los datos, analiza los campos que seran utilizados para la busqueda y los que seran los cambios a realizarse. Devuelve un mensaje indicando si pudo actualizar la informacion. Da la opcion de ir a ver todos los materiales.-->

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
        <h2>UPDATE MATERIAL</h2>
</head>
<body>
	<?php
        $nombre = mysqli_real_escape_string($dbconnection, $_REQUEST['Nmname']);
        $tipo = mysqli_real_escape_string($dbconnection, $_REQUEST['Ntipo']);
        $color = mysqli_real_escape_string($dbconnection, $_REQUEST['Ncolor']);
        $cantidad = mysqli_real_escape_string($dbconnection, $_REQUEST['Ncantidad']);
        
        $Pnombre = mysqli_real_escape_string($dbconnection, $_REQUEST['mname']);

        $sqlMateriales = sprintf("SELECT * FROM Material");
        $resMateriales = mysqli_query($dbconnection, $sqlMateriales);

        while($rowMateriales = mysqli_fetch_array($resMateriales, MYSQLI_ASSOC))
        {
            $name = $rowMateriales['mname'];
            if($name == $Pnombre)
            {
                $sql = "UPDATE Material SET mname = '$nombre', tipo = '$tipo', color = '$color', mcantidad = '$cantidad' WHERE mname = '$Pnombre'";
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
    
    <a href="Inventario.php">
    <?php print "INVENTORY" ?>
    </a>

    <a href="home.php">
    <?php print "Home Page" ?>
    </a>

</body>
</html>