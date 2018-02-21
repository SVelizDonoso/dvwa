# DAMN VULNERABLE WEB APPLICATION

Damn Vulnerable Web Application (DVWA) es una aplicación web PHP/MySQL que es muy vulnerable. Su objetivo principal es ayudar a los profesionales de seguridad a probar sus habilidades y herramientas en un entorno legal, ayudar a los desarrolladores web a comprender mejor los procesos de protección de aplicaciones web y ayudar a los estudiantes y profesores a conocer la seguridad de las aplicaciones web en una clase con ambiente controlado. 

El objetivo de DVWA es ** practicar algunas de las vulnerabilidades web más comunes **, con ** varios niveles de dificultad **, con una interfaz sencilla y directa.
Tenga en cuenta que existen ** vulnerabilidades documentadas y no documentadas ** con este software. Esto es intencional. Le recomendamos que trate de descubrir tantos problemas como sea posible.
- - -

## Advertencia!

Damm Vulnerable Web Application es Extremadamente Vulnerable! ** No lo cargue en la carpeta html pública de su proveedor de hosting ni en ningún servidor con acceso a Internet **, ya que se verán comprometidos. Se recomienda utilizar una máquina virtual (como [VirtualBox] (https://www.virtualbox.org/) o [VMware] (https://www.vmware.com/)), que está configurada en modo de red NAT. . Dentro de una máquina invitada, puede descargar e instalar [XAMPP] (https://www.apachefriends.org/en/xampp.html) para el servidor web y la base de datos.

### Aclaración

No nos responsabilizamos por la forma en que alguien usa esta aplicación (DVWA). Hemos aclarado los propósitos de la aplicación y no debe usarse de forma malintencionada. Hemos advertido y tomado medidas para evitar que los usuarios instalen DVWA en servidores web activos. Si su servidor web está comprometido a través de una instalación de DVWA, no es nuestra responsabilidad, es responsabilidad de la/s persona/s que lo cargó e instaló.

- - -

## Licencia

Este archivo es parte de la aplicación web Damn Vulnerable (DVWA).

Damn Vulnerable Web Application (DVWA) es un software libre: puede redistribuirlo y/o modificarlo
bajo los términos de la Licencia Pública General de GNU publicada por
la Free Software Foundation, ya sea la versión 3 de la Licencia, o
(a su elección) cualquier versión posterior.

Damn Vulnerable Web Application (DVWA) se distribuye con la esperanza de que sea útil,
pero SIN NINGUNA GARANTÍA; sin siquiera la garantía implícita de
COMERCIABILIDAD o IDONEIDAD PARA UN PROPÓSITO PARTICULAR. Ver el
Licencia pública general de GNU para más detalles.

Deberías haber recibido una copia de la Licencia Pública General de GNU
junto con la aplicación web Damn Vulnerable (DVWA). Si no, vea http://www.gnu.org/licenses/.

- - -
## Descargue e instale como un contenedor de docker
- [dockerhub page](https://hub.docker.com/r/vulnerables/web-dvwa/)
`docker run --rm -it -p 80:80 vulnerables/web-dvwa`

Por favor, asegúrese de estar usando Aufs debido a problemas previos con MySQL. Ejecute `docker info` para verificar su controlador de almacenamiento. Si no es aufs, cámbialo como tal. Hay guías para cada sistema operativo sobre cómo hacer eso, pero son bastante diferentes, así que no cubriremos eso aquí.

## Descarga

DVWA está disponible como un paquete que se ejecutará en su propio servidor web o como Live CD:

  + DVWA v1.9 Source (Stable) - \[1.3 MB\] [Download ZIP](https://github.com/ethicalhack3r/DVWA/archive/v1.9.zip) - Released 2015-10-05
  + DVWA v1.0.7 LiveCD - \[480 MB\] [Download ISO](http://www.dvwa.co.uk/DVWA-1.0.7.iso) - Released 2010-09-08
  + DVWA Development Source (Latest) [Download ZIP](https://github.com/ethicalhack3r/DVWA/archive/master.zip) // `git clone https://github.com/ethicalhack3r/DVWA`

- - -

## Instalación

** Por favor, asegúrese de que su archivo config/config.inc.php exista. Solo tener config.inc.php.dist no será suficiente y tendrás que editarlo para adaptarlo a tu entorno y cambiarle el nombre a config.inc.php. [Windows puede ocultar la extensión final.] (Https://support.microsoft.com/en-in/help/865219/how-to-show-or-hide-file-name-extensions-in-windows-explorer) **

### Videos de instalación

- [Cómo configurar DVWA(Damn Vulnerable Web Application) on Ubuntu](https://www.youtube.com/watch?v=5BG6iq_AUvM) [21:01 minutes]
- [Instalando Damn Vulnerable Web Application (DVWA) on Windows 10](https://www.youtube.com/watch?v=cak2lQvBRAo) [12:39 minutes]

### Windows + XAMPP

La forma más fácil de instalar DVWA es descargar e instalar[XAMPP](https://www.apachefriends.org/en/xampp.html) si aún no tiene una configuración de servidor web.

XAMPP es una Distribution Apache  muy fácil de instalar para Linux, Solaris, Windows y Mac OS X. El paquete incluye el servidor web Apache, MySQL, PHP, Perl, un servidor FTP y phpMyAdmin.

XAMPP se puede descargar de:
https://www.apachefriends.org/en/xampp.html

Simplemente descomprima dvwa.zip, coloque los archivos descomprimidos en su carpeta pública html, luego apunte su navegador a: http://127.0.0.1/dvwa/setup.php

### Paquetes Linux

Si está utilizando una distribución de Linux basada en Debian, deberá instalar los siguientes paquetes _ (o su equivalente) _:

`apt-get -y install apache2 mysql-server php php-mysqli php-gd`

### Configuración de la Base de Datos

Para configurar la base de datos, simplemente haga clic en el botón `Configurar DVWA` en el menú principal, luego haga clic en el botón` Crear/ establecer base de datos`. Esto creará / restablecerá la base de datos para usted con algunos datos en.
Si recibe un error al intentar crear su base de datos, asegúrese de que las credenciales de su base de datos sean correctas dentro de `. /Config/config.inc.php`. * Esto difiere de config.inc.php.dist, que es un archivo de ejemplo. *

Las variables están configuradas de la siguiente manera por defecto:

```php
$_DVWA[ 'db_user' ] = 'root';
$_DVWA[ 'db_password' ] = 'p@ssw0rd';
$_DVWA[ 'db_database' ] = 'dvwa';
```

Tenga en cuenta que si usa MariaDB en lugar de MySQL (MariaDB es el valor predeterminado en Kali), entonces no puede usar el usuario raíz de la base de datos, debe crear un nuevo usuario de base de datos. Para hacer esto, conéctese a la base de datos como usuario raíz y luego use los siguientes comandos:

```mysql
mysql> create database dvwa;
Query OK, 1 row affected (0.00 sec)

mysql> grant all on dvwa.* to dvwa@localhost identified by 'xxx';
Query OK, 0 rows affected, 1 warning (0.01 sec)

mysql> flush privileges;
Query OK, 0 rows affected (0.00 sec)


```

### Otra configuración

Dependiendo de su sistema operativo y de su versión de PHP, es posible que desee modificar la configuración predeterminada. La ubicación de los archivos será diferente por máquina.

**Permisos de carpeta**:

* `./hackable/uploads/` - Debe poder ser escrito por el servicio web (para carga de archivos)
* `./external/phpids/0.6/lib/IDS/tmp/phpids_log.txt` - Debe poder ser escrito por el servicio web (si desea usar PHPIDS).

**Configuración de PHP**:

* `allow_url_include = on` - Permite inclusiones de archivos remotos (RFI)  [[allow_url_include](https://secure.php.net/manual/en/filesystem.configuration.php#ini.allow-url-include)]
* `allow_url_fopen = on` -  Permite inclusiones de archivos remotos (RFI)  [[allow_url_fopen](https://secure.php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen)]
* `safe_mode = off` - (If PHP <= v5.4) Permite la inyección de SQL (SQLi)[[safe_mode](https://secure.php.net/manual/en/features.safe-mode.php)]
* `magic_quotes_gpc = off` - (If PHP <= v5.4) Permite la inyección de SQL (SQLi) [[magic_quotes_gpc](https://secure.php.net/manual/en/security.magicquotes.php)]
* `display_errors = off` - (Opcional) Oculta los mensajes de advertencia de PHP para que sea menos detallado [[display_errors](https://secure.php.net/manual/en/errorfunc.configuration.php#ini.display-errors)]

**Archivo: `config/config.inc.php`**:

* `$_DVWA[ 'recaptcha_public_key' ]` & `$_DVWA[ 'recaptcha_private_key' ]` - Estos valores deben ser generados a partir de: https://www.google.com/recaptcha/admin/create

### Credenciales predeterminadas

**Default username = `admin`**

**Default password = `password`**

_... puede ser fácilmente sacado por fuerza bruta;) _

Login URL: http://127.0.0.1/dvwa/login.php

### Solución de problemas


Para obtener la información más reciente sobre solución de problemas, visite:
https://github.com/ethicalhack3r/DVWA/issues

+Q. SQL Injection no funcionará en PHP v5.2.6.

-A. Si está utilizando PHP v5.2.6 o superior, deberá hacer lo siguiente para que la inyección de SQL y otras vulnerabilidades funcionen.

In `.htaccess`:

Reemplazar (tenga en cuenta que puede decir mod_php7):

```php
<IfModule mod_php5.c>
    php_flag magic_quotes_gpc off
    #php_flag allow_url_fopen on
    #php_flag allow_url_include on
</IfModule>
```

Con:

```php
<IfModule mod_php5.c>
    magic_quotes_gpc = Off
    allow_url_fopen = On
    allow_url_include = On
</IfModule>
```

+Q. La inyección de comandos no funcionará.

-A. Es posible que Apache no tenga suficientes privilegios para ejecutar comandos en el servidor web. Si está ejecutando DVWA en Linux, asegúrese de haber iniciado sesión como root. En Windows, inicie sesión como administrador.


- - -

## Links

Homepage: http://www.dvwa.co.uk/

Project Home: https://github.com/ethicalhack3r/DVWA

*Created by the DVWA team*


