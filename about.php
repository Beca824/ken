<?php include_once 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Metro POLITANT APARTMENT </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }

        p {
            color: #6c757d;
            font-size: 18px;
            line-height: 1.6;
        }

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            color: #007bff;
        }

        .team-member p {
            font-size: 16px;
        }
    
        /* Container styling */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* House image styling */
        .house-image {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        /* Price styling */
        .price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>
<?php  include "includes/headerhome.php";?><BR>
    <div class="container">
        <h1>About Us</h1>
        <p><B>LOCATION:</B>we are located in Ruiru OFF Thika roadexit 12, 300 meters from WAKAIRU SHOP CENTER </p>
        <p >
            HOUSES:
        </p>  
        <br> <p>Two Bedrooms</p> 
        <div class="container">
        <img class="house-image" src="images/twobdroom.jpg" alt="House Image">
        <div class="price">ksh22,000</div>
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
            </div></p>

        
        <p>We hope you enjoy YOUR STAY<a href="contact.php">contact us</a> here.</p>
   
        <h2>Our Team</h2>
        <div class="row">
            <div class="col-md-4 team-member">
                <h3>Millie</h3>
                <p>Co-Founder</p>
            </div>
            <div class="col-md-4 team-member">
                <h3>Cate</h3>
                <p> Manager</p>
            </div>
            <div class="col-md-4 team-member">
                <h3>Joanne</h3>
                <p>CARE TAKER</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
