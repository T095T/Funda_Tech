<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "phpproject"; 
 
        $email = $_POST['email'];
        $password = $_POST['password'];



$conn = new mysqli("localhost","root","","phpproject");
if($conn->connect_error)
{
  die("Failed to connect :".$conn->connect_error);
}
else
{
  $stmt = $conn->prepare("select * from signup where email = ?");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if($stmt_result->num_rows > 0 )
  {
    $data = $stmt_result->fetch_assoc();
    if($data['password'] === $password)
    {
      header('location:home.php');
    }
    else
    {
      echo "<h2> Invalid Email or Password </h2>";
    }
  }
    else
    {
      echo "<h2> Invalid Email or Password </h2>";
    }
  }

?>