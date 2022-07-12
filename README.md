# Proyecto IKEA
## Kaysel Nuñez Abreu -- FullStack Developer

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)


### Resumen de la APP
Primero debemos explicar un poco el proyecto antes de abarcar lo desarrollado.
"La empresa Ikea estaba preparando un evento especial de aniversario para todos aquellos que deseaban asistir pero estaría limitado solo hasta las 50 personas. El departamento de marketing estaría a cargo de examinar el registro".

Entonces, ahí entraba el desarrollador, debía crear un sistema encargado de hacer el registro de esas 50 personas. Muy bien, ahora explicaré cómo funciona el que he desarrollado:

##### ¿Cómo funciona mi aplicacion?
###### Paso 1- Acceso de la administracion
La administracion tendrá acceso usando el correo diseñado por el desarrollador, el correo es el siguiente:

- admin@ikea.com.do
- 12345


Este correo debe ser introducido en la zona donde está escrita la palabra "Acceder"; en el menú de navegación, una vez ingresado, podran ver todos los registros que las personas van agregando.

###### Paso 2- El sistema de seguridad
El sistema de seguridad que tiene nuestra aplicación no tiene nada que envidiarle al resto, aunque, siempre las cosas se pueden perfeccionar. Todos sus campos estan validados con estandares centrados en Laravel, algunas son: 
1) **Validacion de correo para evitar la repeticion del mismo en la base de datos.**
2) **Validacion de nombre y apellido con un minimo y maximo de caracteres.**
3) **Validacion de telefono y edad, solo se pueden aceptar numeros, entre otras caracteristicas.**
4) **Checkbox para darle un toque mas original.**
5) **Entre otros...**

##### Otros...
La app tiene un login por el cuál solo puede acceder la administracion para poder ver los registros, posee una interfaz sencilla y el formulario cuenta con una ventana modal cuando los datos se han enviado satisfactoriamente.


## Metas
Debido a compromisos con la universidad, especificamente temporada de exámenes, me vi obligado a empezar el proyecto mas tarde de lo que me habria gustado. Empece a desarrollar el domingo 10/7/2022, hice mi mejor esfuerzo para terminarlo en tiempo record pero es una aplicacion que tiene potencial para mejorar.
##### Logradas
-- Validacion de campos requeridos.
-- Paginado de registros.
-- Diseño estandarizado.
-- Limpiar los datos luego de ser enviados.
-- Implementacion de ventana modal (Decidí añadir una porque los errores estaban cubiertos en su totalidad).
-- Simulacion puesta a prueba.
-- El boton no permite que el usuario envie datos varias veces seguidas, queda como algo implicito cuando se valida el correo.
-- Buscar por correo o nombre.
-- Filtrar por edad y nombre

##### no Logradas
-- Validar usuarios al momento de escribir (Estába a la mitad de terminarlo)

**Nota:**  Son ejecuciones fáciles de lograr, pero espero hacerlo mas rápido en una segunda ocación.

#### Ideas con las que el proyecto puede crecer.
Como dije anteriormente, este proyecto tiene capacidad para crecer y hacerse mas dinamico5; **Podriamos hacer que interactue con quien se registra, en caso de que alguien quiera anular la suscripcion al evento prodríamos enviarle un código para que este se loguee y cancela la suscripción sin tener que registrarse.**
--Hay muchas posibilidades de mejorar dicha aplicacion.

#### Pasos requeridos para instalar la app en un entorno.
Los pasos para instalar nuestra app en un entorno de trabajo son los siguientes:

### Instalación

Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

 1. Primero que nada, clic en Fork 
 2. Inicia el git dentro de tu servidor:
    
    git init
    
 3. Luego, clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
    
    git clone https://github.com/Kaysel12/IKEA-Challenge.git
    
 4. Ingresa a la carpeta del repositorio
    
    cd repositorio
    
 5. Instala las dependencias del proyecto
    
    composer install
   
6. Importar base de Datos

 7. Crea el archivo ".env" copiando la información del archivo .env example y cambiar valores de su Base de datos.
 
 8. Ejecute las migraciones
    
    php artisan migrate --seed
    
 9. Inicialice el servidor local
    
    php artisan serve
    
 10. Listo, ya podrá visualizar e interactuar con el proyecto en local.
