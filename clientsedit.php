<?php 
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM users WHERE id='".$_GET ['id']."'");
$row = mysqli_fetch_array($result);

if (count($_POST)>0){
    $email=$_POST["email"]; 
    $house=$_POST["house"];
    $duplicate= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' ");
    $duplicate2= mysqli_query($conn,"select * from houses where houseno='$house' || state='occupied'");
       if ((mysqli_num_rows($duplicate)||mysqli_num_rows($duplicate2)) >0) {
       echo"<script> alert('house or email entered already exist in the database')</script>";
       
       header("location: /ken/clients.php");
       exit;
       
       }
     mysqli_query($conn,"UPDATE users SET idno='". $_POST['idno'] ."', name='". $_POST['name'] ."',email='". $_POST['email'] ."', house='". $_POST['house'] ."',role='". $_POST['role'] ."',pass='". $_POST['pass'] ."' WHERE  id='" . $_POST['id'] ."'");
     echo"<script> alert('success!')</script>";
     header("location: /ken/clients.php");
     exit; 
      
    }
   
    
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update client</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
</head>

  
<body>
<ul class="nav justify-content-end p-4" style="height: 100px;">
           
            <li class="nav-item">
              <a class="nav-link" href="houses.php">BACK</a>
            </li>
          </ul>
    <div class ="container my-5">
        <h2>update client  </h2>
       
        
        <form method = "post">
            <input type="hidden" name="id" value ="<?php echo $row['id'];?>">
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Name</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="name" value="<?php echo $row['name'];?>">

                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">ID NUMBER</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="idno" value="<?php echo $row['idno'];?>">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Email</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="email" value="<?php echo $row['email'];?>">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="phone" value="<?php echo $row['phone'];?>">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">House no</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="house" value="<?php echo $row['house'];?>">
                    
                </div>
            </div>
            <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Password </label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="pass" value="<?php echo $row['pass'];?>">
                    
                </div>
             </div>
            <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Role</b></label>  
                    <div class="col-sm-6"> 
                        <select name="role" class ="form-control" id="role" value="<?php echo $row['role'];?>">
                            <option>mng</option>
                            <option>usr</option>
                        </select>
                    </div>
                </div>
    </div>
             <div class ="row mb-3">
                <div class= "offset -sm-3 col-sm-3 d-grid">
                    <button type="submit"class="btn btn-primary " name="submit">Submit</button >
                </div>
                <div class ="col-sm-3 d-grid ">
                    <a class="btn btn-outline-primary " href="/ken/clients.php" role ="button">Cancel</a>

                </div>
             </div>
        </form>
    </div>
</body>
</html> 