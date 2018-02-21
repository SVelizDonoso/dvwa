<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ] .= 'Codigo ' . $page[ 'title_separator' ].$page[ 'title' ];

$id       = $_GET[ 'id' ];
$security = $_GET[ 'security' ];


switch ($id) {
	case "fi" :
		$vuln = 'Inclusión de archivos';
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
		$vuln = 'Subir archivo';
		break;
	case "xss_r" :
		$vuln = 'XSS Reflejado ';
		break;
	case "xss_s" :
		$vuln = 'XSS Almacenado';
		break;
	case "weak_id" :
		$vuln = 'IDs Sesión Vulnerable';
		break;
	default:
		$vuln = "Vulnerabilidad Desconocida";
}

$source = @file_get_contents( DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/{$id}/source/{$security}.php" );
$source = str_replace( array( '$html .=' ), array( 'echo' ), $source );

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>{$vuln} Codigo</h1>

	<div id=\"code\">
		<table width='100%' bgcolor='white' style=\"border:2px #C0C0C0 solid\">
			<tr>
				<td><div id=\"code\">" . highlight_string( $source, true ) . "</div></td>
			</tr>
		</table>
	</div>
	<br /> <br />

	<form>
		<input type=\"button\" value=\"Compara todos los Niveles\" onclick=\"window.location.href='view_source_all.php?id=$id'\">
	</form>
</div>\n";

dvwaSourceHtmlEcho( $page );

?>
