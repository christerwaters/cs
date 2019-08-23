<!DOCTYPE html>
<html>
  <head>
    <title> Christer Waters - WTRS.dev - Freelance designer & developer</title> <!-- Set the title of the page, this shows up in google etc. as well -->
    <link rel="font" type="font/woff2" href="<?php bloginfo('template_directory'); ?>/fonts/gordita-medium.woff2">
    <link rel="font" type="font/woff2" href="<?php bloginfo('template_directory'); ?>/fonts/gordita-bold.woff2">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css"> <!-- stylesheet for this page -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msapplication-TileColor" content="#1590D1">
    <meta name="theme-color" content="#1590D1">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@christerwaters" />
    <meta name="twitter:creator" content="@christerwaters" />
    <meta property="og:url" content="https://wtrs.dev" />
    <meta property="og:title" content="Christer Waters - WTRS.dev - Freelance Designer & Developer" />
    <meta property="og:description" content="I build human-friendly websites, always optimized for search-engines and any device. I also create artworks in the form of still and moving imagry (video and photo)." />
    <link href="https://fonts.googleapis.com/css?family=Space+Mono&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Martel&display=swap" rel="stylesheet">

  </head>
  <body>

<?php
 include 'core/loop_portfolio.php';
?>
<!-- Get all the pages -->
<?php
  include 'core/loop_pages.php';
?>
<!-- Get everything right before </body> tag -->
<?php
  include 'core/get_bottom.php';
?>
