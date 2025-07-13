<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message'] ?? '');
    if ($name && $email && $message) {
        // In a real app, send email or save to DB
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    }
    exit;
}
echo json_encode(['success' => false, 'error' => 'Invalid request.']);