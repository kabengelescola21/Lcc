<!-- FOOTER -->
<footer class="footer">
        <div class="footer-meta">
            <div class="container text-center">
                <div class="clearfix">
                    <ul class="social-line list-inline">
                        <li data-animation="flipInY" data-animation-delay="100"><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="200"><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="300"><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="400"><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="500"><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="600"><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li data-animation="flipInY" data-animation-delay="700"><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
                <span class="copyright" data-animation="fadeInUp" data-animation-delay="100">&copy; 2014 im Event &#8212; An One Page Event Manager Theme Designed & Developed By <a href="https://jthemes.com/" target="_blank" title="Top HTML Templates">Jthemes Studio</a></span>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->

<!-- JS Global -->

<!--[if lt IE 9]><script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
<script src="assets/plugins/modernizr.custom.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.js"></script>
<script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/placeholdem.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>

<!-- JS Page Level -->
<script src="assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/waypoints/waypoints.min.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script src="assets/js/theme-ajax-mail.js"></script>
<script src="assets/js/theme.js"></script>
<script src="assets/js/custom.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<script src="assets/js/theme-config-light.js"></script>
<!--<![endif]-->
<script src="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js"></script>

<script type="text/javascript">

    jQuery(document).ready(function () {
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
        theme.initGoogleMap();
    });
    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
    jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
    jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

    jQuery(document).ready(function () { theme.onResize(); });
    jQuery(window).load(function(){ theme.onResize(); });
    jQuery(window).resize(function(){ theme.onResize(); });

    jQuery(window).load(function() {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if (hash.length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });

</script>

</body>
</html>