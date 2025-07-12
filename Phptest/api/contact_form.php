<?php
/**
 * contact_form.php (API handler for Vercel)
 * Usage: POST requests from the contact form are sent here. Returns JSON response.
 * Purpose: Handles contact form submissions securely. For demo, just returns success (no email sending).
 * Security: Sanitizes and validates input, returns JSON.
 */
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
    exit;
}
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    exit;
}
// Simulate success (replace with mail() or other logic as needed)
echo json_encode(['success' => true]);