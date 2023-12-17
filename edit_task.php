<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $db = new mysqli('localhost', 'root', '', 'Task');
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    $stmt = $db->prepare("SELECT task_name FROM task_list WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->bind_result($task_name);
    $stmt->fetch();
    $stmt->close();
    $db->close();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && isset($_POST['task_name'])) {
    $id = $_POST['id'];
    $task_name = $_POST['task_name'];

    $db = new mysqli('localhost', 'root', '', 'Task');
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    $stmt = $db->prepare("UPDATE task_list SET task_name = ? WHERE id = ?");
    $stmt->bind_param('si', $task_name, $id);
    if ($stmt->execute()) {
        header("Location: task_management.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Task</h1>
    <div class="container">
        <form action="edit_task.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="task_name">New Task Name:</label>
            <input type="text" id="task_name" name="task_name" value="<?php echo $task_name; ?>" required>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
