<p align="center"><a href="https://github.com/antaridj1/rentcar" target="_blank"><img src="https://github.com/antaridj1/rentcar/blob/bd8d4ab661476b2fdd486d682bd11084970ad283/public/frontend/images/logo.png" width="400" alt="RentCar Logo"></a></p>


## About Bali Bagus Rentcar Website

**Bali Bagus Rentcar Website** is a streamlined web application built with Laravel 10, designed to support car rental services with a focus on simplicity and ease of use. The application provides a user-friendly landing page and detailed car listings for potential customers, while also offering an administrative interface for managing the car inventory.

### Key Features

- **Car Listings:** View detailed information on available cars including make, model, price, and availability.
- **Booking System:** Easy-to-use booking systems redirected to Whatsapp.
- **Admin Dashboard:** Manage the cars with a comprehensive dashboard.
- **Responsive Design:** Optimized for both desktop and mobile devices.

## Getting Started

### Requirements

- **PHP** >= 8.0
- **Composer**
- **MySQL** database
- **Web Server:** Apache, Nginx, or similar

### Installation

1. **Clone Repository**

   ```bash
    git clone https://github.com/your-username/rentcar.git
    cd rentcar
    composer install
    ```
2. **Create Environtment**
    ```bash
    cp .env.example .env
    ```
3. **Generate Key in .env**
    ```bash
    php artisan key:generate
    ```
4. **Create Database**
    Create a database named "rentcar"

5. **Run The Migrations**
    ```bash
    php artisan migrate --seed
    ```
6. **Run The Web**
    ```bash
    php artisan server
    ```
    Visit http://127.0.0.1:8000 to access the application.