<?php 
include('config.php');
$result = mysqli_query($conn, "SELECT * FROM houses WHERE id='".$_GET ['id']."'");
$row = mysqli_fetch_array($result);
if (count($_POST)>0){
  $name = $_POST["name"];
   $email = $_POST["email"];
   $phone=  $_POST["phone"];
   $state= "booked";
   $houseno=$_GET ['id'];
   $duplicate= mysqli_query($conn,"SELECT * FROM houses WHERE bkname='$name' or bkname='$name' or bkemail='$email'");
        if (mysqli_num_rows($duplicate)>0) {
        echo"<script> alert('you can only book one house,the entered  details already exist in the database')</script>";
        
        
        exit;
        }
    mysqli_query($conn ,"insert into bkhouses(bkname,bkemail,bkphoneno,houseno) values('  $name','$email','$phone','$houseno')") ;  //  mysqli_query($conn,"UPDATE houses set state='booked' WHERE  id='" . $_get['id'] ."'");
       echo"<script> alert('success!')</script>";
   header("location: index.php");
   exit; 
    
  }


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="maincss/propertylist.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>propertylist</title>
</head>
<body>
    <!-- nav bar -->
    <ul class="nav justify-content-end p-4" style="height: 100px;">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php"><b>HOME</B></a>
            </li>
</ul>

  <!-- HOUSE PICTURE ADVERTISEMENT -->
 <div class="hse-advertisment">
    <div class="description-info">
        <h1>Three bedroom apartments for RENT</h1>
    <ul class="list-info">
        <li>+254795839912</li>
        <li>Nairobi City,Chady Road, Second right turn from Syokimau airport road, touching Gateway</li>
        <li>info@kenapartments.co.ke</li>
    </ul>
    </div>
    </div>
 <div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <h3>Gallery</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="images/twobdroom.jpg" alt="First slide">
                  </div>
                 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="card hse-description p-3">
                <h3>Description</h3>
                <p>These amazing two bedroom units are very spacious and most suitable for large families. The master bedroom is ensuite.</p>
                <p>Also, they have a separate dining area strategically located next to the kitchen to make serving meals easier.</p>
                <p>All units at kens luxury apartment in Syokimau have been elegantly crafted with exceptional attention to detail.</p>
                <h4>DISTINCTIVE FEATURES</h4>
                <ul class="distinctive-container">
                    <li class="distinctive-features">Master en-suite and built-in wardrobes</li>
                    <li class="distinctive-features">Lounge balconies</li>
                    <li class="distinctive-features"> Designer Kitchen and Wardrobes</li>
                    <li class="distinctive-features">Separate dining area in 2 Bedroom apartment units</li>
                    <li class="distinctive-features">Utility with washing machine and cloth hanging provisions</li>
                    <li class="distinctive-features">Fitted Hot water solar panels for top floors and provision for all floors</li>
                    <li class="distinctive-features">Full height wall tiles in washrooms and kitchen</li>
                    <li class="distinctive-features">Inverter provisions for power backup and store cabinet</li>
                    <li class="distinctive-features">Open terrace for party area with cloakroom and other services</li>
                   <li class="distinctive-features">Internet and TV cabling ready for use in all apartments</li>
                </ul>
                <p>kens's luxury apartment in Syokimau caters both for those looking for a spacious 2 or 3 bedroom
                    apartment homes for their family just outside the city and those looking to get a pie
                    of returns in the booming real estate. First off, the prices are really great and provide
                    owners with real value. Next, the location is superb. Syokimau is the hottest address
                    when it comes to great locations along Mombasa Road. It’s much closer to the Nairobi
                    CBD as well as social amenities like shopping malls, schools, and hospitals.
                    With the rent for residential properties going through the roof in Nairobi’s inner
                    suburbs, it’s time for you to buy your own home away from the hustle and bustle of
                    the CBD.</p>
        </div>
        <div class="card hse-description p-3">
            <h5>Property Details</h5>
            <ul>
                <li class="li-color">2 Bedrooms</li>
                <li class="li-color">1 Bathrooms</li>
                <li class="li-color">Furnished</li>
                <li class="li-color">Pets allowed</li>
            </ul>
            <h3>Amenities</h3>
            <ul class="distinctive-container">
                <li class="li-color">Electric fence and CCTV Surveillance,</li>
                <li class="li-color">Pumped sewer connection as opposed to normal sewer treatment plant,</li>
                 <li class="li-color">Over one million litres underground water storage,</li>
                <li class="li-color">Borehole and rainwater harvesting,</li>
             <li class="li-color">Automatic backup generator for common,</li>                           
                 <li>Children play area and small party area,</li>
              <li class="li-color">Beautiful landscaping and greenery,</li>
            <li class="li-color">Fully fitted Gymnasium,</li>
            <li class="li-color"> Ample parking for visitors,</li>
            <li class="li-color"> Built-in transformer room, garbage collection, and gatehouse,</li>
            <li class="li-color">Separate estate management office .</li>
            </ul>
        </div>
        <div class="card hse-description p-3">
            <div class="property-video">

            </div>
        </div>


       
    </div>
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <h4>Book this house</h4>
                <label for="Name">Full Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"  name="name" placeholder="Full name"  value="<?php echo $row['bkname'];?>">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber">Phone number</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Phone Number" name="phone" value="<?php echo $row['bkphoneno'];?>">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@email.com" name= "email" value="<?php echo $row['bkemail'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="card safety-tips mt-5 p-3">
            <h4></h4>
            <p>Pay a deposit first before moving in.</p>
            <p>You can take friends along for viewing</p>
            <p>The first rent payment can be done up to two weeks after moving in</p>
          </div>
         
    </div>
 </div>
</div>

<!-- SIMILAR PROPERTIES -->
           <!-- FOOTER -->
             <!-- FOOTER-->

             <div class="footer-wrapper">  
      
      <div class="footer">
       <div class="site-description">
         <p>kEN'S online property management WEBSITE IS A payments, expense management and real estate records management.</p>
         <ul>
           <p><li>Nairobi,Kenya</li></p>
           <p><li>+254774356101</li></p>
           <p><li>metropolitantapartment@lux.com</li></p>
         </ul>
       </div>
       </div>
     </div>
      
  </div>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
