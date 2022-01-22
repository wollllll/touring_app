d-up:
	docker-compose up -d
d-down:
	docker-compose down
d-build:
	docker-compose build --no-cache
d-destroy:
	docker-compose down --rmi all --volumes --remove-orphans
p-bash:
	docker-compose exec php bash
laravel-i:
	docker-compose exec php composer create-project --prefer-dist laravel/laravel:8.* src
	docker-compose exec php php src/artisan key:generate
	docker-compose exec php chmod -R 777 src/storage
	docker-compose exec php chmod -R 777 src/bootstrap/cache
ps:
	docker ps