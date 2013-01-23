Proyecto Base
========================

**Proyecto Base** es una configuración inicial para el desarrollo de aplicaciones con Symfony 2. Incluye una seleccion de Bundles, librerías y configuraciones que permiten comenzar rápidamente un nuevo desarrollo.

¿Qué está inluído?
------------------

  - SonataAdminBundle,
  - SonataDoctrineORMAdminBundle,
  - FOSUserBundle,
  - SimpleThingsEntityAuditBundle,
  - RaulFraileLadybugBundle,
  - LiuggioExcelBundle,
  - WhiteOctoberTCPDFBundle
  - Twitter Bootstrap,
  - jQuery

Instalación
-----------

  Clonar el proyecto:

    git clone https://github.com/aleste/proyecto-base.git suproyecto/

  Diríjase al directorio */suproyecto*. Si tiene instalado [Composer][1] salte éste paso sino siga las instrucciones de [http://getcomposer.org/][2] ó ejecute:
  
    curl -s https://getcomposer.org/installer | php  

  Configure el archivo de parámetros de la aplicación y DB (tome como referencia el archivo parameters.dist.yml) y cree el archivo:

    app/config/parameters.yml    

  Instale las dependencias:

    php composer.phar install

  Configure los permisos de la aplicación siguiendo los pasos de la [documentación][3] oficial: 

    Siga los pasos descriptos en el apartado "Setting up Permissions" de la documentación de Symfony.

  Cree la base de datos el schema básico:

    php app/console doctrine:database:create

    php app/console doctrine:schema:create

  Defina un usuario para la administración del sistema:

    php app/console fos:user:create admin   (Defina un email u una contraseña para el usuario)

    php app/console fos:user:promote admin  (Setee el valor ROLE_SUPER_ADMIN)

  Publicar assets:

    php app/console assets:install web    

    php app/console assetic:dump web

¿Cómo seguir?
-------------

Proyecto Base incluye un backend utilizable que se puede acceder desde: 

    http://localhost/proyecto-base/admin/dashboard

Lo que sigue es que cree su propio bundle y comience con el desarrollo de su nuevo proyecto.

**NOTA:** Si no están bien configurados los permisos es posible que deba utilizar *sudo* para ejecutar los comandos (esto suponiendo que está trabajando en entorno linux, si estás con Windows....arreglate!)

[1]:  http://getcomposer.org/
[2]:  http://getcomposer.org/
[3]:  http://symfony.com/doc/current/book/installation.html