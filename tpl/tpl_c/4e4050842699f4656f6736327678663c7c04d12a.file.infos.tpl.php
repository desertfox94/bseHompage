<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:12:03
         compiled from "tpl\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14154533eb02c09dbb2-75375094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4050842699f4656f6736327678663c7c04d12a' => 
    array (
      0 => 'tpl\\infos.tpl',
      1 => 1396642249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14154533eb02c09dbb2-75375094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533eb02c105c00_36194198',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb02c105c00_36194198')) {function content_533eb02c105c00_36194198($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
