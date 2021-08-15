<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./styles/loginstyle.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="nav">
        <div class="topic">
          <h1>Samadhi Children Home</h1>
        </div>
        <div class="left-topic">
          <h4><a href="./register.php">Register</a></h4>
          <button><a href="./login.php">Login</a></button>
        </div>
      </div>
      <div class="wrapper">
        <form action="./includes/login-inc.php" method = "post">
            <div class="username">
                <input type="text" name="" id="" placeholder="Username" />
            </div>
            <div class="password">
                <input type="password" placeholder="Password" />
            </div>
            <div class="tic-box">
                <input type="checkbox" name="" id="" />
                <p>Remember me</p>
            </div>
            <div class="login-button">
                <button type= "submit" name="submit">Login</button>
            </div>
            <div class="footer">
                <p>Don't have an account?</p>
                <h5><a href="./register.php">Register</a></h5>
            </div>
        </form>
      </div>
    </div>
  </body>
</html>
