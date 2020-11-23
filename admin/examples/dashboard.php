<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect($host, $user, $password, $db);
$sql = 'SELECT * FROM transactions';

mysqli_select_db($con, $db);
if ($result = mysqli_query($con, $sql)) {
  // Return the number of rows in result set
  $rowcount = mysqli_num_rows($result);
}
$sql1 = 'SELECT * FROM organ_donate';
$sql2 = 'SELECT * FROM blood_donate';

if ($result1 = mysqli_query($con, $sql1)) {
  $rowcount1 = mysqli_num_rows($result1);
}
if ($result2 = mysqli_query($con, $sql2)) {
  $rowcount2 = mysqli_num_rows($result2);
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          AD
        </a>
        <a href="#" class="simple-text logo-normal">
          Admin
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./update.html">
              <i class="now-ui-icons education_atom"></i>
              <p>Update</p>
            </a>
          </li>
          <li>
            <a href="./delete.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>DELETE</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./verification.php">
              <i class="now-ui-icons education_paper"></i>
              <p>Verification</p>
            </a>
          </li>
          <li>
                        <a href="Report/Reports.php">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Reports</p>

                        </a>
                    </li>


        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <h1 style="color: antiquewhite;">Welcome Admin</h1>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Transaction</h5>
                <h4 class="card-title">History</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php echo "<h3> The no of transactions </h3><br> <div class = 'h3'><h3 style='text-align: center;'>$rowcount</h3></div> "
                  ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Organ</h5>
                <h4 class="card-title">Donated</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php echo "<h3> The no organ donations </h3><br> <div class = 'h3'><h3 style='text-align: center;'>$rowcount1</h3></div> "
                  ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Blood</h5>
                <h4 class="card-title">Donated</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <?php echo "<h3> The no of blood donations </h3><br> <div class = 'h3'><h3 style='text-align: center;'>$rowcount2</h3></div> "
                  ?>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Just updated
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">CONTACT US REPORTS</h4>
              </div>

              <?php
              $sql4 = 'SELECT * FROM contatus LIMIT 4';
              $query4 = mysqli_query($con, $sql4);
              while ($row3 = mysqli_fetch_array($query4)) {
                echo "<div class='card-body'>";
                echo "<div class='alert alert-success'>";
                echo "<span><b>" . $row3['ID'] . "    " . $row3['uname'] . "</b>   " . $row3['msg'] . "</span>";
                echo "</div>";

                echo "</div>";
              }
              ?>

            </div>
          </div>


          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">REPORTS SOLVED</h4>
              </div>

              <form class="form-inline" method="POST" action="php/Reportdelete.php">
                
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">User no</label>
                  <input type="text" class="form-control" id="inputPassword2" placeholder=" user no " name="usrno">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Solved</button>
              </form>

            </div>
          </div>


        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">All Account List</h5>
            <h4 class="card-title"> Accounts</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <?php echo "<thead class='text-primary'>
                      <th>
                        Name
                      </th>
                      <th class='text-right'>
                        Email
                      </th>
                    </thead>"; ?>
                <?php
                $sql3 = 'SELECT * FROM loginform';
                $query3 = mysqli_query($con, $sql3);
                echo " <tbody>";
                while ($row1 = mysqli_fetch_array($query3)) {
                  echo "<tr>";
                  echo "<td>" . $row1['user'] . "</td>";
                  echo "<td class='text-right' >" . $row1['email'] . "</td>";

                  echo "</tr>";
                }
                echo "</tbody>"; ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="footer">
    <div class=" container-fluid ">
      <nav>
        <ul>
          <li>
            <a href="#">

            </a>
          </li>
          <li>
            <a href="#">
              About Us
            </a>
          </li>
          <li>
            <a href="#">
              Blog
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright" id="copyright">
        &copy; <script>
          document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="#" target="_blank">Aldrin</a>. Coded by <a href="#" target="_blank">Aldrin</a>.
      </div>
    </div>
  </footer>
  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  >
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>

</html>