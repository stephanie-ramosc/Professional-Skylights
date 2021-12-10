<!--Stephanie M. Ramos Camacho
	Recibe todos los datos, analiza los campos que seran utilizados para la busqueda y los que seran los cambios a realizarse. Devuelve un mensaje indicando si pudo actualizar la informacion. Da la opcion de ir a ver todos los suplidores.-->

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
        <h2>UPDATE SUPPLIER</h2>
</head>
<body>
	<?php
        $nombre = mysqli_real_escape_string($dbconnection, $_REQUEST['Nsname']);
        $phone = mysqli_real_escape_string($dbconnection, $_REQUEST['Nsphone']);
        $address = mysqli_real_escape_string($dbconnection, $_REQUEST['Naddress']);
        $email = mysqli_real_escape_string($dbconnection, $_REQUEST['Nemail']);
        
        $Pnombre = mysqli_real_escape_string($dbconnection, $_REQUEST['name']);

        $sqlSuplidores = sprintf("SELECT * FROM Suplidor");
        $resSuplidores = mysqli_query($dbconnection, $sqlSuplidores);

        while($rowSuplidores = mysqli_fetch_array($resSuplidores, MYSQLI_ASSOC))
        {
            $name = $rowSuplidores['sname'];
            if($name == $Pnombre)
            {
                $sql = "UPDATE Suplidor SET sname = '$nombre', sphone = '$phone', address = '$address', email = '$email' WHERE sname = '$Pnombre'";
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
    
    <a href="Suplidores.php">
    <?php print "SUPPLIERS" ?>
    </a>

    <a href="home.php">
    <?php print "Home Page" ?>
    </a>

</body>
</html>