<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $task_name = $_POST['task_name'];

    $db = new mysqli('localhost', 'root', '', 'Task');
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    $stmt = $db->prepare("INSERT INTO task_list (id, task_name) VALUES (?, ?)");
    $stmt->bind_param('is', $id, $task_name);
    if ($stmt->execute()) {
        header("Location: task_management.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $db->close();
}
?>
