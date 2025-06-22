## [Algo] Fizzbuzz

### Instructions

This is the very classical Fizz Buzz.

### Subject

Display numbers between **1** and **N** by following the rules:

- if number can be divided by 3: display **Fizz** ;
- if number can be divided by 5: display **Buzz** ;
- if number can be divided by 3 **AND** 5 : display **FizzBuzz** ;
- else: display the number.

#### Guidelines

- Write it in your favorite language (one of: javascript, php)
- Push your code to a Github repository or any sandbox environment like [codesandbox](https://codesandbox.io)
- Get ready to justify some of your choices for the interview

#### Evaluation

- Quality of the code
- Scalability of the algorithm
- Usage of good practices and modern programming language features

### Run project 

2 methods : with php-cli on host machine or with Docker

#### with PHP on host


Prerequisites:
* git
* php-cli
* composer

Clone the project
```bash
https://github.com/mlienart/fulll-algo.git
```
In the given repository, run
```bash
composer install
composer dump-autoload
```
* Run unit tests
```bash
vendor/bin/phpunit tests
```
* Run php-cs-fixer on src and tests directory with composer
```bash
composer fix
```


####  with Docker

Prerequisites:
* git

Clone the project
```bash
https://github.com/mlienart/fulll-algo.git
```

* Build image
```bash
docker build -t fizzbuzz-php-cli .
```

* Run image with unit tests
```bash
docker run --rm fizzbuzz-php-cli
or
docker run --rm fizzbuzz-php-cli vendor/bin/phpunit tests
```

* Run php-cs-fixer on src and tests directory with composer
```bash
docker run --rm fizzbuzz-php-cli composer fix
```
