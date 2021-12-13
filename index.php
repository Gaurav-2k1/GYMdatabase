<?php 

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Navigation Bar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initaial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <header>
      
          
      <a href="#home" id="logo"> <b>PLANET FITNESS GYM</b></a>
      
        <li>
          <a href="#home">Home</a>
        </li>
        <li>
          <a href="#home">Program</a>
        </li>
        <li>
          <a href="#home">About</a>
        </li>
     
      </ul>

      <button  id="login" type="button" class="btn btn-primary">Login</button>
      <button  id="signup" type="button" class="btn btn-primary">Signup</button>

    
  </header>


<section>
    <div class="content">
        <div class="contentBx">


            <h2>Hustle Needed For That Muscle</h2> 
            <p> We at PlanetFitness help you to get that shape which your body needs and gain confidence in yourself mentally and physically too!</p>

            <br>
            <a class ="homebtn" href="#home"> Get In Touch </a>
            <a class ="homebtn" href="formpage.php"> Application form </a>
            <a class ="homebtn" href="members.php">  Members </a>
            
        </div>

    </div>
</section>


  <script>
    var btn = document.getElementById('login');
   btn.addEventListener('click', function() {
  document.location.href = 'login.php';
});
var btn1 = document.getElementById('signup');
   btn1.addEventListener('click', function() {
  document.location.href = 'signup.php';
});
  </script>
  </body>
</html>
