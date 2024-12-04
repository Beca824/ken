<?php 
include('config.php');

if (isset($_POST["submit"])){
    $name= $_POST["name"];
    $email=$_POST["email"]; 
    $idno=$_POST["idno"];
    $phone=$_POST["phone"];
    $house=$_POST["house"];
    $role=$_POST["role"];
    $pass=$_POST["pass"];

   if(empty($name)|| empty($email)|| empty ($idno)|| empty($phone )||empty($house )|| empty($role) || empty($pass)) {
      echo "<script > alert('all field are required')</script>";

      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
      
    

    else {
        $duplicate= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' ");
     $duplicate2= mysqli_query($conn,"select state from houses where houseno='$house'");
     $duplicate3= msqli_query ($conn,"SELECT houseno from houses where houseno='$house'");
     $check = msqli_num_rows($duplicate3);
        if (mysqli_num_rows($duplicate) >0) {
        echo"<script> alert('house or email entered already exist in the database')</script>";
        
        exit;

        }
        
        elseif($duplicate2="occupied"||$duplicate3){
            echo"<script> alert('house does not exist in the dattabase or it is occupied ')</script>";
        
        exit;
        }
        else{
        $query =mysqli_query($conn ,"insert into users(name,email,idno,phone,house,role,pass) values('$name','$email','$idno','$phone','$house','$role','$pass')") ; 
         if ($query){
        mysqli_query($conn,"UPDATE houses set state='occupied' where houseno='$house'");
       echo"<script> alert('success!')</script>";
       header("location: /ken/clients.php");
       exit;
        }
        else{
            echo"<script> alert('error!')</script>";
    }
}
   }

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add client </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
</head>

  
<body>
<ul class="nav justify-content-end p-4" style="height: 100px;">
           
            <li class="nav-item">
              <a class="nav-link" href="clients.php">BACK</a>
            </li>
</ul>
    <div class ="container my-5">
        <h2>new client </h2>
        
        <form method = "post">
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Name</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="name" value="">

                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">ID NUMBER</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="idno" value="">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Email</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="email" value="">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="phone" value="">
                    
                </div>
             </div>
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">House no</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="house" value="">
                    
                </div>
            </div>
           <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label ">password</label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="pass" value="">
                    
                </div>
             </div>
             <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Role</b></label>
                    <div class="col-sm-6">   
                    <select name="role" class ="form-control" id="role">
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