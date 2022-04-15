# Sistema de administración de Recursos Humanos
Proyecto de programación realizado como requisito para la aprobación de la asignatura INGENIERIA DE SOFTWARE 3, El proyecto es realizado bajo el framework de trabajo LARAVEL.

A continuación encontrara los pasos para instalarlo y probarlo en su equipo, modificarlo y actualizarlos, el programa fue desarrollado en computadoras con **windows** en sus versiones 10 y 11, por lo que se recomienda el uso de este sistema operativo.

## Para poder ejecutar o editar el proyecto, son necesarias las siguientes herramientas

- [COMPOSER](https://getcomposer.org/download/).
- [XAMPP](https://www.apachefriends.org/es/index.html).
- [NODE:JS](https://nodejs.org/es/)
- [VSCode](https://code.visualstudio.com/)

## Installación y ejecución
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