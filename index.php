<?php
session_start();
if(empty($_SESSION["user"])) {
    header('Location: login.php');
}

if ($_SESSION["user"] == 'msteppe00') {
?>

<!doctype html>
<html lang="en">
  <!-- flag{dont_hack_school_gradebooks_kids} -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gradebook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Gradebook</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="edit"></span>
                  Modify Grades
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="book-open"></span>
                  Attendance
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Past reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last semester
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Search years
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Teacher Dashboard</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Import</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          <h3>Attendance Graph</h3>
          <canvas class="my-4" id="myChart" width="900" height="300"></canvas>
          <h3>Student Grades</h3>
          <div class="table-responsive">
            <table class="table-header-rotated table table-striped table-sm">
              <thead>
                <tr>
                  <th class="rotate-45"><div><span>Student ID</span></div></th>
                  <th class="rotate-45"><div><span>Last</span></div></th>
                  <th class="rotate-45"><div><span>First</span></div></th>
                  <th class="rotate-45"><div><span>Absences</span></div></th>
                  <th class="rotate-45"><div><span>Overall %</span></div></th>
                  <th class="rotate-45"><div><span>Assignment 1 (30 pts)</span></div></th>
                  <th class="rotate-45"><div><span>Assignment 2 (10 pts)</span></div></th>
                  <th class="rotate-45"><div><span>Assignment 3 (60 pts)</span></div></th>
                  <th class="rotate-45"><div><span>Last Accessed IP</span></div></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>108955</td>
                  <td>Wrooner</td>
                  <td>Tom</td>
                  <td>2</td>
                  <td>0</td>
                  <td>30</td>
                  <td>-5</td>
                  <td>-25</td>
                  <td>198.211.97.114</td>
                </tr>
                <tr>
                  <td>159950</td>
                  <td>Koley</td>
                  <td>Cant</td>
                  <td>0</td>
                  <td>89</td>
                  <td>27</td>
                  <td>8</td>
                  <td>54</td>
                  <td>57.143.83.255</td>
                </tr>
                <tr>
                  <td>133568</td>
                  <td>Tingelrae</td>
                  <td>Jonnie</td>
                  <td>0</td>
                  <td>81</td>
                  <td>30</td>
                  <td>8</td>
                  <td>43</td>
                  <td>224.28.134.23</td>
                </tr>
                <tr>
                  <td>139972</td>
                  <td>Coothulew</td>
                  <td>Nyarlhotep</td>
                  <td>0</td>
                  <td>81</td>
                  <td>20</td>
                  <td>6</td>
                  <td>55</td>
                  <td>10.246.47.180</td>
                </tr>
                <tr>
                  <td>191574</td>
                  <td>Fictone</td>
                  <td>Fooh</td>
                  <td>0</td>
                  <td>86</td>
                  <td>21</td>
                  <td>9</td>
                  <td>56</td>
                  <td>30.20.251.215</td>
                </tr>
                <tr>
                  <td>162261</td>
                  <td>Menh</td>
                  <td>Hecker</td>
                  <td>0</td>
                  <td>72</td>
                  <td>25</td>
                  <td>5</td>
                  <td>42</td>
                  <td>114.50.232.230</td>
                </tr>
                <tr>
                  <td>125617</td>
                  <td>Bronsee</td>
                  <td>Phipps</td>
                  <td>1</td>
                  <td>90</td>
                  <td>21</td>
                  <td>10</td>
                  <td>59</td>
                  <td>247.129.48.209</td>
                </tr>
                <tr>
                  <td>172986</td>
                  <td>Gulof</td>
                  <td>Aleksandar</td>
                  <td>0</td>
                  <td>89</td>
                  <td>22</td>
                  <td>9</td>
                  <td>58</td>
                  <td>208.202.118.155</td>
                </tr>
                <tr>
                  <td>124751</td>
                  <td>Gorg</td>
                  <td>Swopnole</td>
                  <td>0</td>
                  <td>88</td>
                  <td>23</td>
                  <td>8</td>
                  <td>57</td>
                  <td>48.185.54.52</td>
                </tr>
                <tr>
                  <td>143135</td>
                  <td>Pahk</td>
                  <td>Justeen</td>
                  <td>0</td>
                  <td>76</td>
                  <td>20</td>
                  <td>10</td>
                  <td>46</td>
                  <td>45.30.75.221</td>
                </tr>
                <tr>
                  <td>198039</td>
                  <td>Von Garo</td>
                  <td>Sroyo</td>
                  <td>0</td>
                  <td>100</td>
                  <td>30</td>
                  <td>10</td>
                  <td>60</td>
                  <td>129.212.236.118</td>
                </tr>
                <tr>
                  <td>154210</td>
                  <td>Huggles</td>
                  <td>Kilvone</td>
                  <td>0</td>
                  <td>86</td>
                  <td>30</td>
                  <td>8</td>
                  <td>48</td>
                  <td>92.6.215.5</td>
                </tr>
                <tr>
                  <td>178416</td>
                  <td>Bronsteen</td>
                  <td>Pirrip</td>
                  <td>0</td>
                  <td>52</td>
                  <td>Z</td>
                  <td>6</td>
                  <td>46</td>
                  <td>119.102.91.106</td>
                </tr>
                <tr>
                  <td>111501</td>
                  <td>Jane</td>
                  <td>Richvik</td>
                  <td>23</td>
                  <td>90</td>
                  <td>24</td>
                  <td>7</td>
                  <td>59</td>
                  <td>246.89.109.235</td>
                </tr>
                <tr>
                  <td>155282</td>
                  <td>McDowell</td>
                  <td>Satania</td>
                  <td>0</td>
                  <td>78</td>
                  <td>24</td>
                  <td>5</td>
                  <td>49</td>
                  <td>231.113.160.52</td>
                </tr>
                <tr>
                  <td>109340</td>
                  <td>Doe</td>
                  <td>John</td>
                  <td>0</td>
                  <td>85</td>
                  <td>23</td>
                  <td>10</td>
                  <td>52</td>
                  <td>128.153.213.240</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [0, 14, 14, 14, 12, 13, 0],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>

<?php } else if ($_SESSION["user"] == 'bronseep') { ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gradebook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Gradebook</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Past reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last semester
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Search years
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Student Dashboard</h1>
          </div>
          <h3>Student Info</h3>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <tr>
                <td>Name (Last, First)</td>
                <td>Bronsee, Phipps</td>
              </tr>
              <tr>
                <td>Student ID</td>
                <td>125617</td>
              </tr>
              <tr>
                <td>Absences</td>
                <td>1</td>
              </tr>
            </table>
          </div>
          <h3>Your Grades</h3>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th><div><span>Assignment Name</span></div></th>
                  <th><div><span>Points Earned</span></div></th>
                  <th><div><span>Total Possible</span></div></th>
                  <th><div><span>Percent</span></div></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Assignment 1</td>
                  <td>21</td>
                  <td>30</td>
                  <td>70%</td>
                </tr>
                <tr>
                  <td>Assignment 2</td>
                  <td>10</td>
                  <td>10</td>
                  <td>100%</td>
                </tr>
                <tr>
                  <td>Assignment 3</td>
                  <td>59</td>
                  <td>60</td>
                  <td>91.3%</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <th>90</th>
                  <th>100</th>
                  <th>90%</th>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

  </body>
</html>
<?php } else if ($_SESSION["user"] == "wroonert") { ?>
<!doctype html>
<html lang="en">
  <!-- flag{those_r_sum_w3ird_gr4dez} -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gradebook</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Gradebook</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Past reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last semester
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Search years
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Student Dashboard</h1>
          </div>
          <h3>Student Info</h3>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <tr>
                <td>Name (Last, First)</td>
                <td>Wrooner, Tom</td>
              </tr>
              <tr>
                <td>Student ID</td>
                <td>108955</td>
              </tr>
              <tr>
                <td>Absences</td>
                <td>2</td>
              </tr>
            </table>
          </div>
          <h3>Your Grades</h3>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th><div><span>Assignment Name</span></div></th>
                  <th><div><span>Points Earned</span></div></th>
                  <th><div><span>Total Possible</span></div></th>
                  <th><div><span>Percent</span></div></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Assignment 1</td>
                  <td>30</td>
                  <td>30</td>
                  <td>100%</td>
                </tr>
                <tr>
                  <td>Assignment 2</td>
                  <td>-5</td>
                  <td>10</td>
                  <td>-50%</td>
                </tr>
                <tr>
                  <td>Assignment 3</td>
                  <td>-25</td>
                  <td>60</td>
                  <td>-41.7%</td>
                </tr>
                <tr>
                  <th>Total</th>
                  <th>0</th>
                  <th>100</th>
                  <th>0%</th>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

  </body>
</html>

<?php } else {
    header('Location: login.php');
}
?>
