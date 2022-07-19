# asuro-calc

## Running application (docker and docker compose are required)

Run following commands in shell
- `docker compose up -d --build`
- `docker compose exec php composer install`

## Access endpoints for calculator, examples:
- http://localhost/calc/add/1/2
- http://localhost/calc/subtract/1/2
- http://localhost/calc/multiply/1/2
- http://localhost/calc/divide/1/2
