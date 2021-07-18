## Run docker
```
docker-compose up -d
```

## Run phpunit
```
docker exec php ./vendor/bin/phpunit tests
docker exec php ./vendor/bin/phpunit --testdox tests
```

## Run phpcs
```
docker exec php ./vendor/bin/phpcs --standard=PSR12 src/ tests/
docker exec php ./vendor/bin/phpcbf --standard=PSR12 src/ tests/
```

## Run phpstan
```
docker exec php ./vendor/bin/phpstan analyse -l 8 src/ tests/
```

> https://phpstan.org/user-guide/rule-levels