<?php
//error reporting
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//smarty
include_once'include/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('tpl/tpl_c');
$smarty->setCacheDir('tpl/cache');
$smarty->setConfigDir('tpl/configs');

//SQL




