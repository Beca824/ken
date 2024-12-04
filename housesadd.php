<?php 
include('config.php');

if (isset($_POST["submit"])){
   $houseno = $_POST["houseno"];
   $rent = $_POST["rent"];
   $housestate=  $_POST["housestate"];
   $housetype=  $_POST["housetype"];



   if(empty($houseno)|| empty($rent)|| empty ($housestate)|| empty($housetype )) {
      echo "<script > alert('all field are required')</script>";
    }

    else {
        $duplicate= mysqli_query($conn,"SELECT * FROM houses WHERE houseno= '$houseno' ");
     
        if (mysqli_num_rows($duplicate)>0) {
        echo"<script> alert('house  entered already exist in the database')</script>";
        
        header("location: /ken/houses.php");
        exit;
        }
        $query =mysqli_query($conn ,"insert into houses(houseno,type,state,rent) values('  $houseno ','$housetype','$housestate','$rent')") ; 
         if ($query){
       echo"<script> alert('success!')</script>";
       header("location: /ken/houses.php");
       exit;
    }
    else{
        echo"<script> alert('error while adding client')</script>";
    }
   }

   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add house </title>
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
        <h2>NEW HOUSE </h2>
        
        <form method = "post">
             <div class = "row mb-3">
                <label class ="col-sm-3 col-form-label "><b>House no</b></label>
                <div class="col-sm-6">
                    <input type="text" class ="form-control" name ="houseno" value="">

                </div>
             </div>
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>House Type</b></label>
                   <select class ="form-control"name="housetype" id="housetype">
                        <option >bed sitter</option>
                        <option >one bedroom</option>
                        <option > two bedroom</option>
                    </select>
                </div>
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>House state</b></label>   
                    <select name="housestate" class ="form-control" id="housestate">
                        <option>occupied</option>
                        <option>vaccant</option>
                        <option>booked</option>
                        </select>
                </div>
            
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Rent</b></label>
                    <div class="col-sm-6">
                        <input type="text" class ="form-control" name ="rent" value="">
                    
                    </div>
                </div>
             

             
             <div class ="row mb-3">
                <div class= "offset -sm-3 col-sm-3 d-grid">
                    <button type="submit"class="btn btn-primary " name="submit">Submit</button >
                </div>
                <div class ="col-sm-3 d-grid ">
                    <a class="btn btn-outline-primary " href="/ken/manager.php" role ="button">Cancel</a>

                </div>
             </div>
        </form>
    </div>
</body>
</html>