<?php 
$insert = false;
if(isset($_POST['fname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $age = $_POST['age'];
    $experiece = $_POST['experience'];
    $duration = $_POST['duration'];
    
    $sql ="INSERT INTO `gym`.`gymdb` (`fname`, `lname`, `email`, `number`, `age`, `experience`, `duration`, `dt`) VALUES 
    ('$fname','$lname','$email','$number','$age','$experiece','$duration',current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Application form</title>
  </head>
  <body>
    <style type="text/css">
      body {
        padding: 10% 20%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #71b7ec, #9b59b6);
      }
      #box {
        align-items: center;
        border-radius: 5px;
        background-color: white;
        margin: auto;
        width: 100vh;
        height: 50%;
        padding: 50px;
      }
      #text {
        height: 50px;
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
        color: black;
      }

      .submitmsg{
        color:red;
      }
    </style>
     
    <div id="box">
    <?php  if($insert==true){?>

<?php echo "<h6 class='submitmsg'>Your Form is Submitted Successfully</h6>"?>
<?php }

 ?>
      <h1 style="text-align: center; margin-bottom: 5%">Application Form</h1>
      <form action="formpage.php" class="application-form " method="post">
        <div class="row">
          <div class="col-md-6">
            <input
              id="text"
              type="text"
              name="fname"
              placeholder="First Name" required
            />
          </div>
          <div class="col-md-6">
            <input id="text" type="text" name="lname" placeholder="Last Name" required/>
          </div>
        </div>

        <input id="text" type="email" name="email" placeholder="Email" required/>
        <div class="row">
          <div class="col-md-6">
            <input id="text" type="number" name="age" placeholder="Age" required/>
          </div>
          <div class="col-md-6">
            <input
              id="text"
              type="number"
              name="number"
              placeholder="Mobile Number" required
            />
          </div>
        </div>

        <input
          id="text"
          type="text"
          name="experience"
          placeholder="Experience" required
        />
        <input id="text" type="number" name="duration" placeholder="Duration" />
        <button id="submit" class="btn btn-primary" style="margin: 1% 45%" type="submit">
          Submit
        </button>
      </form>

      <a href="index.php">Click here to go back to home page</a>
    </div>

    
 
  </body>
</html>
