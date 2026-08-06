# Spotify API

**A RESTful API built with Laravel 12 that connects to the Spotify API.**

### Status at a glance

| Feature | State |
|---------|-------|
| Spotify artist data via REST API | ✅ Implemented |
| Laravel 12 with modern practices | ✅ Implemented |
| Auto-generated API docs (Scramble) at `/docs/api` | ✅ Implemented |
| Optional Sanctum authentication | ✅ Implemented |
| Dockerized environment setup | ✅ Implemented |
| Structured with Git branches and commits | ✅ Implemented |

## Table of Contents

- [Environment Requirements](#environment-requirements)
- [Setup Instructions](#setup-instructions)
- [Authentication (Optional)](#authentication-optional)
- [API Documentation](#api-documentation)
- [Docker Setup](#docker-setup)

## Environment Requirements

| Requirement | Notes |
|--------------|-------|
| PHP | 8.2+ |
| Composer | — |
| Laravel CLI | — |
| Database | SQLite or MySQL |
| Node.js & npm | Optional, for frontend/tooling |
| Docker & Docker Compose | For containerization |

## Setup Instructions

### 1. Clone the Repository

```console
git clone https://github.com/<your-username>/spotify-api.git
cd spotify-api
```

### 2. Install Dependencies

```console
composer install
```

### 3. Set Up Environment

```console
cp .env.example .env
php artisan key:generate
```

Update your `.env` with the following:

```
SPOTIFY_CLIENT_ID=your_spotify_client_id
SPOTIFY_CLIENT_SECRET=your_spotify_client_secret
```

### 4. Migrate Database

```console
php artisan migrate
```

To reset the database:

```console
php artisan migrate:fresh
```

## Authentication (Optional)

Install and enable Sanctum:

```console
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

Enable middleware in `app/Http/Kernel.php` under the `api` group:

```php
\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
```

## API Documentation

Generated using [Scramble](https://scramble.dedoc.co/).

Navigate to: `http://127.0.0.1:8000/docs/api`

To regenerate docs:

```console
php artisan route:list
```

## Docker Setup

### 1. Build and Run

```console
docker-compose up -d --build
```

### 2. Access Services

| Service | URL |
|---------|-----|
| App | http://localhost:8000 |
| API Docs | http://localhost:8000/docs/api |
