<?php
 include("config.php");
// sql to create table
  if(!isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO contact (name, email, message)
    VALUES ('$name', '$email', '$msg')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  }
    

?>