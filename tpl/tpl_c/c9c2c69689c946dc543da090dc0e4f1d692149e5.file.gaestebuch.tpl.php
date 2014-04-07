<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:12
         compiled from "tpl\gaestebuch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32163533ea42c84ba77-49410440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c2c69689c946dc543da090dc0e4f1d692149e5' => 
    array (
      0 => 'tpl\\gaestebuch.tpl',
      1 => 1396642242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32163533ea42c84ba77-49410440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533ea42c8a6388_88583005',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ea42c8a6388_88583005')) {function content_533ea42c8a6388_88583005($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
<div class="wrapper">
	<div class="head">
		 <?php echo $_smarty_tpl->getSubTemplate ('navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     	<img src="img/logo.png" height="91" width="186" alt="berufsschul_logo">
     	<h2 class="title">Berufliche Schule Elmshorn IT-Abteilung</h2>
	</div>
	<div class="content">
        <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html><?php }} ?>
