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
require_once('../config/checklogin.php');
admin_check_login();
/* Update Personal Details */
/* Update Login Info */
require_once('../partials/head.php');
?>

<body class="d-flex flex-column h-100 menu-overlay">
    <!-- screen loader -->
    <?php require_once('../partials/preloader.php'); ?>
    <!-- menu main -->
    <?php require_once('../partials/main_menu.php');
    $user_id = $_SESSION['login_admin_id'];
    $ret = "SELECT * FROM login l 
    INNER JOIN admin a ON a.admin_id = l.login_admin_id
    WHERE a.admin_id = '$user_id'";
    $stmt = $mysqli->prepare($ret);
    $stmt->execute(); //ok
    $res = $stmt->get_result();
    while ($user = $res->fetch_object()) {
    ?>

        <!-- Begin page content -->
        <main class="flex-shrink-0">
            <!-- Fixed navbar -->
            <header class="header">
                <div class="row">
                    <div class="col-auto px-0">
                        <a href="home" class="btn menu-btn btn-link text-dark">
                            <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                <title>ionicons-v5-a</title>
                                <polyline points='244 400 100 256 244 112' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                                <line x1='120' y1='256' x2='412' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                            </svg>
                        </a>
                    </div>
                    <div class="text-left col align-self-center">
                        <h5>Profile settings</h5>
                    </div>
                    <div class="ml-auto col-auto align-self-center">
                    </div>
                </div>
            </header>

            <!-- page content start -->


            <div class="container mt-4 text-center">
                <div class="icon icon-100 position-relative">
                    <figure class="background">
                        <img src="../public/img/profile.svg" alt="">
                    </figure>
                </div>
            </div>
            <div class="container mt-4">
                <div class="card mt-3 mb-4 border border-outline-success">
                    <div class="card-body">
                        <form method="POST">
                            <div class="row mt-">
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="text" class="form-control floating-input" value="">
                                        <label class="floating-label">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="email" class="form-control floating-input" value="amayjohnson@maxartkiller.coms ">
                                        <label class="floating-label">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group active">
                                        <div class="row">
                                            <div class="col-2 col-md-1">
                                                <input type="text" class="form-control floating-input" value="44">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control floating-input" value="000 000 0000">
                                            </div>
                                        </div>
                                        <label class="floating-label">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group active mb-0">
                                        <input type="file" class="form-control floating-input" value="Amay Johnson">
                                        <label class="floating-label">Change photo</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <h6>Email Preferences</h6>
                <div class="card mt-3 mb-4">
                    <div class="card-body px-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-color">
                                <div class="row">
                                    <div class="col-auto pr-0 align-self-center text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-dark mb-1">Email Notification</h6>
                                        <p class="text-secondary mb-0 small">Default all notification will be sent</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-color">
                                <div class="row">
                                    <div class="col-auto pr-0 align-self-center text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                                            <label class="custom-control-label" for="customSwitch4"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-dark mb-1">SMS Notification</h6>
                                        <p class="text-secondary mb-0 small">Receive SMS notification</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-color">
                                <div class="row">
                                    <div class="col-auto pr-0 align-self-center text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-dark mb-1">Profile Avaialability</h6>
                                        <p class="text-secondary mb-0 small">Everyone can see my profile in search</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-color">
                                <div class="row">
                                    <div class="col-auto pr-0 align-self-center text-right">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-dark mb-1">Sent Request</h6>
                                        <p class="text-secondary mb-0 small">Everyone can sent me a request</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <h6 class="mt-3">Change Password</h6>
                <div class="card mt-3 mb-4">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-12 col-md-6">
                                <div class="form-group floating-form-group">
                                    <input type="password" class="form-control floating-input">
                                    <label class="floating-label">Current Password</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group floating-form-group">
                                    <input type="password" class="form-control floating-input">
                                    <label class="floating-label">New Password</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group floating-form-group mb-0">
                                    <input type="password" class="form-control floating-input">
                                    <label class="floating-label">Confirm New Password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <?php } ?>

    <!-- Scripts -->
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>