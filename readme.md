# PRIMEROS PASOS CON LARAVEL

Requisitos del servidor (Laravel 5.6):

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension

Aleternativa:
https://laravel.com/docs/5.7/homestead

Instalando Laravel
Laravel utiliza Composer para manejas sus dependencias. Entonces, antes de empezar a usar Laravel hay que instalar Composer en su equipo. lo pueden descargar de este link:https://getcomposer.org/

### usando composer instalamos laravel:
```composer global require "laravel/installer"```

### crear una nueva instalacion
```laravel new blog```

### crear una nueva instalacion usando composer
```composer create-project --prefer-dist laravel/laravel blog```

### activar el server
```php artisan serve```

