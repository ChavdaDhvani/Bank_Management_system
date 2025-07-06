# 💸 Banking Management System

A simple and interactive **web application** simulating basic banking operations, like viewing users and transferring money between them.

> ⚡️ Built as a demo project with 10 dummy users. You can also add your own!

---

## 🚀 Features

✅ View list of all users and their balances  
✅ Transfer money from one user to another  
✅ View complete transaction history  
✅ Add new dummy users

---

## 🛠️ Tech Stack

| Layer      | Technologies Used                       |
|------------|-----------------------------------------|
| **Frontend** | HTML · CSS · Bootstrap · JavaScript     |
| **Backend**  | PHP                                    |
| **Database** | MySQL                                  |

---

## 🗄️ Database Design

### 🧑‍💼 `users` Table

| Field   | Type         |
|---------|--------------|
| id      | INT (PK)     |
| name    | VARCHAR      |
| email   | VARCHAR      |
| balance | DECIMAL      |

### 🔁 `transactions` Table

| Field      | Type         |
|------------|--------------|
| id         | INT (PK)     |
| sender     | VARCHAR      |
| receiver   | VARCHAR      |
| amount     | DECIMAL      |
| timestamp  | DATETIME     |

---

## 🌐 Application Flow
Home Page
->
View All Users
->
Select a User to View Details
->
Transfer Money
->
Select Receiver
->
Transaction Complete
->
View Updated User Balances
->
View Transfer History

---


---

## 🖼️ Screenshots

> *(Add screenshots here to make your README more visual!)*
---

## 💻 Getting Started

Follow these steps to run the project locally:

1. **Clone the repository**

    ```bash
    git clone https://github.com/ChavdaDhvani/Bank_Management_system.git
    ```

2. **Import the SQL database**

   - Import the `banking.sql` file into your MySQL server.

3. **Configure your database connection**

   - Update your DB connection details in PHP config files (e.g. `config/database.php`).

4. **Run the project on a local server**

   - Use tools like **XAMPP**, **WAMP**, or **MAMP**.


