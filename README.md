# 🚀 Laravel + Inertia Base Project

A modern **Laravel** application boilerplate integrated with **Inertia.js** and **Vue.js**, providing a clean foundation for building dynamic single-page apps (SPA) with server-driven routing.

---

## 🧩 Tech Stack

- **Laravel** – PHP backend framework for elegant and structured development  
- **Inertia.js** – Bridges Laravel and Vue without building a full API  
- **Vue 3 + Vite** – Modern frontend development with fast bundling  
- **Tailwind CSS** – Utility-first CSS framework for rapid UI design  
- **SB Admin 2 (adapted for Vue/Inertia)** – Pre-built admin dashboard styling and layout

---

## ⚙️ Requirements

Before running this project, make sure you have:

- PHP ≥ 8.2  
- Composer ≥ 2.x  
- Node.js ≥ 18.x  
- NPM or Yarn  
- A configured database (MySQL, PostgreSQL, etc.)

---

## 🚧 Installation

```bash
# 1. Clone the repository
git clone https://github.com/dimasetiawans/laravel-inertia.git

# 2. Enter the project directory
cd laravel-inertia

# 3. Install PHP dependencies
composer install

# 4. Install JS dependencies
npm install

# 5. Create environment file
cp .env.example .env

# 6. Generate application key
php artisan key:generate

# 7. Configure database in .env and run migrations
php artisan migrate

# 8. Build frontend assets
npm run dev

# 9. Start local development server
php artisan serve

