<?php
$db = new mysqli('localhost', 'root', '', 'Task');
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = "SELECT * FROM task_list";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["task_name"] . "</td><td><a href='edit_task.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete_task.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No tasks in the list.</td></tr>";
}
$db->close();
?>
