# Job Offers API

A Laravel 10 backend API for managing job offers and their eligibility criteria, following repository pattern and RESTful practices.

## Features

-   **CRUD Operations** for Job Offers
-   **Eligibility Criteria** system with predefined rules
-   **Repository Pattern** implementation
-   **API Resources** for standardized JSON responses
-   **Validation** with Form Requests
-   **Postman Collection** for endpoint testing
-   **MySQL Database** integration

## Requirements

-   PHP 8.1+
-   Composer 2.5+
-   MySQL 5.7+
-   Laravel 10

## Installation

1. **Clone Repository**

    ```bash
    git clone https://github.com/yourusername/job-offers-api.git
    cd job-offers-api
    ```

2. **Install Dependencies**

    ```bash
    composer install
    ```

3. **Configure Environment**

    ```bash
    cp .env.example .env
    ```

    Update `.env` with your database credentials:

    ```env
    DB_DATABASE=job_offers_db
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password
    ```

4. **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5. **Run Migrations & Seeders**

    ```bash
    php artisan migrate --seed
    ```

    _Note: This will seed 5 predefined eligibility criteria_

6. **Start Development Server**
    ```bash
    php artisan serve
    ```
    Server runs at: `http://localhost:8000`

## API Documentation

### Base URL

`http://localhost:8000/api/job-offers`

### Endpoints

| Method | Endpoint | Description          |
| ------ | -------- | -------------------- |
| GET    | /        | List all job offers  |
| POST   | /        | Create new job offer |
| GET    | /{id}    | Get single job offer |
| PUT    | /{id}    | Update job offer     |
| DELETE | /{id}    | Delete job offer     |
