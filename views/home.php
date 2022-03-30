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
require_once('../partials/analytics.php');
require_once('../partials/head.php');
?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
    <!-- screen loader -->

    <!-- screen loader -->
    <?php require_once('../partials/preloader.php'); ?>


    <!-- menu main -->
    <?php require_once('../partials/main_menu.php'); ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <!-- Fixed navbar -->
        <?php require_once('../partials/header.php'); ?>
        <!-- page content start -->

        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h6 class="text-dark">
                        Administrator Dashboard
                    </h6>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <br>
        </div>
        <div class="container position-relative">
            <div class="card">
                <div class="card-body">
                    <p class="small text-secondary mb-2">Revenue</p>
                    <div class="row">
                        <div class="col-auto">
                            <h5>Ksh <?php echo number_format($payments, 2); ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row mb-3">
            </div>
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <h6 class="text-secondary mb-0">Bookings</h6>
                    <h2 class="text-dark mb-4"><?php echo $bookings; ?></h2>
                    <div class="row mt-3">
                        <div class="col-12 col-md-11 mx-auto mw-300">
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <h6 class="text-secondary mb-0">Hosts</h6>
                                            <h4 class="text-dark"><?php echo $hosts; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <h6 class="text-secondary mb-0">Users</h6>
                                            <h4 class="text-dark"><?php echo $users; ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <h6 class="text-secondary mb-0">Services</h6>
                                            <h4 class="text-dark"><?php echo $service; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6"></div>
            </div>
        </div>

        <div class="container">
            <h6 class="text-dark">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm mr-2" viewBox="0 0 512 512">
                    <title>ionicons-v5-i</title>
                    <path d="M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                    <path d="M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                    <polyline points="400 179 400 64 352 64 352 133" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                </svg>
                Top Services
            </h6>
        </div>

        <div class="container-fluid px-0 mt-3 mb-4">
            <!-- Swiper -->
            <div class="swiper-container swiper-products">
                <div class="swiper-wrapper">
                    <?php
                    $ret = "SELECT * FROM host_service hs
                    INNER JOIN service_types st ON st.service_id = hs.host_service_service_id
                    INNER JOIN host h ON h.host_id = hs.host_service_host_id";
                    $stmt = $mysqli->prepare($ret);
                    $stmt->execute(); //ok
                    $res = $stmt->get_result();
                    while ($services = $res->fetch_object()) {
                    ?>
                        <div class="swiper-slide">
                            <div class="card product-card-large">
                                <div class="card-body p-0">
                                    <div class="product-image-large">
                                        <div class="background">
                                            <?php
                                            /* Load Images */
                                            $sql = "SELECT * FROM host_service_files 
                                            WHERE file_host_service_id = '$services->host_service_id'
                                            GROUP BY file_host_service_id ";
                                            $stmt = $mysqli->prepare($sql);
                                            $stmt->execute(); //ok
                                            $imag = $stmt->get_result();
                                            while ($services_images = $imag->fetch_object()) {
                                            ?>
                                                <img src="../public/services/<?php echo $services_images->file_data; ?> " alt="">
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <p><?php echo $services->service_number; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary">
                                                <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16" viewBox='0 0 512 512'>
                                                    <title>ionicons-v5-l</title>
                                                    <rect x='32' y='80' width='448' height='256' rx='16' ry='16' transform='translate(512 416) rotate(180)' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                                    <line x1='64' y1='384' x2='448' y2='384' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <line x1='96' y1='432' x2='416' y2='432' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <circle cx='256' cy='208' r='80' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <path d='M480,160a80,80,0,0,1-80-80' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <path d='M32,160a80,80,0,0,0,80-80' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <path d='M480,256a80,80,0,0,0-80,80' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                    <path d='M32,256a80,80,0,0,1,80,80' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                                </svg>
                                            </p>

                                        </div>
                                    </div>
                                    <a href="services_host">
                                        <div class="row">
                                            <div class="col">
                                                <p class="small vm">
                                                    <span class=" text-secondary">Host: <?php echo $services->host_name; ?></span>
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <p class="small text-secondary">
                                                    <?php echo $services->host_service_cost_description; ?> <br>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-footer border-top border-color">
                                    <div class="row">
                                        <div class="col-auto ml-auto">
                                            <p class="small text-secondary">
                                                <span class=" text-secondary"> <?php echo $services->host_service_location; ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </main>

    <!-- Required jquery and libraries -->
    <?php require_once('../partials/scripts.php'); ?>
</body>


</html>