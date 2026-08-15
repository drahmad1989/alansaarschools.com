<?php
// Sanitize Input
function sanitize($data) {
    if (is_array($data)) {
        return array_map('sanitize', $data);
    }
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Generate CSRF Token
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Verify CSRF Token
function verify_csrf($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Format Date
function format_date($date, $format = 'd M, Y') {
    return date($format, strtotime($date));
}

// Truncate Text
function truncate($text, $length = 100, $ending = '...') {
    if (strlen($text) > $length) {
        $text = substr($text, 0, $length);
        $text = substr($text, 0, strrpos($text, ' '));
        return $text . $ending;
    }
    return $text;
}

// Get Current Page
function current_page() {
    return isset($_GET['page']) ? sanitize($_GET['page']) : 'home';
}

// Check if Active Page
function is_active($page) {
    return current_page() === $page ? 'active' : '';
}

// Safe Redirect
function redirect($url) {
    header('Location: ' . $url);
    exit;
}

// Flash Messages
function set_flash($type, $message) {
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function get_flash() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// Display Flash Message HTML
function flash_message() {
    $flash = get_flash();
    if ($flash) {
        $class = $flash['type'] === 'success' ? 'alert-success' : 
                 ($flash['type'] === 'error' ? 'alert-danger' : 'alert-info');
        return '<div class="alert ' . $class . ' alert-dismissible fade show" role="alert">
                    ' . sanitize($flash['message']) . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>';
    }
    return '';
}

// Get Site Setting from Database
function get_setting($key, $default = '') {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT setting_value FROM settings WHERE setting_key = ?");
        $stmt->execute([$key]);
        $result = $stmt->fetch();
        return $result ? $result['setting_value'] : $default;
    } catch (PDOException $e) {
        return $default;
    }
}

// Log Activity
function log_activity($action, $details = '') {
    global $pdo;
    try {
        $stmt = $pdo->prepare("INSERT INTO activity_logs (action, details, ip_address, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$action, $details, $_SERVER['REMOTE_ADDR'] ?? '']);
    } catch (PDOException $e) {
        error_log("Log Error: " . $e->getMessage());
    }
}
?>