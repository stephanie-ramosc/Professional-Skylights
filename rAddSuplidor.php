<!--Stephanie M. Ramos Camacho
Recibe los datos e inserta los valores en la tabla. Devuelve un mensaje indicando si pudo agregar la informacion. Da la opcion de ir a ver todos los suplidores.-->

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
        $nombre = mysqli_real_escape_string($dbconnection, $_REQUEST['sname']);
        $address = mysqli_real_escape_string($dbconnection, $_REQUEST['address']);
        $phone = mysqli_real_escape_string($dbconnection, $_REQUEST['sphone']);
        $email = mysqli_real_escape_string($dbconnection, $_REQUEST['email']);
 
        $sql = "INSERT INTO Suplidor (sname, address, sphone, email) VALUES ('$nombre', '$address', '$phone', '$email');";
        
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

    <a href="Suplidores.php">
    <?php print "SUPPLIERS" ?>
    </a>

    <a href="home.php">
    <?php print "Home Page" ?>
    </a>

</body>
</html>