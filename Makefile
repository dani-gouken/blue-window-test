SAIL_BIN = ./vendor/bin/sail
.PHONY: enter test cache up
enter:
	${SAIL_BIN} bash
cache:
	${SAIL_BIN} artisan config:cache
up:
	${SAIL_BIN} up -d
down:
	${SAIL_BIN} down --volumes
setup:
	docker compose exec "laravel.test"  sh -c 'php artisan key:generate && php artisan migrate:fresh --seed && npm run build'