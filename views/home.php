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
require_once('../partials/head.php');
?>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">

    <!-- screen loader -->
    <?php require_once('../partials/preloader.php'); ?>


    <!-- menu main -->
    <?php require_once('../partials/main_menu.php'); ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <!-- Fixed navbar -->
        <?php require_once('../partials/header.php'); ?>


        <div class="container mt-4">
            <div class="card border border-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1">
                                <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                    <title>ionicons-v5-i</title>
                                    <path d='M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <path d='M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='400 179 400 64 352 64 352 133' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                </svg>
                                <span class="vm ml-2">Available Services Types</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <?php
                        /* Load Posted Services */
                        $ret = "SELECT * FROM service_types
                        ORDER BY service_name ASC";
                        $stmt = $mysqli->prepare($ret);
                        $stmt->execute(); //ok
                        $res = $stmt->get_result();
                        while ($services = $res->fetch_object()) {
                        ?>
                            <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                                <input type="radio" name="itemtype" class="checkbox-boxed" id="room">
                                <label class="checkbox-lable" for="room">
                                    <span class="image-boxed">
                                        <span class="h-180 background">
                                            <img src="../public/img/services.png" alt="">
                                        </span>
                                    </span>
                                    <span class="p"><?php echo $services->service_number . ' <br>' . $services->service_name; ?> ; ?></span>
                                </label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 mt-4">
            <!-- Swiper -->
            <div class="swiper-container swiper-products">
                <?php
                /* Load Posted Services */
                $ret = "SELECT * FROM host_service hs
                INNER JOIN host h ON h.host_id = hs.host_service_host_id
                INNER JOIN service_types st ON st.service_id = hs.host_service_service_id
                ";
                $stmt = $mysqli->prepare($ret);
                $stmt->execute(); //ok
                $res = $stmt->get_result();
                while ($service = $res->fetch_object()) {
                ?>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card product-card-large">
                                <div class="card-body p-0">
                                    <div class="product-image-large">
                                        <div class="background">
                                            <img src="../public/img/image-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <a href="service_details?view=<?php echo $service->host_service_id; ?>" class="card-footer">
                                    <div class="row">
                                        <div class="col">
                                            <p class="text-dark"><?php echo $service->host_service_id; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><?php echo $service->host_service_cost_description; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p class="small vm">
                                                <span class=" text-secondary">Host Name: <?php echo $service->host_name; ?></span>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><?php echo $service->host_service_location; ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="container mt-4">
            <div class="card border border-success">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1">
                                <span class="vm ml-2">Recently Joined Users</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <?php
                        $ret = "SELECT * FROM host";
                        $stmt = $mysqli->prepare($ret);
                        $stmt->execute(); //ok
                        $res = $stmt->get_result();
                        while ($host = $res->fetch_object()) {
                        ?>
                            <div class="col-4 px-1">
                                <div class="checkbox-boxed">
                                    <label class="checkbox-lable" for="room">
                                        <img src="../public/img/profile.svg" class="img-thumbnail" alt="">
                                        <span class="p"><?php echo $host->user_name . ' <br>' . $host->user_mobile; ?></span>
                                    </label>
                                </div>
                            <?php } ?>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container mt-4">
                <div class="card border border-success">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-dark my-1">
                                    <span class="vm ml-2">Recently Joined Hosts</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row px-2">
                            <?php
                            $ret = "SELECT * FROM host";
                            $stmt = $mysqli->prepare($ret);
                            $stmt->execute(); //ok
                            $res = $stmt->get_result();
                            while ($users = $res->fetch_object()) {
                            ?>
                                <div class="col-4 px-1">
                                    <input type="radio" name="itemtype" class="checkbox-boxed" id="room">
                                    <label class="checkbox-lable" for="room">
                                        <img src="../public/img/profile.svg" class="img-thumbnail" alt="">
                                        <span class="p"><?php echo $users->user_name . ' <br>' . $users->user_mobile; ?></span>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="card border border-success">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-dark my-1">
                                    <span class="vm ml-2">Recently Added Bookings</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>


    </main>

    <?php require_once('../partials/scripts.php'); ?>
    <!-- page level custom script -->
    <script>
        "use strict"
        $(window).on('load', function() {

            /* range picker for filter */
            var html5Slider = document.getElementById('rangeslider');
            noUiSlider.create(html5Slider, {
                start: [0, 100],
                connect: true,
                range: {
                    'min': 0,
                    'max': 500
                }
            });

            var inputNumber = document.getElementById('input-number');
            var select = document.getElementById('input-select');

            html5Slider.noUiSlider.on('update', function(values, handle) {
                var value = values[handle];

                if (handle) {
                    inputNumber.value = value;
                } else {
                    select.value = Math.round(value);
                }
            });
            select.addEventListener('change', function() {
                html5Slider.noUiSlider.set([this.value, null]);
            });
            inputNumber.addEventListener('change', function() {
                html5Slider.noUiSlider.set([null, this.value]);
            });


            /* carousel */
            var swiper = new Swiper('.swiper-products', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: 'false'
            });

        });
    </script>
</body>

</html>