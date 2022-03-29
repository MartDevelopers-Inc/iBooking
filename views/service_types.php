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
admin_check_login();

/* Service Types */
if (isset($_POST['add_service'])) {
    $service_id = $sys_gen_id;
    $service_name = $_POST['service_name'];
    $service_number = $_POST['service_number'];
    $service_description = $_POST['service_description'];

    /* Persist*/
    $sql = "INSERT INTO service_types(service_id, service_name, service_number, service_description) VALUES(?,?,?,?)";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param(
        'ssss',
        $service_id,
        $service_name,
        $service_number,
        $service_description
    );
    $prepare->execute();
    if ($prepare) {
        $success = "$service_name, Added";
    } else {
        $err = "Failed!, Please Try Again";
    }
}

/* Delete Service */
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];
    /* Persist */
    $sql = "DELETE FROM service_types WHERE service_id = '$delete'";
    $prepare = $mysqli->prepare($sql);
    $prepare->execute();
    if ($prepare) {
        $_SESSION['success'] = "Service Deleted";
        header('Location: service_types');
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
        <?php require_once('../partials/header.php'); ?>
        <br><br>
        <hr>
        <div class="container mt-4 text-right">
            <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#add_modal">
                Register Service
            </button>
        </div>
        <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Register Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="row mt-">
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="text" name="service_number" value="<?php echo $a . $b; ?>" class="form-control floating-input">
                                        <label class="floating-label">Service Number</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <input type="text" name="service_name" class="form-control floating-input">
                                        <label class="floating-label">Service Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group floating-form-group">
                                        <textarea type="text" name="service_description" class="form-control floating-input"></textarea>
                                        <label class="floating-label">Service Description</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 text-right">
                                <input type="submit" name="add_service" value="Submit" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hosts -->
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-dark my-1">
                                <span class="text-center vm ml-2">Registered Services</span>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row px-2">
                        <?php
                        $ret = "SELECT * FROM service_types";
                        $stmt = $mysqli->prepare($ret);
                        $stmt->execute(); //ok
                        $res = $stmt->get_result();
                        while ($services = $res->fetch_object()) {
                        ?>
                            <div class="col-12 px-2">
                                <div class="card card-round border border-success text-dark">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="mb-3 sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                                                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
                                                </svg>
                                                Number: <?php echo $services->service_number; ?> <br>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                                                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
                                                </svg>
                                                Name: <?php echo $services->service_name; ?> <br>
                                            </p>
                                            <hr>
                                            <p class="">
                                                <?php echo $services->service_description; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right mb-3 sm">
                                        <a href="service?view=<?php echo $services->service_id; ?>" class="badge  badge-pill badge-warning">
                                            Update
                                        </a>
                                        <a href="service_types?delete=<?php echo $services->service_id; ?>" class="badge badge-pill badge-danger">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>