# Diverxo Bakery

*Diverxo Bakery* is a web development project built on the robust Laravel framework, following the traditional HTTP
model. More than just an online bakery, this project serves as a versatile template for future e-commerce initiatives.
With a solid and adaptable structure, *Diverxo Bakery* offers all the essential functionalities of an online store,
except the checkout process, which is designed to be customized and adapted to the specific needs of each
project. This project demonstrates Laravel's potential to create scalable and customizable e-commerce solutions, serving
as a solid foundation for future ventures in the digital world.

<img src="/docs/screenshots/home-screen.png" width="750px" alt="home">

## ✅ Features

- User Authentication (to user or admin)
- Show products
    - Show products by category
    - Pagination
    - Filter products (by category or price)
- Show categories
- Show products details
    - Related products
- Cart
    - Show cart
    - Add products to cart
    - Remove products from cart
    - Update products quantity
- User Profile
    - Edit profile
    - Add or remove cards
    - Show orders
    - Show invoice
    - Change password
- Wish List
- Contact us form
- Show invoices
- Email Notification
- Administrator
    - Dashboard
    - Product Management (CRUD to products)
    - Category Management (CRUD to categorize)
    - Order Management (CRUD to orders)
    - Cart Management (CRUD to cart)
    - Invoice Management (CRUD to invoices)

## ⚙️ Tech Stack

- Laravel 7
- PHP 7.2
- PostgreSQL 12
- bumbummen99/shoppingcart 2.9
- cartalyst/stripe-laravel 12.0
- Bootstrap 4.5
- laravel-mix 5.0
- popper.js 1.12
- axios 0.19

## 💾 Installation

Install and run

1. Clone and move to folder

```bash
$ git clone git@github.com:abrahamuchos/diverxo-bakery.git
$ cd diverxo-bakery
```

2. Install dependecies

```bash
$  composer install
```

3. Create a copy of the `.env.example` file and rename it to `.env`. Next, configure the necessary environment
   variables.

4. Generate an application key by running `php artisan key:generate`.

5. Run `php artisan migrate` to create the database tables.

6. Run `php artisandb:seed` to create dummy data and admin user.

7. Run `php artisan serve` to start the Laravel development server.

## 📦 Environment Variables

To run this project, you will need to add the following environment variables to your .env file

```
APP_DEBUG

DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD

MAIL_MAILER
MAIL_HOST
MAIL_PORT
MAIL_USERNAME
MAIL_PASSWORD
MAIL_FROM_ADDRESS

STRIPE_KEY
STRIPE_PUBLIC_KEY
STRIPE_LOCALE
STRIPE_CURRENCY
STRIPE_CURRENCY_SYMBOL

COMPANY_NAME
COMPANY_ADDRESS
COMPANY_PHONE
```

## 🗂️ Docs

Check data into `docs/Productos Bakery.xlsx` file.

Check the [Laravel documentation](https://laravel.com/docs/7.x) for more information.
Check the [Stripe documentation](https://stripe.com/docs) for more information.
Check the [Shoppingcart documentation](https://packagist.org/packages/bumbummen99/shoppingcart) for more information.

## 📷 Screenshots

**Home**

<img src="/docs/screenshots/home.png" width="750px" alt="home-screenshot">

**Product detail**
<img src="/docs/screenshots/products-details-with-description.png" width="750px" alt="product-screenshot">

**Admin dashboard**
<img src="/docs/screenshots/admin-dashboard.png" width="750px" alt="admin-screenshot">

**Admin order detail**
<img src="/docs/screenshots/admin-order-detail.png" width="750px" alt="admin-order-screenshot">

**And More...**

## 🧑‍💻 Authors

- [@abrahamuchos](https://github.com/abrahamuchos)
- [Contact mail](mailto:abrahamuchos@gmail.com)

## 📄 License

[MIT](https://choosealicense.com/licenses/mit/)