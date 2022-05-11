

# IcanTeen App

IcanTeen merupakan sebuah web application untuk membantu mempermudah pengelolaan transaksi di kantin-kantin sekolah dan kampus.

## Struktur Database

db_icanteen

-   categories
    -   category_id
    -   category_name
    -   order_number
    -   category_status
    -   added_on
    -   full
    -   full_price
    -   half
    -   half_price
-   coupons
    -   coupon_id
    -   coupon_code
    -   coupon_type
    -   coupon_value
    -   cart_min_value
    -   expired_on
    -   coupon_status
    -   added_on
-   delivery_boys
    -   delivery_boy_id
    -   delivery_boy_name
    -   delivery_boy_phone_number
    -   delivery_boy_password
    -   delivery_boy_status
    -   added_on
-   dishes
    -   dish_id
    -   category_id
    -   dish_name
    -   dish_detail
    -   dish_image
    -   dish_status
    -   added_on
-   user
    -   id
    -   name
    -   email
    -   password
    
## Screenshoot
![WhatsApp Image 2022-05-11 at 13 55 57](https://user-images.githubusercontent.com/60175377/167790677-2a75e3b4-5781-49c9-b9d7-467d373721d9.jpeg)

## Installation

Untuk menjalankan project ini memerlukan php versi 8.x.x, laravel 9 (composer), vueJS, nodeJs (npm)

```bash
  git clone https://github.com/irfanrev/icanteen.git
  cd icanteen
  npm install && npm start
  php artisan serve
```

## 🛠 Tools & Software Development

VS Code, Xampp, Browser

## Tech Stack

**Client:** HTML CSS, Bootsrap, VueJS

**Bahasa Pemrograman:** PHP, Javascript, MySql

**Framework:** Laravel, VueJS

## Anggota Kelompok (Kelompok 3)

1. Cahya Diantoni (2010631170060)
2. Irfan Maulana (2010631170013)
3. Fathimatuz Zahra (2010631170009)

## Struktur Folder

icateeen

- app
    - console
    - Exception
    - Http
        - Controllers
        - Middleware
        - Kernel.php
    - Models
        - category.php
        - coupons.php
        - Delivery_boy.php
        - dish.php
        - User.php
    - Providers
- bootstrap
    - cache
    - app.php
- config
- database
    - factories
    - migrations
    - seeders
    - .gitignore
- lang/en
- public
    - BackEndResourceFile
    - BackEndSoureFile
    - css
    - js
- resources
    - css
    - js
    - sass
    - views
        - auth
        - BackEnd
        - layouts
        - home.blade.php
        - welcome.blade.php
- routes
    - api.php
    - channels.php
    - console.php
    - web.php
- storage
- test
- vendor
- .env
- artisan
- composer.json


- webpack.mx.js

