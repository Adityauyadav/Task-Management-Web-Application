
# Task Management Web App

This is a simple Task Manager application that allows users to add, edit, and delete tasks. It was originally built using PHP with a MySQL database but has been converted to a plain HTML, JavaScript, and CSS version that works with localStorage.


## Running the php version

Prerequisites : 
- Install **XAMPP** (or any PHP server) to run PHP files.
- Create a MySQL database named `Task`.
- Create a table named `task_list` with the following schema:

```sql
CREATE TABLE task_list (
    id INT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL
);
```

### Steps to run :
1. Start Apache and MySQL in XAMPP.
2. Copy the PHP files (add_task.php, delete_task.php, display_tasks.php, edit_task.php, and task_management.php) into the XAMPP htdocs folder.
3. Open your browser and go to: http://localhost/task_management.php
4.	Use the form to add, edit, and delete tasks.


### Running the HTML & JavaScript Version
1. Open the index.html file in any modern web browser.
2. The tasks will be stored in localStorage, meaning no backend or database is required.
3. Use the interface to add, edit, and delete tasks.