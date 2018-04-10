<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="tabelmaha.php">Go to Home</a>
	<br/><br/>
 
	<form action="add2.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NRP</td>
				<td><input type="text" name="nrp"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Asal</td>
				<td><input type="text" name="asal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nrp = $_POST['nrp'];
		$nama = $_POST['nama'];
		$asal = $_POST['asal'];
		
		// include database connection file
		include_once("config2.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(nrp, nama, asal) VALUES('$nrp','$nama','$asal')");
		
		// Show message when user added
		echo "User added successfully. <a href='tabelmaha.php'>View Users</a>";
	}
	?>
</body>
</html>