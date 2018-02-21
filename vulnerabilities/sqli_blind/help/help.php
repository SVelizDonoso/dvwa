<div class="body_padded">
	<h1>Ayuda - Inyección SQL (Ciegas)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>Cuando un atacante ejecuta ataques de inyección SQL, a veces el servidor responde con mensajes de error del servidor de la base de datos quejándose de que la sintaxis de la consulta SQL es incorrecta. La inyección a ciegas de SQL es idéntica a la inyección de SQL normal, excepto que cuando un atacante intenta explotar una aplicación, en lugar de recibir un mensaje de error útil,obtienen una página genérica especificada por el desarrollador en su lugar. Esto hace que explotar un posible ataque de inyección SQL sea más difícil pero no imposible.Un atacante aún puede robar datos al hacer una serie de preguntas verdaderas y falsas a través de declaraciones SQL y monitorear cómo responde la aplicación web(entrada válida reenumerada o conjunto de encabezado 404).</p>

		<p>El método de inyección "basado en el tiempo" a menudo se usa cuando no hay comentarios visibles sobre cómo la página es diferente en su respuesta (de ahí que un ataque es a ciegas).
		 	Esto significa que el atacante esperará para ver cuánto tarda la página en responder la respuesta. Si lleva más tiempo de lo normal, su consulta fue exitosa.</p>

		<br /><hr /><br />

		<h3>Objectivo</h3>
		<p>Encuentre la versión del software de base de datos SQL a través de un ataque SQL ciego.</p>

		<br /><hr /><br />

		<h3>Nivel Low</h3>
		<p>La consulta SQL usa entrada RAW que está directamente controlada por el atacante. Todo lo que necesitan hacer es escapar de la consulta y luego pueden
                  para ejecutar cualquier consulta SQL que deseen.</p>
		<pre>Spoiler: <span class="spoiler">?id=1' AND sleep 5&Submit=Submit</span>.</pre>

		<br />

		<h3>Nivel Medium</h3>
		<p>El nivel medio usa una forma de protección de inyección SQL, con la función de
			"<?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/en/function.mysql-real-escape-string.php', 'mysql_real_escape_string()' ); ?>".
			Sin embargo, debido a que la consulta SQL no tiene comillas alrededor del parámetro, esto no protegerá por completo la consulta de la alteración.</p>

		<p>El cuadro de texto ha sido reemplazado por una lista desplegable predefinida y usa POST para enviar el formulario.</p>
		<pre>Spoiler: <span class="spoiler">?id=1 AND sleep 3&Submit=Submit</span>.</pre>

		<br />

		<h3>Nivel High</h3>
		<p>Esto es muy similar al nivel bajo, sin embargo esta vez el atacante está ingresando el valor de una manera diferente.
		Los valores de entrada se establecen en una página diferente, en lugar de una solicitud GET.</p>
		<pre>Spoiler: <span class="spoiler">ID: 1' AND sleep 10&Submit=Submit</span>.
			Spoiler: <span class="spoiler">Debería ser capaz de evadir al hombre del medio.</span>.</pre>

		<br />

		<h3>Nivel Impossible</h3>
		<p>Las consultas ahora son consultas parametrizadas (en lugar de ser dinámicas). Esto significa que la consulta ha sido definida por el desarrollador,
y ha distinguido qué secciones son código, y el resto son datos.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Blind_SQL_Injection' ); ?></p>
</div>
