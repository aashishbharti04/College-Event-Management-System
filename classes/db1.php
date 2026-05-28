<?php
// Database connection. Made non-fatal so pages can render an offline banner during local preview.
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cems";

$db_offline    = false;
$db_last_error = "";
$conn          = null;

if (!class_exists('mysqli')) {
    $db_offline    = true;
    $db_last_error = "PHP mysqli extension is not enabled in this install.";
} else {
    if (function_exists('mysqli_report')) { @mysqli_report(MYSQLI_REPORT_OFF); }
    $conn = @new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $db_offline    = true;
        $db_last_error = $conn->connect_error;
        $conn          = null;
    }
}

/**
 * Render a friendly offline banner explaining how to enable the database.
 */
function db_offline_banner($error = "") {
    $err = $error ? '<div class="mt-2 small" style="color:#7c2d12;opacity:.8;">Details: '.htmlspecialchars($error).'</div>' : '';
    return '<div class="banner-warn">'
         . '<i class="bi bi-database-exclamation fs-4"></i>'
         . '<div><b>Database not connected.</b> This page needs MySQL/MariaDB with the <code>cems</code> database imported from <code>cems.sql</code>. '
         . 'Static pages still work &mdash; install XAMPP/WAMP or run any MySQL server on <code>localhost</code>, then import <code>cems.sql</code>.'
         . $err
         . '</div></div>';
}
