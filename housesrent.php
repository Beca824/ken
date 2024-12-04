

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE RENT</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
 </head>
 <body>
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
              <a class="nav-link" href="manager.php">MANAGER HOMEPAGE</a>
            </li>
 </ul>
    <div class="container my-5 ">
        <h2> Manage Rent</h2>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th> id</th>
                    <th> House no</th>
                    <th> Rent</th>
                    <th> payed</th>
                    <th> bal</th>
                    <th> paymethod</th>
                    <th>latest payday</th>
                    <TH> Update pay</TH>

                </tr>
            </thead>
             <tbody>
             <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT id,houseno,rent,payed,bal,paymethod,payday FROM houses ";
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
                      <td>  $row[rent]</td>
                      <td> $row[payed]</td>
                      <td> $row[bal]</td>
                      <td> $row[paymethod]</td>
                      <td> $row[payday]</td>
                      <td>
                      <a class ='btn btn-primary btn-sm' href='/ken/rent.php?id=$row[id]' >pay Update</a>
                      </td>

                    </tr>

                  "; 
                }


              ?>
               
             </tbody>
        </table> 
    </div>
    
 </body>
 </html>