<?php
 include("config.php");
// sql to create table
  if(!isset($_POST['submit'])){
    $customerName = $_POST['customerName'];
    $phone = $_POST['phone'];
    $Addres = $_POST['Addres'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO order_details (customerName,phone,Addres, product, quantity)
    VALUES ('$customerName','$phone','$Addres','$product', '$quantity')";
    
    if ($conn->query($sql) === TRUE) {
      echo "                  your order has been successfully!!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
  }
    

?>