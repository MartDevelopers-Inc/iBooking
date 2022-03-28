<!-- Required jquery and libraries -->
<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/popper.min.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- cookie js -->
<script src="../public/js/jquery.cookie.js"></script>

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