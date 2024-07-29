# Paylink Assessment

## Requirements
- Docker

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
1. Install composer locally
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
