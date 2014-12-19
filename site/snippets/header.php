<?php /* Header Snippet for the Baseblog Kirby Theme *******************************************/ ?>
<!DOCTYPE html>
<!--[if lte IE 8]>
    <html class="ie">
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]>
        <!-->
        <html lang="en">
        <!--<![endif]-->
        
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <title>
                <?php echo html($page->title()) ?> |
                <?php echo html($site->title()) ?></title>
            <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Raleway:300,700'>
            <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="/assets/prettyPhoto/css/prettyPhoto.css">
            <link rel="stylesheet" href="/assets/css/flexslider.css">
            <link rel="stylesheet" href="/assets/css/font-awesome.css">
            <link rel="stylesheet" href="/assets/css/style.css">
            <?php if($page->description() != ''): ?>
            <meta name="description" content="<?php echo html($page->description()) ?>" />
            <?php else: ?>
            <meta name="description" content="<?php echo html($site->description()) ?>" />
            <?php endif ?>
            <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
            <link rel="icon" href="<?php echo url('/assets/img/favicon.ico') ?>" />
            <link rel="icon" type="image/png" href="/assets/img/favicon.png">
<!--            <link rel="apple-touch-icon" href="<?php echo url('/assets/images/apple-touch-icon.png') ?>" />-->
            <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
            <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Blog Feed" />
            <!--[if lt IE 9]>
                <script src="<?php echo url('/assets/js/html5shiv.js') ?>"></script>
            <![endif]-->
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-2783708-1']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
            </script>
            <script type="text/javascript" charset="utf-8">
                $(window).load(function() {    $('.flexslider').flexslider();  });
            </script>
        </head>
        
        <body>
            <div class="container">
                <div class="header row">
                    <div class="span12">
                        <div class="navbar">
                            <div class="navbar-inner">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <h1>
                                    <a class="brand" href="/home">John Kelleher, IT Sligo</a>
                                </h1>
                                <div class="nav-collapse collapse">
                                    <ul id='menubar' class="nav pull-right">
                                        <li id='home' <?php echo strpos($page->template(), 'home') === 0  ? ' class="current-page"' : '' ?>  >
                                            <a href="/home">
                                                <i class="icon-home"></i>
                                                <br />Home</a>
                                        </li>
                                        <li id='module' class="dropdown <?php echo strpos($page->template(), 'mod') === 0  ? 'current-page' : '' ?>" >
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-book"></i>
                                                <br/>Module<b class="caret"></b>
                                            </a>
                                            <ul  class="dropdown-menu" style="background-color:#e1e1e8">
                                                <?php foreach($pages->visible() AS $p): ?>
                                                <li>
                                                    <a style='border-top:none;' href="<?php echo $p->url() ?>">
                                                        <?php echo html($p->title()) ?></a>
                                                </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                        <li id='blog' <?php echo strpos($page->template(), 'blog') === 0  ? ' class="current-page"' : '' ?>>
                                            <a href="/blog">
                                                <i class="icon-comments"></i>
                                                <br />Blog</a>
                                        </li>
                                        <li id='about' <?php echo strpos($page->template(), 'about') === 0  ? ' class="current-page"' : '' ?>>
                                            <a href="/about">
                                                <i class="icon-user"></i>
                                                <br />About</a>
                                        </li>
                                    </ul>
                                    <!-- <form class="navbar-search pull-right" action="<?php echo url('search') ?>" _lpchecked="1">
                                        <input type="search" class="search-query span2" name="q" id="q" placeholder="Search">
                                    </form>
-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>