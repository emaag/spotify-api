

A RESTful API built with **Laravel 12** that connects to the **Spotify API**, featuring:

- Artist info retrieval
- API documentation with **Scramble**
- Authentication via Laravel Sanctum (optional)
- Dockerized environment setup

---

## 🚀 Features

- ✅ Spotify artist data via REST API
- ✅ Laravel 12 with modern practices
- ✅ Auto-generated API docs at `/docs/api`
- ✅ Optional Sanctum authentication
- ✅ Dockerized for easy environment setup
- ✅ Structured with Git branches and commits

---

## 🧰 Prerequisites

- PHP 8.2+
- Composer
- Laravel CLI
- SQLite or MySQL
- Node.js & npm (optional for frontend or tooling)
- Docker & Docker Compose (for containerization)

---

## ⚙️ Installation

### 1. Clone the Repository
```bash
git clone https://github.com/<your-username>/spotify-api.git
cd spotify-api

2. Install Dependencies

composer install

3. Set Up Environment

cp .env.example .env
php artisan key:generate

Update your .env with the following:

SPOTIFY_CLIENT_ID=your_spotify_client_id
SPOTIFY_CLIENT_SECRET=your_spotify_client_secret

4. Migrate Database

php artisan migrate

    To reset the database:

php artisan migrate:fresh

🔐 Authentication (Optional)

Install and enable Sanctum:

composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

Enable middleware in app/Http/Kernel.php under api group:

\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,

📘 API Documentation

Generated using Scramble

    Navigate to: http://127.0.0.1:8000/docs/api

To regenerate docs:

php artisan route:list

🐳 Docker Setup
1. Build and Run

docker-compose up -d --build

2. Access Services

    App: http://localhost:8000

    API Docs: http://localhost:8000/docs/api
