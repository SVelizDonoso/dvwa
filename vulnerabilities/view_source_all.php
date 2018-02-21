<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ] = 'Codigo ' . $page[ 'title_separator' ].$page[ 'title' ];

$id = $_GET[ 'id' ];

$lowsrc = @file_get_contents("./{$id}/source/low.php");
$lowsrc = str_replace( array( '$html .=' ), array( 'echo' ), $lowsrc);
$lowsrc = highlight_string( $lowsrc, true );

$medsrc = @file_get_contents("./{$id}/source/medium.php");
$medsrc = str_replace( array( '$html .=' ), array( 'echo' ), $medsrc);
$medsrc = highlight_string( $medsrc, true );

$highsrc = @file_get_contents("./{$id}/source/high.php");
$highsrc = str_replace( array( '$html .=' ), array( 'echo' ), $highsrc);
$highsrc = highlight_string( $highsrc, true );

$impsrc = @file_get_contents("./{$id}/source/impossible.php");
$impsrc = str_replace( array( '$html .=' ), array( 'echo' ), $impsrc);
$impsrc = highlight_string( $impsrc, true );

switch ($id) {
	case "fi" :
		$vuln = 'Inclusión de Archivos';
		break;
	case "brute" :
		$vuln = 'Fuerza Bruta';
		break;
	case "csrf" :
		$vuln = 'CSRF';
		break;
	case "exec" :
		$vuln = 'Inyección de Comando';
		break;
	case "sqli" :
		$vuln = 'Inyección SQL';
		break;
	case "sqli_blind" :
		$vuln = 'Inyección SQL(Ciegas)';
		break;
	case "upload" :
		$vuln = 'Subir Archivo';
		break;
	case "xss_r" :
		$vuln = 'XSS Reflejado';
		break;
	case "xss_s" :
		$vuln = 'XSS Almacenado';
		break;
	case "weak_id" :
		$vuln = 'IDs sesión Vulnerable';
		break;
	default:
		$vuln = "Vulnerabilidad Desconocida";
}

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>{$vuln}</h1>
	<br />

	<h3>Impossible {$vuln} Codigo</h3>
	<table width='100%' bgcolor='white' style=\"border:2px #C0C0C0 solid\">
		<tr>
			<td><div id=\"code\">{$impsrc}</div></td>
		</tr>
	</table>
	<br />

	<h3>High {$vuln} Codigo</h3>
	<table width='100%' bgcolor='white' style=\"border:2px #C0C0C0 solid\">
		<tr>
			<td><div id=\"code\">{$highsrc}</div></td>
		</tr>
	</table>
	<br />

	<h3>Medium {$vuln} Codigo</h3>
	<table width='100%' bgcolor='white' style=\"border:2px #C0C0C0 solid\">
		<tr>
			<td><div id=\"code\">{$medsrc}</div></td>
		</tr>
	</table>
	<br />

	<h3>Low {$vuln} Codigo</h3>
	<table width='100%' bgcolor='white' style=\"border:2px #C0C0C0 solid\">
		<tr>
			<td><div id=\"code\">{$lowsrc}</div></td>
		</tr>
	</table>
	<br /> <br />

	<form>
		<input type=\"button\" value=\"<-- Back\" onclick=\"history.go(-1);return true;\">
	</form>

</div>\n";

dvwaSourceHtmlEcho( $page );

?>
