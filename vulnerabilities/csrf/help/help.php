<div class="body_padded">
	<h1>Ayuda - Cross Site Request Forgery (CSRF)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>CSRF es un ataque que obliga a un usuario final a ejecutar acciones no deseadas en una aplicación web en la que está autenticado actualmente.
		Con un poco de ayuda de ingeniería social (como enviar un enlace por correo electrónico / chat), un atacante puede obligar a los usuarios de una aplicación web a ejecutar acciones de
		la elección del atacante.</p>

		<p>Un exploit CSRF exitoso puede comprometer los datos y la operación del usuario final en el caso de ser un usuario normal. Si el usuario final objetivo esla cuenta de administrador, esto puede comprometer toda la aplicación web.</p>

		<p>Este ataque también se puede llamar "XSRF", similar a "Cross Site Scripting (XSS)", y a menudo se usan juntos.</p>

		<br /><hr /><br />

		<h3>Objectivo</h3>
		<p>Su tarea es hacer que el usuario actual cambie su propia contraseña, sin que ellos conozcan sus acciones, utilizando un ataque CSRF.</p>

		<br /><hr /><br />

		<h3>Nivel Low</h3>
		<p>No hay medidas establecidas para protegerse contra este ataque. Esto significa que se puede diseñar un enlace para lograr una determinada acción (en este caso, cambiar la contraseña actual de los usuarios).
		Luego, con un poco de ingeniería social básica, haga clic en el enlace (o simplemente visite una página determinada) para activar la acción.</p>
		<pre>Spoiler: <span class="spoiler">?password_new=password&password_conf=password&Change=Change</span>.</pre>

		<br />

		<h3>Nivel Medium</h3>
		<p>Para el desafío de nivel medio, hay un check para ver de dónde vino la última página solicitada. El desarrollador cree que si coincide con el dominio actual,debe provenir de la aplicación web para que pueda ser confiable.</p>
		<p>Puede ser necesario vincular múltiples vulnerabilidades para explotar este vector, como el XSS reflectivo.</p>

		<br />

		<h3>Nivel High</h3>
		<p>En el nivel superior, el desarrollador ha agregado un "token anti falsificación de solicitudes entre sitios (CSRF)". Para evitar este método de protección, se requerirá otra vulnerabilidad.</p>
		<pre>Spoiler: <span class="spoiler">ejemplo: Javascript es ejecutado en el lado del cliente, en el navegador</span>.</pre>

		<br />

		<h3>Nivel Impossible</h3>
		<p>En el nivel imposible, el desafío ampliará el nivel alto y pedirá la contraseña del usuario actual. Como esto no se puede descubrir (solo puedes hacer predicciones o Fuerza bruta),no hay un vector de ataque aquí.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)' ); ?></p>
</div>
