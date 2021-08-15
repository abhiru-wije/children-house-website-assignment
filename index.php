<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
    <link rel="stylesheet" href="./styles/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
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
        <div class="right-header">
          <h1>Overview</h1>
        </div>
        <div class="card-container">
          <div class="card">
            <div class="visual">
              <i
                class="fas fa-money-bill-alt visual-cash"
                style="color: aliceblue; font-size: 100px"
              ></i>
              <div class="visual-text">
                <p>Rs. 9987.00</p>
                <h4>Total Donation</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href=""><svg
                xmlns="http://www.w3.org/2000/svg"
                class="r-arrow"
                viewBox="0 0 20 20"
                fill="#5e7cea"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i
                class="fas fa-child visual-cash"
                style="color: aliceblue; font-size: 100px"
              ></i>
              <div class="visual-text">
                <h1>1</h1>
                <h4>Children Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href=""><svg
                xmlns="http://www.w3.org/2000/svg"
                class="r-arrow"
                viewBox="0 0 20 20"
                fill="#3fa55c"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i
                class="fas fa-user visual-cash"
                style="color: aliceblue; font-size: 100px"
              ></i>
              <div class="visual-text">
                <h1>3</h1>
                <h4>Staff Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href=""><svg
                xmlns="http://www.w3.org/2000/svg"
                class="r-arrow"
                viewBox="0 0 20 20"
                fill="#bc6839"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
              </svg></a>
            </div>
          </div>
          <div class="card">
            <div class="visual">
              <i
                class="fas fa-portrait visual-cash"
                style="color: aliceblue; font-size: 100px"
              ></i>
              <div class="visual-text">
                <h1>5</h1>
                <h4>Labour Details</h4>
              </div>
            </div>
            <div class="footer">
              <h4>View Details</h4>
              <a href=""><svg
                xmlns="http://www.w3.org/2000/svg"
                class="r-arrow"
                viewBox="0 0 20 20"
                fill="#9f0a0a"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                />
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
              <tr>
                <td>Abhiru</td>
                <td>1500</td>
                <td>0714820364</td>
                <td>2020-02-04</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
    <script src="./scripts/newjs.js"></script>
    <script>
      var ctx = document.getElementById("myChart").getContext("2d");
      var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [
            {
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
            },
          ],
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