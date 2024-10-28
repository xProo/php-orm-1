# PHP Framework

## Table of content

- [PHP Framework](#php-framework)
  - [Table of content](#table-of-content)
  - [Step 1](#step-1)
  - [Step 2](#step-2)
  - [Step 3](#step-3)

## Step 1

**Obejctive :** initialize the docker containers

Execute the following command to initialize the project :

```bash
docker compose up -d --build
```

Composer is the package manager for PHP. It is used to download bundles and libraries other developer made and to set up our own php project. We will use it for the PSR-4 autoloader it brings.

```bash
docker compose exec php-framework composer init
```

## Step 2

**Objective :** set up the redirections.

The purpose of a router is to manage all the incoming requests from clients and redirect them to according functions, in dedicated files. Therefore, we need a single entrypoint for all the requests. We are using a `.htaccess` file for that.

## Step 3

**Objective :** get the requests informations

**Objective :** move the request informations in a dedicated class