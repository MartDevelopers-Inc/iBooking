<?php
/*
 *
 * The MIT License (MIT)
 * Copyright (c) 2021 MartDevelopers Inc
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
session_start();
require_once('../config/config.php');
/* Handle Password Reset */
if (isset($_POST['Reset_Password'])) {
    $login_email = $_POST['login_email'];
    /* Check If User Exists */
    $sql = "SELECT * FROM  login WHERE login_email = '$login_email'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
        /* Redirect User To Confirm Password */
        $_SESSION['success'] = 'Password Reset Token Generated, Proceed To Confirm Password';
        $_SESSION['login_email'] = $login_email;
        header('Location: confirm_password');
        exit;
    } else {
        $err = "Email Address Does Not Exist";
    }
}
require_once('../partials/head.php');

?>

<body>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
        <div class="spinner-grow text-primary" role="status">
            <div class="sr-only">Loading...</div>
        </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>

    <div class="login-wrapper d-flex align-items-center justify-content-center" style="background-color: #e3f2fd">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
                    <div class="text-center px-4"><img class="login-intro-img" src="../public/img/bg-img/37.png" alt=""></div>
                    <!-- Register Form-->
                    <div class="register-form mt-4 px-4">
                        <form method="Post">
                            <div class="form-group text-start mb-3">
                                <input class="form-control" type="email" required name="login_email" placeholder="Enter your email address">
                            </div>
                            <button class="btn btn-primary w-100" name="Reset_Password" type="submit">Reset Password</button>
                        </form>
                        <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="login">Remembered Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>