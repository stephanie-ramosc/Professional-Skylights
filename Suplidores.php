<!--Stephanie M. Ramos Camacho
Muestra la lista de todos los suplidores en la base de datos.-->

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
	<h2>SUPPLIERS</h2>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Phone</th>
            <th>Email</th>
        </tr>

<?php

$sqlSuplidor = sprintf("select * FROM Suplidor");
$resSuplidor = mysqli_query($dbconnection, $sqlSuplidor);

if (!$resSuplidor)
{
	print "Error: ". mysqli_error($dbconnection)."\n";
}

while($rowSuplidor = mysqli_fetch_array($resSuplidor, MYSQLI_ASSOC))
{
	$line = $rowSuplidor['sname'];
	?>
	<tr>
		<td>
			<?php
             print $rowSuplidor['sname'];
            ?>
        </td>
        <td>
            <?php
            print $rowSuplidor['address'];
            ?>
        </td>
        <td>
            <?php
            print $rowSuplidor['sphone'];
            ?>
        </td>
        <td>
            <?php
            print $rowSuplidor['email'];
            ?>
        </td>
    </tr>

<?php    
}
?>

Modifications:
<a href="AddSuplidor.php">
<?php print "Add" ?>
</a>

<a href="DeleteSuplidor.php">
<?php print "Delete" ?>
</a>

<a href="UpdateSuplidor.php">
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