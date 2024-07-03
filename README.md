# Library

Welcome to the Library repository! This project is a Laravel-based web application developed using Test-Driven Development (TDD) principles. It provides a platform for managing and browsing a collection of books.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Library application allows users to manage a collection of books, including adding, updating, and deleting entries. The project adheres to TDD principles, ensuring a robust and maintainable codebase.

## Features

- Add, edit, and delete books in the library.
- Browse and search for books by various criteria (e.g., title, author, genre).
- View detailed information about each book.
- User authentication and role-based access control.

## Installation

You can set up the project either using traditional methods or Laravel Sail.

### Traditional Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/library.git
   cd library
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Copy the `.env.example` file to `.env` and configure your environment variables:**
   ```bash
   cp .env.example .env
   ```

4. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run the migrations:**
   ```bash
   php artisan migrate
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```

### Installation Using Laravel Sail

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/library.git
   cd library
   ```

2. **Install Sail and Docker dependencies:**
   ```bash
   composer require laravel/sail --dev
   php artisan sail:install
   ```

3. **Build the Sail Docker containers:**
   ```bash
   ./vendor/bin/sail build
   ```

4. **Start the Sail Docker containers:**
   ```bash
   ./vendor/bin/sail up
   ```

5. **Run the migrations:**
   ```bash
   ./vendor/bin/sail php artisan migrate
   ```

6. **Access the application in your browser:**
   The application will be available at `http://localhost`.

## Configuration

To configure the application, you need to set up your `.env` file. The most important variables are:

- `DB_CONNECTION`: Database connection type (e.g., mysql).
- `DB_HOST`: Database host.
- `DB_PORT`: Database port.
- `DB_DATABASE`: Database name.
- `DB_USERNAME`: Database username.
- `DB_PASSWORD`: Database password.

Make sure to replace placeholders with your actual configuration details.

## Usage

Once the application is up and running, you can access it in your web browser at `http://localhost`. You can manage your library by adding, updating, and deleting books. The search functionality will help you find specific books based on various criteria.

## Testing

This project follows Test-Driven Development (TDD). To run the tests:

1. **Install PHPUnit if not already installed:**
   ```bash
   composer require --dev phpunit/phpunit
   ```

2. **Run the tests:**
   ```bash
   ./vendor/bin/phpunit
   ```

   Or, if using Laravel Sail:
   ```bash
   ./vendor/bin/sail phpunit
   ```

Tests are organized in the `tests` directory and cover various aspects of the application, including models, controllers, and feature tests.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
