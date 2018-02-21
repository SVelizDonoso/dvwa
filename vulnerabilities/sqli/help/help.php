<div class="body_padded">
	<h1>Ayuda - Inyección SQL </h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>Un ataque de inyección SQL consiste en la inserción o "inyección" de una consulta SQL a través de los datos de entrada del cliente a la aplicación.
Un exploit de inyección SQL exitoso puede leer datos confidenciales de la base de datos, modificar los datos de la base de datos (insertar / actualizar / eliminar), ejecutar operaciones de administración en la base de datos
(como apagar el DBMS), recuperar el contenido de un archivo dado presente en el sistema de archivos DBMS (load_file) y en algunos casos emitir comandos al sistema operativo.</p>

		<p>Los ataques de inyección SQL son un tipo de ataque de inyección, en el que los comandos SQL se inyectan en la entrada del plano de datos para efectuar la ejecución de comandos SQL predefinidos.</p>

		<p>Este ataque también se puede llamar "SQLi".</p>

		<br /><hr /><br />

		<h3>Objectivos</h3>
		<p>Hay 5 usuarios en la base de datos, con id del 1 al 5. Su misión ... robar sus contraseñas a través de SQLi.</p>

		<br /><hr /><br />

		<h3>Nivel Low</h3>
		<p>La consulta SQL usa entrada RAW que está directamente controlada por el atacante. Todo lo que necesitan hacer es escapar de la consulta y luego pueden
                para ejecutar cualquier consulta SQL que deseen.</p>
		<pre>Spoiler: <span class="spoiler">?id=a' UNION SELECT "text1","text2";-- -&Submit=Submit</span>.</pre>

		<br />

		<h3>Nivel Medium</h3>
		<p>El nivel medio usa una forma de protección de inyección SQL, con la función de
			"<?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/en/function.mysql-real-escape-string.php', 'mysql_real_escape_string()' ); ?>".
			Sin embargo, debido a que la consulta SQL no tiene comillas alrededor del parámetro, esto no protegerá por completo la consulta de la alteración.</p>

		<p>El cuadro de texto ha sido reemplazado por una lista desplegable predefinida y usa POST para enviar el formulario.</p>
		<pre>Spoiler: <span class="spoiler">?id=a UNION SELECT 1,2;-- -&Submit=Submit</span>.</pre>

		<br />

		<h3>Nivel High</h3>
		<p>Esto es muy similar al nivel bajo, sin embargo esta vez el atacante debe ingresar el valor de una manera diferente.
                 Los valores de entrada se transfieren a la consulta vulnerable a través de variables de sesión utilizando otra página, en lugar de una solicitud GET directa.</p>
		<pre>Spoiler: <span class="spoiler">ID: a' UNION SELECT "text1","text2";-- -&Submit=Submit</span>.</pre>

		<br />

		<h3>Nivel Impossible</h3>
		<p>Las consultas ahora son consultas parametrizadas (en lugar de ser dinámicas). Esto significa que la consulta ha sido definida por el desarrollador,
y ha distinguido qué secciones son código, y el resto son datos.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/SQL_Injection' ); ?></p>
</div>
