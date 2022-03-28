<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>iBooking - An ultimate Hotel Booking System to Increase the
        efficiency in booking different local
        hotels,rentals,beach houses,unique homes and
        cabins for the tourists and customers in
        Kenyan counties.
    </title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
    <link rel="icon" href="../public/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../public/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2b5e8.css?family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2f9b9.css?family=Raleway:wght@400;500&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link href="../public/vendor/swiper/css/swiper.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../public/css/style.css" rel="stylesheet" id="style">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../public/vendor/sweetalert2/dist/sweetalert2.min.css">
    <?php
    /* Alert Sesion Via Alerts */
    if (isset($_SESSION['success'])) {
        $success = $_SESSION['success'];
        unset($_SESSION['success']);
    }
    ?>
</head>