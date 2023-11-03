### ¿Qué es esta parte del proyecto?

El directorio "config" almacena archivos de configuración que contienen variables, ajustes y parámetros específicos del proyecto. Estos archivos son esenciales para la configuración y personalización de la aplicación.

### Nota:

En este caso lo usaremos para almacenar como constantes los valores de conexión a la base de datos.
Si usaramos tokens de acceso para micro servicios o claves de autenticación de APIS también se almacenan como constantes aquí.

Esta carpeta debería ir fuera de la carpeta publica del hosting.

### ¿Por qué es importante?

El directorio "config" es fundamental en el proyecto, ya que centraliza la gestión de la configuración. Al tener estos archivos en un lugar dedicado, se facilita la adaptación y la personalización del proyecto sin necesidad de modificar el código fuente, lo que mejora la modularidad y la mantenibilidad.

### ¿Para qué sirve en el contexto del patrón MVC?

En el contexto del patrón de diseño Modelo-Vista-Controlador (MVC), el directorio "config" se asocia principalmente con la capa de "Controlador" (Controller) y, en algunos casos, con la capa de "Modelo" (Model). Los archivos de configuración pueden contener información como rutas de archivos, credenciales de bases de datos, configuraciones de seguridad y parámetros específicos del controlador.

El uso de un directorio de configuración separado ayuda a mantener la lógica de control (Controlador) más flexible y desacoplada, ya que los ajustes se pueden cambiar sin modificar el código fuente del controlador. También es útil para mantener la seguridad y la confidencialidad de información sensible, como contraseñas o claves de API.

Dentro del directorio "config," es posible organizar los archivos de acuerdo con su finalidad o categoría (por ejemplo, "database.php," "routes.php," "security.php"), lo que contribuye a una organización más clara y un acceso más eficiente a la configuración necesaria para la aplicación.