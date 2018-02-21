<div class="body_padded">
	<h1>Ayuda - Fuerza Bruta (Login)</h1>

	<div id="code">
	<table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
	<tr>
	<td><div id="code">
		<h3>Acerca de</h3>
		<p>El descifrado de contraseñas es el proceso de recuperación de contraseñas a partir de datos almacenados o transmitidos por un sistema informático.
                   Un enfoque común es intentar repetidamente adivinar la contraseña.</p>

		<p>Los usuarios a menudo eligen contraseñas débiles. Ejemplos de opciones inseguras incluyen palabras sueltas que se encuentran en los diccionarios, nombres de familia, cualquier contraseña demasiado corta(generalmente se cree que tiene menos de 6 o 7 caracteres) o patrones predecibles(por ejemplo, vocales y consonantes, lo que se conoce como leetspeak, por lo que "contraseña" se convierte en "p@55w0rd").</p>

		<p>La creación de listas de palabras específicas, que se genera hacia el objetivo, a menudo da la mayor tasa de éxito. Hay herramientas públicas que crearán un diccionario
basado en una combinación de sitios web de la empresa, redes sociales personales y otra información común (como cumpleaños o año de graduación).

		<p>Un último recurso es probar cada contraseña posible, conocida como ataque de fuerza bruta. En teoría, si no hay límite para el número de intentos, un ataque de fuerza bruta siempre tendra éxito, ya que las reglas para contraseñas aceptables deben ser conocidas públicamente; pero a medida que aumenta la longitud de la contraseña, también aumenta la cantidad de contraseñas posibles, haciendo que el tiempo de ataque sea más largo.</p>

		<br /><hr /><br />

		<h3>Objetivo</h3>
		<p>Su objetivo es obtener la contraseña del administrador mediante el uso de fuerza bruta. ¡Puntos de bonificación por obtener las otras cuatro contraseñas de usuario!</p>

		<br /><hr /><br />

		<h3>Nivel Low </h3>
		<p>El desarrollador ha omitido por completo todos los métodos de protección, lo que permite que cualquiera intente tantas veces como lo desee, para iniciar sesión con cualquier usuario sin ninguna repercusión.</p>

		<br />

		<h3>Nivel Medium</h3>
		<p>Esta etapa agrega un descanso en la pantalla de inicio de sesión fallida. Esto significa que cuando inicie sesión incorrectamente, habrá una espera adicional de dos segundos antes de que la página esté visible.</p>

		<p>Esto solo ralentizará la cantidad de solicitudes que pueden procesarse por minuto, lo que hace que sea más largo que la fuerza bruta.</p>

		<br />

		<h3>Nivel High</h3>
		<p>Se ha utilizado un "token anti falsificación de solicitud entre sitios (CSRF)". Existe un viejo mito de que esta protección detendrá los ataques de fuerza bruta. Este no es el caso.
Este nivel también se extiende en el nivel medio, esperando cuando hay un inicio de sesión fallido, pero esta vez es una cantidad aleatoria de tiempo entre dos y cuatro segundos.
La idea de esto es intentar confundir cualquier predicción de tiempo.</p>

		<p>Usando un <?php echo dvwaExternalLinkUrlGet( 'http://www.captcha.net/', 'CAPTCHA' ); ?> formulario podría tener un efecto similar a un token CSRF.</p>

		<br />

		<h3>Nivel Impossible</h3>
		<p>La fuerza bruta (y la enumeración del usuario) no debería ser posible en el nivel imposible. El desarrollador ha agregado una función de "bloqueo", donde si hay cinco inicios de sesión incorrectos dentro
los últimos 15 minutos, el usuario bloqueado no puede iniciar sesión.</p>

		<p>Si el usuario bloqueado intenta iniciar sesión, incluso con una contraseña válida, dirá que su nombre de usuario o contraseña es incorrecto. Esto hará que sea imposible saber
si hay una cuenta válida en el sistema, con esa contraseña, y si la cuenta está bloqueada.</p>

		<p>Esto puede causar una "denegación de servicio" (DoS), haciendo que alguien intente continuamente ingresar a la cuenta de alguien.
Este nivel debería extenderse poniendo en lista negra al atacante (por ejemplo, dirección IP, país, agente de usuario).</p>
	</div></td>
	</tr>
	</table>

	</div>

	<br />

	<p>Referencia: <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Password_cracking' ); ?></p>
</div>
