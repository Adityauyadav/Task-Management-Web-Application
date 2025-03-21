# Task Manager

This is a simple **Task Manager** application that allows users to add, edit, and delete tasks. It was originally built using **PHP** with a MySQL database but has been converted to a **plain HTML, JavaScript, and CSS** version that works with localStorage.

---

## Running the PHP Version

### Prerequisites:
- Install **XAMPP** (or any PHP server) to run PHP files.
- Create a MySQL database named `Task`.
- Create a table named `task_list` with the following schema:

```sql
CREATE TABLE task_list (
    id INT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL
);

Steps to Run:
	1.	Start Apache and MySQL in XAMPP.
	2.	Copy the PHP files (add_task.php, delete_task.php, display_tasks.php, edit_task.php, and task_management.php) into the XAMPP htdocs folder.
	3.	Open your browser and go to: [text](http://localhost/task_management.php)
    4. 	Use the form to add, edit, and delete tasks.


Running the HTML & JavaScript Version

Steps:
	1.	Open the index.html file in any modern web browser.
	2.	The tasks will be stored in localStorage, meaning no backend or database is required.
	3.	Use the interface to add, edit, and delete tasks.

---

Differences Between Versions

| Feature            | PHP + MySQL Version | HTML + JS Version |
|--------------------|--------------------|------------------|
| Storage           | MySQL Database      | localStorage    |
| Backend Required | Yes (PHP)           | No (Client-side only) |
| Server Setup      | Needed (XAMPP)      | No setup required |

You can choose which version suits your needs. The **PHP version** is useful for real-world applications with databases, while the **HTML & JS version** is lightweight and runs entirely in the browser.

---

Author:
This project was originally written in PHP and later converted to plain JavaScript and HTML.

