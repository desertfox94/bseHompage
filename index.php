<?php
include_once'include/settings.php';

//site handler
if(!isset($_GET['site'])){
	$_GET['site'] = null;
}

	switch($_GET['site']) {

		case "start":
			$smarty->assign('title','Startseite');
			$smarty->display('startseite.tpl');
			break;

		case "fachgruppe":
			$smarty->assign('title','Fachgruppe');
			$smarty->display('fachgruppe.tpl');
			break;

		case "gallerie":
			$smarty->assign('title','Gallerie');
			$smarty->display('gallerie.tpl');
			break;

		case "termine":
			$smarty->assign('title','Termine');
			$smarty->display('termine.tpl');
			break;

		case "anfahrt":
			$smarty->assign('title','Anfahrt');
			$smarty->display('anfahrt.tpl');
			break;

		case "gaestebuch":
			$smarty->assign('title','Gästebuch');
			$smarty->display('gaestebuch.tpl');
			break;

		case "kontakt":
			if(isset($_POST['contactName'])){
				$contactName = htmlentities(trim($_POST['contactName']));
				$contactEmail = htmlentities(trim($_POST['contactEmail']));
				$contactText = htmlentities(trim($_POST['contactText']));
				//call to email class
					var_dump($contactName);
			}
			$smarty->assign('title','Kontakt');
			$smarty->display('kontakt.tpl');
			break;

		case "links":
			$smarty->assign('title','Links');
			$smarty->display('links.tpl');
			break;

		case "infos":
			$smarty->assign('title','Infos');
			$smarty->display('infos.tpl');
			break;

		case "pruefungsrechner":
			$smarty->assign('title','Prüfungsrechner');
			$smarty->display('pruefungsrechner.tpl');
			break;

		default:
			$smarty->assign('title','Startseite');
			$smarty->display('startseite.tpl');
	}
