# Paylink Assessment

## Requirements
- Docker

##Clone Paylink Repository
 ```sh
   git clone git@github.com:sagoe1712/pay-link.git
   ```

## Composer install
 ```sh
   composer install
   ```

## Build and Run Instructions
1. Build the Docker image:
   ```sh
   docker build -t paylink .
   ```

2. Run the Docker container:
   ```sh
   docker run --rm paylink
   ```
## To run PHP UNIT Test
1. Install composer locally (if you don't have it installed locally)
```sh
   php composer-setup.php --install-dir=bin --filename=composer
   ```

2. Install PHP Unit test
```sh
   composer require --dev phpunit/phpunit
   ```

3. Run PHP Unit Test:
```sh
   ./vendor/bin/phpunit tests
   ```
