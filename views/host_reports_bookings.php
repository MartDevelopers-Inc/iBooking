<?php
/*
 * martdevelopers254@gmail.com
 *
 *
 * The MartDevelopers Inc End User License Agreement
 *
 * Copyright (c) 2021 MartDevelopers Inc
 *
 * 1. GRANT OF LICENSE
 * MartDevelopers Inc hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 * install and activate this system on two separated computers solely for your personal and non-commercial use,
 * unless you have purchased a commercial license from MartDevelopers Inc. Sharing this Software with other individuals, 
 * or allowing other individuals to view the contents of this Software, is in violation of this license.
 * You may not make the Software available on a network, or in any way provide the Software to multiple users
 * unless you have first purchased at least a multi-user license from MartDevelopers Inc.
 *
 * 2. COPYRIGHT 
 * The Software is owned by MartDevelopers Inc and protected by copyright law and international copyright treaties. 
 * You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 * 3. RESTRICTIONS ON USE
 * You may not, and you may not permit others to
 * (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 * (b) modify, distribute, or create derivative works of the Software;
 * (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 * otherwise exploit the Software.  
 *
 * 4. TERM
 * This License is effective until terminated. 
 * You may terminate it at any time by destroying the Software, together with all copies thereof.
 * This License will also terminate if you fail to comply with any term or condition of this Agreement.
 * Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 * 5. NO OTHER WARRANTIES. 
 * MartDevelopers Inc  DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 * MartDevelopers Inc SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 * EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 * SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 * ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 * INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 * SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 * THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 * HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 * 6. SEVERABILITY
 * In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 * affect the validity of the remaining portions of this license.
 *
 * 7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL MartDevelopers Inc  OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 * CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 * USE OF THE SOFTWARE, EVEN IF MartDevelopers Inc HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 * IN NO EVENT WILL MartDevelopers Inc  LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 * TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 */
session_start();
require_once('../config/config.php');
require_once('../config/codeGen.php');
require_once('../config/checklogin.php');
host_check_login();
require_once('../partials/head.php');
?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">

    <!-- screen loader -->
    <?php require_once('../partials/preloader.php'); ?>


    <!-- menu main -->
    <?php require_once('../partials/main_menu.php'); ?>
    <!-- Begin page content -->
    <div class="flex-shrink-0">
        <!-- Fixed navbar -->
        <?php require_once('../partials/header.php'); ?>
        <br><br>
        <hr>
        <!-- Hosts -->
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z" />
                                </svg>
                                <span class="vm ml-2">iBooking Bookings Reports</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="report" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Service Details</th>
                                <th>User Details</th>
                                <th>Bookings Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $host_id = $_SESSION['login_host_id'];
                            $ret = "SELECT * FROM  booking b
                            INNER JOIN host_service hs ON b.booking_host_service_id = hs.host_service_id
                            INNER JOIN service_types st ON st.service_id = hs.host_service_service_id
                            INNER JOIN host h ON h.host_id = hs.host_service_host_id
                            INNER JOIN user u ON u.user_id = b.booking_user_id
                            WHERE h.host_id = '$host_id'";
                            $stmt = $mysqli->prepare($ret);
                            $stmt->execute(); //ok
                            $res = $stmt->get_result();
                            while ($services = $res->fetch_object()) {
                            ?>
                                <tr>
                                    <td>
                                        <br>#: <?php echo $services->service_number; ?> <br>
                                        Name : <?php echo $services->service_name; ?> <br>
                                    </td>
                                    <td>
                                        Name:<?php echo $services->user_name; ?><br>
                                        Email: <?php echo $services->user_email; ?><br>
                                        Contacts: <?php echo $services->user_mobile; ?><br>
                                    </td>
                                    <td>
                                        Status: <?php echo $services->booking_status; ?><br>
                                        Date : <?php echo date('d M Y', strtotime($services->booking_date)) . ' <br> ' . date('g:ia', strtotime($services->booking_time)); ?><br>
                                        Start Date & Time: <?php echo date('d M Y', strtotime($services->booking_requested_start_date)) . ' <br> ' . date('g:ia', strtotime($services->booking_requested_start_time)); ?><br>
                                        End Date & Time: <?php echo date('d M Y', strtotime($services->booking_requested_end_date)) . '<br> ' . date('g:ia', strtotime($services->booking_requested_end_time)); ?> <br>
                                        REF#: <?php echo $services->booking_ref; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>