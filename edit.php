<?php
error_reporting(0);
include('includes/dbconnection.php');
$id = $_GET["id"];

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contact'];
    $service = $_POST['service'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $requirements = $_POST['requirements'];

    $sql = "UPDATE tblenquiry1 SET 'name'='$name','contact'='$contact','service'='$service','location'='$location','date'='$date','requirements'='$requirements' WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
      header("Location: view-enquiry.php?msg=Data updated successfully");
    } else {
      echo "Failed: " . mysqli_error($con);
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Enquiry Details</title>
</head>

<body>
  <!--<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>-->

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM tblenquiry1 WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
          </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Contact</label>
          <input type="email" class="form-control" name="contact" value="<?php echo $row['contact'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Service</label>
          <input type="email" class="form-control" name="service" value="<?php echo $row['service'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Location</label>
          <input type="email" class="form-control" name="location" value="<?php echo $row['location'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Date</label>
          <input type="email" class="form-control" name="date" value="<?php echo $row['date'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Requirements</label>
          <input type="email" class="form-control" name="requirements" value="<?php echo $row['requirements'] ?>">
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="view-enquiry.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>