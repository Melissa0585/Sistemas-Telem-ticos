# **Configuración de un Dominio en Hostinger**

en este apartado se vera el como comprar un dominio de Hostinger y a adminsitrarlo con hestia.

**Paso 1**: Inicia sesión en Hostinger, en caso de no tener cuenta es necesario crearla para poder comprar el domino.
**Paso 2**: Dirígete a la sección Dominios y selecciona Registrar un nuevo dominio.



**Paso 3**:Escribe el nombre del dominio deseado (ejemplo: myHostinger.com), apareceran las opciones disponibles por ejemplo (.com, .fun, .store), elige la opcion que se acomode a tu presupuesto, al agregarla al carrito elige el periodo por el que lo compraras y el metodo de pago.



**Paso 4:** Tras realizar el pago, la página te redirigirá a la página Dominios en hPanel. Haz clic en Administrar junto al dominio que acabas de comprar.




# **Configurar los Servidores de Nombres (DNS)**

En el Panel de Control de Hostinger, da click en **dominios** despues en **administrar**, encontraras la seccion de **NameServers (DNS)**, selecciona la opción **usar servidores de nombres personalizados**.

Para configura los servidores DNS que apunten a tu servidor en Oracle Cloud 

* Para crear un nuevo registro, ingresa los valores para tipo, nombre, contenido, TTL (según el tipo de registro, es posible que también debas completar otra información). Una vez hecho esto, haz clic en Agregar registro:

Guarda los cambios y espera la propagación del DNS (puede tardar algunas horas).

Si tienes duda sobre los pasos te dejo a conticuación videos de apoyo para la configuración.

**[Compra del Domino](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**
**[Configuracion de DNS](https://github.com/Akeno075/Proyectos-Clases/blob/main/Oracle%20Cloud/README.md)**

## **instalacion de Hestia Control Panel**

Nos vamos a la pagina de **[Hestia](https://hestiacp.com/)** y ubicamos el apartado de install 

Una vez configurados los campos anteriores, se nos proporcionará un comando SSH que debemos ejecutar en nuestra VPS de Oracle Cloud que se creo, este comado se ejecutara con permisos de root para instalar Hestia.

Para configurar tu nombre de dominio (example.tech) en Hestia, ejecuta los siguientes comandos como root estos nos lo proporciona Hestia al momento de colocar las opciones necesarias:

`cd /usr/local/hestia/bin/`

`v-change-sys-hostname example.tech`

`v-add-letsencrypt-host`

# ** HTPPS mayor seguridad**


**Pasos para Configurar HTTPS en HestiaCP: **


**Paso 1:** Acceder a HestiaCP poniendo tu direccion ip o el nombre de tu dominio y el puerto 8083 como se ve:

 https://<"IP">:8083/ e inicia sesión como admin.

**Paso 2:** Agregar un Dominio a HestiaCP en el panel de control encontraras un apartado de web ingresa y añade el nombre del dominio como los siguientes pasos.


* Escribe tu dominio (Ejemplo: midominio.com).

* Marca la opción Habilitar Soporte SSL.

* Marca la opción Usar Let’s Encrypt.

* Haz clic en Guardar.

**Paso 3:** ingresa a tu pagina y debe contar con el identificador de Https en algunos servidores es un candado en la parte superior izquierda jundo con la URL.
