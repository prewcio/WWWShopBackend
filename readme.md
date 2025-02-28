# 🛍️ WWWShop Backend

![PHP](https://img.shields.io/badge/PHP-85.6%25-777BB4)
![Laravel](https://img.shields.io/badge/Laravel-5.8-FF2D20)
![Blade](https://img.shields.io/badge/Blade-13.3%25-F05340)

## 📋 Overview

WWWShop Backend is a Laravel-based e-commerce backend system built with PHP 7.1+. This project serves as the server-side component of an online shop, providing RESTful API endpoints and database management functionality.

> ⚠️ **Project Status**: This project appears to be archived/discontinued. It was built with Laravel 5.8 which is no longer actively maintained. Consider upgrading dependencies if planning to use in production.

## 🛠️ Technical Stack

- **Framework**: Laravel 5.8
- **Language**: PHP 7.1.3+
- **Template Engine**: Blade
- **Testing Framework**: PHPUnit 7.5
- **Development Tools**:
  - Laravel Dump Server
  - Whoops Error Handler
  - Collision (CLI Error Handler)
  - Faker (Testing Data Generator)

## ✨ Key Features

- **RESTful API Architecture**
- **Database Integration**:
  - Eloquent ORM
  - Database Migrations
  - Seeders and Factories
- **Authentication System**
- **Request Validation**
- **Error Handling**
- **Development Tools Integration**

## 🚀 Installation

```bash
# Clone the repository
git clone https://github.com/prewcio/WWWShopBackend.git

# Navigate to project directory
cd WWWShopBackend

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Seed the database (if available)
php artisan db:seed
```

## ⚙️ Configuration

1. Configure your `.env` file with database credentials
2. Set up any additional services (cache, queue, etc.)
3. Configure your web server (Apache/Nginx)

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📁 Project Structure

```
app/
├── Http/
│   ├── Controllers/    # Application controllers
│   ├── Middleware/     # HTTP middleware
│   └── Requests/       # Form requests
├── Models/            # Eloquent models
├── Providers/         # Service providers
├── Services/          # Business logic
database/
├── factories/         # Model factories
├── migrations/        # Database migrations
└── seeds/            # Database seeders
```

## 🧪 Testing

```bash
# Run PHPUnit tests
php artisan test

# Or using composer
composer test
```

## 🔧 Development Commands

```bash
# Start development server
php artisan serve

# Create a new migration
php artisan make:migration create_table_name

# Create a new controller
php artisan make:controller ControllerName

# Clear application cache
php artisan cache:clear
```

## 📝 API Documentation

> Note: API documentation would typically be here. Consider generating it with tools like Swagger/OpenAPI if continuing development.

## 🔒 Security

- Uses Laravel's built-in security features
- Implements middleware for authentication
- HTTP client proxying through Fideloper/Proxy

## 👤 Author

**Prewcio**
- Website: [prewcio.dev](https://prewcio.dev)
- Email: [this.prewcio@gmail.com](mailto:this.prewcio@gmail.com)
- GitHub: [@prewcio](https://github.com/prewcio)

## ⚠️ Important Notes

1. This project uses Laravel 5.8, which is no longer supported
2. PHP version requirement (^7.1.3) is outdated
3. Consider upgrading to a newer Laravel version if planning to use in production
4. Some dependencies may have security vulnerabilities due to age

## 📄 License

This project is MIT licensed. See the LICENSE file for details.

---

*Last Updated: 2025-02-28 22:29:52 UTC*  
*Built with Laravel Framework*
