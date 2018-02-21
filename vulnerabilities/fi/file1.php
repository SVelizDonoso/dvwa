<?php

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Vulnerabilidad: Inclusión de Archivos</h1>
	<div class=\"vulnerable_code_area\">
		<h3>Archivo 1</h3>
		<hr />
		Hola <em>" . dvwaCurrentUser() . "</em><br />
		Su dirección IP es: <em>{$_SERVER[ 'REMOTE_ADDR' ]}</em><br /><br />
		[<em><a href=\"?page=include.php\">Volver</a></em>]
	</div>

	<h2>Más información</h2>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Remote_File_Inclusion' ) . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Top_10_2007-A3' ) . "</li>
	</ul>
</div>\n";

?>
