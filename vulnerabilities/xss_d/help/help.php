<div class="body_padded">
	<h1>Ayuda - XSS (Basado enDOM)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>Los ataques de secuencias de comandos cruzados(XSS) "son un tipo de problema de inyección, en el cual los scripts maliciosos se inyectan en los sitios web confiables. Los ataques XSS ocurren cuando un atacante usa una aplicación web para enviar código malicioso, generalmente en la forma de un script del lado del navegador,a un usuario final diferente. Los defectos que permiten que estos ataques tengan éxito, están bastante extendidos y ocurren en cualquier lugar en una aplicación web que usa la información de un usuario en la salida,sin validarlo ni codificarlo.</p>

		<p>Un atacante puede usar XSS para enviar un script malicioso a un usuario desprevenido. El navegador del usuario final no tiene forma de saber que el script no es confiable,y ejecutará el JavaScript. Debido a que cree que el script proviene de una fuente confiable, el script malicioso puede acceder a cualquier cookie, token de sesión u otra información confidencial retenida por su navegador. Estos scripts incluso pueden reescribir el contenido de la página HTML.</p>

		<p>XSS Basado en DOM  es un caso especial en el que el código JavaScript se oculta en la URL y se extrae mediante JavaScript en la página mientras se procesa en lugar de insertarse en la página cuando se publica. Esto puede hacerlo más sigiloso que otros ataques y los WAF u otras protecciones que están leyendo el cuerpo de la página no ven ningún contenido malicioso.</p>

		<p><hr /></p>

		<h3>Objectivo</h3>
		<p>Ejecute su propio JavaScript en el navegador de otro usuario, use esto para robar la cookie de un usuario conectado.</p>

		<p><hr /></p>

		<h3>Nivel Low</h3>
		<p>El nivel bajo no verificará la entrada solicitada, antes de incluirla para ser utilizada en el texto de salida.</p>
		<pre>Spoiler: <span class="spoiler"><?=htmlentities ("/vulnerabilities/xss_d/?default=English<script>alert(1)</script>")?></span>.</pre>

		<p><br /></p>

		<h3>Nivel Medium</h3>
		<p>El desarrollador ha intentado agregar una coincidencia de patrón simple para eliminar cualquier referencia a "& lt; script" para deshabilitar cualquier JavaScript. Encuentre una forma de ejecutar JavaScript sin usar las etiquetas de script.</p>
		<pre>Spoiler: <span class="spoiler">Primero debe salir del bloque de selección y luego puede agregar una imagen con un evento onerror:<br />
<?=htmlentities ("/vulnerabilities/xss_d/?default=English>/option></select><img src='x' onerror='alert(1)'>");?></span>.</pre>

		<p><br /></p>

		<h3>Nivel High</h3>
		<p>El desarrollador ahora solo muestra los idiomas permitidos, debe encontrar una forma de ejecutar su código sin que vaya al servidor.</p>
		<pre>Spoiler: <span class="spoiler">La sección de fragmento de una URL (cualquier cosa después del símbolo #) no se envía al servidor y, por lo tanto, no se puede bloquear. El JavaScript incorrecto que se utiliza para representar la página lee su contenido al crear la página.<br />
<?=htmlentities ("/vulnerabilities/xss_d/?default=English#<script>alert(1)</script>")?></span>.</pre>

		<p><br /></p>

		<h3>Nivel Impossible</h3>
		<p>Los contenidos tomados de la URL están codificados de forma predeterminada por la mayoría de los navegadores, lo que impide que se ejecute JavaScript inyectado.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)' ); ?></p>
</div>
