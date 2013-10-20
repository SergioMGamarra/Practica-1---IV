<?php

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_BASE',getenv('OPENSHIFT_APP_NAME'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 

define('DB_DSN' , 'mysql:dbname='.DB_BASE.';host='.DB_HOST.';port='.DB_PORT.'');
define("DB_USUARIO", DB_USER);
define("DB_CONTRASENIA", DB_PASS);
define("TABLA_USUARIO", "usuario"); 
define("TABLA_SECCION", "seccion");
define("TABLA_NOTICIA","noticia");
define("TABLA_COMENTARIO","comentario");

?>
