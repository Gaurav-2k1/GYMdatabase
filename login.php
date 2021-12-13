<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <title>Login</title>
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
      <form action="formpage.php" method="post">
        <div style="font-size: 25px; color: black; margin: 2% 40%">Login</div>

        <input
          id="text"
          type="text"
          name="user_name"
          placeholder="UserName"
        /><br /><br />
        <input
          id="text"
          type="password"
          name="password"
          placeholder="PassWord"
        /><br /><br />

        <input id="button" type="submit" value="Login" /><br /><br />

        <a href="signup.php">Click to Signup</a><br /><br />
      </form>
    </div>
  </body>
</html>
