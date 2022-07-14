# Notes App

### List of Docker Commands

```bash

# Build images and run containers from the images
docker-compose up --build

# To view all running containers
docker-compose ps 

# To login in to app container
docker-compose exec app bash

http://localhost:8080
```

### List of Commands

```bash
# To create this project
composer create-project symfony/website-skeleton notes-app

# To install encore (layer top of webpack)
composer require encore

# Install Vue
npm i vue vue-loader vue-template-compiler

# To list all console commands
php bin/console

# Create Controller
php bin/console  make:controller NoteController

# To compile Vue in to Javascript
npm run watch

# To create an entity
php bin/console make:entity Tag

# To create a migration from latest entity changes
php bin/console doctrine:migrations:diff

# To run latest migrations
php bin/console doctrine:migrations:migrate
```