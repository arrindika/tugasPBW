<?php
// Create database connection using config file
include_once("config2.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Daftar Mahasiswa</title>
</head>
 
<body>
    <h1> Daftar Mahasiswa </h1>
<a href="add2.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>NRP</th> <th>Nama</th> <th>Asal</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nrp']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['asal']."</td>";    
        echo "<td><a href='edit2.php?id=$user_data[id]'>Edit</a> | <a href='delete2.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
<a href="index.html">Back To Home</a><br/><br/>
</body>
</html>