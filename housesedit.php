<?php 
include_once('config.php');
$result = mysqli_query($conn, "SELECT * FROM houses WHERE id='".$_GET ['id']."'");
$row = mysqli_fetch_array($result);
if (count($_POST)>0){
   
    $query =mysqli_query($conn ,"UPDATE houses SET  state='" . $_POST["housestate"] ."', rent= '". $_POST["rent"] ."' WHERE id='".$_GET ['id']."' ") ; 
    echo"<script> alert('success!')</script>";
    header("location: /ken/houses.php");
    exit; 
    
     
   
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
                        <input type="text" class ="form-control" name ="rent" value="<?php echo $row['rent'];?>">
                    
                    </div>
                </div>

             

             
             <div class ="row mb-3">
                <div class= "offset -sm-3 col-sm-3 d-grid">
                    <button type="submit"class="btn btn-primary " name="submit">Submit</button >
                </div>
                <div class ="col-sm-3 d-grid ">
                    <a class="btn btn-outline-primary " href="/ken/houses.php" role ="button">Cancel</a>

                </div>
             </div>
        </form>
    </div>
</body>
</html>