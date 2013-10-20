# Práctica 1 IV - Despliegue de una aplicación sobre una PaaS

### Introducción

El desarrollo de esta práctica esta basado en el desarrollo de un periódico digital dinámico. Dicho periódico se desplegará sobre una PaaS. La elegida será OpenShift, más adelante veremos el porque.

### Aplicación

La aplicación es un periódico digital, en el que podremos navegar por las distintas secciones y por todas las noticias de cada sección, además podremos darnos de alta como usuarios y comentar todas las noticias. Existe además una cuenta admin que posee un panel de gestión de las noticias de la portada.
En la portada inicial del periódico tenemos un documento 'cómo se hizo' en el que todo esta explicado detalladamente.
Para la aplicación he escogido la licencia [GPLv3](http://www.gnu.org/licenses/licenses.html#GPL)

### PaaS

La PaaS elegida es OpenShift, ya que cumple todos los requisitos que buscaba:
* Posee soporte para PHP5.3
* Se puede utilizar PHPMyAdmin
* Se pueden tener tres aplicaciones gratis, permitiendo tener varias versiones de prueba
Además posee otras ventajas como:
* Interfaz muy intuitiva
* Fácil de usar

### Despliegue sobre la PaaS

El despliegue sobre la PaaS no ha sido demasiado difícil debido a la facilidad de uso que ofrece la página de OpenShift.
Los pasos a seguir fueron los siguientes:
1. Añadir una aplicación a mi repositorio de OpenShift, utilizando como lenguaje de programación PHP5.3

2. Le añadimos a dicha aplicación MySQL5.1 y posteriormente PHPMyAdmin

3. Accedemos a PHPMyAdmin a través del enlace que nos genera OpenShift, utilizando también el usuario y la contraseña que también genera.

4. Dentro de PHPMyAdmin creamos la base de datos con las tablas que necesitamos. También se puede importar si ya esta desarrollada.

5. Una vez esta todo listo en la base de datos tenemos que clonar el repositorio en nuestro local y mover los archivos PHP de nuestro periódico, pero previamente debemos configurar el acceso desde PHP a la base de datos tal y como está en el archivo configuración.php dentro de la carpeta BD.

6. Tras tener todo listo subimos los ficheros con git push y todas las acciones previas ya conocidas y ya tendremos la aplicación lista para su uso.

7. Tan solo nos falta escoger la licencia que mejor nos parezca.

### Dificultades

La mayor dificultad que he encontrado para la realización de la práctica ha sido la configuración del archivo de configuración para la conexión con la base de datos.
