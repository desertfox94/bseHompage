<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:13
         compiled from "tpl\kontakt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20383533eb009f35e87-81449025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a85c258b92eddeb4883a75b084b71e2e023bf5' => 
    array (
      0 => 'tpl\\kontakt.tpl',
      1 => 1396642253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20383533eb009f35e87-81449025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533eb00a059b35_12090886',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb00a059b35_12090886')) {function content_533eb00a059b35_12090886($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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

        <form class="contactForm">
        	<label for="name">Name </label></br>
        	<span class="contactError" id="FormNameError"></span>
			<input type="text" id="formName" class="form-control" id="exampleInputText1">

			<label for="email">Email </label></br>
			<span class="contactError" id="FormEmailError"></span>
        	<input type="email" id="formEmail" class="form-control" id="exampleInputEmail1">

        	<label for="nachricht">Nachricht </label></br>
        	<span class="contactError" id="FormTextError"></span>
        	<textarea id="formText" class="form-control" rows="8"></textarea>
        	<br>
        	<a id="formSubmit" class="btn btn-primary">Abschicken</a>
        	<span id="formSuccess"></span>
        </form>

	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html><?php }} ?>
