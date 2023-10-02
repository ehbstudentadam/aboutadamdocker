# Installation steps
1. download docker
    - https://www.docker.com/
2. download repository
    - git clone git@github.com:leradamus/aboutAdamIntro.git
3. once downloaded run in aboutadam_laraveldocker root:
    - docker-compose build
    - docker compose up -d
4. initialise database:
    - run in /src folder (laravel project root)
        - docker-compose exec app php artisan migrate

Webpage:    127.0.0.1:8080
phpmyadmin: 127.0.0.1:3400

publically accessible @ https://fissirostral-turbin.000webhostapp.com/