<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
        integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <style>
       *{
        margin:0;
        padding:0;
      }
       .wrapper{
        width: 1170px;
        margin: auto;
       }
        header{
        background:url("images/property.jpg");
        height:100vh;
      -webkit-background-size:cover;
      background-size: cover;
      background-position:center center;
      position: relative;
    }
    .nav-area li{
        display: inline-block;
         
       }
    .nav-area{
        float: right ;
         list-style: none;
         margin-top:30px;
         }
  .nav-area li a {
      
        text-decoration:none;
        padding: 5px 20px;
        font-family :poppins;
        font-size: 30px;
        color:black;

      }
       .nav-area li a:hover{
        background:#fff;
        color:#333;

       }
       .welcome-text{
        position: absolute;
        width: 600px;
        height: 300px;
        margin: 20% 29%;
        text-align: center;
       }
       .welcome-text h2{
        text-align:center;
        color:1ba5e0;
        text-transform: uppercase;
        font-size:40px;
        
       }
       .welcome-text a{
        border: 5px solid #1be04f;
        padding:10px 25px;
        text-decoration:none;
        text-transform:uppercase;
        font-size:14px;
        margin-top :20px;
        display: inline-block;
       }
       .welcome-text a:hover{
        background:#fff;
        color: #333;

       }
       

    </style>
</head>
<body>
<?php  include "includes/headerhome.php";?>
  <header>
    <div class ="wrapper">
      <div class="logo">
        <img src ="" alt="">

      </div>
      <ul class="nav-area">
        <li><a href ="index.php" >home </a></li>
       <li><a href ="about.php" >About </a></li>
        <li><a href ="contact.php" >contacts </a></li>

      </ul>
    </div>
    <div class= "welcome-text">
      <h2> Metropolitan Luxury Apartments</h2>
      <a href="login.php">LOGIN </A> 
    </div>
  </header>

       <!-- top navbar begins here  -->
       <ul class="nav justify-content-end p-4" style="height: 100px;">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

      </ul>
    
      <!-- end of nav bar at the top of the page -->

      <!--  SECTION 1 WELCOME SECTION  -->
    <div class="container">
        <div class="row">
            <div class="col-sm sm1">
                <h1>Welcome to Metropolitan Luxury Apartments</h1>
                <p>Discover the perfect blend of comfort and convenience with our rental apartments. Offering a range of well-maintained units, our apartments are designed to cater to your lifestyle needs.Enjoy the benefits of a prime location and modern amenities. Our apartments are affordable and conveniently located.Don’t just rent, make our apartments your home. Your new beginning starts here!</p>
                <a class="btn btn-primary" href="login.php" role="button">Login</a>
            </div>
            <div class="col-sm sm2"></div>
        </div>
    </div>

    <!-- SECOND SECTION ADVANTAGES OF THE APARTMENT -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm sm-sctn1">
                <h3>AMENITIES INCLUDE</h3>
                <div class="column-explanation">
                <p class="feature-explanation"><i class="fas fa-check-circle"></i>Separate dining area in 2 bedroom units</p>
                    <p class="feature-explanation"><i class="fas fa-check-circle"></i>Washing machine and cloth hanging provisions</p>
                    <p class="feature-explanation"><i class="fas fa-check-circle"></i>Lounge balconies</p>
                    <p class="feature-explanation"><i class="fas fa-check-circle"></i>Kids playground</p>
                </div>
    
                <div class="column-explanation">
                  <p class="feature-explanation"><i class="fas fa-check-circle"></i>Inverter provisions for power backup</p>
                  <p class="feature-explanation"><i class="fas fa-check-circle"></i>Internet and TV cabling ready for use</p>
                  <p class="feature-explanation"><i class="fas fa-check-circle"></i>Large packing area</p>
                  <p class="feature-explanation"><i class="fas fa-check-circle"></i>Two and three bedroom options</p>
                </div>
            </div>
            <div class="col-sm sm-sctn2"></div>
        </div>
    </div>
    <div></div>
    <!-- SECTION 3 VACANT HOUSES -->

    <div class="vacant-hses">
        <h2 style="margin:1em;">VACANT HOUSES</h2>
        <table class="table table-striped">
            <thead class="bg-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">House Numbrer</th>
                <th scope="col">House Type</th>
                <th scope="col">House Status</th>
                <th scope="col"> Rent</th>
                <th scope="col"> view</th>
               
              </tr>
            </thead>
            <tbody>
            <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT id,houseno,type,state,rent FROM  houses WHERE bkname is null and state ='vaccant'";
                
                $result= $conn->query($sql);
                if(!$result){
                  die ("invalid query: ".$conn->error);
                }

                //read data of each row 
                while ($row= $result ->fetch_assoc()){
                  echo"
                    <tr>
                      <td> $row[id]</td>
                      <td>  $row[houseno]</td>
                      <td>  $row[type]</td>
                      <td>  $row[state]</td>
                      <td>  $row[rent]</td>
                      <td>
                     
                      <a class ='btn btn-primary btn-sm' href='2bdroomhouse.php?id=$row[id]' >VIEW</a>
                     
                    
                      </td>
                    </tr>

                  "; 
                }


              ?>
            </tbody>
          </table>

        <!-- FOOTER --> 

        <div class="footer-wrapper">  
      
            <div class="footer">
             <div class="site-description">
               <p>Metropolitan online property management WEBSITE IS A payments, expense management and real estate records management.</p>
               <ul>
                 <p><li>Nairobi,Kenya</li></p>
                 <p><li>+254774356101</li></p>
                 <p><li>luxapartments@luxapartments.com</li></p>
               </ul>
             </div>
             </div>
           </div>
            
        </div>

</body>
</html>