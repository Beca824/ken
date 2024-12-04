<?php 
session_start();
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM users WHERE email='".$_SESSION["email"]."'");
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My account</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/myaccount.css">
</head>
<body>
<ul class="nav justify-content-end p-4" style="height: 100px;">
           
            <li class="nav-item">
              <a class="nav-link" href="manager.php">BACK</a>
            </li>
            
          </ul>

    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
       
        <hr class="mt-0 mb-4">
        <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                          
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="Name">Name</label>
                                    <input class="form-control" id="Name" type="text" value="<?php echo $row['name'];?>">
                                </div>
                            
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="houseno">House number</label>
                                    <input class="form-control" id="houseno"  value="<?php echo $row['house'];?>">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">ID Number</label>
                                    <input class="form-control" id="id number" type="text" value="<?php echo $row['idno'];?>">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="Email">Email address</label>
                                <input class="form-control" id="Email" type="email" value="<?php echo $row['email'];?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="Phone">Phone number</label>
                                    <input class="form-control" id="Phone" type="tel" value="<?php echo $row['phone'];?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="day">Date of house entry</label>
                                    <input class="form-control" id="day" type="text" name="day" value="<?php echo $row['dat'];?>" >
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="role">Role</label>
                                    <input class="form-control" id="role"  name="role" value="<?php echo $row['role'];?>" >
                                </div>
                            </div>
                            <!-- Save changes button-->
                           
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>