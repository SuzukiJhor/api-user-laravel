
## API desenvolvida usando Laravel com MySql com Ambiente Docker.
## Consiste em uma api para cadastro, alterar registro, deletar registro e listagem de usuarios.

# 💻 Setup Docker 

- Laravel 10 com PHP 8.1

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/SuzukiJhor/api-user-laravel.git
```
```sh
cd api-user-laravel
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=api-users
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Rode o comande de Migrate
```sh
php artisan migrate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)

Acesse a Documentação da Api: 
http://localhost:8989/docs/api#/
