<?php
// error_reporting(0);
session_start();
if (!isset($_SESSION['USERNAME'])) {
  header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/ico" href="img/logo1.ico" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- font-awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />


  <style>
    body {
      /* overflow-x: hidden; */
    }

    /* sidebar style starts  */

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .sidenav a {
      text-decoration: none;
      font-size: 14px;
      color: #fff;
      display: block;
      padding: 20px 0 20px 20px;
    }

    .sidenav a:hover {
      color: rgba(255, 255, 255, 0.7);
    }

    /* sidebar style ends  */
  </style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'slider.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <div class="row">
            



            <!-- Pie Chart 2 -->
            
              <div class="card shadow mb-4" style="width: 100%;">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">BUILDING TYPE</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body" style="height: 100vh;">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart" style="height: 100%;"></canvas>
                  </div>
                </div>
              </div>
            
              



    


          <!-- End of Main Content -->
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- footer starts -->
  <div class="row footer center" style="background-color: #34495e; color: #fff; height: 80px;">
    <div class="title">
      <strong>Powered By Isaam Enterprise Limited</strong>
    </div>
  </div>
  <!-- footer ends -->

  <!-- Scroll to Top Button-->
  <!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> -->

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <?php include 'Connection.php';


  // bill cycle starts

  $BILL_CYCLE = "[";
  $sql = "select BILL_CYCLE_CODE from MIS_BILL_CYCLE_MASTER order by BILL_CYCLE_CODE desc"; 
  $parseresults = ociparse($conn, $sql);
  ociexecute($parseresults);
  
//   while ($row = oci_fetch_assoc($parseresults)) {
//     $BILL_CYCLE .= '"' . $row['BILL_CYCLE_CODE'] . '",';
//   }
  
//   $BILL_CYCLE = substr($BILL_CYCLE, 0, -1);
//   $BILL_CYCLE = $BILL_CYCLE . "]";

//   echo $BILL_CYCLE;

  // bill cycle ends


//   ministry dashboard starts
$MINISTRY_NAME = "[";
$MINISTRY_ARR = "[";
// $sql = "select BILL_CYCLE_CODE from MIS_BILL_CYCLE_MASTER order by BILL_CYCLE_CODE desc";
// $parseresults = ociparse($conn, $sql);
// ociexecute($parseresults);



while ($row = oci_fetch_assoc($parseresults)) {
    $output[]=$row;
}

$P_BILL_CYCLE_CODE = $output[0]['BILL_CYCLE_CODE']; 

echo $P_BILL_CYCLE_CODE;



// execute query starts
$curs = oci_new_cursor($conn);
$stid = oci_parse($conn, "begin DPG_MINISTRY_REPORT.DPD_MINISTRY_WISE(:cur_data,:P_BILL_CYCLE_CODE); end;");
oci_bind_by_name($stid, ":cur_data", $curs, -1, OCI_B_CURSOR);
oci_bind_by_name($stid, ":P_BILL_CYCLE_CODE", $P_BILL_CYCLE_CODE, -1, SQLT_CHR);
oci_execute($stid);
oci_execute($curs);


// execute query ends

while (($row = oci_fetch_array($curs, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {

    $MINISTRY_NAME .= '"' . $row['MINISTRY'] . '",';
    $MINISTRY_ARR .= '"' . $row['TOTAL_ARR'] . '",';
    // $BILL_CYCLE .= '"' . $row['BILL_CYCLE_CODE'] . '",';
    // $output[]=$row;
}

$MINISTRY_NAME = substr($MINISTRY_NAME, 0, -1);
$MINISTRY_NAME = $MINISTRY_NAME . "]";

$MINISTRY_ARR = substr($MINISTRY_ARR, 0, -1);
$MINISTRY_ARR = $MINISTRY_ARR . "]";


echo $MINISTRY_NAME;
echo $MINISTRY_ARR;


//   ministry dashboard ends


  
  oci_free_statement($parseresults);
  oci_free_statement($stid);
  oci_free_statement($curs);
  oci_close($conn); 
  ?>
  <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';


    // Pie Chart 1
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        
        datasets: [{
          
          data: <?php echo "$MINISTRY_ARR" ?>,
          backgroundColor: ['#4e73df', '#1cc88a', '#8e44ad', '#2c3e50', '#e74c3c', '#2980b9', '#1abc9c', '#bdc3c7',
          '#e67e22', '#34495e', '#BDC581', '#FC427B', '#55E6C1', '#3B3B98', '#1B9CFC', '#303952', '#f8a5c2', '#e15f41',
          '#546de5', '#ffda79', '#aaa69d', '#ff793f', '#aaa69d', '#218c74', '#ccae62', '#227093', '#2d3436', '#81ecec',
          '#fdcb6e', '#6c5ce7', '#b33939', '#7A942E', '#A17917', '#F9690E', '#ABB7B7', '#F62459', '#C3272B', '#875F9A', '#4D8FAC',
          '#6B9362', '#eb4034', '#77eb34', '#343deb'],
          hoverBackgroundColor: ['#2e59d9', '#17a673'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: true
        },
        cutoutPercentage: 50,
      },
    });
    

    

    
  </script>

</body>

</html>
