<?php
  $wtrs_steam_loc=bloginfo('template_directory').'../wtrs-steam/';
?>
<?php
 include $wtrs_steam_loc.'top.php';
?>
<?php
 include $wtrs_steam_loc.'loop_portfolio.php';
?>
<!-- Get all the pages -->
<?php
  include $wtrs_steam_loc.'loop_pages.php';
?>
<!-- Get everything right before </body> tag -->
<?php
  include $wtrs_steam_loc.'bottom.php';
?>
