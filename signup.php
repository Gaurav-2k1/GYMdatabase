<?php 

   if(isset($_POST['submit'])){  
    
    include 'connection.php';

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $emailquery = "SELECT * FROM  `users` WHERE email = '$email';";
    

    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);
   
    if($emailcount>0){
      echo "email already exists";
    }else{
        if($password == $cpassword){
          $insertquery = "INSERT INTO `gym`.`users` (`name`, `email`, `username`, `password`) VALUES 
          ('$name', '$email', '$username', '$password');";
      

           $iquery = mysqli_query($con,$insertquery);


        }else{
          echo "please check your password again";
        }
    }
  

  // Close the database connection
  $con->close();

    
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
  </head>
  <body>
    <style type="text/css">
      body {
        padding: 10% 20%;
        background-color: aquamarine;
      }

      #text {
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
        color: black;
      }

      #button {
        border-radius: 10%;

        padding: 10px;
        width: 100px;
        color: white;
        background-color: yellowgreen;
        border: none;
      }

      #box {
        border-radius: 20% 10%;

        background-color: white;
        margin: auto;
        width: 300px;
        padding: 50px;
      }
    </style>
    <div id="box">
      <form method="POST" action="signup.php">
        <div style="font-size: 25px; color: black; margin: 2% 40%">SignUP</div>
        
        <input
          id="text"
          type="text"
          name="name"
          placeholder="Name"
          required
        /><br /><br />
        <input
          id="text"
          type="text"
          name="email"
          placeholder="Email"
          required
        /><br /><br />
        <input
          id="text"
          type="text"
          name="username"
          placeholder="UserName"
          required
        /><br /><br />
        <input
          id="text"
          type="password"
          name="password"
          placeholder="PassWord"
          required
        /><br /><br />
        <input
          id="text"
          type="password"
          name="cpassword"
          placeholder="Confirm Password"
          required
        /><br /><br />
        

        <input id="button" type="submit" value="SignUp" name="submit" /><br /><br />

        <a href="login.php">Click to Login</a><br /><br />
        <a href="index.php">Click here to go back to home page</a>

      </form>
    </div>
  </body>
</html>
