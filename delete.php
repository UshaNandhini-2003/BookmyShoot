<?php
include('includes/dbconnection.php');
$id = $_GET["id"];
$sql = "DELETE FROM tblenquiry1 WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("Location: view-enquiry.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}