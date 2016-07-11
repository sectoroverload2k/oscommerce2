<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

use OSC\OM\OSCOM;
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo TITLE; ?></title>
<base href="<?php echo ($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_ADMIN : HTTP_SERVER . DIR_WS_ADMIN; ?>" />
<!--[if IE]><script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/flot/excanvas.min.js', '', 'SSL'); ?>"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo OSCOM::link('Shop/ext/jquery/ui/redmond/jquery-ui-1.11.4.min.css', '', 'SSL'); ?>">
<script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/jquery/jquery-2.2.3.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/jquery/ui/jquery-ui-1.11.4.min.js', '', 'SSL'); ?>"></script>

<link href="<?php echo OSCOM::link('Shop/ext/bootstrap/css/bootstrap.min.css', '', 'SSL'); ?>" rel="stylesheet">

<link href="<?php echo OSCOM::link('Shop/ext/font-awesome/4.6.3/css/font-awesome.min.css', '', 'SSL'); ?>" rel="stylesheet">

<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/jquery/ui/i18n/datepicker-' . JQUERY_DATEPICKER_I18N_CODE . '.js', '', 'SSL'); ?>"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>

<script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/flot/jquery.flot.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo OSCOM::link('Shop/ext/flot/jquery.flot.time.min.js', '', 'SSL'); ?>"></script>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<script type="text/javascript" src="includes/general.js"></script>
</head>
<body>

<?php require(DIR_WS_INCLUDES . 'header.php'); ?>

<?php
  if (isset($_SESSION['admin'])) {
    include(DIR_WS_INCLUDES . 'column_left.php');
  } else {
?>

<style>
#contentText {
  margin-left: 0;
}
</style>

<?php
  }
?>

<div id="contentText">
