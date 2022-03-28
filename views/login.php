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

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = sha1(md5($_POST['password']));

    $stmt = $mysqli->prepare("SELECT login_email, login_password, login_rank, login_user_id, login_admin_id, login_host_id FROM login l 
    INNER JOIN admin a ON l.login_admin_id = a.admin_id
    WHERE login_email =? AND login_password =?");
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute(); //execute bind

    $stmt->bind_result($email, $password, $login_rank, $login_user_id, $login_admin_id, $login_host_id);
    $rs = $stmt->fetch();
    $_SESSION['login_admin_id'] = $login_admin_id;
    $_SESSION['login_rank'] = $login_rank;

    /* Decide Login User Dashboard Based On User Rank */
    if ($rs && $login_rank == 'Administrator') {
        $_SESSION['success'] = 'You Have Successfully Logged In As Administrator';
        header("location:home");
        exit;
    } else if ($rs && $login_rank == 'Host') {
        $_SESSION['success'] = 'You Have Successfully Logged In As Host';
        header("location:host_home");
        exit;
    } else if ($rs && $login_rank == 'User') {
        $_SESSION['success'] = 'You Have Successfully Logged In As User';
        header("location:user_home");
        exit;
    } else {
        $err = "Login Failed, Please Check Your Credentials And Login Permission ";
    }
}
require_once('../partials/head.php');
?>

<body class="d-flex flex-column h-100">
    <!-- screen loader -->
    <?php require_once('../partials/preloader.php'); ?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container text-center  mt-4">
            <div class="icon icon-100 bg-dark text-white mb-4 text-center">
                <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-48" viewBox='0 0 512 512'>
                    <title>ionicons-v5-i</title>
                    <path d='M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <path d='M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                    <polyline points='400 179 400 64 352 64 352 133' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                </svg>
            </div>
            <h4 class="mb-4">iBooking <br> <small>The Ultimate Hotel Booking System</small></h4>
        </div>
        <div class="container">
            <div class="login-box">
                <form method="POST">
                    <div class="form-group floating-form-group">
                        <input type="email" required name="email" class="form-control floating-input">
                        <label class="floating-label">Email Address</label>
                    </div>
                    <div class="form-group floating-form-group">
                        <input type="password" required name="password" class="form-control floating-input" autofocus>
                        <label class="floating-label">Password</label>
                    </div>
                    <br>
                    <div class="form-group my-4">
                        <a href="reset_password" class="link">Forget password?</a>
                    </div>
                    <br><br>
                    <input type="submit" name="login" value="Sign In" class="btn btn-block btn-info btn-lg">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="sign_up_step_1" class="link">Create Account</a>
                </div>
            </div>
        </div>
    </footer>


    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>