# BingHr
## _Take Home Interview Submitted by Golden Moses_


This Application was built with laravel 9 and bootstrap 5

## Requirements

- php >= 7.4
- Mysql DB

> Note: I was not able to find some icons as no figmna file was provided so i had to substitute
> 

## Installation

You need php 7.4 and above installed and a database set up

Install the dependencies and devDependencies and start the server.

```sh
git clone git@github.com:Thealiencode/binghr.git
```

```sh
 cp .env.example .env
```
```sh
 composer install
```

```sh
 php artisan key:generate
```
Make sure you have set up your database logins in the .env file
```sh
 php artisan migrate --seed
```

The App is now ready to be lauched
```sh
 php artisan serve
```

if you have any challenges installing the please contact the developer via mail or any other means
For production environments...

