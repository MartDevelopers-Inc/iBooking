<?php
require_once('../partials/head.php');
?>

<body class="d-flex flex-column h-100">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <div class="icon icon-100 bg-dark text-white mb-4">
                        <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-48" viewBox='0 0 512 512'>
                            <title>ionicons-v5-i</title>
                            <path d='M80,212V448a16,16,0,0,0,16,16h96V328a24,24,0,0,1,24-24h80a24,24,0,0,1,24,24V464h96a16,16,0,0,0,16-16V212' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                            <path d='M480,256,266.89,52c-5-5.28-16.69-5.34-21.78,0L32,256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                            <polyline points='400 179 400 64 352 64 352 133' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px' />
                        </svg>
                    </div>
                    <h4>Soroniux</h4>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed navbar -->
    <header class="header">
        <div class="row">
            <div class="col-auto px-0">
                <a href="landing.html" class="btn menu-btn btn-link text-dark">
                    <svg xmlns='http://www.w3.org/2000/svg' class="icon-size-24" viewBox='0 0 512 512'>
                        <title>ionicons-v5-a</title>
                        <polyline points='244 400 100 256 244 112' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                        <line x1='120' y1='256' x2='412' y2='256' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                    </svg>
                </a>
            </div>
            <div class="text-left col">

            </div>
            <div class="ml-auto col-auto px-0">

            </div>
        </div>
    </header>


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
            <h4 class="mb-4">Soroniux</h4>
        </div>
        <div class="container">
            <div class="login-box">
                <div class="form-group floating-form-group">
                    <input type="email" class="form-control floating-input" value="amayjohnson@maxartkiller.coms ">
                    <label class="floating-label">Email Address</label>
                </div>
                <div class="form-group floating-form-group">
                    <input type="password" class="form-control floating-input" autofocus>
                    <label class="floating-label">Password</label>
                </div>
                <div class="form-group my-4">
                    <a href="#" class="link">Forget password?</a>
                </div>
                <a href="index.html" class="btn btn-block btn-info btn-lg">Sign In</a>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="signup.html" class="link">Create Account</a>
                </div>
            </div>
        </div>
    </footer>


    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>