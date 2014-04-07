<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:11
         compiled from "tpl\termine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20581533e9fc6be3e30-02838599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '175814d1be2462e2c2014214878d59ab23adcf6e' => 
    array (
      0 => 'tpl\\termine.tpl',
      1 => 1396642267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20581533e9fc6be3e30-02838599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533e9fc6c2f727_94449568',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9fc6c2f727_94449568')) {function content_533e9fc6c2f727_94449568($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
        <p>IT-Abschlussprüfung Sommer 2014	06.05.2014</p>
		<p>IT-Ausbilderabend	Terminierung folgt (ca. Mitte Februar 2015)</p>
		<p>IT-Zwischenprüfung 2015	Terminierung folgt (ca. Anfang März 2015)</p>


	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html><?php }} ?>
