<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $db = new mysqli('localhost', 'root', '', 'Task');
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    $stmt = $db->prepare("DELETE FROM task_list WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header("Location: task_management.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $db->close();
}
?>
