<?php
include('config.php');
session_start();
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $result = mysqli_query($conn,"select * from users where email= '".$email."' AND pass= '".$pass."'");
    $row = mysqli_fetch_array($result);
    session_start();
   
    if($row["role"]=="mng"){
        $_SESSION["email"]=$email;
           header("location: manager.php");
    }
    if($row["role"]=="usr"){
        $_SESSION["email"]=$email;
        header("location: tenantspage.php");
    }
    else{
        
    echo "<script > alert ('email or password is incorrect '); </script>";
    }    
}
?>

<DOCTYPE html>
<html lang="en">
<Head>
    <title>Login</title>
    <link rel="stylesheet"type="" href="style.css">
</Head>
<body>
<ul class="nav justify-content-end p-4" style="height: 100px;">
           
            <li class="nav-item">
              <a class="nav-link" href="index.php">BACK</a>
            </li>
          </ul>
    <div class="login-box">
        <h1>Login</h1>
        <form class ="" action="" method="post" autocomplete ="off">
            <label> EMAIL</label>
            <input type="text" name="email" id="email" required value="" placeholder="example@gmai.com">
            <label> PASSWORD</label>
            <input type="password" name="password" id="password" required value="" placeholder="password "><br></br>
            <button type="submit" name ="submit" >Login</button>

        </form>
    </div>

</body>

</html>