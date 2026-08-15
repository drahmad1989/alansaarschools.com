<?php
require_once 'includes/header.php';

// Get requested page
$page = isset($_GET['page']) ? preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['page'])) : 'home';

// Allowed pages
$allowed_pages = [
    'home', 'about', 'academics', 'admissions', 'contact', 
    'gallery', 'news', 'faqs', 'downloads', 'chairman-message',
    'vision-mission', 'why-alansaar', 'skills-program', 
    'student-life', 'fee-structure', 'privacy', 'terms',
    'islamic-education', 'online-education', 'blog',
    'best-islamic-school-kasur', 'digital-skills-students-pakistan'
];

// Include page
if (in_array($page, $allowed_pages) && file_exists("pages/{$page}.php")) {
    include "pages/{$page}.php";
} else {
    include 'pages/404.php';
}

require_once 'includes/footer.php';
?>