# PHP Framework

## Table of content

- [PHP Framework](#php-framework)
  - [Table of content](#table-of-content)
  - [Step 1](#step-1)

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
