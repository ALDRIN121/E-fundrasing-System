<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "project";

$con = mysqli_connect($host, $user, $password, $db);
$sql = 'SELECT       blood
FROM     blood_donate
GROUP BY blood
LIMIT    1';

mysqli_select_db($con, $db);
if ($result = mysqli_query($con, $sql)) {
    // Return the number of rows in result set
    $rowcount = mysqli_fetch_assoc($result);
}

$sql1 = 'SELECT       organ
FROM     organ_donate
GROUP BY organ
LIMIT    1';


if ($result1 = mysqli_query($con, $sql1)) {
    // Return the number of rows in result set
    $rowcount1 = mysqli_fetch_assoc($result1);
}
$sql2 = 'SELECT       reason,
COUNT(reason) AS value_occurrence 
FROM     transactions
GROUP BY reason
ORDER BY value_occurrence DESC
LIMIT    1';


if ($result2 = mysqli_query($con, $sql2)) {
    // Return the number of rows in result set
    $rowcount2 = mysqli_fetch_assoc($result2);
}
$sql3 = 'SELECT       reason,
COUNT(reason) AS value_occurrence 
FROM     request
GROUP BY reason
ORDER BY value_occurrence DESC
LIMIT    1';


if ($result3 = mysqli_query($con, $sql3)) {
    // Return the number of rows in result set
    $rowcount3 = mysqli_fetch_assoc($result3);
}

$sql4 = 'SELECT       blood,
COUNT(blood) AS value_occurrence 
FROM     blood
GROUP BY blood
ORDER BY value_occurrence DESC
LIMIT    1';


if ($result4 = mysqli_query($con, $sql4)) {
    // Return the number of rows in result set
    $rowcount4 = mysqli_fetch_assoc($result4);
}

$sql5 = 'SELECT       organ,
COUNT(organ) AS value_occurrence 
FROM     organ
GROUP BY organ
ORDER BY value_occurrence DESC
LIMIT    1';


if ($result5 = mysqli_query($con, $sql5)) {
    // Return the number of rows in result set
    $rowcount5 = mysqli_fetch_assoc($result5);
}

$sql6 = 'SELECT * FROM hospital_register';

if ($result6 = mysqli_query($con, $sql6)) {
    $rowcount6 = mysqli_num_rows($result6);
}

$sql7 = 'SELECT * FROM loginform';

if ($result7 = mysqli_query($con, $sql7)) {
    $rowcount7 = mysqli_num_rows($result7);
}


$sql8 = 'SELECT 
SUM(amount)
FROM
transactions';


if ($result8 = mysqli_query($con, $sql8)) {
    // Return the number of rows in result set
    $rowcount8 = mysqli_fetch_assoc($result8);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="../../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

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
                        <a href="../dashboard.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="../update.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Update</p>
                        </a>
                    </li>
                    <li>
                        <a href="../delete.html">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Delete</p>
                        </a>
                    </li>
                    <li>
                        <a href="../notifications.html">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="../user.html">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="../tables.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="../verification.php">
                            <i class="now-ui-icons education_paper"></i>
                            <p>Verification</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="Reports.php">
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
                <div class="card text-center bg-info">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <h3></h3><br>
                            <div class='h3'>
                                <h3 style='text-align: center;'>Money transactions Reports</h3>
                            </div>

                        </div>
                        <a href="money_report.php" class="btn btn-primary">View Report</a>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>


                <div class="card text-center bg-info">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <h3></h3><br>
                            <div class='h3'>
                                <h3 style='text-align: center;'>Blood Reports</h3>
                            </div>

                        </div>
                        <a href="blood_report.php" class="btn btn-primary">View Report</a>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>

                <div class="card text-center bg-info">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <h3></h3><br>
                            <div class='h3'>
                                <h3 style='text-align: center;'>Organ Reports</h3>
                            </div>

                        </div>
                        <a href="organ_report.php" class="btn btn-primary">View Report</a>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>


                <div class="card text-center bg-info">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <h3></h3><br>
                            <div class='h3'>
                                <h3 style='text-align: center;'>Hospital Reports</h3>
                            </div>

                        </div>
                        <a href="hospital_report.php" class="btn btn-primary">View Report</a>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>

                <div class="card text-center bg-info">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <h3></h3><br>
                            <div class='h3'>
                                <h3 style='text-align: center;'>User Reports</h3>
                            </div>

                        </div>
                        <a href="User_report.php" class="btn btn-primary">View Report</a>
                    </div>
                    <div class="card-footer text-muted">

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

    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
    <script src="../assets/demo/demo.js"></script>
</body>

</html>