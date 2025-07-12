<?php
/*
 * NAVIGATION COMPONENT
 * Modular navbar component - exact replica of original Landio design
 * 
 * Usage: Include this file in any page with <?php include 'assets/components/navbar.php'; ?>
 * Compatible with PHP 7.x and can be used across multiple pages
 */
?>

<!-- Navigation Header -->
<header class="main-header">
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo - Exact match to original -->
            <div class="logo">
                <i class="fab fa-github"></i>
                <span>Landio</span>
            </div>
            
            <!-- Navigation Menu - Exact match to original -->
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#process" class="nav-link">Process</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            
            <!-- Get Template Button - Exact match to original -->
            <div class="nav-actions">
                <button class="btn-template" id="get-template-btn">
                    <i class="fas fa-download"></i>
                    Get Template
                </button>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header> 