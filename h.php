<?php
include('config.php');
 if(isset($_POST ["submit"])){
    session_start();
    $email = $_POST["email"];
    $email = $_POST["password"];
    $result = mysqli_query($conn,"select role,pass from users where email= '$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0){
      
        
            $role =$row['role'];
            switch ($role)
            {
            case "mng":
            header("location: manager.php");   
            break;

            case "usr":
            header("location: rent.php");    
            break;
            }
    }

    else{

        session_destroy();
    echo "<script > alert ('email does not exist '); </script>";
    }    
}
?>
<!DOCTYPE html>
<html lang="en" dir="1tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>login</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="email" >Email: </label>
        <input type="text" name="email" id="email" required value=""><br>
        <label for="password" >Password: </label>
        <input type="password" name="password" id="password" required value=""><br>
        <button type="submit" name ="submit" >Login</button>

    </form>
    
</body>
</html>