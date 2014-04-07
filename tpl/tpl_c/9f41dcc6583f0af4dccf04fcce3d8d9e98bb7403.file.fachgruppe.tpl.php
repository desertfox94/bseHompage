<?php /* Smarty version Smarty-3.1.17, created on 2014-04-04 20:11:17
         compiled from "tpl\fachgruppe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1999533e9fc2009415-71401122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f41dcc6583f0af4dccf04fcce3d8d9e98bb7403' => 
    array (
      0 => 'tpl\\fachgruppe.tpl',
      1 => 1396642238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1999533e9fc2009415-71401122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_533e9fc20604b3_89192937',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e9fc20604b3_89192937')) {function content_533e9fc20604b3_89192937($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	Darstellung der IT-Fachgruppe der Berufsschule Elmshorn

	An der beruflichen Schule in Elmshorn werden die folgenden IT-Berufe ausgebildet:
		Fachinformatiker/-in in den Fachrichtungen: 
		Anwendungsentwicklung 
		Systemintegration 
		IT-Systemelektroniker/-in 
		IT-System-Kaufmann /-frau
		Informatikkaufmann /-frau

	Die Ausbildung der IT-Berufe erfolgt im Rahmen der dualen Ausbildung an einem bis zwei Tagen in der Woche. Die Berufsschule vermittelt in ihrem Unterricht berufsbezogene Inhalte und erweitert die Kenntnisse der Schülerinnen und Schüler im allgemeinbildenden Bereich, so dass neben der Fachkompetenz auch die wichtigen Bereiche der Methoden- und Sozialkompetenz im Unterricht erarbeitet werden können. 

	Folgende Lernfelder werden unterrichtet
		Berufsbezogene Inhalte:
		Anwendungsentwicklung (AWE)
		Einfache und erweiterte IT-Systeme (ITS)
		Betriebliche Prozesse (BeP)

		Allgemeinbildende Inhalte:
		Wirtschaft / Politik (WiPo)
		Kommunuikation (Kom)
		Englisch (E)

	Der Fachunterricht findet in Schulungs- und Praxisräumen statt, die mit moderner Technologie ausgestattet sind. Im Hinblick auf die Berufs- und Handlungsorientierung arbeiten die Auszubildenden an Geräten, die den Anforderungen in der betrieblichen Praxis entsprechen. Laborversuche und Rechneranwendungen sowie Gruppenarbeit und problemorientiertes Lernen sind integraler Bestandteil. 

	Die berufliche Schule in Elmshorn ist „Lokale Netzwerkakademie“ 
	für CISCO-Netzwerktechnik: 
	Im Rahmen des Unterrichtes und in Zusatzkursen wird den Schülern die Möglichkeit eröffnet, das CISCO-Essential-Curriculum zu bearbeiten und eine Teilnahmebescheinigung zu erwerben. (teilweise kostenpflichtig).
	</div>
	<div class="footer">
	    <a href="#">Impressum</a>
	    <a href="#">Admin Login</a>
	</div>
</div>
</body>
</html><?php }} ?>
