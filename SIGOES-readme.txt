/*=============INICIO===============*/
 Archivo:class-admin.php
Linea:291
Descripcion:
la variable $main_menu_position es para la posicion de la bitacora en el menu.

Linea:299
Descripcion:
variable $main_page_title para el titulo de la bitacora en la interfaz.

Linea:301
Descripcion:
array screen_id[] para las configuraciones del menu de bitacora en wordpress.
/*==============FIN=================*/
/*=============INICIO===============*/
Archivo:class-db.php
Linea:55
Descripcion:
variable $prefix que captura el prefijo global configurado en wordpress.

Linea:106
Descripcion:
array $fields para insertar en las tablas de bitacora.

Linea:189
Descripcion:
variable $rows que obtiene todos los registros de la bitacora.

/*==============FIN=================*/
/*=============INICIO===============*/
Archivo:class-filter-input.php
Linea:37
Descripcion:
varibale $type determina que tipo de metodo se hasta usando para insertar en wordpress.
/*==============FIN=================*/
/*=============INICIO===============*/
Archivo:class-install.php
Linea:172
Descripcion:
array $missing_tables verifica en la Base de Datos si existen las tablas en wordpress.

Linea:181
Descripcion:
variable $database_message para mostrar un mensaje de admin_notices de que las tablas no existen.

Linea:419
Descripcion:
variable $sql crea la tabla stream con el prefijo configurado en wordpress.

Linea:467
Descripcion:
variable $sql crea la tabla stream_meta con el prefijo configurado en wordpress.
/*==============FIN=================*/
/*=============INICIO===============*/
Archivo:class-list-table.php
Linea:74
Descripcion:
funcion get_columns define las cabeceraz del grip de bitacora en wordpress.

Linea:220
Descripcion:
funcion column_default formatea los datos del grip de bitacora en wordpress.

Linea:499
Descripcion:
funcion get_filters obtiene los valores de los filtros de bitacora y se los envia a class-query.php que funciona como controlador.

Linea:722
Descripcion:
funcion filter_date para capturar y formatear los filtros de fecha.

Linea:777
Descripcion:
      funcion display muestra en pantalla la informacion de la bitacora(el grip y filtros),
      Ademas se han configurado botones ocultos para capturar los valores de los
      filtros para ser enviados al SIGOES en la parte de reporteria.
      Direccion fisica para el envio de valores de filtros:
      SIGOES-Comunicados/includes/reportesXML/reporteBitacora.php
/*==============FIN=================*/
/*=============INICIO===============*/
Archivo:class-query.php
Nota: todo esta en la function query
Linea:111
Descripcion:
Filtros en el WHERE de la consulta hecha a la class-db.php

Linea:156
Descripcion:
Filtros de fecha para los WHERE de la consulta hecha a la class-db.php
/*==============FIN=================*/