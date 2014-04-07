<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:10
         compiled from "tpl\gallerie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5468533e9fc50052d5-97256239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6600c86be83844c778a37b5f64e9a3c010e20394' => 
    array (
      0 => 'tpl\\gallerie.tpl',
      1 => 1396642246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5468533e9fc50052d5-97256239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533e9fc505b7a8_76255151',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9fc505b7a8_76255151')) {function content_533e9fc505b7a8_76255151($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/colorbox.css">
	
	<script>
		jQuery(function(){
			jQuery(".group1").colorbox({rel:'group1'});
		});
	</script>
	
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
		<div class="galleryDiv">
			<a class='group1' title="w00t?" href="img/Bild_001.jpg"><img src="img/Bild_001.jpg" alt="Bild_001" width="250"></a>
			<a class='group1' title="Hart am Denken" href="img/Bild_002.jpg"><img src="img/Bild_002.jpg" alt="Bild_002" width="250"></a>
			<a class='group1' title="Unfallgefahr!!!" href="img/Bild_003.jpg"><img src="img/Bild_003.jpg" alt="Bild_003" width="250"></a>
			<a class='group1' title="tolles Bild" href="img/Bild_004.jpg"><img src="img/Bild_004.jpg" alt="Bild_004" width="250"></a>
			<a class='group1' title="Clean me, please?" href="img/Bild_010.jpg"><img src="img/Bild_010.jpg" alt="Bild_010" width="250"></a>
			<a class='group1' title="High Tech" href="img/Bild_011.jpg"><img src="img/Bild_011.jpg" alt="Bild_011" width="250"></a>	
		</div>
	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html><?php }} ?>
