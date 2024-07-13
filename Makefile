name =

build:
	docker-compose -f docker-compose-local.yml up -d --build

clear:
	php artisan route:clear && php artisan config:clear && php artisan cache:clear

down:
	docker-compose down

migration-file:
	docker exec laravel-app php artisan make:migration 'create$(name)_table'

model:
	docker exec laravel-app php artisan make:Model '$(name)'

controller:
	docker exec laravel-app php artisan make:Controller '$(name)Controller' --resource

exception:
	docker exec laravel-app php artisan make:Exception '$(name)Exception'

request:
	docker exec laravel-app php artisan make:Request '$(name)Request'

policy:
	docker exec laravel-app php artisan make:policy '$(name)Policy'

rule:
	docker exec laravel-app php artisan make:rule '$(name)Rule'

swagger:
	docker exec laravel-app php artisan l5-swagger:generate

test:
	docker exec laravel-app php artisan test
