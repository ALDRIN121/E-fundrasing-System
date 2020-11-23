<?php
$host ="localhost";
$user = "root";
$password ="";
$db ="project";

$con = mysqli_connect($host,$user,$password,$db);
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
          ADMIN
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
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
              <p>Delete</p>
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
          <li class="active ">
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
            <a class="navbar-brand" href="#pablo">Table List</a>
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Transactions Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo "<thead class=' text-primary'>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Amount
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        OrderID
                      </th>
                      <th class='text-right'>
                        Date
                      </th>
                    </thead>"; ?>
                    <?php
                    $sql = 'SELECT * FROM transactions';
                    $query3 = mysqli_query($con, $sql);
                    echo"<tbody>";
                    while ($row = mysqli_fetch_array($query3))

                   {
                     echo" <tr>";
                      echo "  <td>"
                          .$row['username'].
                       " </td>";
                       echo "  <td>"
                       .$row['email'].
                    " </td>";
                    echo "  <td>"
                    .$row['amount'].
                 " </td>";
                 echo "  <td>"
                          .$row['statuss'].
                       " </td>";
                       echo "  <td>"
                          .$row['orderid'].
                       " </td>";
                       echo "  <td class='text-right'>"
                          .$row['datee'].
                       " </td>";
                    echo " </tr>";
                   }
                  echo " </tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Hospitial Register Table</h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo"<thead class=' text-primary'>
                      <th>
                        Hospitial Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th class='text-right'>
                        Password
                      </th>
                    </thead>";?>
                    <?php
                    $sql1 = 'SELECT * FROM hospital_register';
                    $query1 = mysqli_query($con, $sql1);
                    echo"<tbody>";
                    while ($row1 = mysqli_fetch_array($query1))

                   {
                      echo"<tr>";
                       echo" <td>"
                          .$row1['hname'].
                        "</td>";
                        echo" <td>"
                          .$row1['hemail'].
                        "</td>";
                        
                       echo "<td class='text-right'>
                          encrypted
                        </td>";
                      echo"</tr>";
                   }
                      
                    echo"</tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Blood Request Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo "<thead class=' text-primary'>
                      <th>
                        Name
                      </th>
                      <th>
                        Blood Type
                      </th>
                      <th>
                        Email
                      </th>
                    </thead>"; ?>
                    <?php
                    $sql2 = 'SELECT * FROM blood';
                    $query2 = mysqli_query($con, $sql2);
                    echo"<tbody>";
                    while ($row2 = mysqli_fetch_array($query2))

                   {
                     echo" <tr>";
                      echo "  <td>"
                          .$row2['uname'].
                       " </td>";
                       echo "  <td>"
                       .$row2['blood'].
                    " </td>";
                   
                       echo "  <td>"
                          .$row2['email'].
                       " </td>";
                    echo " </tr>";
                   }
                  echo " </tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Organ Request Table</h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo"<thead class=' text-primary'>
                      <th>
                         Name
                      </th>
                      <th>
                        Organ
                      </th>
                      <th class='text-right'>
                        Email
                      </th>
                    </thead>";?>
                    <?php
                    $sql4 = 'SELECT * FROM organ';
                    $query4 = mysqli_query($con, $sql4);
                    echo"<tbody>";
                    while ($row4 = mysqli_fetch_array($query4))

                   {
                      echo"<tr>";
                       echo" <td>"
                          .$row4['uname'].
                        "</td>";
                        echo" <td>"
                          .$row4['organ'].
                        "</td>";
                        
                       echo "<td class='text-right'>"
                       .$row4['email'].
                       " </td>";
                      echo"</tr>";
                   }
                      
                    echo"</tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Money Request Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo "<thead class=' text-primary'>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Reason
                      </th>
                      <th class='text-right'>
                        Amount
                      </th>
                    </thead>"; ?>
                    <?php
                    $sql5 = 'SELECT * FROM request';
                    $query5 = mysqli_query($con, $sql5);
                    echo"<tbody>";
                    while ($row5 = mysqli_fetch_array($query5))

                   {
                     echo" <tr>";
                      echo "  <td>"
                          .$row5['uname'].
                       " </td>";
                       echo "  <td>"
                       .$row5['email'].
                    " </td>";
                   
                       echo "  <td>"
                          .$row5['reason'].
                       " </td>";
                       echo "  <td class='text-right'>"
                          .$row5['amount'].
                       " </td>";
                    echo " </tr>";
                   }
                  echo " </tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Organ Donated Table</h4>
                <p class="category"></p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo"<thead class=' text-primary'>
                      <th>
                         From(donor)
                      </th>
                      <th>
                        To(requester)
                      </th>
                      <th>
                         Fromemail
                      </th>
                      <th>
                         Toemail
                      </th>
                      <th class='text-right'>
                        Organ
                      </th>
                    </thead>";?>
                    <?php
                    $sql6 = 'SELECT * FROM organ_donate';
                    $query6 = mysqli_query($con, $sql6);
                    echo"<tbody>";
                    while ($row6 = mysqli_fetch_array($query6))

                   {
                      echo"<tr>";
                       echo" <td>"
                          .$row6['fromname'].
                        "</td>";
                        echo" <td>"
                          .$row6['toname'].
                        "</td>";
                        echo" <td>"
                          .$row6['fromemail'].
                        "</td>";
                        echo" <td>"
                          .$row6['toemail'].
                        "</td>";
                       echo "<td class='text-right'>"
                       .$row6['organ'].
                       " </td>";
                      echo"</tr>";
                   }
                      
                    echo"</tbody>";
                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Blood Donated Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                   <?php  echo "<thead class=' text-primary'>
                      <th>
                        From(donor)
                      </th>
                      <th>
                        To(requester)
                      </th>
                      <th>
                        Fromemail
                      </th>
                      <th>
                        Toemail
                      </th>
                      <th class='text-right'>
                        Blood
                      </th>
                    </thead>"; ?>
                    <?php
                    $sql6 = 'SELECT * FROM blood_donate';
                    $query6 = mysqli_query($con, $sql6);
                    echo"<tbody>";
                    while ($row6 = mysqli_fetch_array($query6))

                   {
                     echo" <tr>";
                      echo "  <td>"
                          .$row6['fromname'].
                       " </td>";
                       echo "  <td>"
                       .$row6['toname'].
                    " </td>";
                   
                       echo "  <td>"
                          .$row6['fromemail'].
                       " </td>";
                       echo "  <td>"
                          .$row6['toemail'].
                       " </td>";
                       echo "  <td class='text-right'>"
                          .$row6['blood'].
                       " </td>";
                    echo " </tr>";
                   }
                  echo " </tbody>";
                    ?>
                  </table>
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
 
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
</body>

</html>