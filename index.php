<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Home | Brandz Photography</title>
      
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <?php include_once('includes/header.php');?>
      <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Our Services</h3>
            <div class="row banner-below-w3l">
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/i1.jpg" width="200" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Wedding Shoot</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/i3.jpg" width="200" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Baby Shower Shoot</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers">
                  <img src="images/a3.jpg" width="200" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Model Shoot</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/i6.jpg" width="200" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Product Shoot</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/a5.jpg" width="200" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Event Shoot</h4>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 mt-3 text-center banner-agile-flowers">
                  <img src="images/e1.jpg" width="500" height="200" class="img-thumbnail" alt="">
                  <div class="banner-right-icon">
                     <h4 class="pt-3">Industrial Shoot</h4>
                  </div>
               </div>
            </div>
         </div>
      </section>
      

      <?php
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactnumber = $_POST['contact'];
    $service = $_POST['service'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $requirements = $_POST['requirements'];
    
    // Sanitize input to prevent SQL injection
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $contactnumber = mysqli_real_escape_string($con, $contactnumber);
    $service = mysqli_real_escape_string($con, $service);
    $location = mysqli_real_escape_string($con, $location);
    $date = mysqli_real_escape_string($con, $date);
    $requirements = mysqli_real_escape_string($con, $requirements);
    
    $sql = "INSERT INTO tblenquiry1 (name, email, contact, service, location, date, requirements) 
               VALUES ('$name', '$email', '$contactnumber', '$service', '$location', '$date', '$requirements')";
    
    if (mysqli_query($con, $sql)) 
    {
        echo "Your enquiry was successfully sent.";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);  
}
?>

      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            resize: vertical;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Enquiry Form</h3>
    <form action="#" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="varchar" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email ID:</label>
            <input type="varchar" id="email" name="email" required>
        </div>

        <div>
            <label for="contact">Contact Number:</label>
            <input type="int" id="contact" name="contact" required>
        </div>

        <div>
            <label for="service">Service Type:</label>
            <input type="varchar" id="service" name="service" required>
        </div>

        <div>
            <label for="location">Shoot Location:</label>
            <input type="varchar" id="location" name="location" required>
        </div>

        <div>
            <label for="date">Preferred Shoot Date:</label>
            <input type="date" id="date" name="date" required>
        </div>

        <div>
            <label for="requirements">Tell us more about your requirements:</label>
            <textarea id="requirements" name="requirements" rows="4" required></textarea>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

   
      
     
      <!-- footer -->
      <?php include_once('includes/footer.php');?>
      <!-- //footer -->
      <!-- Modal 1-->
    
      