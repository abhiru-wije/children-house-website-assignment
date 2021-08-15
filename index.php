<?php
session_start();
require_once './includes/database.php';
// require_once './includes/register-inc.php';
// require_once './includes/login-inc.php';
if (!isset($_SESSION['sessionId'])) {
  header("Location: ./login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
  <?php

  if (isset($_GET['overview'])) {
  ?>

    <link rel="stylesheet" href="./styles/style.css" />


  <?php
  } else if (isset($_GET['add_donation'])) {
  ?>

    <link rel="stylesheet" href="./styles/forms.css" />


  <?php
  } else if (isset($_GET['view_donation_single'])) {
  ?>

    <link rel="stylesheet" href="./styles/forms.css" />


  <?php
  } else if (isset($_GET['add_staff'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['add_child'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['add_labours'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['view_staff'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['view_labours'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['view_child'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  } else if (isset($_GET['view_donation'])) {
  ?>

    <link rel="stylesheet" href="./styles/3forms.css" />


  <?php
  }



  ?>

  <link rel="stylesheet" href="./styles/sidebarstyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <div class="header">
    <h3>SAMADHI CHILDREN HOME</h3>
  </div>
  <div class="container">
    <div class="left-side">
      <div class="side-menu">
        <div class="groups">
          <img src="./asset/overview.png" alt="" />
          <p>Dashboard</p>
        </div>
        <div class="groups" id="overview">
          <img src="./asset/overview.png" alt="" />
          <p><a href="./index.php?overview">Overview</a></p>
        </div>
        <div class="groups" id="donation">
          <img src="./asset/money.png" alt="" />
          <p>Donations<i class="fas fa-caret-down pl-10"></i></p>
        </div>
        <div class="drop-down" id="donationmenu">
          <p><a href="./index.php?add_donation">Add Donation</a></p>
          <p><a href="./index.php?view_donation">View Donation</a></p>
        </div>
        <div class="groups" id="staff">
          <img src="./asset/users.png" alt="" />
          <p>Staff<i class="fas fa-caret-down pl-10"></i></p>
        </div>
        <div class="drop-down" id="staffmenu">
          <p><a href="./index.php?add_staff">Add Staff</a></p>
          <p><a href="./index.php?view_staff">View Staff</a></p>
        </div>
        <div class="groups" id="child">
          <img src="./asset/child.png" alt="" />
          <p>Child<i class="fas fa-caret-down pl-10"></i></p>
        </div>
        <div class="drop-down" id="childmenu">
          <p><a href="./index.php?add_child">Add Child</a></p>
          <p><a href="./index.php?view_child">View Child</a></p>
        </div>
        <div class="groups" id="labour">
          <img src="./asset/labour.png" alt="" class="labourimg" />
          <p>Labour<i class="fas fa-caret-down pl-10"></i></p>
        </div>
        <div class="drop-down" id="labourmenu">
          <p><a href="./index.php?add_labours">Add Labours</a></p>
          <p><a href="./index.php?view_labours">View Labours</a></p>
          <p><a href="./index.php?view_labours_salary">View Labour Salary</a></p>
        </div>
        <div class="groups">
          <img src="./asset/logout.png" alt="" />
          <p><a href="./login.php">Logout</a></p>
        </div>
      </div>
    </div>
    <div class="right-side">
      <?php

      if (isset($_GET['overview'])) {
      ?>

        <div class="right-header">
          <h1>Overview</h1>
        </div>
        <div class="card-container">
          <div class="card">
            <div class="visual">
              <i class="fas fa-money-bill-alt visual-cash" style="color: aliceblue; font-size: 100px"></i>
              <div class="visual-text">
                <p><?php
                    $sql = "SELECT SUM(amount) FROM donar;";
                    $results = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($results);

                    if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($results)) {
                        $total = $row['SUM(amount)'];
                        echo 'Rs. ' . number_format($total, 2, '.', ',');
                      }
                    }
                    ?>
                </p>
                <h4>Total Donations</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href="./index.php?view_donation"><svg xmlns="http://www.w3.org/2000/svg" class="r-arrow" viewBox="0 0 20 20" fill="#5e7cea">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i class="fas fa-child visual-cash" style="color: aliceblue; font-size: 100px"></i>
              <div class="visual-text">
                <h1><?php
                    $sql = "SELECT COUNT(id) FROM child;";
                    $results = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($results);

                    if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($results)) {
                        $total = $row['COUNT(id)'];
                        echo $total;
                      }
                    }
                    ?></h1>
                <h4>Children Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href="./index.php?view_child"><svg xmlns="http://www.w3.org/2000/svg" class="r-arrow" viewBox="0 0 20 20" fill="#3fa55c">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i class="fas fa-user visual-cash" style="color: aliceblue; font-size: 100px"></i>
              <div class="visual-text">
                <h1><?php
                    $sql = "SELECT COUNT(id) FROM staff;";
                    $results = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($results);

                    if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($results)) {
                        $total = $row['COUNT(id)'];
                        echo $total;
                      }
                    }
                    ?>
                </h1>
                <h4>Staff Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href="./index.php?view_staff"><svg xmlns="http://www.w3.org/2000/svg" class="r-arrow" viewBox="0 0 20 20" fill="#bc6839">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i class="fas fa-portrait visual-cash" style="color: aliceblue; font-size: 100px"></i>
              <div class="visual-text">
                <h1><?php

                    $sql = "SELECT COUNT(id) FROM labor;";
                    $results = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($results);

                    if ($resultCheck > 0) {
                      while ($row = mysqli_fetch_assoc($results)) {
                        $total = $row['COUNT(id)'];
                        echo $total;
                      }
                    }
                    ?></h1>
                <h4>Labour Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href="./index.php?view_labours"><svg xmlns="http://www.w3.org/2000/svg" class="r-arrow" viewBox="0 0 20 20" fill="#9f0a0a">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></a>
            </div>
          </div>
        </div>
        <div class="donate-table">
          <div class="table-header">
            <h2>Cash Donation Details</h2>
          </div>
          <div class="table">
            <table style="width: 100%">
              <tr>
                <th>Donar Name</th>
                <th>Fund Amount</th>
                <th>Contact Number</th>
                <th>Date</th>
              </tr>
              <?php
              $sql = " SELECT * FROM donar ORDER BY id DESC LIMIT 10;";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>

                  <tr>
                    <td><?php echo $row['donar_name'];       ?></td>
                    <td><?php echo 'Rs. ' . $row['amount'];       ?></td>
                    <td><?php echo $row['c_number'];       ?></td>
                    <td><?php $date = $row['date'];
                        $date = substr($date, 0, 10);
                        echo $date; ?></td>
                  </tr>
              <?php
                }
              }
              ?>

            </table>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="myChart"></canvas>
        </div>

      <?php
      } else if (isset($_GET['add_donation'])) {
      ?>

        <div class="right-header">
          <h1>Donation Details</h1>
        </div>
        <div class="donate-table-2">
          <div class="table-header">
            <h2>Add Donars</h2>
          </div>
          <div class="donate-view">
            <div class="donate-form">
              <form action="./operations/donation-add.php" method="POST">
                <div class="name">
                  <label for="dorname">Donar Name</label>
                  <input type="text" name="dorname" id="" placeholder="Name" />
                </div>
                <div class="name">
                  <label for="dorcnumber">Contact Number</label>
                  <input type="text" name="dorcnumber" id="" placeholder="Contact Number" />
                </div>
                <div class="name">
                  <label for="doraddress">Address</label>
                  <input type="text" name="doraddress" id="" placeholder="Address" />
                </div>
                <div class="name">
                  <label for="doramou">Donation Amount</label>
                  <input type="text" name="doramou" id="" placeholder="Donation Amount" />
                </div>
                <div class="button">
                  <input type="submit" value="Insert" name="submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php
      } else if (isset($_GET['view_donation_single'])) {
      ?>
        <div class="right-header">
          <h1>Donation Details</h1>
        </div>
        <div class="donate-table-1">
          <div class="table-header">
            <h2>Cash Donation Details</h2>
          </div>
          <div class="donate-view">
            <div class="donate-form">
              <?php
              // $id = $_GET['view_donation_single'];
              $sql = "SELECT * FROM donar WHERE id=" . $_GET['id'] . ";";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>
                  <form action="" method="POST">
                    <div class="name">
                      <label for="dorname">Name</label>
                      <input type="text" name="dorname" id="" value="<?php echo $row['donar_name']; ?>" disabled />
                    </div>
                    <div class="name">
                      <label for="dorcnumber">Contact Number</label>
                      <input type="text" name="dorcnumber" id="" value="<?php echo $row['c_number']; ?>" disabled />
                    </div>
                    <div class="name">
                      <label for="doraddress">Address</label>
                      <input type="text" name="doraddress" id="" value="<?php echo $row['address']; ?>" disabled />
                    </div>
                    <div class="name">
                      <label for="dtype">Donation Amount</label>
                      <input type="text" name="dortype" id="" value="<?php echo $row['amount']; ?>" disabled />
                    </div>
                  </form>
              <?php
                }
              }
              ?>

            </div>
            <div class="donate-card">
              <div class="visual">
                <i class="fas fa-money-bill-alt visual-cash" style="color: aliceblue; font-size: 70px"></i>
                <div class="visual-text">
                  <p><?php
                      $sql = "SELECT SUM(amount) FROM donar;";
                      $results = mysqli_query($conn, $sql);
                      $resultCheck = mysqli_num_rows($results);

                      if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                          $total = $row['SUM(amount)'];
                          echo 'Rs. ' . number_format($total, 2, '.', ',');
                        }
                      }
                      ?></p>
                  <h4>Total Donations</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      } else if (isset($_GET['add_staff'])) {
      ?>
        <div class="form-container">
          <form action="./operations/staff-add.php" method="POST" enctype="multipart/form-data">
            <div class="form-header">
              <h2>Add Staff</h2>
            </div>
            <div class="name">
              <label for="stafname">First Name</label>
              <input type="text" name="stafname" id="" placeholder="Enter First Name" />
            </div>
            <div class="name">
              <label for="stalname">Last Name</label>
              <input type="text" name="stalname" id="" placeholder="Enter Last Name" />
            </div>
            <div class="name">
              <label for="stainame">Name with initials</label>
              <input type="text" name="stainame" id="" placeholder="Enter Name with Initials" />
            </div>

            <div class="bdate">
              <label for="stabod">Birthdate</label>
              <input type="date" name="stabod" />
            </div>
            <div class="name">
              <label for="stanic">NIC</label>
              <input type="text" name="stanic" id="" placeholder="Enter NIC Number" />
            </div>
            <div class="gender">
              <label for="stagender">Gender</label>
              <div class="gender-box">
                <div class="male">
                  <label for="stamale">Male</label>
                  <input type="radio" name="stagender" />
                </div>
                <div class="female">
                  <label for="stafemale">Female</label>
                  <input type="radio" name="stagender" />
                </div>
              </div>
            </div>
            <div class="name">
              <label for="stacnum">Contact Number</label>
              <input type="text" name="stacnum" id="" placeholder="Enter Contact Number" />
            </div>
            <div class="name">
              <label for="staadd">Permanent Address</label>
              <input type="text" name="staadd" id="" placeholder="Enter Address" />
            </div>
            <div class="name">
              <label for="staemil">Email Address</label>
              <input type="text" name="staemil" id="" placeholder="Enter Email Address" />
            </div>
            <div class="ddown">
              <label class="inputs" for="post">Post</label>
              <div class="dropdown-1">
                <select name="stapost" id="post">
                  <option value="Admin">Admin</option>
                  <option value="principle">Principle</option>
                  <option value="matron">Matron</option>
                </select>
              </div>
            </div>
            <div class="image">
              <label for="image" name="staimg">Employee Image</label>
              <input type="file" name="staimg" />
            </div>
            <div class="button">
              <input type="submit" value="Insert" name="submit" />
            </div>
          </form>
        </div>


      <?php
      } else if (isset($_GET['add_child'])) {
      ?>

        <div class="form-container">
          <form action="./operations/child-add.php" method="POST" enctype="multipart/form-data">
            <div class="form-header">
              <h2>Add Child</h2>
            </div>
            <div class="name">
              <label for="chiname">Name with initials</label>
              <input type="text" name="chiname" id="" placeholder="Enter Name with Initials" />
            </div>
            <div class="fname">
              <label for="chfuname">Full Name</label>
              <input type="text" name="chfuname" placeholder="Enter Full Name" />
            </div>
            <div class="bdate">
              <label for="chbod">Birthdate</label>
              <input type="date" name="chbod" />
            </div>
            <div class="gender">
              <label for="chgender">Gender</label>
              <div class="gender-box">
                <div class="male">
                  <label for="chmale">Male</label>
                  <input type="radio" name="chgender" value="Male" />
                </div>
                <div class="female">
                  <label for="chfemale">Female</label>
                  <input type="radio" name="chgender" value="Female" />
                </div>
              </div>
            </div>
            <div class="image">
              <label for="chimage">Child Image</label>
              <input type="file" name="chimage" />
            </div>
            <div class="button">
              <input type="submit" value="Insert" name="submit" />
            </div>
          </form>
        </div>
      <?php
      } else if (isset($_GET['add_labours'])) {
      ?>

        <div class="form-container">
          <form action="./operations/labour-add.php" method="POST">
            <div class="form-header">
              <h2>Add Labor</h2>
            </div>
            <div class="name">
              <label for="labiname">Name with initials</label>
              <input type="text" name="labiname" id="" placeholder="Enter Name with Initials" />
            </div>
            <div class="fname">
              <label for="labfuname">Full Name</label>
              <input type="text" name="labfuname" placeholder="Enter Full Name" />
            </div>
            <div class="fname">
              <label for="labfiname">First Name</label>
              <input type="text" name="labfiname" placeholder="Enter First Name" />
            </div>
            <div class="bdate">
              <label for="labbod">Birthdate</label>
              <input type="date" name="labbod" />
            </div>
            <div class="gender">
              <label for="labgender">Gender</label>
              <div class="gender-box">
                <div class="male">
                  <label for="labmale">Male</label>
                  <input type="radio" name="labgender" value="Male" />
                </div>
                <div class="female">
                  <label for="labfemale">Female</label>
                  <input type="radio" name="labgender" value="Female" />
                </div>
              </div>
            </div>
            <div class="fname">
              <label for="labcnum">Contact Number</label>
              <input type="text" name="labcnum" placeholder="Enter Contact Number" />
            </div>
            <div class="fname">
              <label for="labadd">Permanent Address</label>
              <input type="text" name="labadd" placeholder="Enter Address" />
            </div>
            <div class="ddown">
              <label class="inputs" for="labpost">Post</label>
              <div class="dropdown-1">
                <select name="labpost" id="post">
                  <option value="Sunshine">Sunshine</option>
                  <option value="Moonlight">Moonlight</option>
                </select>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Insert" name="submit" />
            </div>
          </form>
        </div>
      <?php
      } else if (isset($_GET['view_staff'])) {
      ?>
        <div class="right-header">
          <h1>View Staff</h1>
        </div>

        <div class="donate-table">
          <div class="table-header">
            <h2>Staff Details</h2>
          </div>
          <div class="table">
            <table style="width: 100%">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
              $sql = "SELECT * FROM staff;";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>
                  <tr>
                    <td><?php echo $row['id'];       ?></td>
                    <td><?php echo $row['initial_name'];       ?></td>
                    <td><?php echo $row['c_number'];       ?></td>
                    <td><?php echo $row['address'];       ?></td>
                    <td><a href="" style="color: green;">Edit</a></td>
                    <td><a href="" style="color: red;">Delete</a></td>
                  </tr>
              <?php
                }
              }
              ?>
            </table>
          </div>
        </div>


      <?php
      } else if (isset($_GET['view_labours'])) {
      ?>
        <div class="right-header">
          <h1>View Labour</h1>
        </div>

        <div class="donate-table">
          <div class="table-header">
            <h2>labour Details</h2>
          </div>
          <div class="table">
            <table style="width: 100%">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
              $sql = "SELECT * FROM labor;";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>
                  <tr>
                    <td><?php echo $row['id'];       ?></td>
                    <td><?php echo $row['initial_name'];       ?></td>
                    <td><?php echo $row['c_number'];       ?></td>
                    <td><?php echo $row['address'];       ?></td>
                    <td><?php echo $row['gender'];       ?></td>
                    <td><a href="" style="color: green;">Edit</a></td>
                    <td><a href="" style="color: red;">Delete</a></td>
                  </tr>
              <?php
                }
              }
              ?>
            </table>
          </div>
        </div>
      <?php
      } else if (isset($_GET['view_child'])) {
      ?>

        <div class="right-header">
          <h1>View Children</h1>
        </div>

        <div class="donate-table">
          <div class="table-header">
            <h2>Children Details</h2>
          </div>
          <div class="table">
            <table style="width: 100%">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <?php
              $sql = "SELECT * FROM child;";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>
                  <tr>
                    <td><?php echo $row['id'];       ?></td>
                    <td><?php echo $row['initial_name'];       ?></td>
                    <td><?php echo $row['gender'];       ?></td>
                    <td><?php echo $row['bod'];       ?></td>
                    <td><?php
                        $birthday =  $row['bod'];
                        $birthday = explode("-", $birthday);
                        $age = (date("md", date("U", mktime(0, 0, 0, $birthday[2], $birthday[1], $birthday[0]))) > date("md")
                          ? ((date("Y") - $birthday[0]) - 1)
                          : (date("Y") - $birthday[0]));
                        echo $age;
                        ?>
                    </td>
                    <td><a href="" style="color: green;">Edit</a></td>
                    <td><a href="" style="color: red;">Delete</a></td>
                  </tr>
              <?php
                }
              }
              ?>
            </table>
          </div>
        </div>
      <?php
      } else if (isset($_GET['view_donation'])) {
      ?>
        <div class="right-header">
          <h1>View Donation</h1>
        </div>

        <div class="donate-table">
          <div class="table-header">
            <h2>Donation Details</h2>
          </div>
          <div class="table">
            <table style="width: 100%">
              <tr>

                <th>Donar Name</th>
                <th>Fund Amount</th>
                <th>Contact Number</th>
                <th>Date</th>
                <th>View</th>

              </tr>

              <?php
              $sql = " SELECT * FROM donar ORDER BY id DESC;";
              $results = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($results);

              if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($results)) {
              ?>

                  <tr>
                    <td><?php echo $row['donar_name'];       ?></td>
                    <td><?php echo 'Rs. ' . $row['amount'];       ?></td>
                    <td><?php echo $row['c_number'];       ?></td>
                    <td><?php $date = $row['date'];
                        $date = substr($date, 0, 10);
                        echo $date; ?></td>
                    <td><a href="./index.php?view_donation_single&id=<?php echo $row['id']; ?>" style="color:green">View</a></td>
                  </tr>
              <?php
                }
              }
              ?>

            </table>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
  <script src="./scripts/newjs.js"></script>
  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: "# of Votes",
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            "rgba(255, 99, 132, 0.5)",
            "rgba(54, 162, 235, 0.5)",
            "rgba(255, 206, 86, 0.5)",
            "rgba(75, 192, 192, 0.5)",
            "rgba(153, 102, 255, 0.5)",
            "rgba(255, 159, 64, 0.5)",
          ],
          borderColor: [
            "rgba(255, 99, 132, 1)",
            "rgba(54, 162, 235, 1)",
            "rgba(255, 206, 86, 1)",
            "rgba(75, 192, 192, 1)",
            "rgba(153, 102, 255, 1)",
            "rgba(255, 159, 64, 1)",
          ],
          borderWidth: 1,
        }, ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
        Plugins: {
          legend: {
            maxHeight: 1000,
            maxWidth: 1000,
          },
        },
        responsive: true,
      },
    });
  </script>
</body>

</html>