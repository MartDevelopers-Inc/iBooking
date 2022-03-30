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
user_check_login();
/* Add Booking */
if (isset($_POST['add_booking'])) {
    /* Booking Attributes */
    $booking_id = $sys_gen_id;
    $booking_user_id  = $_SESSION['login_user_id'];
    $booking_ref  = $a . $b;
    $booking_description  = $_POST['booking_description'];
    $booking_host_service_id = $_GET['service'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $booking_requested_start_date = $_POST['booking_requested_start_date'];
    $booking_requested_start_time = $_POST['booking_requested_start_time'];
    $booking_requested_end_date = $_POST['booking_requested_end_date'];
    $booking_requested_end_time =  $_POST['booking_requested_end_time'];
    $booking_status = $_POST['booking_status'];

    /* Persist */
    $sql = "INSERT INTO  booking(booking_id, booking_user_id, booking_ref, booking_description, booking_host_service_id, 
    booking_date,  booking_time, booking_requested_start_date, booking_requested_start_time, booking_requested_end_date,
    booking_requested_end_time, booking_status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param(
        'ssssssssssss',
        $booking_id,
        $booking_user_id,
        $booking_ref,
        $booking_description,
        $booking_host_service_id,
        $booking_date,
        $booking_time,
        $booking_requested_start_date,
        $booking_requested_start_time,
        $booking_requested_end_date,
        $booking_requested_end_time,
        $booking_status
    );
    $prepare->execute();
    if ($prepare) {
        $_SESSION['success'] = "Booking Added";
        header('Location: user_bookings');
        exit;
    } else {
        $err = "Failed!, Please Try Again";
    }
}
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
        <?php require_once('../partials/header.php');
        ?>
        <br><br>
        <hr>
        <!-- Hosts -->
        <div class="container mt-4">
            <div class="card border border-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                <span class="text-center vm ml-2">Add Booking</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row px-2">
                        <form method="POST">
                            <div class="row mt-">
                                <div class="col-6 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="date" name="booking_date" class="form-control floating-input">
                                        <label class="floating-label">Date</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="time" name="booking_time" class="form-control floating-input">
                                        <label class="floating-label">Time</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="date" name="booking_requested_start_date" class="form-control floating-input">
                                        <label class="floating-label">Requested Start Date</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="time" name="booking_requested_start_time" class="form-control floating-input">
                                        <label class="floating-label">Requested Start Time</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="date" name="booking_requested_end_date" class="form-control floating-input">
                                        <label class="floating-label">Requested End Date</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="time" name="booking_requested_end_time" class="form-control floating-input">
                                        <label class="floating-label">Requested End Time</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <select type="text" name="booking_status" class="form-control floating-input">
                                            <option>Pending</option>
                                        </select>
                                        <label class="floating-label">Booking Status</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <textarea type="text" rows="4" name="booking_description" class="form-control floating-input"></textarea>
                                        <label class="floating-label">Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-right">
                                <input type="submit" name="add_booking" value="Submit" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>