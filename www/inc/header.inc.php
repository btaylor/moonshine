<?php
    $is_home = $_SERVER["PHP_SELF"] == "/index.php";
    $browser_is_ie = strpos ($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Moonshine<?php echo isset ($page_meta["title"]) ? " - " . $page_meta["title"] : "" ?></title>
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" title="default stylesheet" charset="utf-8" />
    <link rel="stylesheet" href="/js/fancybox/fancy.css" type="text/css" media="screen" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.color.js"></script>
    <script type="text/javascript" src="/js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/fancybox/jquery.pngFix.pack.js"></script>
    <script type="text/javascript" src="/js/moonshine.js"></script>
<?php //if (!$browser_is_ie) { ?>
    <script type="text/javascript" src="/js/cufon-yui.js"></script>
    <script type="text/javascript" src="/js/RaveIn_500-RaveIn_700.font.js"></script>
<?php //} ?>
    <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
    <script type="text/javascript">
        /*try {
            var pageTracker = _gat._getTracker ("UA-2679312-3");
            pageTracker._trackPageview ();
        } catch (err) {
        }*/
    </script>
  </head>
  <body>
  
  <div class="navigation<?php if ($is_home) echo " navigation-animation"?>">
    <div>
<?php if (!$is_home) { ?>
      <a href="index.php" class="first"><span>Home</span></a>
<?php } ?>
      <a href="faq.php"><span>FAQ</span></a>
      <a href="samples.php"><span>Samples</span></a>
      <a href="download.php"><span>Download</span></a>
    </div>
  </div>
  
<?php if (isset ($page_meta["page-heading"])) { ?>
  <div class="pageheading">
    <div>
      <h1><?php echo $page_meta["page-heading"]?></h1>
    </div>
  </div>
<?php } ?>

<?php if (!$is_home) { ?>
  <div id="main_container">
<?php } ?>
