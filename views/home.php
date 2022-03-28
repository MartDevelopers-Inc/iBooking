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
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="menu-btn btn btn-link-default" type="button">
                        <img src="../public/img/icons/menu-outline.svg" alt="" class="icon-size-24">
                    </button>
                </div>
                <div class="text-left col">
                    <a class="navbar-brand" href="#">
                        <div class="icon icon-44 bg-dark text-white">
                            <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                <title>ionicons-v5-i</title>
                                <path d='M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <path d='M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <polyline points='400 179 400 64 352 64 352 133' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                            </svg>
                        </div>
                        <h4>iBooking</h4>
                    </a>
                </div>
                <div class="ml-auto col-auto">
                    <a href="profile" class="icon icon-44 shadow-sm">
                        <figure class="m-0 background">
                            <img src="../public/img/profile.svg" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>


        <!-- page content start -->
        <div class="container mt-4">
            <div class="form-group mb-0">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control search" placeholder="Search Property">
                    </div>
                    <div class="col-auto pl-0">
                        <button class="sqaure-btn btn btn-info text-white filter-btn" type="button">
                            <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                <title>ionicons-v5-i</title>
                                <line x1='368' y1='128' x2='448' y2='128' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <line x1='64' y1='128' x2='304' y2='128' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <line x1='368' y1='384' x2='448' y2='384' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <line x1='64' y1='384' x2='304' y2='384' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <line x1='208' y1='256' x2='448' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <line x1='64' y1='256' x2='144' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <circle cx='336' cy='128' r='32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <circle cx='176' cy='256' r='32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                <circle cx='336' cy='384' r='32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="card">
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
                                <span class="vm ml-2">Property Type</span>
                            </h6>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <a class="btn btn-link text-secondary py-0 dropdown-toggle no-caret" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16" viewBox='0 0 512 512'>
                                        <title>ionicons-v5-f</title>
                                        <circle cx='256' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                        <circle cx='416' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                        <circle cx='96' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink2">
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="room">
                            <label class="checkbox-lable" for="room">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-2.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Room</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="home" checked>
                            <label class="checkbox-lable" for="home">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-3.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Home</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="flat">
                            <label class="checkbox-lable" for="flat">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-1.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Flat</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2 mt-3 mt-md-0">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="villa">
                            <label class="checkbox-lable" for="villa">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-4.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Villa</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2 mt-3 mt-md-0">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="banglow">
                            <label class="checkbox-lable" for="banglow">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-5.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Banglow</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2 mt-3 mt-md-0">
                            <input type="radio" name="itemtype" class="checkbox-boxed" id="farmhouse">
                            <label class="checkbox-lable" for="farmhouse">
                                <span class="image-boxed">
                                    <span class="h-180 background">
                                        <img src="img/image-6.jpg" alt="">
                                    </span>
                                </span>
                                <span class="p">Farmhouse</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 mt-4">
            <!-- Swiper -->
            <div class="swiper-container swiper-products">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-4.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Devine villa </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">3BHK House, 2400 sq. ft.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="offers">
                                <p class="mb-0 font-weight-medium">10% Off</p>
                                <p class="small ">4 EMI Off</p>
                            </div>
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-2.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Devine villa </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">3BHK House, 2400 sq. ft.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-4.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Devine villa </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">3BHK House, 2400 sq. ft.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-4.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Devine villa </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">3BHK House, 2400 sq. ft.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-1">Select Menu Type</h6>
                    <p class="text-secondary small">Open menu after selecting style</p>
                    <div class="row">
                        <div class="col-6 col-md-auto">
                            <div class="custom-control custom-switch">
                                <input type="radio" name="menustyle" class="custom-control-input" id="menu-overlay" checked>
                                <label class="custom-control-label" for="menu-overlay">Overlay</label>
                            </div>
                        </div>
                        <div class="col-6 col-md-auto">
                            <div class="custom-control custom-switch">
                                <input type="radio" name="menustyle" class="custom-control-input" id="menu-pushcontent">
                                <label class="custom-control-label" for="menu-pushcontent">Reveal</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1">
                                <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24 vm" viewBox='0 0 512 512'>
                                    <title>ionicons-v5-n</title>
                                    <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                    <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                </svg>
                                <span class="vm ml-2">Facilities</span>
                            </h6>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown">
                                <a class="btn btn-link text-secondary py-0 dropdown-toggle no-caret" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16" viewBox='0 0 512 512'>
                                        <title>ionicons-v5-f</title>
                                        <circle cx='256' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                        <circle cx='416' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                        <circle cx='96' cy='256' r='32' style='fill:none;stroke:#999999;stroke-miterlimit:10;stroke-width:32px' />
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Action</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="facilitiestype" class="checkbox-boxed" id="parking">
                            <label class="checkbox-lable" for="parking">
                                <span class="image-boxed text-white">
                                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-48 vm" viewBox='0 0 512 512'>
                                        <title>ionicons-v5-h</title>
                                        <path d='M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <rect x='400' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <rect x='56' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <path d='M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z' />
                                        <path d='M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z' />
                                        <path d='M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z' />
                                        <line x1='432' y1='192' x2='448' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='64' y1='192' x2='80' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <path d='M78,211s46.35-12,178-12,178,12,178,12' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    </svg>
                                </span>
                                <span class="p">Parking</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="facilitiestype" class="checkbox-boxed" id="sport" checked>
                            <label class="checkbox-lable" for="sport">
                                <span class="image-boxed text-white">
                                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-48 vm" viewBox='0 0 512 512'>
                                        <title>ionicons-v5-n</title>
                                        <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                    </svg>
                                </span>
                                <span class="p">Sports</span>
                            </label>
                        </div>
                        <div class="col-4 col-sm-3 col-md-2 col-lg-2 px-2">
                            <input type="radio" name="facilitiestype" class="checkbox-boxed" id="garden">
                            <label class="checkbox-lable" for="garden">
                                <span class="image-boxed text-white">
                                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-48 vm" viewBox='0 0 512 512'>
                                        <title>ionicons-v5-n</title>
                                        <path d='M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <path d='M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        <circle cx='256' cy='256' r='64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                    </svg>
                                </span>
                                <span class="p">Garden</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0 mt-4">
            <!-- Swiper -->
            <div class="swiper-container swiper-products">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="offers">
                                <p class="mb-0 font-weight-medium">Now 10%</p>
                                <p class="small ">Cashback</p>
                            </div>
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-3.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Exoticasi Duplex </p>
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
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                            </a>
                            <div class="card-footer border-top border-color">
                                <div class="row">
                                    <div class="col-auto text-dark text-center">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-h</title>
                                            <path d='M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='400' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='56' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z' />
                                            <path d='M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z' />
                                            <path d='M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z' />
                                            <line x1='432' y1='192' x2='448' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='64' y1='192' x2='80' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M78,211s46.35-12,178-12,178,12,178,12' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Parking</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-n</title>
                                            <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Sport</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-n</title>
                                            <path d='M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <circle cx='256' cy='256' r='64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Garden</small></p>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <p class="small text-secondary">
                                            3BHK House<br>2400 sq. ft.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-6.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Ionizer Duplex </p>
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
                                <div class="row">
                                    <div class="col">
                                        <p class="small vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                            </a>

                            <div class="card-footer border-top border-color">
                                <div class="row">
                                    <div class="col-auto text-dark text-center">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-h</title>
                                            <path d='M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='400' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='56' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z' />
                                            <path d='M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z' />
                                            <path d='M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z' />
                                            <line x1='432' y1='192' x2='448' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='64' y1='192' x2='80' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M78,211s46.35-12,178-12,178,12,178,12' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Parking</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-n</title>
                                            <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Sport</small></p>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <p class="small text-secondary">
                                            3BHK House<br>2400 sq. ft.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-3.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Vikshal Duplex</p>
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
                                <div class="row">
                                    <div class="col">
                                        <p class="small  vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                            </a>

                            <div class="card-footer border-top border-color">
                                <div class="row">
                                    <div class="col-auto text-dark text-center">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-h</title>
                                            <path d='M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='400' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='56' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z' />
                                            <path d='M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z' />
                                            <path d='M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z' />
                                            <line x1='432' y1='192' x2='448' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='64' y1='192' x2='80' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M78,211s46.35-12,178-12,178,12,178,12' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Parking</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-n</title>
                                            <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Sport</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-q</title>
                                            <line x1='48' y1='256' x2='464' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='384' y='128' width='32' height='256' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='32' height='256' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='32' y='192' width='16' height='128' rx='8' ry='8' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='464' y='192' width='16' height='128' rx='8' ry='8' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Gym</small></p>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <p class="small text-secondary">
                                            3BHK House<br>2400 sq. ft.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card product-card-large">
                            <div class="card-body p-0">
                                <div class="product-image-large">
                                    <div class="background">
                                        <img src="img/image-3.jpg" alt="">
                                    </div>
                                    <div class="tag-images-count text-white bg-dark">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-e</title>
                                            <path d='M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='400' height='336' rx='45.99' ry='45.99' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px' />
                                            <ellipse cx='372.92' cy='219.64' rx='30.77' ry='30.55' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                                            <path d='M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <span class="vm">10</span>
                                    </div>
                                    <button class="small-btn btn btn-danger text-white">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-16 vm" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-f</title>
                                            <path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a href="property-details.html" class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark">Vikshal Duplex</p>
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
                                <div class="row">
                                    <div class="col">
                                        <p class="small  vm">
                                            <span class=" text-secondary">4.5</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path d="M0 0h24v24H0z" fill="none" />
                                                <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                            </svg>
                                            <span class=" text-secondary">| Canada</span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <p class="small text-secondary">$ 12.5 lacs</p>
                                    </div>
                                </div>
                            </a>

                            <div class="card-footer border-top border-color">
                                <div class="row">
                                    <div class="col-auto text-dark text-center">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-h</title>
                                            <path d='M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='400' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='56' y='384' width='56' height='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z' />
                                            <path d='M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z' />
                                            <path d='M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z' />
                                            <line x1='432' y1='192' x2='448' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='64' y1='192' x2='80' y2='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <path d='M78,211s46.35-12,178-12,178,12,178,12' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Parking</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-n</title>
                                            <circle cx='256' cy='256' r='192' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px' />
                                            <polygon points='256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='332.09 238.98 384.96 216.58 410.74 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='447' y1='269.97' x2='384.96' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='179.91 238.98 127.04 216.58 101.26 143.32' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='65' y1='269.97' x2='127.04' y2='216.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='256 175.15 256 117.58 320 74.94' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='192' y1='74.93' x2='256' y2='117.58' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='312 320 340 368 312 439' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='410.74' y1='368' x2='342' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <polyline points='200 320 172 368 200.37 439.5' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <line x1='101.63' y1='368' x2='172' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Sport</small></p>
                                    </div>
                                    <div class="col-auto text-dark text-center pl-0">
                                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                                            <title>ionicons-v5-q</title>
                                            <line x1='48' y1='256' x2='464' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='384' y='128' width='32' height='256' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='96' y='128' width='32' height='256' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='32' y='192' width='16' height='128' rx='8' ry='8' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                            <rect x='464' y='192' width='16' height='128' rx='8' ry='8' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                                        </svg>
                                        <p class="small"><small>Gym</small></p>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <p class="small text-secondary">
                                            3BHK House<br>2400 sq. ft.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="mb-1">Select Layout Mode</h6>
                            <p class="text-secondary small">Choose light or dark mode of layout</p>
                            <div class="row">
                                <div class="col-6 col-md-auto">
                                    <div class="custom-control custom-switch">
                                        <input type="radio" name="layoutmode" class="custom-control-input" id="menu-lightmode" checked>
                                        <label class="custom-control-label" for="menu-lightmode">Light</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-auto">
                                    <div class="custom-control custom-switch">
                                        <input type="radio" name="layoutmode" class="custom-control-input" id="menu-darkmode">
                                        <label class="custom-control-label" for="menu-darkmode">Dark</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card product-card-small mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="product-image-small">
                                        <div class="background" style="background-image: url(_img/image-3.html);">
                                            <img src="img/image-3.jpg" alt="" style="display: none;">
                                        </div>
                                        <div class="tag-images-count text-white bg-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                <title>ionicons-v5-e</title>
                                                <path d="M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px"></ellipse>
                                                <path d="M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <path d="M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                            <span class="vm">10</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><a href="property-details.html" class="text-dark">Exoticasi Duplex</a> </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small vm">
                                                <span class=" text-secondary">4.5</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <p class="small vm">
                                                <span class=" text-secondary">Canada</span>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><small>3BHK, 2400 sq. ft.</small></p>
                                        </div>
                                    </div>
                                    <hr class="border-top border-color my-2">
                                    <div class="row">
                                        <div class="col-auto text-dark text-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-h</title>
                                                <path d="M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="400" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <rect x="56" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <path d="M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z"></path>
                                                <path d="M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z"></path>
                                                <path d="M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z"></path>
                                                <line x1="432" y1="192" x2="448" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <line x1="64" y1="192" x2="80" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <path d="M78,211s46.35-12,178-12,178,12,178,12" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <circle cx="256" cy="256" r="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                                <polygon points="256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polygon>
                                                <polyline points="332.09 238.98 384.96 216.58 410.74 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="447" y1="269.97" x2="384.96" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="179.91 238.98 127.04 216.58 101.26 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="65" y1="269.97" x2="127.04" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="256 175.15 256 117.58 320 74.94" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="192" y1="74.93" x2="256" y2="117.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="312 320 340 368 312 439" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="410.74" y1="368" x2="342" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="200 320 172 368 200.37 439.5" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="101.63" y1="368" x2="172" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <path d="M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <circle cx="256" cy="256" r="64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                            </svg>
                                        </div>
                                        <div class="col-auto ml-auto ">
                                            <button class="btn btn-link text-danger p-0 vm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                    <title>ionicons-v5-f</title>
                                                    <path d="M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card product-card-small mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="product-image-small">
                                        <div class="background" style="background-image: url(_img/image-3.html);">
                                            <img src="img/image-5.jpg" alt="" style="display: none;">
                                        </div>
                                        <div class="tag-images-count text-white bg-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                <title>ionicons-v5-e</title>
                                                <path d="M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px"></ellipse>
                                                <path d="M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <path d="M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                            <span class="vm">10</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><a href="property-details.html" class="text-dark">Exoticasi Duplex</a> </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small vm">
                                                <span class=" text-secondary">4.5</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <p class="small vm">
                                                <span class=" text-secondary">Canada</span>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><small>3BHK, 2400 sq. ft.</small></p>
                                        </div>
                                    </div>
                                    <hr class="border-top border-color my-2">
                                    <div class="row">
                                        <div class="col-auto text-dark text-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-h</title>
                                                <path d="M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="400" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <rect x="56" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <path d="M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z"></path>
                                                <path d="M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z"></path>
                                                <path d="M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z"></path>
                                                <line x1="432" y1="192" x2="448" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <line x1="64" y1="192" x2="80" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <path d="M78,211s46.35-12,178-12,178,12,178,12" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <circle cx="256" cy="256" r="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                                <polygon points="256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polygon>
                                                <polyline points="332.09 238.98 384.96 216.58 410.74 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="447" y1="269.97" x2="384.96" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="179.91 238.98 127.04 216.58 101.26 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="65" y1="269.97" x2="127.04" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="256 175.15 256 117.58 320 74.94" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="192" y1="74.93" x2="256" y2="117.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="312 320 340 368 312 439" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="410.74" y1="368" x2="342" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="200 320 172 368 200.37 439.5" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="101.63" y1="368" x2="172" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <path d="M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <circle cx="256" cy="256" r="64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                            </svg>
                                        </div>
                                        <div class="col-auto ml-auto ">
                                            <button class="btn btn-link text-danger p-0 vm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                    <title>ionicons-v5-f</title>
                                                    <path d="M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card product-card-small mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="product-image-small">
                                        <div class="background" style="background-image: url(_img/image-3.html);">
                                            <img src="img/image-4.jpg" alt="" style="display: none;">
                                        </div>
                                        <div class="tag-images-count text-white bg-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                <title>ionicons-v5-e</title>
                                                <path d="M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px"></ellipse>
                                                <path d="M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <path d="M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                            <span class="vm">10</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><a href="property-details.html" class="text-dark">Exoticasi Duplex</a></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small vm">
                                                <span class=" text-secondary">4.5</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <p class="small vm">
                                                <span class=" text-secondary">Canada</span>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><small>3BHK, 2400 sq. ft.</small></p>
                                        </div>
                                    </div>
                                    <hr class="border-top border-color my-2">
                                    <div class="row">
                                        <div class="col-auto text-dark text-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-h</title>
                                                <path d="M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="400" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <rect x="56" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <path d="M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z"></path>
                                                <path d="M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z"></path>
                                                <path d="M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z"></path>
                                                <line x1="432" y1="192" x2="448" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <line x1="64" y1="192" x2="80" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <path d="M78,211s46.35-12,178-12,178,12,178,12" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <circle cx="256" cy="256" r="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                                <polygon points="256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polygon>
                                                <polyline points="332.09 238.98 384.96 216.58 410.74 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="447" y1="269.97" x2="384.96" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="179.91 238.98 127.04 216.58 101.26 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="65" y1="269.97" x2="127.04" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="256 175.15 256 117.58 320 74.94" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="192" y1="74.93" x2="256" y2="117.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="312 320 340 368 312 439" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="410.74" y1="368" x2="342" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="200 320 172 368 200.37 439.5" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="101.63" y1="368" x2="172" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <path d="M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <circle cx="256" cy="256" r="64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                            </svg>
                                        </div>
                                        <div class="col-auto ml-auto ">
                                            <button class="btn btn-link text-danger p-0 vm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                    <title>ionicons-v5-f</title>
                                                    <path d="M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card product-card-small mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="product-image-small">
                                        <div class="background" style="background-image: url(_img/image-3.html);">
                                            <img src="img/image-3.jpg" alt="" style="display: none;">
                                        </div>
                                        <div class="tag-images-count text-white bg-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                <title>ionicons-v5-e</title>
                                                <path d="M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <ellipse cx="372.92" cy="219.64" rx="30.77" ry="30.55" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px"></ellipse>
                                                <path d="M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <path d="M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                            <span class="vm">10</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col pl-0">
                                    <div class="row">
                                        <div class="col">
                                            <p class="small"><a href="property-details.html" class="text-dark">Exoticasi Duplex</a></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small vm">
                                                <span class=" text-secondary">4.5</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-12 vm" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path fill="#FFD500" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <p class="small vm">
                                                <span class=" text-secondary">Canada</span>
                                            </p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="small text-secondary"><small>3BHK, 2400 sq. ft.</small></p>
                                        </div>
                                    </div>
                                    <hr class="border-top border-color my-2">
                                    <div class="row">
                                        <div class="col-auto text-dark text-center ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-h</title>
                                                <path d="M469.71,234.6c-7.33-9.73-34.56-16.43-46.08-33.94s-20.95-55.43-50.27-70S288,112,256,112s-88,4-117.36,18.63-38.75,52.52-50.27,70S49.62,224.87,42.29,234.6,29.8,305.84,32.94,336s9,48,9,48h86c14.08,0,18.66-5.29,47.46-8C207,373,238,372,256,372s50,1,81.58,4c28.8,2.73,33.53,8,47.46,8h85s5.86-17.84,9-48S477,244.33,469.71,234.6Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                <rect x="400" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <rect x="56" y="384" width="56" height="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></rect>
                                                <path d="M364.47,309.16c-5.91-6.83-25.17-12.53-50.67-16.35S279,288,256.2,288s-33.17,1.64-57.61,4.81-42.79,8.81-50.66,16.35C136.12,320.6,153.42,333.44,167,335c13.16,1.5,39.47.95,89.31.95s76.15.55,89.31-.95C359.18,333.35,375.24,321.4,364.47,309.16Z"></path>
                                                <path d="M431.57,243.05a3.23,3.23,0,0,0-3.1-3c-11.81-.42-23.8.42-45.07,6.69a93.88,93.88,0,0,0-30.08,15.06c-2.28,1.78-1.47,6.59,1.39,7.1A455.32,455.32,0,0,0,407.53,272c10.59,0,21.52-3,23.55-12.44A52.41,52.41,0,0,0,431.57,243.05Z"></path>
                                                <path d="M80.43,243.05a3.23,3.23,0,0,1,3.1-3c11.81-.42,23.8.42,45.07,6.69a93.88,93.88,0,0,1,30.08,15.06c2.28,1.78,1.47,6.59-1.39,7.1A455.32,455.32,0,0,1,104.47,272c-10.59,0-21.52-3-23.55-12.44A52.41,52.41,0,0,1,80.43,243.05Z"></path>
                                                <line x1="432" y1="192" x2="448" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <line x1="64" y1="192" x2="80" y2="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <path d="M78,211s46.35-12,178-12,178,12,178,12" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <circle cx="256" cy="256" r="192" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                                <polygon points="256 175.15 179.91 238.98 200 320 256 320 312 320 332.09 238.98 256 175.15" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polygon>
                                                <polyline points="332.09 238.98 384.96 216.58 410.74 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="447" y1="269.97" x2="384.96" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="179.91 238.98 127.04 216.58 101.26 143.32" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="65" y1="269.97" x2="127.04" y2="216.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="256 175.15 256 117.58 320 74.94" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="192" y1="74.93" x2="256" y2="117.58" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="312 320 340 368 312 439" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="410.74" y1="368" x2="342" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                                <polyline points="200 320 172 368 200.37 439.5" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline>
                                                <line x1="101.63" y1="368" x2="172" y2="368" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line>
                                            </svg>
                                        </div>
                                        <div class="col-auto text-dark text-center pl-0 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16" viewBox="0 0 512 512">
                                                <title>ionicons-v5-n</title>
                                                <path d="M215.08,156.92c-4.89-24-10.77-56.27-10.77-73.23A51.36,51.36,0,0,1,256,32h0c28.55,0,51.69,23.69,51.69,51.69,0,16.5-5.85,48.95-10.77,73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,355.08c-4.91,24.06-10.77,56.16-10.77,73.23A51.36,51.36,0,0,0,256,480h0c28.55,0,51.69-23.69,51.69-51.69,0-16.54-5.85-48.93-10.77-73.23" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,215.08c24.06-4.91,56.16-10.77,73.23-10.77A51.36,51.36,0,0,1,480,256h0c0,28.55-23.69,51.69-51.69,51.69-16.5,0-48.95-5.85-73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,215.07c-24-4.89-56.25-10.76-73.23-10.76A51.36,51.36,0,0,0,32,256h0c0,28.55,23.69,51.69,51.69,51.69,16.5,0,48.95-5.85,73.23-10.77" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M296.92,156.92c13.55-20.48,32.3-47.25,44.37-59.31a51.35,51.35,0,0,1,73.1,0h0c20.19,20.19,19.8,53.3,0,73.1-11.66,11.67-38.67,30.67-59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M156.92,296.92c-20.48,13.55-47.25,32.3-59.31,44.37a51.35,51.35,0,0,0,0,73.1h0c20.19,20.19,53.3,19.8,73.1,0,11.67-11.66,30.67-38.67,44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M355.08,296.92c20.48,13.55,47.25,32.3,59.31,44.37a51.35,51.35,0,0,1,0,73.1h0c-20.19,20.19-53.3,19.8-73.1,0-11.69-11.69-30.66-38.65-44.37-59.31" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <path d="M215.08,156.92c-13.53-20.43-32.38-47.32-44.37-59.31a51.35,51.35,0,0,0-73.1,0h0c-20.19,20.19-19.8,53.3,0,73.1,11.61,11.61,38.7,30.68,59.31,44.37" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></path>
                                                <circle cx="256" cy="256" r="64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"></circle>
                                            </svg>
                                        </div>
                                        <div class="col-auto ml-auto ">
                                            <button class="btn btn-link text-danger p-0 vm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                                                    <title>ionicons-v5-f</title>
                                                    <path d="M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PWA add to home display -->
        <div class="container mt-2">
            <div class="card" id="addtodevice">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto align-self-center">
                            <img src="img/favicon72.png" class="rounded mr-2 " alt="...">
                        </div>
                        <div class="col text-secondary pl-0">
                            <h6 class="text-dark">Add to <span class="font-weight-bold">Home screen</span></h6>
                            <p class=" text-secondary">See PWA app as in fullscreen on your device.</p>
                            <button class="btn btn-sm btn-primary px-4" id="addtohome">Install</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PWA add to home display -->

        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-secondary">About us</h6>
                    <h4>Its time to fall in love with Creative design, Flexibility &amp; Uniqueness.</h4>
                    <h6 class="text-secondary">We are at our best</h6>
                    <p class="text-secondary mt-3">User experienced user interfaces with HTML and CSS also providing flexibility of style color customization. We have created specific website template demos and component library which be used across any demo.</p>
                    <a href="about.html" class="btn btn-sm btn-info">Read more</a>
                </div>
            </div>
        </div>
        <div class="container mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-dark">
                        <svg data-brackets-id="44368" xmlns="http://www.w3.org/2000/svg" class="icon-size-16 vm" viewBox="0 0 512 512">
                            <title data-brackets-id="44369">ionicons-v5-e</title>
                            <path data-brackets-id="44370" d="M432,112V96a48.14,48.14,0,0,0-48-48H64A48.14,48.14,0,0,0,16,96V352a48.14,48.14,0,0,0,48,48H80" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></path>
                            <rect data-brackets-id="44371" x="96" y="128" width="400" height="336" rx="45.99" ry="45.99" style="fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px"></rect>
                            <ellipse data-brackets-id="44372" cx="372.92" cy="219.64" rx="30.77" ry="30.55" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px"></ellipse>
                            <path data-brackets-id="44373" d="M342.15,372.17,255,285.78a30.93,30.93,0,0,0-42.18-1.21L96,387.64" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                            <path data-brackets-id="44374" d="M265.23,464,383.82,346.27a31,31,0,0,1,41.46-1.87L496,402.91" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></path>
                        </svg>
                        <span class="ml-2 vm">Pages</span>
                    </h6>
                </div>
                <div class="card-body px-0 pt-0">
                    <div class="list-group list-group-flush border-top border-color">
                        <a href="about.html" class="list-group-item list-group-item-action border-color">About</a>
                        <a href="analytics.html" class="list-group-item list-group-item-action border-color">Analytics</a>
                        <a href="bookings.html" class="list-group-item list-group-item-action border-color">Booking</a>
                        <a href="buynow.html" class="list-group-item list-group-item-action border-color">Buy Now</a>
                        <a href="error.html" class="list-group-item list-group-item-action border-color">Error</a>
                        <a href="pages.html" class="list-group-item list-group-item-action border-color text-primary text-center">More 20+ pages</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container py-3">
            <div class="row">
                <div class="col align-self-center">
                    <p class="small text-secondary">Connect with us</p>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-secondary">
                        <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve' class="icon-size-24">
                            <path style='fill-rule:evenodd;clip-rule:evenodd;' d='M480,257.35c0-123.7-100.3-224-224-224s-224,100.3-224,224 c0,111.8,81.9,204.47,189,221.29V322.12h-56.89v-64.77H221v-49.36c0-56.13,33.45-87.16,84.61-87.16c24.51,0,50.15,4.38,50.15,4.38 v55.13h-28.26c-27.81,0-36.51,17.26-36.51,35v42.02h62.12l-9.92,64.77h-52.2v156.53C398.1,461.85,480,369.18,480,257.35L480,257.35z ' />
                        </svg>

                    </a>
                    <a href="#" class="text-secondary">
                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                            <title>ionicons-v5_logos</title>
                            <path d='M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z' />
                        </svg>
                    </a>
                    <a href="#" class="text-secondary">
                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                            <title>ionicons-v5_logos</title>
                            <path d='M256.05,32c-123.7,0-224,100.3-224,224,0,91.7,55.2,170.5,134.1,205.2-.6-15.6-.1-34.4,3.9-51.4,4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58,20.4,0,30.2,15.3,30.2,33.6,0,20.5-13.1,51.1-19.8,79.5-5.6,23.8,11.9,43.1,35.4,43.1,42.4,0,71-54.5,71-119.1,0-49.1-33.1-85.8-93.2-85.8-67.9,0-110.3,50.7-110.3,107.3,0,19.5,5.8,33.3,14.8,43.9,4.1,4.9,4.7,6.9,3.2,12.5-1.1,4.1-3.5,14-4.6,18-1.5,5.7-6.1,7.7-11.2,5.6-31.3-12.8-45.9-47-45.9-85.6,0-63.6,53.7-139.9,160.1-139.9,85.5,0,141.8,61.9,141.8,128.3,0,87.9-48.9,153.5-120.9,153.5-24.2,0-46.9-13.1-54.7-27.9,0,0-13,51.6-15.8,61.6-4.7,17.3-14,34.5-22.5,48a225.13,225.13,0,0,0,63.5,9.2c123.7,0,224-100.3,224-224S379.75,32,256.05,32Z' />
                        </svg>
                    </a>
                    <a href="#" class="text-secondary">
                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                            <title>ionicons-v5_logos</title>
                            <path d='M473.16,221.48l-2.26-9.59H262.46v88.22H387c-12.93,61.4-72.93,93.72-121.94,93.72-35.66,0-73.25-15-98.13-39.11a140.08,140.08,0,0,1-41.8-98.88c0-37.16,16.7-74.33,41-98.78s61-38.13,97.49-38.13c41.79,0,71.74,22.19,82.94,32.31l62.69-62.36C390.86,72.72,340.34,32,261.6,32h0c-60.75,0-119,23.27-161.58,65.71C58,139.5,36.25,199.93,36.25,256S56.83,369.48,97.55,411.6C141.06,456.52,202.68,480,266.13,480c57.73,0,112.45-22.62,151.45-63.66,38.34-40.4,58.17-96.3,58.17-154.9C475.75,236.77,473.27,222.12,473.16,221.48Z' />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <span class="text-secondary">All rights reserved by Soroniux</span>
        </div>
    </footer>

    <!-- filter menu -->
    <div class="filter">
        <div class="container filters-container">
            <button class="btn btn-danger small-btn filter-btn close text-white"><svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                    <title>ionicons-v5-l</title>
                    <line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                </svg></button>

            <h5 class="mb-0">
                Filter Criteria
            </h5>
            <p class="small text-secondary mb-4">2154 products</p>

            <div class="form-group floating-form-group active">
                <label class="floating-label">
                    Select Price Range
                </label>
                <div id="rangeslider" class="mt-4"></div>
            </div>

            <div class="form-group floating-form-group pt-0">
                <div class="row">
                    <div class="col">
                        <input type="number" min="0" max="500" value="100" step="1" id="input-select" class="floating-input form-control">
                    </div>
                    <div class="col-auto pt-2"> to </div>
                    <div class="col">
                        <input type="number" min="0" max="500" value="100" step="1" id="input-number" class="floating-input form-control">
                    </div>
                </div>
            </div>

            <div class="form-group floating-form-group active">
                <select class="form-control floating-input">
                    <option selected>Home</option>
                    <option>Room</option>
                    <option>Flats</option>
                </select>
                <label class="floating-label">Select Property Type</label>
            </div>

            <div class="form-group floating-form-group active">
                <label class="floating-label">Select Facilities</label>

                <div class="custom-control custom-switch mt-3 my-2">
                    <input type="checkbox" class="custom-control-input" id="Garden">
                    <label class="custom-control-label" for="Garden">Garden</label>
                </div>
                <div class="custom-control custom-switch my-2">
                    <input type="checkbox" class="custom-control-input" id="Gym">
                    <label class="custom-control-label" for="Gym">Gym</label>
                </div>
                <div class="custom-control custom-switch my-2">
                    <input type="checkbox" class="custom-control-input" id="Sport">
                    <label class="custom-control-label" for="Sport">Sport</label>
                </div>
                <div class="custom-control custom-switch my-2">
                    <input type="checkbox" class="custom-control-input" id="Parking">
                    <label class="custom-control-label" for="Parking">Parking</label>
                </div>
                <div class="custom-control custom-switch my-2">
                    <input type="checkbox" class="custom-control-input" id="kidsplay">
                    <label class="custom-control-label" for="kidsplay">Kid's Play</label>
                </div>
            </div>

            <div class="form-group floating-form-group">
                <input type="text" class="form-control floating-input">
                <label class="floating-label">Keyword</label>
            </div>

            <div class="form-group floating-form-group active mb-4">
                <select class="form-control floating-input ">
                    <option>10% </option>
                    <option>30%</option>
                    <option>50%</option>
                    <option>80%</option>
                </select>
                <label class="floating-label">Offer Discount</label>
            </div>


            <button class="btn btn-info btn-rounded btn-block">Search</button>
            <br>

        </div>
    </div>
    <div class="filter-backdrop"></div>


    <!-- color settings style switcher -->
    <button type="button" class="btn btn-info colorsettings">
        <span class="text-white">
            <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                <title>ionicons-v5-m</title>
                <path d='M430.11,347.9c-6.6-6.1-16.3-7.6-24.6-9-11.5-1.9-15.9-4-22.6-10-14.3-12.7-14.3-31.1,0-43.8l30.3-26.9c46.4-41,46.4-108.2,0-149.2-34.2-30.1-80.1-45-127.8-45-55.7,0-113.9,20.3-158.8,60.1-83.5,73.8-83.5,194.7,0,268.5,41.5,36.7,97.5,55,152.9,55.4h1.7c55.4,0,110-17.9,148.8-52.4C444.41,382.9,442,359,430.11,347.9Z' style='fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px' />
                <circle cx='144' cy='208' r='32' />
                <circle cx='152' cy='311' r='32' />
                <circle cx='224' cy='144' r='32' />
                <circle cx='256' cy='367' r='48' />
                <circle cx='328' cy='144' r='32' />
            </svg>
        </span>
    </button>
    <div class="sidebar-right">
        <div class="selectoption">
            <input type="checkbox" id="darklayout" name="darkmode">
            <label for="darklayout">Dark</label>
        </div>
        <div class="selectoption mb-0">
            <input type="checkbox" id="rtllayout" name="layoutrtl">
            <label for="rtllayout">RTL</label>
        </div>
        <hr>
        <div class="colorselect">
            <input type="radio" id="templatecolor1" name="sidebarcolorselect">
            <label for="templatecolor1" class="bg-dark-blue" data-title="dark-blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor2" name="sidebarcolorselect">
            <label for="templatecolor2" class="bg-dark-purple" data-title="dark-purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor4" name="sidebarcolorselect">
            <label for="templatecolor4" class="bg-dark-gray" data-title="dark-gray"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor6" name="sidebarcolorselect">
            <label for="templatecolor6" class="bg-dark-brown" data-title="dark-brown"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor3" name="sidebarcolorselect">
            <label for="templatecolor3" class="bg-maroon" data-title="maroon"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor5" name="sidebarcolorselect">
            <label for="templatecolor5" class="bg-dark-pink" data-title="dark-pink"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor8" name="sidebarcolorselect">
            <label for="templatecolor8" class="bg-red" data-title="red"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor13" name="sidebarcolorselect">
            <label for="templatecolor13" class="bg-amber" data-title="amber"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor7" name="sidebarcolorselect">
            <label for="templatecolor7" class="bg-dark-green" data-title="dark-green"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor11" name="sidebarcolorselect">
            <label for="templatecolor11" class="bg-teal" data-title="teal"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor12" name="sidebarcolorselect">
            <label for="templatecolor12" class="bg-skyblue" data-title="skyblue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor10" name="sidebarcolorselect">
            <label for="templatecolor10" class="bg-blue" data-title="blue"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor9" name="sidebarcolorselect">
            <label for="templatecolor9" class="bg-purple" data-title="purple"></label>
        </div>
        <div class="colorselect">
            <input type="radio" id="templatecolor14" name="sidebarcolorselect">
            <label for="templatecolor14" class="bg-gray" data-title="gray"></label>
        </div>

    </div>


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