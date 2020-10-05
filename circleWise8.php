<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="img/logo1.ico" type="image/ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css" />


    <title>Circle Wise Report</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 1.27rem;
        }

        html {
            font-size: 62.5%;
        }

        body {
            counter-reset: page;
            font-size: 1.27rem;
        }

        /* page number starts  */
        #pageFooter {
            page-break-before: always;
            counter-increment: page;
        }

        #pageFooter:after {
            display: block;
            text-align: right;
            content: "Page "counter(page);
        }

        #pageFooter.first.page {
            page-break-before: avoid;
        }

        /* page number ends  */

        span {
            font-size: 1.27rem;
        }

        table.dataTable {
            color: #000;
        }

        .container-fluid {
            padding-left: 0;
        }

        .jumbotron {
            /* margin-left: 15px; */
            margin: 2rem;
            margin-top: 0;
            font-size: 2rem;
        }

        .text-size {
            font-size: 1.27rem;
        }

        .sidebar {
            height: 100%;
            font-size: 1.27rem;
        }

        .lbl_head {
            width: 100%;
            margin: 0;
        }

        .lbl_head1 {
            width: 80%;
            margin: 0;
            padding-left: 2rem;
        }


        .lbl_date {
            width: 20%;
        }

        label {
            margin-bottom: 0;
        }
    </style>


    <!-- print specific div starts  -->
    <script>
        function myPrint(el) {

            var htmlToPrint = '' +
                '<style type="text/css">' +
                'body{' +
                'counter-reset: page;' +
                '}' +
                '#pageFooter {' +
                'page-break-before: always;' +
                'counter-increment: page;' +
                '}' +
                '#pageFooter:after {' +
                'display: block;' +
                'text-align: right;' +
                'content: "Page "counter(page);' +
                '}' +
                '#pageFooter.first.page {' +
                'page-break-before: avoid;' +
                '}' +
                'table {' +
                'margin-top: 2.5rem;' +
                'border-collapse: collapse;' +
                '}' +
                'table th, table td {' +
                'border:1px solid #000;' +
                '}' +
                '.buttonsToHide{' +
                'display:none;' +
                '}' +
                '.dataTables_filter{' +
                'display: none;' +
                '}' +
                'dataTables_paging{' +
                'display:none;' +
                '}' +
                '.lbl_head{' +
                'height: 80px' +
                'margin-left: 10rem;' +
                'margin-bottom: 1.5rem;' +
                'padding-left: 3rem;' +
                '}' +
                '.lbl_title{' +
                'vertical-align: 20px;' +
                'padding-right: 20px;' +
                '}' +
                '.lbl_head1{' +
                'margin-left:5rem;' +
                'padding-left:5rem' +
                '}' +
                '.lbl_date{' +
                'margin-left: 50px;' +
                'text-align: right;' +
                '}' +
                '.lbl_title{' +
                'margin-left: 1.4rem;' +
                '}' +
                '</style>';

            var restorepage = document.body.innerHTML;
            htmlToPrint += document.getElementById(el).innerHTML;
            newWin = window.open("");
            newWin.document.write(htmlToPrint);
            newWin.print();
            newWin.close();
            document.body.innerHTML = restorepage;
        }
    </script>
    <!-- print specific div ends  -->
</head>


