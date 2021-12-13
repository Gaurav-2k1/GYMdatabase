<?php 

include 'connection.php';



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Members</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/style1.css" />
  </head>
  <body>
    <p style="margin:10px 20px;"><a href="index.php">Click here to go back</a></p>
    <h1 style="text-align: center ; margin-bottom: 3rem">Members</h1>

    <div class="container">
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Sr.No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>

            <th scope="col">Mobile</th>

            <th scope="col">Age</th>
            <th scope="col">Experiece</th>
            <th scope="col">Duration</th>
          </tr>
        </thead>
        <tbody>
           <?php
           
           $selectquery="SELECT * FROM gymdb";

           $query = mysqli_query($con,$selectquery);

           $nums =mysqli_num_rows($query);


           while($res  = mysqli_fetch_array($query)){?>

          
            <tr>
            <td><?php echo $res['Srno'];?></td>
            <td><?php echo $res['fname'];?></td>
            <td><?php echo $res['lname'];?></td>
            <td><?php echo $res['email'];?></td>

            <td><?php echo $res['number'];?></td>

            <td><?php echo $res['age'];?></td>

            <td><?php echo $res['experience'];?></td>
            <td><?php echo $res['duration'];?></td>

          </tr>  
         <?php  
        } 
        ?>
          
        
          
         
        </tbody>
      </table>
    </div>
  </body>
</html>
