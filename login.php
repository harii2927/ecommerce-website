
<?php
 include("config.php");
// sql to create table
  if(!isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login ( email,pass)
    VALUES ( '$email', '$password');";
    
    if ($conn->query($sql) === TRUE) {

{
    header("Location: sucess.php");
    exit;
}


    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  }
    
?>
  
</body>
</html>