<body id="page-top">
    <div class="container-fluid">
        <div class="row">

            <!-- sidebar starts  -->

            <div class="col-lg-2 col-md-2 col-2 ">
                <!-- Page Wrapper starts-->
                <div id="wrapper" class="sidebar">

                    <?php include 'slider.php'; ?>

                    <!-- Content Wrapper starts -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content starts -->
                        <div id="content">
                            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- Main Content ends  -->

                    </div>
                    <!-- Content Wrapper ends  -->

                </div>
                <!-- Page Wrapper ends  -->
            </div>
            <!-- sidebar ends  -->



            <!-- content starts  -->
            <div class="col-lg-10 col-md-10 col-10">
                <!-- select zone starts -->
                <div class="jumbotron">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-9">
                                <form action="">
                                    <div class="form-row">

                                        <!-- bill cycle select starts  -->
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <?php
                                            include 'Connection.php';

                                            $sql = "select BILL_CYCLE_CODE from MIS_BILL_CYCLE_MASTER order by BILL_CYCLE_CODE desc";
                                            $parseresults = ociparse($conn, $sql);
                                            ociexecute($parseresults);

                                            echo '<select name="P_BILL_CYCLE_CODE" id="bill_cycle" class="custom-select text-size ">';
                                            echo '<option value="">Select Bill Cycle</option>';
                                            while ($row = oci_fetch_assoc($parseresults)) {
                                                echo '<option value=' . $row['BILL_CYCLE_CODE'] . '>' . $row['BILL_CYCLE_CODE'] . '</option>';
                                            }
                                            echo '</select>';
                                            oci_free_statement($parseresults);
                                            oci_close($conn);
                                            ?>
                                        </div>
                                        <!-- bill cycle select ends  -->

                                        <!-- zone code select starts  -->
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <?PHP
                                            include 'Connection.php';
                                            error_reporting(0);
                                            set_time_limit(1000);

                                            $curs = oci_new_cursor($conn);

                                            $stid = oci_parse($conn, "begin DPG_MINISTRY_REPORT.DPD_ZONE_LIST(:cur_data); end;");


                                            oci_bind_by_name($stid, ":cur_data", $curs, -1, OCI_B_CURSOR);

                                            oci_execute($stid);
                                            oci_execute($curs);

                                            echo '<select name="P_ZONE_CODE" class="custom-select text-size" id="zone_code">';
                                            echo '<option value="%" selected>Select Zone Code</option>';
                                            while (($row = oci_fetch_array($curs, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {

                                                echo '<option value="' . $row['ZONE_CODE'] . '">' . $row['ZONE_NAME'] . '</option>';
                                                $zone_code_result[] = $row['ZONE_CODE'];
                                            }
                                            echo '</select>';
                                            $zone_code = $zone_code_result[0];
                                            oci_free_statement($stid);
                                            oci_free_statement($curs);
                                            oci_close($conn);
                                            ?>
                                        </div>
                                        <!-- zone code select ends  -->

                                        <!-- circle code select starts  -->
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <select name="P_CIRCLE_CODE" id="circle_code" class="custom-select text-size">
                                                <option value="%" selected>Select Circle</option>
                                            </select>
                                        </div>
                                        <!-- circle code select ends  -->

                                        <!-- submit button starts  -->
                                        <div class="col-lg-3 col-md-3 col-3">
                                            <input type="submit" class="btn btn-primary text-size" id="submit" name="submit" value="Submit">
                                        </div>
                                        <!-- submit button ends  -->

                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-md-3 col-3">
                                <button class="btn btn-secondary float-right text-size" id="printBtn" onclick="myPrint('printDiv')">Print</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- select zone ends  -->



                <!-- show output starts  -->
                <div id="printDiv">
                    <div class="container-fluid">

                        <?PHP
                        function getMYEAR($myer)
                        {
                            $myYear = "";
                            include 'Connection.php';
                            $sql = "SELECT TO_CHAR( to_date(" . $myer . ",'YYYYmm'), 'FMMonth YYYY' ) as MYEAR FROM dual";
                            $parseresults = ociparse($conn, $sql);
                            ociexecute($parseresults);
                            while ($row = oci_fetch_assoc($parseresults)) {
                                $myYear = $row['MYEAR'];
                            }
                            oci_free_statement($parseresults);
                            oci_close($conn);
                            return $myYear;
                        }
                        include 'Connection.php';
                        error_reporting(0);
                        set_time_limit(1000);

                        if (isset($_GET['submit'])) {

                            // grab value from submit data from url starts
                            $P_BILL_CYCLE_CODE = $_GET['P_BILL_CYCLE_CODE'];
                            $P_ZONE_CODE = $_GET['P_ZONE_CODE'];
                            $P_CIRCLE_CODE = $_GET['P_CIRCLE_CODE'];
                            // grab value from submit data from url ends


                            // heading starts

                            echo "<div class='lbl_head' style=' height:100px;display:flex; align-items: center;'>
										<div class='lbl_head1' style=' height:100px;text-align:center;'>
											<img src='./img/Logo.png' alt='BPDB Logo' height='60px' width='60px'>
											<strong class='lbl_title' style='font-size: 1.7rem; color:#000;margin-right:1.5rem;'>Bangladesh Power Development Board</strong><br>
											<label style='font-weight:normal;font-size: 1.4rem; color:#000;'>Ministry Wise Report</label><br>
											<label style='font-weight:normal;font-size: 1.4rem; color:#000;'>(Circle Wise)</label><br>
											<label style='font-weight:normal;font-size: 1.4rem; color:#000;'>For The Month : " . getMYEAR($P_BILL_CYCLE_CODE) . "</label>
										</div>
										<div class='lbl_date' style=' height:100px; line-height:65px; font-weight:normal;font-size: 1.4rem; color:#000; text-align:right;'>Date: " . date('Y/m/d') . "</div>
									</div><br>";


                            // 	// heading ends 

                            // execute query starts
                            $curs = oci_new_cursor($conn);

                            $stid = oci_parse($conn, "begin DPG_MINISTRY_REPORT.DPD_CIRCLE_WISE(:cur_data,:P_BILL_CYCLE_CODE,:P_ZONE_CODE,:P_CIRCLE_CODE); end;");


                            oci_bind_by_name($stid, ":cur_data", $curs, -1, OCI_B_CURSOR);
                            oci_bind_by_name($stid, ":P_BILL_CYCLE_CODE", $P_BILL_CYCLE_CODE, -1, SQLT_CHR);
							oci_bind_by_name($stid, ":P_ZONE_CODE", $P_ZONE_CODE, -1, SQLT_CHR);
							oci_bind_by_name($stid, ":P_CIRCLE_CODE", $P_CIRCLE_CODE, -1, SQLT_CHR);

                            oci_execute($stid);
                            oci_execute($curs);
                            // execute query ends

                            // show data in table starts
                            echo '<div class="table-responsive-md text_black">';
                            echo "<table class='table table-striped cell-border table_display' id='zoneWise' width='80%'>
                <thead>
                        <tr>   
                        <th>SL No.</th>
                        <th>Zone Name</th>
                        <th>Circle Code</th>
                        <th>Circle Name</th>
                        <th>Ministry Code</th>
                        <th>Ministry</th>
                        <th>Energy Arr</th>
                        </tr>
                    </thead>
                    <tbody>";

                            // store fetch data in variable array starts 
                            while (($row = oci_fetch_array($curs, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                                $output[] = $row;
                            }
                            // store fetch data in variable array ends

                            // $i=0;
                            $j = 1;
							$ZONE_CODE = 0;
                            $CIRCLE_CODE = 0;

                            // declare variable for circle total 
                            $sum_energy_arr = 0;

                            // declare variable for last circle total
                            $last_circle_sum_energy_arr = 0;

                            // declare variable for last zone total 
                            $last_zone_sum_energy_arr = 0;

                            // declare variable for zone total
                            $total_zone_energy_arr = $total_zone_currnet_prin = $total_zone_vat_arr = $total_zone_current_vat = $total_zone_surcharge_arr = $total_zone_current_lps = 0;
                            $total_zone_energy_arr_of_circle = 0;
                            // declare variable for grand total 
                            $total_grand_energy_arr = $total_grand_currnet_prin = $total_grand_vat_arr = $total_grand_current_vat = $total_grand_surcharge_arr = $total_grand_current_lps = 0;
                            
                            
                            $sum = 0;

                            // show result in table starts

                            for($k=0; $k < count($output); $k++){

                                // condition for zone_code and circle code 
                                if( ($ZONE_CODE != $output[$k]['ZONE_CODE'] && $CIRCLE_CODE != $output[$k]['CIRCLE_CODE']) ||
                                ($ZONE_CODE == $output[$k]['ZONE_CODE'] && $CIRCLE_CODE != $output[$k]['CIRCLE_CODE']) ){


                                    // individual circle total starts
                                    if($k!= '0' && $CIRCLE_CODE != $output[$k]['CIRCLE_CODE']){
                                        echo "<tr>";
                                        echo "<td style='text-align: center;'>" . $j . "</td>";
                                        echo "<td></td>";        
                                        echo "<td></td>";        
                                        echo "<td></td>";        
                                        echo "<td></td>";
                                        echo "<td><b>Circle Total</b></td>";
                                        echo "<td style='text-align: right;'><b>" . number_format((float)$sum_energy_arr, 2, '.', ',') . "</b></td>"; 
                                        echo "</tr>";
                                        $total_zone_energy_arr += $sum_energy_arr;
                                        $total_zone_energy_arr_of_circle += $total_zone_energy_arr;
                                        echo $total_zone_energy_arr_of_circle . "<br>";
                                         
                                        $sum_energy_arr = 0;
                                    } 
                                    // individual circle total ends  

                                    // individual zone total starts
                                    if($k!= '0' && $ZONE_CODE != $output[$k]['ZONE_CODE']){
                                        echo "<tr>";
                                        echo "<td style='text-align: center;'>" . $j . "</td>";
                                        echo "<td></td>";        
                                        echo "<td></td>";        
                                        echo "<td></td>";        
                                        echo "<td></td>";
                                        echo "<td><b>Zone Total</b></td>";
                                        echo "<td style='text-align: right;'><b>" . number_format((float)$total_zone_energy_arr, 2, '.', ',') . "</b></td>"; 
                                        echo "</tr>";
                                        // $last_zone_sum_energy_arr = $total_zone_energy_arr; 
                                        // echo "last_zone_sum_energy_arr ".  $last_zone_sum_energy_arr . "<br>";
                                        $total_zone_energy_arr = 0;
                                    }
                                    
                                    // individual zone total ends
                                    
                                    // show particular data for first time starts

                                    echo "<tr>";
                                    echo "<td style='text-align: center;'>" . $j . "</td>";
                                    echo "<td><b>" . $output[$k]['ZONE_NAME'] . "</b></td>";

                                    echo "<td style='text-align: center;'>" . $output[$k]['CIRCLE_CODE'] . "</td>";
                                    echo "<td>" . $output[$k]['CIRCLE_NAME'] . "</td>";

                                    echo "<td style='text-align: center;'>" . $output[$k]['MINISTRY_CODE'] . "</td>";
                                    echo "<td>" . $output[$k]['MINISTRY'] . "</td>";

                                    echo "<td style='text-align: right;'>" . number_format((float)$output[$k]['ENERGY_ARR'], 2, '.', ',') . "</td>";
                                    $sum_energy_arr += $output[$k]['ENERGY_ARR'];

                                    echo "</tr>";

                                    $ZONE_CODE = $output[$k]['ZONE_CODE'];
                                    $CIRCLE_CODE = $output[$k]['CIRCLE_CODE'];
                                    $j++;

                                    // show particular data for first time ends

                                }
                                else{
                                    // show particular rest data starts
                                    echo "<tr>";
                                    echo "<td style='text-align: center;'>" . $j . "</td>";
                                    echo "<td></td>";
                                    echo "<td></td>";
                                    echo "<td></td>";

                                    // echo "<td style='text-align: center;'>" . $output[$k]['CIRCLE_CODE'] . "</td>";
                                    // echo "<td>" . $output[$k]['CIRCLE_NAME'] . "</td>";

                                    echo "<td style='text-align: center;'>" . $output[$k]['MINISTRY_CODE'] . "</td>";
                                    echo "<td>" . $output[$k]['MINISTRY'] . "</td>";

                                    echo "<td style='text-align: right;'>" . number_format((float)$output[$k]['ENERGY_ARR'], 2, '.', ',') . "</td>";
                                    $sum_energy_arr += $output[$k]['ENERGY_ARR'];

                                    echo "</tr>";
                                    $j++;
                                    $last_circle_sum_energy_arr = $sum_energy_arr;
                                    // $last_zone_sum_energy_arr += $last_circle_sum_energy_arr;
                                    // show particular rest data ends

                                }
                            }
                            
                            // show result in table ends

                            // last individual circle total starts
                            echo "<tr>";
                            echo "<td style='text-align: center;'>" . $j . "</td>"; // $j for displaying SL No.
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td><b>Circle Total</b></td>";
                            echo "<td style='text-align: right;'><b>" . number_format((float)$last_circle_sum_energy_arr, 2, '.', ',') . "</b></td>"; 
                            echo "</tr>";

                            // add last circle total with privious sum
                            $total_zone_energy_arr_of_circle += $last_circle_sum_energy_arr;

                            echo $total_zone_energy_arr_of_circle . "<br>";

                            // last individual circle total ends

                            // last individual zone total starts

                            // echo "<tr>";
                            // echo "<td style='text-align: center;'>" . $j . "</td>"; // $j for displaying SL No.
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td><b>Zone Total</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$last_zone_sum_energy_arr, 2, '.', ',') . "</b></td>"; 
                            // echo "</tr>";

                            // last individual zone total ends

                            // add last total with privious grand total 
                            $total_energy_arr += $sum_energy_arr;
                            $total_currnet_prin += $sum_currnet_prin;
                            $total_vat_arr += $sum_vat_arr;
                            $total_current_vat += $sum_current_vat;
                            $total_surcharge_arr += $sum_surcharge_arr;
                            $total_current_lps += $sum_current_lps;
                            // add last total with privious grand total ends

                            // last indivisual total starts


                            // echo "<tr>";
                            // echo "<td style='text-align: center;'>" . $j . "</td>"; // $j for displaying SL No.
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td></td>";
                            // echo "<td><b>Zone Total</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_energy_arr, 2, '.', ',') . "</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_currnet_prin, 2, '.', ',') . "</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_vat_arr, 2, '.', ',') . "</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_current_vat, 2, '.', ',') . "</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_surcharge_arr, 2, '.', ',') . "</b></td>";
                            // echo "<td style='text-align: right;'><b>" . number_format((float)$sum_current_lps, 2, '.', ',') . "</b></td>";
                            // $zone_name[] = $output[$k - 1]['ZONE_NAME'];
                            // $zone_total[] = $sum;
                            // echo "</tr>";


                            // last indivisual total ends


                            // show zone total starts 
                            if($P_CIRCLE_CODE == '%'){
                                echo "<tr>";
                                echo "<td style='text-align: center;'>" . ++$j . "</td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td><b>Zone Total</b></td>";
                                echo "<td style='text-align: right;'><b>" . number_format((float)$total_zone_energy_arr_of_circle, 2, '.', ',') . "</b></td>";
                                echo "</tr>";
                                
                            }
                            // show zone total ends 


                            // show grand total starts

                            // if ($P_ZONE_CODE == '%') {

                            //     echo "<tr>";
                            //     echo "<td style='text-align: center;'>" . ++$j . "</td>";
                            //     echo "<td></td>";
                            //     echo "<td></td>";
                            //     echo "<td></td>";
                            //     echo "<td></td>";
                            //     echo "<td><b>Grand Total</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_energy_arr, 2, '.', ',') . "</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_currnet_prin, 2, '.', ',') . "</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_vat_arr, 2, '.', ',') . "</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_current_vat, 2, '.', ',') . "</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_surcharge_arr, 2, '.', ',') . "</b></td>";
                            //     echo "<td style='text-align: right;'><b>" . number_format((float)$total_current_lps, 2, '.', ',') . "</b></td>";
                            //     echo "</tr>";
                            // }
                            // echo "</tr>";

                            // show grand total ends

                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';

                            oci_free_statement($stid);
                            oci_free_statement($curs);
                            oci_close($conn);
                        }

                        ?>




                    </div>
                </div>

                <!-- show output ends  -->


                <!-- show page number starts -->


                <!-- show page number ends  -->


            </div>
            <!-- content ends  -->
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


        <!-- show data in datatable starts  -->
        <script>
            $(document).ready(function() {
                $('#zoneWise').DataTable({
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
                    }],
                    dom: 'Bfrtip',
                    buttons: [{
                        extend: "excel",
                        className: "buttonsToHide"
                    }, ],
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    "paging": false,
                    "info": false
                });

                $('#zone_code').on('change', function() {
                    var zoneID = $(this).val();
                    if (zoneID) {
                        $.ajax({
                            type: 'POST',
                            url: 'ajaxDataCascading.php',
                            data: 'zone_id=' + zoneID,
                            success: function(html) {

                                $('#circle_code').html(html);

                            }
                        });
                    } else {
                        $('#circle_code').html('<option value="">Select zone first</option>');

                    }
                });

            });
        </script>
        <!-- show data in datatable ends  -->
</body>

</html>
