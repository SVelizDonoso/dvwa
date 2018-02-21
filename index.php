<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Bienvenido' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Bienvenido a Damn Vulnerable Web Application!</h1>
	<p>Damn Vulnerable Web Application (DVWA) es una aplicación web PHP / MySQL que es muy vulnerable. Su objetivo principal es ayudar a los profesionales de seguridad a probar sus habilidades y herramientas en un entorno legal, ayudar a los desarrolladores web a comprender mejor los procesos de protección de aplicaciones web y ayudar a los estudiantes y profesores a conocer la seguridad de las aplicaciones web en una clase con ambiente controlado.</p>
	<p>El objetivo de DVWA es <em> practicar algunas de las vulnerabilidades web más comunes </em>, con <em> varios niveles de dificultad </em>, con una interfaz sencilla y directa.</p>
	<hr />
	<br />

	<h2>Instrucciones Generales</h2>
	<p>Depende del usuario cómo aproveche la herramienta DVWA. Ya sea trabajando en cada módulo a un nivel fijo, o seleccionando cualquier módulo y trabajando hasta alcanzar el nivel más alto que puedan antes de pasar al próximo. No hay un objeto fijo para completar un módulo; sin embargo, los usuarios deben sentir que han explotado exitosamente el sistema de la mejor manera posible usando esa vulnerabilidad en particular.</p>
	<p>Tenga en cuenta que hay <em> vulnerabilidades documentadas y no documentadas </em> con este software. Esto es intencional. Le recomendamos que trate de descubrir tantos fallos de seguridad como sea posible.</p>
	<p>DVWA también incluye un Web Application Firewall (WAF), PHPIDS, que se puede habilitar en cualquier etapa para aumentar aún más la dificultad. Esto demostrará cómo otra capa de seguridad puede bloquear ciertas acciones maliciosas. Tenga en cuenta que también existen varios métodos públicos para eludir estas protecciones (¡así que esto puede verse como una extensión para usuarios más avanzados)!</p>
	<p>Hay un botón de ayuda en la parte inferior de cada página, que le permite ver consejos y sugerencias para la vulnerabilidad. También hay enlaces adicionales para leer más a fondo, que se relacionan con ese problema de seguridad.</p>
	<hr />
	<br />

	<h2>¡ADVERTENCIA!</h2>
	<p>Damn Vulnerable Web Application  es extremadamente vulnerable! <em> No lo cargue en la carpeta html pública de su proveedor de hosting ni en ningún servidor con acceso a Internet </em>, ya que se verán comprometidos. Se recomienda usar una máquina virtual (como " . dvwaExternalLinkUrlGet( 'https://www.virtualbox.org/','VirtualBox' ) . " o " . dvwaExternalLinkUrlGet( 'https://www.vmware.com/','VMware' ) . "), que está configurado en modo de red NAT. Dentro de una máquina virtual " . dvwaExternalLinkUrlGet( 'https://www.apachefriends.org/en/xampp.html','XAMPP' ) . "  para el servidor web y la base de datos.</p>
	<br />
	<h3>Declaración</h3>
	<p>No nos responsabilizamos por la forma en que alguien use esta aplicación (DVWA). Hemos aclarado los propósitos de la aplicación y no debe usarse de forma malintencionada. Hemos advertido y tomado medidas para evitar que los usuarios instalen DVWA en servidores web activos. Si su servidor web está comprometido a través de una instalación de DVWA, no es nuestra responsabilidad, es responsabilidad de la/s persona/s que lo cargó e instaló.</p>
	<hr />
	<br />

	<h2>Más Recursos de Capacitación</h2>
	<p>DVWA tiene como objetivo cubrir las vulnerabilidades más comunes que se encuentran en las aplicaciones web de hoy. Sin embargo, hay muchos otros problemas con las aplicaciones web. Si desea explorar cualquier vector de ataque adicional o desea desafíos más difíciles, le recomendamos que consulte los siguientes proyectos:</p>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'http://www.itsecgames.com/', 'bWAPP') . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'http://sourceforge.net/projects/mutillidae/files/mutillidae-project/', 'NOWASP') . " (anteriormente conocido como " . dvwaExternalLinkUrlGet( 'http://www.irongeek.com/i.php?page=mutillidae/mutillidae-deliberately-vulnerable-php-owasp-top-10', 'Mutillidae' ) . ")</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/OWASP_Broken_Web_Applications_Project', 'OWASP Broken Web Applications Project') . "</li>
                <li>" . dvwaExternalLinkUrlGet( 'https://github.com/SVelizDonoso/asyrv', 'ASYRV') . "</li>
                <li>" . dvwaExternalLinkUrlGet( 'https://github.com/SVelizDonoso/xvwa', 'XVWA en español') . "</li>
	</ul>
	<hr />
	<br />
</div>";

dvwaHtmlEcho( $page );

?>
