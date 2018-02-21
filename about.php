<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Acerca de' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'about';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h2>Acerca de</h2>
	<p>Version " . dvwaVersionGet() . " (Fecha de lanzamiento: " . dvwaReleaseDateGet() . ")</p>
	<p>Damn Vulnerable Web Application (DVWA) es una aplicación web PHP / MySQL que es muy vulnerable. Sus principales objetivos son ayudar a los profesionales de seguridad a probar sus habilidades y herramientas en un entorno legal, ayudar a los desarrolladores web a comprender mejor los procesos de seguridad de las aplicaciones web y ayudar a los profesores / estudiantes a enseñar / aprender seguridad de aplicaciones web en un entorno controlado.</p>
	<p>La documentación oficial para DVWA se puede encontrar<a href=\"docs/DVWA_v1.3.pdf\">here</a>.</p>
	<p>Todo el material es copyright 2008-2015 RandomStorm & Ryan Dewhurst.</p>

	<h2>Links</h2>
	<ul>
		<li>Homepage: " . dvwaExternalLinkUrlGet( 'http://www.dvwa.co.uk/' ) . "</li>
		<li>Project Home: " . dvwaExternalLinkUrlGet( 'https://github.com/RandomStorm/DVWA' ) . "</li>
		<li>Bug Tracker: " . dvwaExternalLinkUrlGet( 'https://github.com/RandomStorm/DVWA/issues' ) . "</li>
		<li>Souce Control: " . dvwaExternalLinkUrlGet( 'https://github.com/RandomStorm/DVWA/commits/master' ) . "</li>
		<li>Wiki: " . dvwaExternalLinkUrlGet( 'https://github.com/RandomStorm/DVWA/wiki' ) . "</li>
	</ul>

	<h2>Creditos</h2>
	<ul>
		<li>Brooks Garrett: " . dvwaExternalLinkUrlGet( 'http://brooksgarrett.com/','www.brooksgarrett.com' ) . "</li>
		<li>Craig</li>
		<li>g0tmi1k: " . dvwaExternalLinkUrlGet( 'https://blog.g0tmi1k.com/','g0tmi1k.com' ) . "</li>
		<li>Jamesr: " . dvwaExternalLinkUrlGet( 'https://www.creativenucleus.com/','www.creativenucleus.com' ) . " / " . dvwaExternalLinkUrlGet( 'http://www.designnewcastle.co.uk/','www.designnewcastle.co.uk' ) . "</li>
		<li>Jason Jones: " . dvwaExternalLinkUrlGet( 'http://www.linux-ninja.com/','www.linux-ninja.com' ) . "</li>
		<li>RandomStorm: " . dvwaExternalLinkUrlGet( 'https://www.randomstorm.com/','www.randomstorm.com' ) . "</li>
		<li>Ryan Dewhurst: " . dvwaExternalLinkUrlGet( 'https://www.dewhurstsecurity.com/','www.dewhurstsecurity.com' ) . "</li>
		<li>Shinkurt: " . dvwaExternalLinkUrlGet( 'http://www.paulosyibelo.com/','www.paulosyibelo.com' ) . "</li>
		<li>Tedi Heriyanto: " . dvwaExternalLinkUrlGet( 'http://tedi.heriyanto.net/','tedi.heriyanto.net' ) . "</li>
		<li>Tom Mackenzie: " . dvwaExternalLinkUrlGet( 'https://www.tmacuk.co.uk/','www.tmacuk.co.uk' ) . "</li>
                <li>Sveliz: " . dvwaExternalLinkUrlGet( 'https://github.com/SVelizDonoso','https://github.com/SVelizDonoso' ) . "</li>
	</ul>
	<ul>
		<li>PHPIDS - Copyright (c) 2007 " . dvwaExternalLinkUrlGet( 'http://github.com/PHPIDS/PHPIDS', 'PHPIDS group' ) . "</li>
	</ul>

	<h2>Licencia</h2>
	<p>Damn Vulnerable Web Application (DVWA) es software libre: puede redistribuirlo y / o modificar
          bajo los términos de la Licencia Pública General de GNU publicada por
          la Free Software Foundation, ya sea la versión 3 de la Licencia, o
          (a su elección) cualquier versión posterior.</p>
	<p>La biblioteca PHPIDS está incluida, de buena fe, con esta distribución DVWA. La operación de PHPIDS se proporciona sin el apoyo del equipo de DVWA. Está licenciado bajo<a href=\"" . DVWA_WEB_PAGE_TO_ROOT . "instructions.php?doc=PHPIDS-license\">términos separados</a> al código DVWA.</p>

	<h2>Desarrollo</h2>
	<p>Todos son bienvenidos para contribuir y ayudar a que DVWA sea todo lo exitoso que pueda ser. Todos los colaboradores pueden tener su nombre y enlace (si así lo desean) en la sección de créditos. Para contribuir, elija un Problema desde el Inicio del Proyecto para trabajar o enviar un parche a la lista de Problemas.</p>
</div>\n";

dvwaHtmlEcho( $page );

exit;

?>
