<?php snippet( 'header'); ?>
<!-- <?php snippet('menu'); ?>-->
<!--<main role="main">-->
<div class="container">
    <article>
        <div class="row">
            <div class="span3">
                <div>
                    <?php echo kirbytext($page->col1()) ?></div>
            </div>
            <div class="span5">
                <img class="pull-right" width=200px height=200px src="content/about/me.png"></img>
                <div>
                    <?php echo kirbytext($page->col2()) ?>
                </div>
            </div>
            <div class="span4">
                <h3>Contact Me</h3>
                <p>
                    <i class="icon-map-marker"></i> Address: Rm B1083,<br> Dept Computing & Creative Practices,</br>Institute of Technology Sligo,</br>Ash Lane, Sligo, Ireland</p>
                <p>
                    <i class="icon-phone"></i> Phone: +353 71 9155297</p>
                <p>
                    <i class="icon-user"></i>Twitter:  <a href="https://twitter.com/johnkelleher">@johnkelleher</a></p>
                <p>
                    <i class="icon-user"></i>LinkedIn:  <a href="http://http://www.linkedin.com/in/appsolo">johnkelleher</a></p>
                <p>
                    <i class="icon-envelope-alt"></i> Email:
                    <a href="mailto:kelleher.john@itsligo.ie">kelleher.john_AT_itsligo.ie</a>
                </p>
                <div class="show-tweets"></div>
                <div style="margin:0px"><?php snippet( 'map', array( 'address'=>'Institute of Technology, Sligo, Ireland')) ?></div>
            </div>
        </div>
    </article>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!--</main>-->
<?php snippet('updateNav');?>
<?php snippet( 'footer'); ?>