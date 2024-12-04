<?php 
include('config.php');

if (isset($_POST["submit"])){
   $result = mysqli_query($conn, "SELECT * FROM houses WHERE id='".$_GET ['id']."'");
   $row = mysqli_fetch_array($result);
   if (count($_POST)>0){
   
       $query =mysqli_query($conn ,"UPDATE houses SET  paymethod='" . $_POST["paymethod"] ."', payed= '". $_POST["rentpayed"] ."', bal= '". $_POST["rentbal"] ."' WHERE id='".$_GET ['id']."'") ; 
       echo"<script> alert('success!')</script>";
       header("location: /ken/housesrent.php");
       exit; 
      }
   

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Rent </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
</head>

  
<body>
    <div class ="container my-5">
       
        
        <form method = "post">
             
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Payment Method</b></label>
                   <select class ="form-control"name="paymethod" id="paymethod" value= "">
                        <option >PAYBILL</option>
                        <option >SEND MONEY</option>
                        <option > ACCOUNT</option>
                    </select>
                </div>
            
            
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Rent Payed</b></label>
                    <div class="col-sm-6">
                        <input type="text" class ="form-control" name ="rentpayed" value="">
            
                    </div>
                </div>
                <div class = "row mb-3">
                    <label class ="col-sm-3 col-form-label "><b>Rent bal</b></label>
                    <div class="col-sm-6">
                        <input type="text" class ="form-control" name ="rentbal" value="">
            
                    </div>
                </div>
             

             
             <div class ="row mb-3">
                <div class= "offset -sm-3 col-sm-3 d-grid">
                    <button type="submit"class="btn btn-primary " name="submit">Submit</button >
                </div>
                <div class ="col-sm-3 d-grid ">
                    <a class="btn btn-outline-primary " href="/ken/housesrent.php" role ="button">Cancel</a>

                </div>
             </div>
        </form>
    </div>
</body>
</html>