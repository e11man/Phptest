<?php
/**
 * button_secondary.php
 * Usage: Include this file where a secondary action button is needed.
 * Purpose: Modular, reusable secondary button styled with the global accent color.
 * Example: include 'assets/components/button_secondary.php'; echo secondary_button('Learn More', '#');
 */
function secondary_button($label, $href = '#', $extra_class = '') {
    return '<a href="' . htmlspecialchars($href) . '" class="btn-secondary ' . htmlspecialchars($extra_class) . '">' . htmlspecialchars($label) . '</a>';
}
// Usage: echo secondary_button('Learn More', '/about.php');