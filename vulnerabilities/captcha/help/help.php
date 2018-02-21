<div class="body_padded">
	<h1>ayuda - CAPTCHA Inseguro</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>Un <?php echo dvwaExternalLinkUrlGet( 'http://www.captcha.net/', 'CAPTCHA' ); ?> Es un programa que puede decir si su usuario es un humano o una computadora. Probablemente has visto
ellos - imágenes coloridas con texto distorsionado en la parte inferior de los formularios de registro web. Los CAPTCHA son utilizados por muchos sitios web para evitar el abuso de
"bots", o programas automatizados generalmente escritos para generar spam. Ningún programa de computadora puede leer texto distorsionado tan bien como los humanos, así que los bots
no puede navegar por sitios protegidos por CAPTCHA.</p>

		<p>Los CAPTCHA se usan a menudo para proteger la funcionalidad sensible de los bots automatizados. Dicha funcionalidad generalmente incluye el registro y los cambios del usuario,
cambios de contraseña y publicación de contenido. En este ejemplo, el CAPTCHA protege la funcionalidad de cambio de contraseña para la cuenta de usuario. Esto proporciona
protección limitada de ataques CSRF así como adivinación automática de bots.</p>

		<br /><hr /><br />

		<h3>Objetivo</h3>
		<p>Su objetivo es cambiar la contraseña del usuario actual de manera automática debido al sistema CAPTCHA deficiente.</p>

		<br /><hr /><br />

		<h3>Nivel Low </h3>
		<p>El problema con este CAPTCHA es que se puede omitir fácilmente. El desarrollador ha asumido que todos los usuarios avanzarán a través de la pantalla 1, completarán el CAPTCHA y luego
pasar a la siguiente pantalla donde la contraseña realmente se actualiza. Al enviar la nueva contraseña directamente a la página de cambio, el usuario puede omitir el sistema CAPTCHA.</p>

		<p>Los parámetros necesarios para completar este desafío en baja seguridad serían similares a los siguientes:</p>
		<pre>Spoiler: <span class="spoiler">?step=2&password_new=password&password_conf=password&Change=Change</span>.</pre>

		<br />

		<h3>Nivel Medium</h3>
		<p>El desarrollador ha intentado colocar el estado alrededor de la sesión y realizar un seguimiento de si el usuario completó con éxito el CAPTCHA antes de enviar datos. Porque la variable de estado (Spoiler: <span class = "spoiler"> passed_captcha </span>) está en el lado del cliente,también puede ser manipulado por el atacante así:</p>
		<pre>Spoiler: <span class="spoiler">?step=2&password_new=password&password_conf=password&passed_captcha=true&Change=Change</span>.</pre>

		<br />

		<h3>Nivel High</h3>
		<p>Ha quedado un código de desarrollo, que nunca se eliminó en producción. Es posible imitar los valores de desarrollo, para permitir
los valores inválidos se colocarán en el campo CAPTCHA.</p>
		<p>Deberá falsificar su user-agent (Spoiler: <span class="spoiler">reCAPTCHA</span>)así como también use el valor CAPTCHA de
			(Spoiler: <span class="spoiler">hidd3n_valu3</span>) para saltar la validación</p>

		<br />

		<h3>Nivel Impossible</h3>
		<p>En el nivel imposible, el desarrollador ha eliminado todas las avenidas de ataque. El proceso se ha simplificado para que los datos y la verificación CAPTCHA ocurran en un solo paso. Alternativamente, el desarrollador podría haber movido en el lado del servidor de variable de estado (desde el nivel medio), por lo que el usuario no puede modificarlo.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'http://www.captcha.net/' ); ?></p>
</div>
