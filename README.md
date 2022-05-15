#nstallation
el nombre del proyecto es konecta por lo cual debe crear un directorio del mismo nombre
en su servidor local para un despliegue correcto.
en caso tenga un directorio con otro nombre debe cambiar la ruta en el archivo
Config.php la constante BASE_URL del directorio Config del proyecto.

Crear una bd en phpmyadmin con el nombre de tienda

subir el backup .sql a la bd creada, en caso tenga que cambiar las credenciales de la bd
se debe editar el archivo Config.php del directorio Config

Abrir la siguiente ruta para acceder directamente al listado de productos
http://localhost/konecta/productos

Abrir la siguiente ruta para acceder directamente al listado de ventas
http://localhost/konecta/ventas

Producto con más stock
http://localhost/konecta/masstock

Producto con más venta
http://localhost/konecta/masvendidos