<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM contact ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Message</title>
</head>
 
<body>
    <h1> Daftar Pesan Pengguna </h1>
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Email</th> <th>Subject</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['Email']."</td>";
        echo "<td>".$user_data['Subject']."</td>";    
        echo "<td>".$user_data['Message']."</td>"; 
        echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
<a href="index.html">Back To Home</a><br/><br/>
</body>
</html>