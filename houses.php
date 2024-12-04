

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE HOUSES</title>
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
        <h2> list of houses</h2>
        <a class='btn btn-primary' href ="/ken/housesadd.php" role ="button">new house</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th> id</th>
                    <th> House no</th>
                    <th> House type</th>
                    <th> House State</th>
                    <th> Rent</th>
                    

                </tr>
            </thead>
             <tbody>
             <?php
                include ('config.php');
                //read all row from database table 
                $sql ="SELECT id,houseno,type,state,rent FROM  houses";
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
                    
                      <td>
                      <a class ='btn btn-primary btn-sm' href='/ken/housesedit.php?id=$row[id]' >Edit</a>
                      <a class ='btn btn-primary btn-sm' href='/ken/delete.php ?id=$row[id]' >Delete</a>
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