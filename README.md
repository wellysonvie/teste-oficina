## Projeto Oficina

Ferramenta desenvolvida para cadastro de orçamentos de uma oficina.

### Preparando o ambiente

#### Clonando o projeto

- `git clone https://github.com/wellysonvie/teste-oficina.git`

#### Instalando as dependências
- `sudo apt install php7.4`
- `sudo apt install composer`
- `sudo apt install php7.4-xml php7.4-mbstring php7.4-sqlite3`
- `sudo apt install nodejs npm`

Instale as dependências do projeto:
- Na raiz do projeto, execute `composer install`

#### Criando a base de dados

- Renomeie o arquivo `.env.example` para `.env`:
    - `mv .env.example .env`
- No arquivo `.env`, altere as linhas:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Por
```
DB_CONNECTION=sqlite
```

- Dentro da pasta `database/`, crie um arquivo chamado `database.sqlite`:
    - `cd database/`
    - `touch database.sqlite`
- Na raiz do projeto, execute `php artisan migrate` para criar a estrutura da base de dados.

#### Populando com dados

- Na raiz do projeto, execute `php artisan db:seed`
- Será gerado 20 registros fictícios para utilizar nos testes.

### Executando o projeto

- Na raiz do projeto, execute `php artisan serve`
- Acesse http://127.0.0.1:8000

### Tecnologias utilizadas

- PHP 7.4
- Laravel 7
- Bootstrap
- jQuery
