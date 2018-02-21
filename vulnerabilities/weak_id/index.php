<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Vulnerabilidad: ID de Sesión Débil' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'weak_id';
$page[ 'help_button' ]   = 'weak_id';
$page[ 'source_button' ] = 'weak_id';
dvwaDatabaseConnect();

$method            = 'GET';
$vulnerabilityFile = '';
switch( $_COOKIE[ 'security' ] ) {
	case 'low':
		$vulnerabilityFile = 'low.php';
		break;
	case 'medium':
		$vulnerabilityFile = 'medium.php';
		break;
	case 'high':
		$vulnerabilityFile = 'high.php';
		break;
	default:
		$vulnerabilityFile = 'impossible.php';
		$method = 'POST';
		break;
}

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/weak_id/source/{$vulnerabilityFile}";


$page[ 'body' ] .= <<<EOF
<div class="body_padded">
	<h1>Vulnerabilidad: ID de Sesión Débil</h1>
	<p>
		Esta página establecerá una nueva cookie llamada dvwaSession cada vez que se haga clic en el botón.<br />
	</p>
	<form method="post">
		<input type="submit" value="Generar Cookie" />
	</form>
$html

EOF;

/*
Maybe display this, don't think it is needed though
if (isset ($cookie_value)) {
	$page[ 'body' ] .= <<<EOF
	El nuevo valor de cookie es $cookie_value
EOF;
}
*/

dvwaHtmlEcho( $page );

?>
