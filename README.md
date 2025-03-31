# Attention: Readme under construction

# Agenda de Contatos
WEB project of a contact book.

# About
The project implements a CRUD for a contact list. It has the following fields: name, email and phone number. It has a page to list, register, update and delete contacts.

# Technologies used
## Back end
- PHP
- Laravel

# How to execute the project

## Back end
Prerequisites: PHP and Composer instaled.

```bash
# clone repository
git clone https://github.com/joaopauloleitecosta/agenda_contatos.git

# enter the project folder
cd name_clone_repository

# install dependencies
composer install

# create configuration file
cp .env.example .env

# open .env and config database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=user
DB_PASSWORD=password

# generate application key
php artisan key:generate

# config database - If you haven't created the database in MySQL yet, create it manually. Then run the command:
php artisan migrate

# execute the project
php artisan serve
```

# Autor
João Paulo Leite Costa

https://www.linkedin.com/in/joaopauloleitecosta/