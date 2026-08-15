<?php
session_start();
// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: index.php');
    exit;
}

// Include database connection and settings
require_once '../config/database.php';
require_once '../config/settings.php';

// --- Filtering Logic ---
 $filter_campus = isset($_GET['filter']) ? $_GET['filter'] : 'all';
 $sql = "SELECT * FROM leads ORDER BY created_at DESC";
 $params = [];

if ($filter_campus !== 'all') {
    $sql = "SELECT * FROM leads WHERE campus = :campus ORDER BY created_at DESC";
    $params = [':campus' => $filter_campus];
}

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $leads = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching leads: " . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Leads | Al-Ansaar Schools Admin</title>
    <link rel="stylesheet" href="admin-style.css">
    <style>
        .filters-bar { margin-bottom: 20px; }
        .filter-btn {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 8px 15px;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .filter-btn.active { background-color: var(--primary-blue); color: var(--clean-white); border-color: var(--primary-blue); }
        .leads-table { width: 100%; border-collapse: collapse; background-color: var(--clean-white); box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
        .leads-table th, .leads-table td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
        .leads-table th { background-color: var(--dark-teal); color: var(--clean-white); }
        .leads-table tr:hover { background-color: var(--light-gray); }
        .no-leads { text-align: center; padding: 40px; color: #777; }
        .campus-badge { background-color: var(--bright-green); color: var(--dark-teal); padding: 4px 8px; border-radius: 12px; font-size: 0.8em; font-weight: bold; }
    </style>
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="manage-leads.php" class="active">Manage Leads</a></li>
                <li><a href="../index.php" target="_blank">View Website</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="page-header">
                <h1>Manage Leads</h1>
                <p>View and filter inquiries from parents.</p>
            </header>

            <section class="filters-bar">
                <button class="filter-btn <?php echo ($filter_campus == 'all') ? 'active' : ''; ?>" onclick="window.location.href='?filter=all'">All Leads</button>
                <?php foreach ($GLOBALS['campuses'] as $key => $campus): ?>
                    <button class="filter-btn <?php echo ($filter_campus == $key) ? 'active' : ''; ?>" onclick="window.location.href='?filter=<?php echo $key; ?>'">
                        <?php echo $campus['name']; ?>
                    </button>
                <?php endforeach; ?>
            </section>

            <section class="leads-table-container">
                <?php if (count($leads) > 0): ?>
                    <table class="leads-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Parent Name</th>
                                <th>Phone</th>
                                <th>Child Name</th>
                                <th>Campus</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($leads as $lead): ?>
                                <tr>
                                    <td><?php echo date('d M Y, h:i A', strtotime($lead['created_at'])); ?></td>
                                    <td><?php echo htmlspecialchars($lead['parent_name']); ?></td>
                                    <td><?php echo htmlspecialchars($lead['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($lead['child_name']); ?></td>
                                    <td><span class="campus-badge"><?php echo htmlspecialchars($GLOBALS['campuses'][$lead['campus']]['name']); ?></span></td>
                                    <td><?php echo nl2br(htmlspecialchars($lead['message'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="no-leads">
                        <h3>No leads found.</h3>
                        <p>There are no inquiries for the selected filter yet.</p>
                    </div>
                <?php endif; ?>
            </section>
        </main>
    </div>
</body>
</html>