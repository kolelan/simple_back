install-slim:
	docker-compose run --rm app-php-cli composer create-project slim/slim-skeleton slim

install-laravel:
	docker-compose run --rm app-php-cli composer require laravel/laravel "9.1.*"

install-laravel-ui:
	docker-compose run --rm app-php-cli composer require laravel/ui
