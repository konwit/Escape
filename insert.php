<?php
//insert.php
include("connect.php");
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $category_id = mysqli_real_escape_string($connection, $_POST["category_id"]);
  $product_name = mysqli_real_escape_string($connection, $_POST["product_name"]);
  $product_lname = mysqli_real_escape_string($connection, $_POST["product_lname"]);
  $product_phone = mysqli_real_escape_string($connection, $_POST["product_phone"]);
  $product_email = mysqli_real_escape_string($connection, $_POST["product_email"]);

  $query = "
   INSERT INTO product(category_id, product_name, product_lname, product_email, product_phone)
   VALUES ('".$category_id."', '".$product_name."', '".$product_lname."', '".$product_email."', '".$product_phone."')
  ";
  if(mysqli_query($connection, $query))
  {
   echo 'Product Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $category_id = mysqli_real_escape_string($connection, $_POST["category_id"]);
  $product_name = mysqli_real_escape_string($connection, $_POST["product_name"]);
  $product_lname = mysqli_real_escape_string($connection, $_POST["product_lname"]);
  $product_email = mysqli_real_escape_string($connection, $_POST["product_email"]);
  $product_phone = mysqli_real_escape_string($connection, $_POST["product_phone"]);
  $query = "
   UPDATE product
   SET category_id = '".$category_id."',
   product_name = '".$product_name."',
   product_lname = '".$product_lname."',
   product_email = '".$product_email."',
   product_phone = '".$product_phone."'
   WHERE product_id = '".$_POST["product_id"]."'
  ";
  if(mysqli_query($connection, $query))
  {
   echo 'Product Updated';
  }
 }
}
?>
