
<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Task Management</h1>
    <div class="container">
        <form action="add_tasks.php" method="post">
            <label for="id">Task ID:</label>
            <input type="number" id="id" name="id" required>
            <label for="task_name">Task Name:</label>
            <input type="text" id="task_name" name="task_name" required>
            <button type="submit">Add Task</button>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Action</th>
            </tr>
            <?php include 'display_tasks.php'; ?>
        </table>
    </div>
</body>
</html>
