<?php
require 'classes/db1.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($db_offline) {
    echo "<script>alert('Database not connected.'); window.location.href='adminPage.php';</script>";
    exit;
}

$sql  = "delete from events where event_id='$id';";
$sql .= "delete from event_info where event_id='$id';";
$sql .= "delete from staff_coordinator where event_id='$id';";
$sql .= "delete from student_coordinator where event_id='$id';";
$sql .= "delete from registered where event_id='$id'";

if ($conn->multi_query($sql) === True) {
    echo "<script>alert('Event deleted successfully'); window.location.href='adminPage.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
