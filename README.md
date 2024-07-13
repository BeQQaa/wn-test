### Laravel

#### Dependencies

```json
"require": {
    "php": "^8.2",
    "darkaonline/l5-swagger": "^8.6",
    "laravel/framework": "^11.9",
    "laravel/sanctum": "^4.0",
    "laravel/tinker": "^2.9"
},
"require-dev": {
    "fakerphp/faker": "^1.23",
    "laravel/pint": "^1.13",
    "laravel/sail": "^1.26",
    "mockery/mockery": "^1.6",
    "nunomaduro/collision": "^8.0",
    "phpunit/phpunit": "^11.0.1"
}
```

### Docker

#### To run locally, use the following command:

    -docker-compose -f docker-compose-local.yml up -d --build
#### Alternatively, build using Makefile with the command:
    
    make Build

    Swagger is accessible locally at:
    http://localhost:8080/api/documentation#/Orders/getOrderById

### Testing

#### Run tests using 
    make test

```
SQLite is used for local development.
```
    Reason for choosing Eloquent: ORM simplifies database interactions and provides flexibility for changing database types.
