<?php
// Create database connection using config file
include_once("config2.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive Table + Detail View</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="assets/css/style.css">

  
</head>

<body>
  <h1>
  Daftar Mahasiswa
</h1>

    
<p><a href="exportmaha.php"><button>Export Data ke Excel</button></a></p>
<a href="index.html"><button>Home</button></a><br/><br/>
 <a href="add2.php"><button>Add New User</button></a><br/><br/>
<main>
   
  <table>
    <thead>
      <tr>
        <th>
          NRP
        </th>
        <th>
          Nama
        </th>
        <th>
          Asal
          </th>
          <th>
          
          </th>
      </tr>
    </thead>
    
    <tbody>
         <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr><td data-title='Provider Name'>".$user_data['nrp']."</td>";
        echo "<td data-title='E-mail'>".$user_data['nama']."</td>";
        echo "<td class='select'>".$user_data['asal']."</td>";    
        echo "<td><a href='edit2.php?id=$user_data[id]'>Edit</a> | <a href='delete2.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
  </table>
</main>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="assets/js/index.js"></script>

</body>
</html>
