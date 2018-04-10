<?php
// Create database connection using config file
include_once("config2.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM contact ORDER BY id DESC");
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
  Daftar Pesan User
</h1>
    <a href="index.html"><button>Home</button></a><br/><br/>
        <p><a href="exportpesan.php"><button>Export Data ke Excel</button></a></p>
<main>
  <table>
    <thead>
      <tr>
        <th>
          Nama
        </th>
        <th>
          Email
        </th>
        <th>
          Judul
          </th>
          <th>
          Pesan
          </th>
          <th>
          
          </th>
      </tr>
    </thead>
    
    <tbody>
         <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr><td data-title='Provider Name'>".$user_data['Nama']."</td>";
        echo "<td data-title='E-mail'>".$user_data['Email']."</td>";
        echo "<td class='select'>".$user_data['Subject']."</td>";
        echo "<td class='select'>".$user_data['Message']."</td>";
        echo "<td><a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
  </table>
</main>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="assets/js/index.js"></script>

</body>
</html>
