<?php /* Footer Snippet for the Baseblog Kirby Theme *******************************************/ ?>
<div class="container">
    <footer>
        <div class="container">
            <!-- <div class="footer-border"></div>-->
            <div class="row">
                <div class="social span3 pull-left">
                    <a class="linkedin" href="http://www.linkedin.com/in/johnjkelleher"></a>
                    <a class="googleplus" href="https://plus.google.com/116482141547251567088/posts"></a>
                    <a class="twitter" href="https://twitter.com/johnkelleher"></a>
                    <a class="github" href="https://github.com/jkelleher"></a>
                    <a class="email" href="mailto:kelleher.john@itsligo.ie"></a>
<!--
                    <div style="margin-top:10px">
                    <span class="g-plusone" data-annotation="none" data-size="tall"></span>
                        </div>-->
                    <!-- <a style="float: center">
                      <g:plusone align="left"></g:plusone>
                    </a> -->
                </div>
                <div class='copyright colophon span3'>
                    <p>
                        <?php echo kirbytext($site->copyright()) ?></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!--<script src="assets\js\bootstrap.min.js" type="text/javascript"></script>-->
<!--<script src="/assets/js/jquery-1.8.2.min.js"></script>-->
<!-- <script src="/assets/bootstrap/js/bootstrap.min.js"></script>-->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.flexslider.js"></script>
<!-- <script src="assets/js/jflickrfeed.js"></script>-->
<script src="/assets/js/jquery.ui.map.min.js"></script>
<script src="/assets/js/jquery.quicksand.js"></script>
<script src="/assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="/assets/js/scripts.js"></script>
<script>
    $('.dropdown-toggle').dropdown();
</script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "fade",
            easing: "swing",
            randomize: true
        });
    });
</script>
<!-- <script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script> -->
</body>
</script>

</html>