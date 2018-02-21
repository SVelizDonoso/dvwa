<?php

/*

This file contains all of the code to setup the initial MySQL database. (setup.php)

*/

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../../' );

if( !@($GLOBALS["___mysqli_ston"] = mysqli_connect( $_DVWA[ 'db_server' ],  $_DVWA[ 'db_user' ],  $_DVWA[ 'db_password' ] )) ) {
	dvwaMessagePush( "No se pudo conectar con el servicio MySQL. <br /> Compruebe el archivo de configuración." );
	if ($_DVWA[ 'db_user' ] == "root") {
		dvwaMessagePush( 'Su usuario de base de datos es root, si está utilizando MariaDB, esto no funcionará, lea el archivo README.md.' );
	}
	dvwaPageReload();
}


// Create database
$drop_db = "DROP DATABASE IF EXISTS {$_DVWA[ 'db_database' ]};";
if( !@mysqli_query($GLOBALS["___mysqli_ston"],  $drop_db ) ) {
	dvwaMessagePush( "No se pudo eliminar la base de datos existente<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}

$create_db = "CREATE DATABASE {$_DVWA[ 'db_database' ]};";
if( !@mysqli_query($GLOBALS["___mysqli_ston"],  $create_db ) ) {
	dvwaMessagePush( "No se pudo crear una base de datos<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}
dvwaMessagePush( "La base de datos ha sido creada." );


// Create table 'users'
if( !@((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . $_DVWA[ 'db_database' ])) ) {
	dvwaMessagePush( 'No se pudo conectar a la base de datos.' );
	dvwaPageReload();
}

$create_tb = "CREATE TABLE users (user_id int(6),first_name varchar(15),last_name varchar(15), user varchar(15), password varchar(32),avatar varchar(70), last_login TIMESTAMP, failed_login INT(3), PRIMARY KEY (user_id));";
if( !mysqli_query($GLOBALS["___mysqli_ston"],  $create_tb ) ) {
	dvwaMessagePush( "La tabla no pudo ser creada<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}
dvwaMessagePush( "Se creó la tabla 'users'." );


// Insert some data into users
// Get the base directory for the avatar media...
$baseUrl  = 'http://' . $_SERVER[ 'SERVER_NAME' ] . $_SERVER[ 'PHP_SELF' ];
$stripPos = strpos( $baseUrl, 'setup.php' );
$baseUrl  = substr( $baseUrl, 0, $stripPos ) . 'hackable/users/';

$insert = "INSERT INTO users VALUES
	('1','admin','admin','admin',MD5('password'),'{$baseUrl}admin.jpg', NOW(), '0'),
	('2','Gordon','Brown','gordonb',MD5('abc123'),'{$baseUrl}gordonb.jpg', NOW(), '0'),
	('3','Hack','Me','1337',MD5('charley'),'{$baseUrl}1337.jpg', NOW(), '0'),
	('4','Pablo','Picasso','pablo',MD5('letmein'),'{$baseUrl}pablo.jpg', NOW(), '0'),
	('5','Bob','Smith','smithy',MD5('password'),'{$baseUrl}smithy.jpg', NOW(), '0');";
if( !mysqli_query($GLOBALS["___mysqli_ston"],  $insert ) ) {
	dvwaMessagePush( "No se pudieron insertar datos en la tabla de 'users'<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}
dvwaMessagePush( "Datos insertados en la tabla de 'users'." );


// Create guestbook table
$create_tb_guestbook = "CREATE TABLE guestbook (comment_id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT, comment varchar(300), name varchar(100), PRIMARY KEY (comment_id));";
if( !mysqli_query($GLOBALS["___mysqli_ston"],  $create_tb_guestbook ) ) {
	dvwaMessagePush( "La tabla no pudo ser creada<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}
dvwaMessagePush( "Se creó la tabla 'guestbook'." );


// Insert data into 'guestbook'
$insert = "INSERT INTO guestbook VALUES ('1','Happy Hacking para mis amigos.','test');";
if( !mysqli_query($GLOBALS["___mysqli_ston"],  $insert ) ) {
	dvwaMessagePush( "No se pudieron insertar datos en la tabla de 'guestbook'<br />SQL: " . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) );
	dvwaPageReload();
}
dvwaMessagePush( "Datos insertados en la tabla 'guestbook'." );




// Copy .bak for a fun directory listing vuln
$conf = DVWA_WEB_PAGE_TO_ROOT . 'config/config.inc.php';
$bakconf = DVWA_WEB_PAGE_TO_ROOT . 'config/config.inc.php.bak';
if (file_exists($conf)) {
	// Who cares if it fails. Suppress.
	@copy($conf, $bakconf);
}

dvwaMessagePush( "El archivo de respaldo /config/config.inc.php.bak se creó automáticamente" );

// Done
dvwaMessagePush( "<em>Configuración Exitosa</em>!" );

if( !dvwaIsLoggedIn())
	dvwaMessagePush( "Por Favor <a href='login.php'>login</a>.<script>setTimeout(function(){window.location.href='login.php'},5000);</script>" );
dvwaPageReload();

?>
