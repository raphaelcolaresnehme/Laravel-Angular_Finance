# Laravel-Angular_Finance

Este projeto é um CRUD de transações financeiras utilizando Laravel e Angular.

## 🚀 Como rodar o projeto

### **1️⃣ Clonar o repositório**
```sh
git clone https://github.com/raphaelcolaresnehme/Laravel-Angular_Finance.git
cd Laravel-Angular_Finance
cd backend
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
cd frontend
npm install
ng serve

