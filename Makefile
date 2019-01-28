rebuild:
	@docker-compose -f docker/docker-compose-dev.yml down --remove-orphans
	@docker-compose -f docker/docker-compose-dev.yml up -d --build
	@docker exec laravel-telescope-demo-app-web composer install --prefer-dist --no-suggest

down:
	@docker-compose -f docker/docker-compose-dev.yml down --remove-orphans

restart:
	@docker-compose -f docker/docker-compose-dev.yml restart

status:
	@docker-compose -f docker/docker-compose-dev.yml ps

shell:
	@docker exec -it laravel-telescope-demo-app-web /bin/sh

stats:
	@docker stats laravel-telescope-demo-app-web

logs:
	@docker-compose -f docker/docker-compose-dev.yml logs -f --tail=100

prune:
	@docker system prune --all --force --volumes
