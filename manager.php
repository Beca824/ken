<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/manager.css">
    <title>index</title>
</head>
<body>
             <!-- NAVBAR -->

             <ul class="nav justify-content-end p-4" style="height: 100px;">

           
         
           
            <li class="nav-item">
              <a class="nav-link" href="houses.php">Manage Houses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clients.php">Manage Clients</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="housesrent.php">Manage Rent</a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="managerprofile.php">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">LOGOUT</a>
            </li>
            
          </ul>

    <!-- VACANT HOUSES -->
    <div class="vacant-hses">
        <h2 style="margin:1em;">VACANT HOUSES</h2>
        <table class="table table-striped">
            <thead class="bg-info">
              <tr>
                <th scope="col">id</th>
                <th scope="col">House Numbrer</th>
                <th scope="col">House Type</th>
                <th scope="col">House Status</th>
                <th scope="col"> Rent</th>
               
              </tr>
            </thead>
            <tbody>
            <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT id,houseno,type,state,rent FROM  houses WHERE state ='vaccant'";
                $result= $conn->query($sql);
                if(!$result){
                  die ("invalid query: ".$conn->error);
                }

                //read data of each row 
                while ($row= $result ->fetch_assoc()){
                  echo"
                    <tr>
                      <td> $row[id]</td>
                      <td>  $row[houseno]</td>
                      <td>  $row[type]</td>
                      <td>  $row[state]</td>
                      <td>  $row[rent]</td>

                    </tr>

                  "; 
                }


              ?>
            </tbody>
          </table>
    </div>

    <!-- TENANTS YET TO PAY RENT -->
    <div class="vacant-hses">
        <h2 style="margin:1em;">TENANTS YET TO PAY RENT</h2>
        <table class="table table-striped">
            <thead class="bg-info">
              <tr>
                <th scope="col">House number</th>
                <th scope="col">house type</th>
                <th scope="col">Rent</th>
                <th scope="col">Rent payed</th>
                <th scope="col">Rent Bal</th>
                <th scope="col"> Invoice</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT houseno,type,rent,payed,bal FROM  houses where bal !=0 || payed is null && state ='occupied'";
                $result= $conn->query($sql);
                if(!$result){
                  die ("invalid query: ".$conn->error);
                }

                //read data of each row 
                while ($row= $result ->fetch_assoc()){
                  echo"
                    <tr>
                      <td>  $row[houseno]</td>
                      <td>  $row[type]</td>
                      <td>  $row[rent]</td>
                      <td>  $row[payed]</td>
                      <td>  $row[bal]</td>
                    
                      <td>
                      </td>

                    </tr>

                  "; 
                }


              ?>
            </tbody>
          </table>
    </div>

           <!-- BOOKED HOUSES -->

           <div class="vacant-hses">
            <h2 style="margin:1em;">BOOKED HOUSES</h2>
            <table class="table table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col">House number</th>
                    <th scope="col">book name </th>
                    <th scope="col">email</th>
                    <th scope="col">phone no</th>
                    <th scope="col">book date</th>

                  </tr>
                </thead>
                <tbody>
                <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT * FROM  bkhouses ";
                $result= $conn->query($sql);
                if(!$result){
                  die ("invalid query: ".$conn->error);
                }

                //read data of each row 
                while ($row= $result ->fetch_assoc()){
                  echo"
                    <tr>
                      <td>  $row[houseno]</td>
                      <td>  $row[bkname]</td>
                      <td>  $row[bkemail]</td>
                      <td>  $row[bkphoneno]</td>
                      <td>  $row[bkdate]</td>

                    </tr>

                  "; 
                }


              ?>
                </tbody>
              </table>
        </div> 

</body>
</html>