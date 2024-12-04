<?php 
session_start();
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM users WHERE email='".$_SESSION["email"]."'");
$row = mysqli_fetch_array($result);
$dup= mysqli_query($conn,"SELECT * FROM houses WHERE houseno='$row[house]' ");
$rent= mysqli_fetch_array($dup);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenants page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/billing.css">
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
        <nav class="nav nav-borders">
            <a class="nav-link ms-0" href="tenantprofile.php">Profile</a>
            <a class="nav-link active" href="tenantspage.php">Billing</a>
        </nav>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Billing card 1-->
                <div class="card h-100 border-start-lg border-start-primary">
                    <div class="card-body">
                        <div class="small text-muted">Current monthly bill</div>
                        <div class="h3" >22,0000</div>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 2-->
                <div class="card h-100 border-start-lg border-start-secondary">
                    <div class="card-body">
                        <div class="small text-muted">Next payment due</div>
                        <div class="h3">July 15</div>
                        <p class="text-arrow-icon small text-secondary">
                            View payment history below
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Payment methods card-->
        <div class="card card-header-actions mb-4">
            <div class="card-header">
                Payment Methods
            </div>
            <div class="card-body px-0">
                <!-- Payment method 1-->
                <div class="d-flex align-items-center justify-content-between px-4">
                    <div class="d-flex align-items-center">
                         <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                        <div class="ms-4">
                            <div class="small">PAYBILL :56556</div>
                            <div class="text-xs text-muted">ACCNO: HOUSENO</div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Payment method 2-->
                <div class="d-flex align-items-center justify-content-between px-4">
                    <div class="d-flex align-items-center">
                        <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                        <div class="ms-4">
                            <div class="small"></div>
                            <div class="text-xs text-muted">SEND MONEY:0710109898</div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Payment method 3-->
               
            </div>
        </div>
        <!-- Billing history card-->
        <div class="card mb-4">
            <div class="card-header">Billing History</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">PAY METHOD</th>
                                <th class="border-gray-200" scope="col">RENT</th>
                                <th class="border-gray-200" scope="col">PAYED</th>
                                <th class="border-gray-200" scope="col">BALANCE</th>
                                <th class="border-gray-200" scope="col">DATE PAYED</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                include('config.php');
                  //read all row from database table 
                  $sql ="SELECT * FROM  houses where houseno='.$rent[houseno].'";
                  $result= $conn->query($sql);

                  if(!$result){
                    die ("invalid query: ".$conn->error);
                  }

                  //read data of each row 
                  while ($r = $result ->fetch_assoc()){
                    echo"
                    <tr>
                  
                    <td>  $r[paymethod]</td>
                    <td>  $r[rent]</td>
                    <td>  $r[payed]</td>
                    <td>  $r[bal]</td>
                    <td>  $r[date]</td>
                   
                </tr>

                    ";
                  }


                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>