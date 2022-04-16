# Sistema de administración de Recursos Humanos
Proyecto de programación realizado como requisito para la aprobación de la asignatura INGENIERIA DE SOFTWARE 3, El proyecto es realizado bajo el framework de trabajo LARAVEL.

A continuación encontrara los pasos para instalarlo y probarlo en su equipo, modificarlo y actualizarlo, el programa fue desarrollado en computadoras con **windows** en sus versiones 10 y 11, por lo que se recomienda el uso de este sistema operativo.

## Para poder ejecutar o editar el proyecto, son necesarias las siguientes herramientas

- [COMPOSER](https://getcomposer.org/download/).
- [XAMPP](https://www.apachefriends.org/es/index.html).
- [NODE:JS](https://nodejs.org/es/)
- [VSCode](https://code.visualstudio.com/)

## Instalación y ejecución
Una vez tenga los programas requiridos y clonado el repositorio en su computador, dirijase a la terminal y ejecute los siguientes comandos.

`composer install`

Una vez termine el proceso continue con el siguiente comando.

`npm install`

Una vez terminada la ejecución del comando, cambie el nombre del archivo **.env.example** por **.env**, despues de esto, cambia su contenido, por el siguiente:

```
APP_NAME='Sistema de administración de recurso humano'
APP_ENV=local
APP_KEY=base64:Z82yfj7pEOLYiSR44NOiX/UeXANLppaodL+ydOx/ffc=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=recursohumano
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
## Configurando el servidor y la base de datos
Abre la aplicación xampp que intalaste al principio y da click en **start** en las casillas correspondientes  a **Apache** y a **MySQL**, da en aceptar en caso de que el firewall te lo pida.

//// imagen ////

Posterior a esto, da click en el botón **Admin**, esto te abrirá una ventana donde crearemos la base de datos.

//// imagen ////

Da click en la opción de nueva y en el nombre que te pide pon `recursohumano`, este es el nombre que asignamos en el *.env* como nombre de la base de datos, por ultimo da en crear.

//// imagen ////

Vuelve a visual studio code y en la terminal escribe `php artisan migrate`, esto conectará la base de datos para su correcto uso.

//// imagen ////

Ya con todo esto configurado, escribe el comando `php artisan serve`, despues de esto crea una nueva terminal y corre el comando `npm run watch`.

//// imagenes de las terminales corriendo ////

Una vez las dos terminales se encuentren en marcha, ve de nuevo a la terminal en la que se esta corriendo *php artisan serve* y con la tecla *ctrl* + click seleccionas la direción ip que te arroja la consola.

//// imagen ////

Una en el navegador ve a la barra de busquedad y añade `/index`, esto te permitirá aceder a la pagina principal del sistema.