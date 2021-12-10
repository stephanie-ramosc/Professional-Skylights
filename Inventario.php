<!--Stephanie M. Ramos Camacho
Muestra la lista de todos los materiales en la base de datos.-->

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
	<h2>INVENTORY</h2>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Type</th>
			<th>Color</th>
            <th>Quantity</th>
        </tr>

<?php

$sqlMaterial = sprintf("select * FROM Material");
$resMaterial = mysqli_query($dbconnection, $sqlMaterial);

if (!$resMaterial)
{
	print "Error: ". mysqli_error($dbconnection)."\n";
}

while($rowMaterial = mysqli_fetch_array($resMaterial, MYSQLI_ASSOC))
{
	$line = $rowMaterial['mname'];
	?>
	<tr>
		<td>
			<?php
             print $rowMaterial['mname'];
            ?>
        </td>
        <td>
            <?php
            print $rowMaterial['tipo'];
            ?>
        </td>
        <td>
            <?php
            print $rowMaterial['color'];
            ?>
        </td>
        <td>
            <?php
            print $rowMaterial['mcantidad'];
            ?>
        </td>
    </tr>

<?php    
}
?>
<h3>Modifications:</h3>
<a href="AddMaterial.php">
<?php print "Add" ?>
</a>

<a href="DeleteMaterial.php">
<?php print "Delete" ?>
</a>

<a href="UpdateMaterial.php">
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