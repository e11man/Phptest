<?php
/**
 * button_primary.php
 * Usage: Include this file where a primary action button is needed.
 * Purpose: Modular, reusable primary button styled with the global accent color.
 * Example: include 'assets/components/button_primary.php'; echo primary_button('Click Me', '#');
 */
function primary_button($label, $href = '#', $extra_class = '') {
    return '<a href="' . htmlspecialchars($href) . '" class="btn-primary ' . htmlspecialchars($extra_class) . '">' . htmlspecialchars($label) . '</a>';
}
// Usage: echo primary_button('Get Started', '/contact.php');