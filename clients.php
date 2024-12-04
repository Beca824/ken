 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENT MANAGE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="maincss/homepage.css">
 </head>
 <body>
 <ul class="nav justify-content-end p-4" style="height: 100px;">
            
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
        <h2> list of client </h2>
        <a class='btn btn-primary' href ="/ken/clientsadd.php" role ="button">new client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    
                    <th> house</th>
                    <th> name</th>
                    <th> email</th>
                    <th> idno</th>
                    <th> phone </th>
                    <th> role </th>
                    <th> password </th>


                </tr>
            </thead>
             <tbody>
                <?php
                 $servername="localhost:4306";
                 $username ="root";
                 $password =" ";
                 $database= "ken";
                 // create connection 
                 $connection= new mysqli($servername,$username,$password,$database);
                 // check connection 
                  if($connection->connect_error){
                    die("connection failed :". $connection->connect_error);

                  }
                  //read all row from database table 
                  $sql ="SELECT * FROM  users";
                  $result= $connection->query($sql);

                  if(!$result){
                    die ("invalid query: ".$connection->error);
                  }

                  //read data of each row 
                  while ($row= $result ->fetch_assoc()){
                    echo"
                    <tr>
                  
                    <td>  $row[house]</td>
                    <td>  $row[name]</td>
                    <td>  $row[idno]</td>
                    <td>  $row[email]</td>
                    <td>  $row[phone]</td>
                    <td> $row[role] </td>
                    <td> $row[pass] </td>
                 
                    <td>
                        <a class ='btn btn-primary btn-sm' href='/ken/clientsedit.php?id=$row[id]' >Edit</a>
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