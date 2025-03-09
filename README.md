# SmartInventoryApp

# 🚀 Features

Inventory Tracking

User Authentication

Role-Based Access Control

Real-time Notifications

REST API Support

# 🛠 Prerequisites

Ensure you have the following installed:

PHP (>= 8.0)

Composer (latest version)

Node.js & NPM (latest version)

MySQL or supported database

Laravel (latest version recommended)

# 📥 Installation Steps

1️⃣ Clone the Repository
```
git clone <repository_url>
cd SmartInventoryApp
```
2️⃣ Install Dependencies
```
composer install
npm install
```
3️⃣ Set Up Environment Variables

Copy the .env.example file and rename it to .env
```
cp .env.example .env
```
Open .env and update database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

4️⃣ Generate Application Key
```
php artisan key:generate
```
5️⃣ Run Database Migrations
```
php artisan migrate
```
6️⃣ Seed the Database (Optional)
```
php artisan db:seed
```
7️⃣ Serve the Application
```
php artisan serve
```
Open your browser and visit: http://127.0.0.1:8000/admin

8️⃣ Compile Frontend Assets
```
npm run dev
```
# 🔧 Additional Commands

To run tests:
```
php artisan test
```
To clear cache:
```
php artisan cache:clear
```
# 📜 License

This project is licensed under the MIT License.

# 📧 Contact

John Teston - jjeteston@mymail.mapua.edu.ph
