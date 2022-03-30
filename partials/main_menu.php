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

$login_rank = $_SESSION['login_rank'];
if ($login_rank == 'Administrator') {
?>
    <div class="main-menu">
        <div class="menu-container">
            <div class="icon icon-100 position-relative">
                <figure class="background">
                    <img src="../public/img/profile.svg" alt="">
                </figure>
            </div>
            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hosts">Hosts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="users">Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service_types">Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services_host">Host Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bookings">Bookings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payments">Payments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reports">Reports
                    </a>
                </li>
            </ul>
            <a href="logout" class="text-danger my-3 d-block">Sign Out</a>
            <button class="btn btn-danger sqaure-btn close text-white"><svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                    <title>ionicons-v5-l</title>
                    <line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                </svg>
            </button>
        </div>

    </div>
<?php } elseif ($login_rank == 'Host') { ?>
    <div class="main-menu">
        <div class="menu-container">
            <div class="icon icon-100 position-relative">
                <figure class="background">
                    <img src="../public/img/profile.svg" alt="">
                </figure>
            </div>
            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="host_home">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="host_profile">My Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="host_services_host">My Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="host_bookings">Bookings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="host_payments">Payments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="host_reports">Reports
                    </a>
                </li>
            </ul>
            <a href="logout" class="text-danger my-3 d-block">Sign Out</a>
            <button class="btn btn-danger sqaure-btn close text-white"><svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                    <title>ionicons-v5-l</title>
                    <line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                </svg>
            </button>
        </div>

    </div>
<?php } else { ?>
    <div class="main-menu">
        <div class="menu-container">
            <div class="icon icon-100 position-relative">
                <figure class="background">
                    <img src="../public/img/profile.svg" alt="">
                </figure>
            </div>
            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link" href="user_home">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_profile">My Profile
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="user_bookings">Bookings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_payments">Payments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_reports">Reports
                    </a>
                </li>
            </ul>
            <a href="logout" class="text-danger my-3 d-block">Sign Out</a>
            <button class="btn btn-danger sqaure-btn close text-white"><svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                    <title>ionicons-v5-l</title>
                    <line x1='368' y1='368' x2='144' y2='144' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <line x1='368' y1='144' x2='144' y2='368' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                </svg>
            </button>
        </div>

    </div>
<?php } ?>