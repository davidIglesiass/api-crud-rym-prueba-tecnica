# API CRUD en PHP(Laravel)

El CRUD hecho en PHP(Laravel) para la API es generado con el objetivo de reemplazar el CRUD implementdado actualmente en el repositorio https://gitlab.com/jjyepez/rick-y-morty-api para las entidades characters, locations y episodes este cuenta con las capacidades solicitadas las cuales son leer, escribir y eliminar la información de la base de datos de sqlite ya entregada.

# INSTALACION Y EJECUCION

- git clone api-crud-rym-prueba-tecnica
- cd api-crud-rym-prueba-tecnica 
- composer install
- php artisan key:generate
- php artisan serve


# RUTAs DE EJECUCIN DE CRUDS

http://localhost:port/api/characters/
http://localhost:port/api/locations/
http://localhost:port/api/episodes/


# RESUMEN DEL PROCESO

- Se inicia con el analisis de la prueba tecnica y los requerimientos solicitados.
- A continuacion se clona el repositorio mencionado y se instala segun instrucciones leidas en el archivo README.md.
- Se analiza el codigo, finalizado el analisis del funcionamiento del proyecto se procede con la creacion de los    requerimientos.
- Teniendo laravel instalado y la carpeta en la cual se generara el CRUD se configura el config/database.php para el uso de la base de datos proporcionada.
- Seguidamente se hacen las migraciones correspondientes.
- Se crean modelo, controlador y rutas respectivas para el correcto funcionamiento del CRUD.

Algunas complicaciones que se presentaron al momento de hacer la prueba tecnica fue el configurar el config/database.php para el uso de db proporcionada, si embargo la solucion se presento rapida y eficazmente. Por otro lado teniendo en cuanta que hacer los CRUD de las entidades locations y episodes no era un requisito obligatorio me propuse a hacerlo, no tenia entendido de si las tablas debian o no tener llaves foranes debido a lo anterior no las inclui.



   

