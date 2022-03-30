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

/* Update Service */
if (isset($_POST['update_service'])) {
    $host_service_id = $_GET['view'];
    $host_service_host_id  = $_SESSION['login_host_id'];
    $host_service_service_id = $_POST['host_service_service_id'];
    $host_service_description = $_POST['host_service_description'];
    $host_service_cost_description = $_POST['host_service_cost_description'];
    $host_service_location = $_POST['host_service_location'];

    /* Persist*/
    $sql = "UPDATE  host_service SET host_service_host_id =?, host_service_service_id =?, host_service_description =?,
    host_service_cost_description =?, host_service_location =? WHERE host_service_id =?";
    $prepare = $mysqli->prepare($sql);
    $bind = $prepare->bind_param(
        'ssssss',
        $host_service_host_id,
        $host_service_service_id,
        $host_service_description,
        $host_service_cost_description,
        $host_service_location,
        $host_service_id
    );
    $prepare->execute();
    if ($prepare) {
        $_SESSION['success'] = "Host Service Updated";
        header('Location: host_services_host');
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
        $view = $_GET['view'];
        $ret = "SELECT * FROM host_service hs
        INNER JOIN service_types st ON st.service_id = hs.host_service_service_id
        INNER JOIN host h ON h.host_id = hs.host_service_host_id
        WHERE hs.host_service_id = '$view' ";
        $stmt = $mysqli->prepare($ret);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        while ($service = $res->fetch_object()) {
        ?>
            <br><br>
            <hr>
            <br><br>
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
                                    <span class="text-center vm ml-2">Update <?php echo $service->service_name; ?> Details</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row px-2">
                            <form method="POST">
                                <div class="row mt-">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group floating-form-group">
                                            <select type="text" name="host_service_service_id" class="form-control floating-input">
                                                <option value="<?php echo $service->host_service_service_id; ?>"><?php echo $service->service_number . ' - ' . $service->service_name; ?></option>
                                                <?php
                                                $ret = "SELECT * FROM service_types";
                                                $stmt = $mysqli->prepare($ret);
                                                $stmt->execute(); //ok
                                                $s_res = $stmt->get_result();
                                                while ($services = $s_res->fetch_object()) {
                                                ?>
                                                    <option value="<?php echo $services->service_id; ?>"><?php echo $services->service_number . ' - ' . $services->service_name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <label class="floating-label">Services</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group floating-form-group">
                                            <input type="text" name="host_service_location" value="<?php echo $service->host_service_location; ?>" class="form-control floating-input">
                                            <label class="floating-label">Location</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group floating-form-group">
                                            <input type="text" value="<?php echo $service->host_service_cost_description; ?>" name="host_service_cost_description" class="form-control floating-input">
                                            <label class="floating-label">Cost Description</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group floating-form-group">
                                            <textarea type="text" name="host_service_description" class="form-control floating-input"><?php echo $service->host_service_description; ?></textarea>
                                            <label class="floating-label">Service Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 text-right">
                                    <input type="submit" name="update_service" value="Submit" class="btn btn-sm btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        <?php } ?>
    </div>
    <?php require_once('../partials/scripts.php'); ?>
</body>

</html>