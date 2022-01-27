# Test Just Mining

MYSQL

    CREATE DATABASE jb_test

Bash
    
    git clone https://github.com/netwarp/jb-test.git
    cd jb-test
    cp .env.example .env
    vim .env # or vi or nano
    php artisan migrate
    npm install
    php artisan serve
