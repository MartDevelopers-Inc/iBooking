<!-- Required jquery and libraries -->
<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- cookie js -->
<script src="../public/js/jquery.cookie.js"></script>
<!-- Sweet Alerts -->
<script src="../public/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

<!-- Swiper slider  -->
<script src="../public/vendor/swiper/js/swiper.min.js"></script>

<!-- Masonry js -->
<script src="../public/vendor/masonry/masonry.pkgd.min.js"></script>

<!-- Customized jquery file  -->
<script src="../public/js/main.js"></script>
<script src="../public/js/color-scheme-demo.js"></script>

<!-- page level custom script -->
<script>
    "use strict"
    $(window).on('load', function() {
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
            },
        });
    });
</script>
<script>
    /* Init Carousels */
    $('.carousel').carousel()
</script>
<script src="../public/vendor/iziToast/iziToast.min.js"></script>
<!-- Initialize Alerts -->
<?php if (isset($success)) { ?>
    <script>
        iziToast.success({
            title: 'Success',
            position: 'center',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $success; ?>',
        });
    </script>

<?php } ?>

<?php if (isset($err)) { ?>
    <script>
        iziToast.error({
            title: 'Error',
            timeout: 10000,
            resetOnHover: true,
            position: 'center',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $err; ?>',
        });
    </script>

<?php } ?>

<?php if (isset($info)) { ?>
    <script>
        iziToast.warning({
            title: 'Warning',
            position: 'center',
            transitionIn: 'flipInX',
            transitionOut: 'flipOutX',
            transitionIn: 'fadeInUp',
            transitionInMobile: 'fadeInUp',
            transitionOutMobile: 'fadeOutDown',
            message: '<?php echo $info; ?>',
        });
    </script>

<?php }
?>