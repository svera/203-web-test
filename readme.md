## Laravel PHP Framework test app

Esta es una sencilla aplicación de ejemplo que utiliza [Laravel](http://github.com/laravel/framework). Básicamente, implementa un sistema de autenticación,
donde los usuarios pueden registrarse e identificarse, y un pequeño buscador que realiza consultas a la base de datos via AJAX. Los datos consultados por este
buscador son extraídos de [El aderezo](http://eladerezo.hola.com/tag/utensilios), [Gastronomía y cia](http://www.gastronomiaycia.com/category/utensilios-de-cocina/) y [losutensiliosdecocina.es](http://www.losutensiliosdecocina.es) durante la primera instalación de la plataforma, e insertados en la base de
datos mediante un _seeder_ (app/database/seeds/ProductsSeeder.php)[https://github.com/svera/203-web-test/blob/master/app/database/seeds/ProductsSeeder.php]

Puedes ver la aplicación en línea en [http://svera.gopagoda.com/](http://svera.gopagoda.com/). El modelo de datos puede consultarse dentro del código fuente, en la carpeta [app/database/model.png](https://github.com/svera/203-web-test/blob/master/app/database/model.png).
