<!--Stephanie M. Ramos Camacho
Muestra la lista de todos los empleados en la base de datos.-->

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
	<h2>EMPLOYYEES</h2>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Phone</th>
            <th>Salary(Monthly)</th>
            <th>Income Taxes</th>
        </tr>

<?php

$sqlEmpleados = sprintf("select * FROM Empleado");
$resEmpleados = mysqli_query($dbconnection, $sqlEmpleados);

if (!$resEmpleados)
{
	print "Error: ". mysqli_error($dbconnection)."\n";
}

while($rowEmpleados = mysqli_fetch_array($resEmpleados, MYSQLI_ASSOC))
{
	?>
	<tr>
		<td>
			<?php
             print $rowEmpleados['ename'];
            ?>
        </td>
        <td>
            <?php
            print $rowEmpleados['ephone'];
            ?>
        </td>
        <td>
            <?php
            print "$".$rowEmpleados['salary'];
            ?>
        </td>
        <td>
            <?php
            print "$".$rowEmpleados['tax'];
            ?>
        </td>
    </tr>

<?php    
}
?>

Modifications:
<a href="AddEmpleado.php">
<?php print "Add" ?>
</a>

<a href="DeleteEmpleado.php">
<?php print "Delete" ?>
</a>

<a href="UpdateEmpleado.php">
<?php print "Update" ?>
</a>

<a href="home.php">
<?php print "Home Page" ?>
</a>

<?php
mysqli_close($dbconnection);
?>
	</table>
</body>
</html>