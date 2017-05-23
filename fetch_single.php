<?php
//fetch_single.php
include("connect.php");
if(isset($_POST["product_id"]))
{
 //$output = array();
 $query = "SELECT * FROM product WHERE product_id = '".$_POST["product_id"]."'";
 $result = mysqli_query($connection, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output["category_id"] = $row["category_id"];
  $output["product_name"] = $row["product_name"];
  $output["product_lname"] = $row["product_lname"];
  $output["product_email"] = $row["product_email"];
  $output["product_phone"] = $row["product_phone"];

 echo json_encode($output);
}
}
?>
