## Welcome Hepsi Trend Api,

- #php8.2 #composer 2.6.6 #Mysql Latest Version


### Step - 1 Iyzico Service ./hepsitrend/
- git clone https://github.com/fikretcure/hepsiTrendIyzico.git
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan serve --port=8005


### Step - 2 Invoice Notification Service ./hepsitrend/
- Create a database named ht-invoincenot
- git clone https://github.com/fikretcure/hepsiTrendInvoiceNotification.git
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan migrate:fresh 
- php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
- php artisan storage:link
- php artisan serve --port=8006



### Step - 3 Shopping Service ./hepsitrend/
- Create a database named ht-shopping
- git clone https://github.com/fikretcure/hepsiTrendShopping.git
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan storage:link
- php artisan serve --port=8007


### Step - 4 Auth Service ./hepsitrend/
- Create a database named ht-auth
- git clone https://github.com/fikretcure/hepsiTrendAuth.git
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan serve --port=8008


### Step - 5 Gateway Service ./hepsitrend/
- git clone https://github.com/fikretcure/hepsiTrendGateway.git
- cp .env.example .env
- composer install
- php artisan key:generate
- php artisan serve --port=8009
