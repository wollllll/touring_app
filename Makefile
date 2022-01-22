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
ps:
	docker ps