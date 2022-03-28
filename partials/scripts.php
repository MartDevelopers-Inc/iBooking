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
<!-- Init Sweet Alerts -->
<?php if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'success',
            title: '<?php echo $success; ?>',
        })
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        /* Pop Error Message */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'error',
            title: '<?php echo $err; ?>',
        })
    </script>

<?php }
if (isset($info)) { ?>
    <script>
        /* Pop Warning  */
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        Toast.fire({
            type: 'info',
            title: '<?php echo $info; ?>',
        })
    </script>

<?php }
?>