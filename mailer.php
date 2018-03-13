<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='gullacindy048@gmail.com';

$message="From:$name <br />To: Admin@it-its.com <br />Pengaduan: ".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: '.$email . "\r\n";
$headers .= 'Cc: '.$email . "\r\n";
@mail($to,$subject,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itits";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$nama = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (Nama, Email, Subject, Message)
VALUES ('".$nama."', '".$email."', '".$subject."', '".$message."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>