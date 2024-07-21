# Blue Window LTD Technical Test

## Requirements
```
Docker
```
OR
```
PHP 8.2 /W all extensions needed for Laravel
NodeJS 16+
```
## Start the project

- Copy a .env file from the .env.example file
- Run 
    - `make setup` if you have make or 
    - 
        ```bash
        docker compose exec "laravel.test"  sh -c 'php artisan key:generate && php artisan migrate:fresh --seed && npm run build'
        ```
- open `localhost`. if the port 80 is not available you can edit the port using the APP_PORT environment variable 