# Student Management System

The **Student Management System** is a web-based application designed to manage student information efficiently. It includes features for administrators to log in, manage student records, and recover forgotten accounts.

---

## Features
- **Admin Login**: Secure login for administrators to access the management dashboard.
- **Student Records**: Add, update, and delete student information.
- **Account Recovery**: Forgot password feature for admins.
- **User-Friendly Interface**: Intuitive design with image support.

---

## Technologies Used
- **PHP**: Backend logic and database interaction.
- **MySQL**: Database for storing student and admin data.
- **HTML/CSS**: Frontend interface and styling.

---


---

## Installation

### Prerequisites
- A web server (e.g., Apache or Nginx).
- PHP 7.4 or later.
- MySQL.

### Steps
1. **Clone the Repository**:
    ```bash
    git clone https://github.com/your-username/student-management-system.git
    cd student-management-system
    ```
2. **Set Up the Database**:
    - Import the database file from the `DB File/` directory into MySQL:
      ```sql
      mysql -u username -p database_name < path/to/DB File/your_database_file.sql
      ```
3. **Configure the Database Connection**:
    - Update the database credentials in the `adminlog.php` file or a separate configuration file (if applicable):
      ```php
      $servername = "localhost";
      $username = "your_username";
      $password = "your_password";
      $dbname = "your_database_name";
      ```

4. **Run the Application**:
    - Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Access the application via `http://localhost/student-management-system`.

---

## Usage
1. **Admin Login**:
   - Access the admin login page via `http://localhost/student-management-system/Admin Login/`.
   - Enter the admin credentials to log in.

2. **Forgot Password**:
   - Use the "Forgot Account" feature to recover access to your account.

3. **Manage Students**:
   - After logging in, use the dashboard to add, edit, or delete student records.

---

## Contributing
Contributions are welcome! Feel free to fork this repository and submit pull requests.

---
