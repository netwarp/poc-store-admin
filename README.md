# Test Just Mining

MYSQL

    CREATE DATABASE jb_test

Bash
    
    git clone https://github.com/netwarp/test_just_mining.git
    cd test_just_mining
    cp .env.example .env
    vim .env # or vi or nano
    php artisan migrate
    php artisan serve
