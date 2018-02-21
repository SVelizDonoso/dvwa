<div class="body_padded">
	<h1>Ayuda - ID de sesión débil</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de </h3>
		<p>El conocimiento de una ID de sesión suele ser lo único necesario para acceder a un sitio como usuario específico después de que haya iniciado sesión, si esa ID de sesión puede calcularse o adivinarse fácilmente, entonces un atacante tendrá una manera fácil de obtener acceso a cuentas de usuario sin tener que usar fuerza bruta o encontrar otras vulnerabilidades como Cross-Site Scripting.</p>

		<p><hr /></p>

		<h3>Objectivo</h3>
		<p>Este módulo utiliza cuatro formas diferentes de establecer el valor de cookie dvwaSession, el objetivo de cada nivel es determinar cómo se genera el ID y luego inferir los ID de otros usuarios del sistema.</p>

		<p><hr /></p>

		<h3>Nivel Low</h3>
		<p>El valor de la cookie debe ser muy obviamente predecible.</p>

		<h3>Nivel Medium</h3>
		<p>El valor parece un poco más aleatorio que en bajo, pero si recopila algunos IDS, debería comenzar a ver un patrón.</p>

		<h3>Nivel High</h3>
		<p>Primero, determine en qué formato está el valor y luego intente determinar qué se está utilizando como entrada para generar los valores.</p>
		<p>También se agregan marcadores adicionales a la cookie, esto no afecta el desafío, pero resalta las protecciones adicionales que se pueden agregar para proteger las cookies.</p>


		<h3>Nivel Impossible</h3>
		<p>El valor de la cookie no debe ser predecible en este nivel, pero siéntase libre de intentarlo.</p>
		<p>Además de las banderas adicionales, la cookie está vinculada al dominio y a la ruta del desafío.</p>
	</div></td>
	</tr>
	</table>

	</div>

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://www.owasp.org/index.php/Top_10_2013-A2-Broken_Authentication_and_Session_Management' ); ?></p>
</div>
