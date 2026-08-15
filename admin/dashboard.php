<?php
session_start();
// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

// Include database connection
require_once '../config/database.php';

// --- Fetch Dashboard Stats ---
try {
    // Total leads
    $stmt = $pdo->query("SELECT COUNT(*) FROM leads");
    $total_leads = $stmt->fetchColumn();

    // Leads per campus
    $stmt = $pdo->query("SELECT campus, COUNT(*) as count FROM leads GROUP BY campus");
    $leads_by_campus = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

} catch (PDOException $e) {
    die("Error fetching dashboard data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Al-Ansaar Schools Admin</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="../assets/images/logo/logo.webp" alt="Logo">
                <h3>Admin Panel</h3>
            </div>
            <ul class="sidebar-nav">
                <li><a href="dashboard.php" class="active">Dashboard</a></li>
                <li><a href="manage-leads.php">Manage Leads</a></li>
                <li><a href="../index.php" target="_blank">View Website</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="page-header">
                <h1>Dashboard</h1>
                <p>Welcome back! Here's an overview of your leads.</p>
            </header>

            <section class="stats-grid">
                <div class="stat-card">
                    <h3>Total Leads</h3>
                    <p class="stat-number"><?php echo $total_leads; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Madina Town</h3>
                    <p class="stat-number"><?php echo $leads_by_campus['madina-town'] ?? 0; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Khudian</h3>
                    <p class="stat-number"><?php echo $leads_by_campus['khudian'] ?? 0; ?></p>
                </div>
                <div class="stat-card">
                    <h3>Noorpur</h3>
                    <p class="stat-number"><?php echo $leads_by_campus['noorpur'] ?? 0; ?></p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>