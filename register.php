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
        <form action="./includes/register-inc.php" method = "post">
            <div class="username">
                <input type="text" name="username" id="" placeholder="Username" />
            </div>
            <div class="username">
                <input type="text" name="firstname" id="" placeholder="First Name" />
            </div>
            <div class="username">
                <input type="text" name="lastname" id="" placeholder="Last Name" />
            </div>
            <div class="username">
                <input
                    type="text"
                    name="cnumber"
                    id=""
                    placeholder="Contact Number"
                />
            </div>
            <div class="username">
                <input type="text" name="address" id="" placeholder="Address" />
            </div>
            <div class="password">
                <input type="password" placeholder="Password" name="password"/>
            </div>
            <div class="password">
                <input type="password" placeholder="Re-enter Password" />
            </div>
            <div class="tic-box-1">
                <p>By clicking regiter I agree to the 
                  company's<br><a>terms and conditions</a></p>
                
            </div>
            <div class="reg-button">
                <button type= "submit" name="submit">Register</button>
            </div>
            <div class="footer">
                <p>Already have an account?</p>
                <h5><a href="./login.php">Login</a></h5>
            </div>
        </form>
      </div>
    </div>
  </body>
</html>
