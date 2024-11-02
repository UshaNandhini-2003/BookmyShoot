<?php
include('includes/dbconnection.php');

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contact'];
    $service = $_POST['service'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $requirements = $_POST['requirements'];

   $sql = "INSERT INTO tblenquiry1(name,email,contact,service,location,date,requirements) VALUES ('$name','$email','$contactnumber','$service','$location','$date','$requirements')";

   $result = mysqli_query($con, $sql);

   if ($result) {
      header("Location: view-enquiry.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($con);
   }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add New User</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .text-center {
    text-align: center;
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="varchar"],
  input[type="int"],
  textarea {
    width: 100%;
    padding: 8px;
    margin-top: 6px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #45a049;
  }
  
  .btn-danger {
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
  }
  
  .btn-danger:hover {
    background-color: #da190b;
  }
</style>
</head>
<body>

<div class="container">
  <div class="text-center mb-4">
    <h3>Add New User</h3>
    <p class="text-muted">Complete the form below to add a new user</p>
  </div>

  <div class="container">
    <form action="" method="post">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div>
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div>
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required>
      </div>

      <div>
        <label for="service">Service Type:</label>
        <input type="text" id="service" name="service" required>
      </div>

      <div>
        <label for="location">Shoot Location:</label>
        <input type="text" id="location" name="location" required>
      </div>

      <div>
        <label for="date">Preferred Shoot Date:</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div>
        <label for="requirements">Tell us more about your requirements:</label>
        <textarea id="requirements" name="requirements" rows="4" required></textarea>
      </div>

      <div>
        <button type="submit" name="submit">Submit</button>
        <button type="submit" class="btn btn-success" name="submit">Save</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
      </div>
    </form>
  </div>
</div>

</body>
</html>
