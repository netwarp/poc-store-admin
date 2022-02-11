# POC Store admin

MYSQL

    CREATE DATABASE store_admin

Bash
    
    git clone https://github.com/netwarp/poc-store-admin.git
    cd poc-store-admin
    cp .env.example .env
    vim .env # or vi or nano
    php artisan migrate
    php artisan serve
