<?php

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Vulnerabilidad: Inclusión de Archivos</h1>
	<div class=\"vulnerable_code_area\">
		<h3>Archivo 2</h3>
		<hr />
		\"<em>Necesitaba una contraseña de ocho caracteres, así que elegí Blancanieves y los siete enanitos.</em>\" ~ Nick Helm<br /><br />
		[<em><a href=\"?page=include.php\">Volver</a></em>]	</div>

	<h2>Más Información</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Top_10_2007-A3' ) . "</li>
	</ul>
</div>\n";

?>
