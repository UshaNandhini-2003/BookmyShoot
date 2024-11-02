<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <link rel="shortcut icon" href="img/favicon.png">

  <title>View Enquiry | Brandz Photography</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php include_once('includes/header.php');?>
    <!--header end-->

    <!--sidebar start-->
    <?php include_once('includes/sidebar.php');?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>View Enquiry</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
              <li><i class="fa fa-table"></i>Enquiry</li>
              <li><i class="fa fa-th-list"></i>View Enquiry</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                View Enquiry Details
              </header>
            </section>




            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Data Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<a href="add.php" class="btn btn-dark mb-3">Add New</a>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Service</th>
                <th>Location</th>
                <th>Date</th>
                <th>Requirements</th>
            </tr>
        </thead>
        <tbody>
            <?php
            error_reporting(0);
            include('includes/dbconnection.php');
          

            // Fetch data from the database
            $sql = "SELECT id, name, email, contact, service, location, date, requirements FROM tblenquiry1";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["contact"] . "</td>
                            <td>" . $row["service"] . "</td>
                            <td>" . $row["location"] . "</td>
                            <td>" . $row["date"] . "</td>
                            <td>" . $row["requirements"] . "</td>
                            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>;
                            <td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>;
                          </tr>";
                }
            } else {
                echo "0 results";
            }
            $con->close();
            ?>
        </tbody>
    </table>
</body>
</html>

    
   