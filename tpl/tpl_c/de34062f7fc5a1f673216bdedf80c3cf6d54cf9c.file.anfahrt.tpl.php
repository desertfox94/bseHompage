<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:51
         compiled from "tpl\anfahrt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3035533eb65fda0533-92235760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de34062f7fc5a1f673216bdedf80c3cf6d54cf9c' => 
    array (
      0 => 'tpl\\anfahrt.tpl',
      1 => 1396642233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3035533eb65fda0533-92235760',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533eb65fdfaa16_45398490',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533eb65fdfaa16_45398490')) {function content_533eb65fdfaa16_45398490($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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
        
		<div class="anfahrt">
			<h1>Anfahrt</h1>
			<iframe width="600" height="500" src="http://maps.google.de/maps?hl=de&q=Langelohe 4+(Berufliche Schule des Kreises Pinneberg in Elmshorn, Europaschule)&ie=UTF8&t=&z=15&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.siteway.de/maps-generator/" title="Google Maps für Ihre Homepage">(c) Google Maps</a></iframe>
			<br/>
		</div>

	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html>
<?php }} ?>
