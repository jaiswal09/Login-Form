User Authentication System
A secure and scalable full-stack user authentication system designed for applications requiring controlled access.
This system provides user registration, login, and role-based access control, ensuring both security and a smooth user experience.

Built using PHP for the backend and HTML, CSS, and JavaScript for the frontend, it features clean code, strong security practices, and an intuitive interface.

✨ Key Features
🔐 Secure Password Management

Passwords are encrypted using PHP’s password_hash() for one-way hashing.

Authentication is handled with password_verify() to protect against common attacks like SQL injection and brute force.

🛡 Role-Based Access Control (RBAC)

Supports Admin and User roles.

Users are redirected to different pages based on their role after login.

🔄 Session Management

Maintains login state across pages using native PHP sessions.

Prevents unauthorized access to protected routes.

✅ Duplicate Registration Prevention

Checks if an email already exists in the database and gives clear feedback to users.

📂 Modular Architecture

Organized files: config.php, login_register.php, index.php.

Easy to maintain, scale, and integrate into larger projects.

🛠 Technologies Used
Backend: PHP

Database: MySQL

Frontend: HTML, CSS, JavaScript

📦 Installation & Setup
1️⃣ Create the Database
sql
Copy
Edit
CREATE DATABASE users_db;

CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `role` ENUM('user', 'admin') NOT NULL
);
2️⃣ Configure Database Connection
Edit config.php:

php
Copy
Edit
<?php
$host = "localhost";
$user = "root";
$password = "";  
$database = "users_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
3️⃣ Project Structure
arduino
Copy
Edit
/project-root/
├── admin_page.php
├── config.php
├── index.php
├── login_register.php
├── script.js
├── styles.css
└── user_page.php
4️⃣ Deployment
Place the project folder inside your server directory:

XAMPP: htdocs

WAMP: www

Run in browser:

arduino
Copy
Edit
http://localhost/your-project-folder/index.php
🚀 Usage
Visit the homepage and toggle between Login and Register forms with a click.

Fill in details and submit—data is validated, securely stored, and sessions are created.

Redirected to either Admin Dashboard or User Page based on role.

🎯 Ideal For
Web apps requiring secure authentication.

Projects that need multi-role access (Admin/User).

Learning purposes for PHP + MySQL authentication best practices.

If you’d like, I can also redesign the UI in modern, responsive style so your authentication system looks like a premium SaaS login portal instead of a plain HTML form. That will make it visually attractive and portfolio-ready.