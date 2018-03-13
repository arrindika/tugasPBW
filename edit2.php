<?php
// include database connection file
include_once("config2.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['nrp'];
	$nama=$_POST['nama'];
	$asal=$_POST['asal'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET nrp='$nrp',nama='$nama',asal='$asal' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: mahasiswa.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nrp = $user_data['nrp'];
	$nama = $user_data['nama'];
	$asal = $user_data['asal'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="mahasiswa.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit2.php">
		<table border="0">
			<tr> 
				<td>NRP</td>
				<td><input type="text" name="nrp" value=<?php echo $nrp;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Asal</td>
				<td><input type="text" name="asal" value=<?php echo $asal;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>