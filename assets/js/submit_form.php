<?php
// This script processes the contact form submission

// Include settings and database connection
require_once '../../config/settings.php';
require_once '../../config/database.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and collect form data
    $parent_name = htmlspecialchars(trim($_POST['parent_name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $child_name = htmlspecialchars(trim($_POST['child_name']));
    $campus = htmlspecialchars(trim($_POST['campus']));
    $message = htmlspecialchars(trim($_POST['message']));
    $source_page = isset($_POST['source_page']) ? htmlspecialchars(trim($_POST['source_page'])) : 'Contact Form';

    // Basic validation
    if (empty($parent_name) || empty($phone) || empty($campus)) {
        // Redirect back with an error
        header("Location: " . SITE_URL . "?page=contact&status=error");
        exit();
    }

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO leads (parent_name, phone, child_name, campus, message, source_page) VALUES (:parent_name, :phone, :child_name, :campus, :message, :source_page)";

    try {
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':parent_name', $parent_name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':child_name', $child_name);
        $stmt->bindParam(':campus', $campus);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':source_page', $source_page);

        // Execute the statement
        $stmt->execute();

        // Redirect to a success page
        header("Location: " . SITE_URL . "?page=contact&status=success");
        exit();

    } catch (PDOException $e) {
        // If an error occurs, redirect back with a generic error
        // In a real-world scenario, you might log this error
        // die("ERROR: Could not execute query. " . $e->getMessage());
        header("Location: " . SITE_URL . "?page=contact&status=error");
        exit();
    }

} else {
    // If not a POST request, redirect to the contact page
    header("Location: " . SITE_URL . "?page=contact");
    exit();
}
?>