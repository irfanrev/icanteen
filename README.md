<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
