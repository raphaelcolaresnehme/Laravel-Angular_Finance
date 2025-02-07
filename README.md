# Financeiro EasyTrack - Gerenciador Simples de Transações

## 📌 Sobre o Projeto
O **Financeiro EasyTrack** é uma aplicação web minimalista para gerenciar receitas e despesas.

## 📂 Estrutura do Projeto
- `banco/` → Scripts SQL para criação do banco
- `backend/` → API RESTful Laravel
- `frontend/` → Aplicação Angular

## 🚀 Como Rodar o Projeto

### 📌 Backend Laravel
1. Vá para `backend` e instale dependências:
   ```bash
   cd backend
   composer install
   ```
2. Configure o `.env`:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=financeiro_easytrack
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. Rode as migrações:
   ```bash
   php artisan migrate
   ```
4. Inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```

### 📌 Frontend Angular
1. Vá para `frontend` e instale dependências:
   ```bash
   cd frontend
   npm install
   ```
2. Inicie o servidor Angular:
   ```bash
   ng serve
   ```
3. Acesse:
   ```
   http://localhost:4200
   ```

## ✅ Testes e Validação
Teste os endpoints da API com Postman ou cURL para verificar as funcionalidades.
