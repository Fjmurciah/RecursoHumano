# Sistema de Gestión de Recursos Humanos
Proyecto de programación realizado como requisito para la aprobación de la asignatura INGENIERÍA DE SOFTWARE 3, El proyecto es realizado bajo el framework de trabajo LARAVEL.

A continuación encontrará los pasos para instalarlo y probarlo en su equipo, modificarlo y actualizarlo, el programa fue desarrollado en computadoras con **windows** en sus versiones 10 y 11, por lo que se recomienda el uso de este sistema operativo.

## Para poder ejecutar o editar el proyecto, son necesarias las siguientes herramientas

- [COMPOSER](https://getcomposer.org/download/).
- [XAMPP](https://www.apachefriends.org/es/index.html).
- [NODE:JS](https://nodejs.org/es/)
- [VSCode](https://code.visualstudio.com/)

## Instalación
Una vez tenga los programas requeridos y clonado el repositorio en su computador, diríjase a la terminal y ejecute los siguientes comandos.

`composer install`

Una vez termine el proceso continúe con el siguiente comando.

`npm install`

Una vez terminada la ejecución del comando, cambie el nombre del archivo **.env.example** por **.env**, después de esto, cambia su contenido, por el siguiente:

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
Abre la aplicación xampp que instalaste al principio y da click en **start** en las casillas correspondientes  a **Apache** y a **MySQL**, da en aceptar en caso de que el firewall te lo pida.

![botones start clickeados en los campos correspondientes a Apache y MySQL](/Imagenes/xampp.png)

Posterior a esto, da click en el botón **Admin**, esto te abrirá una ventana donde crearemos la base de datos.

![Captura de pantalla del servidor](/Imagenes/servidor.png)

Da click en la opción de nueva y en el nombre que te pide pon `recursohumano`, este es el nombre que asignamos en él *.env* como nombre de la base de datos, por último da en crear.

![Creación de la base de datos](/Imagenes/base%20de%20datos.png)

Vuelve a visual studio code y en la terminal escribe `php artisan migrate`, esto conectará la base de datos para su correcto uso.

![Captura de pantalla de la terminal](/Imagenes/terminal%20migrate.png)

## Ejecución

Ya con todo esto configurado, escribe el comando `php artisan serve`, después de esto crea una nueva terminal y corre el comando `npm run watch`.

![Captura de pantalla de la terminal](/Imagenes/serve.png)
![Captura de pantalla de la terminal](/Imagenes/npm.png)

Una vez las dos terminales se encuentren en marcha, ve de nuevo a la terminal en la que se está corriendo *php artisan serve* y con la tecla *ctrl* + click Seleccionas la dirección IP que te arroja la consola.

![Captura de pantalla de la terminal](/Imagenes/navegador.png)

Usa en el navegador, ve a la barra de búsqueda y añade `/index`, Esto te permitirá acceder a la página principal del sistema.

![Captura de pantalla de la terminal](/Imagenes/index.png)

#### Felicitaciones, su sistema de gestión de recurso humano está listo para ser usado en su servidor local.