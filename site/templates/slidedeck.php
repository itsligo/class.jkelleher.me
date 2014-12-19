<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/assets/css/slides.css">
    <title>Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <style type="text/css">
      /* Slideshow styles */
    </style>
      <script src="http://gnab.github.io/remark/downloads/remark-0.5.5.min.js" type="text/javascript">
        </script>
      
      <link rel="stylesheet" href="http://yandex.st/highlightjs/7.3/styles/default.min.css">
<!--      <script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>-->
      <script src="/assets/js/remark.language.js" type="text/javascript"></script>
  </head>
    <body>
<!--        Note that php code in textarea must not have LF/CR below -->
<textarea id="source"><?= html($page->slides()) ?></textarea>
        <script type="text/javascript">
          var slideshow = remark.create({
          highlightStyle: 'monokai',
          highlightLanguage: 'remark'
        }) ;
        </script>
    </body>
</html>