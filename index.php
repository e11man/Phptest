<?php
/*
 * LANDIO - AI Automation Landing Page
 * Main homepage file - Compatible with PHP 7.x and shared hosting
 * 
 * Usage: Upload to web server root directory and access via browser
 * Requirements: PHP 7.x, modern web browser with jQuery 3.x support
 */

// Basic PHP configuration
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simple contact form handler
$form_message = '';
$form_success = false;

if ($_POST && isset($_POST['contact_form'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $project_type = htmlspecialchars($_POST['project_type'] ?? '');
    $budget = htmlspecialchars($_POST['budget'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $project_type && $budget && $message) {
        // In a real application, you would send email or save to database
        $form_message = "Thank you for your project brief! I'll review your requirements and get back to you within 24 hours.";
        $form_success = true;
    } else {
        $form_message = "Please fill in all required fields with valid information.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josh Ellman - Full Stack Developer & Business Solutions</title>
    <meta name="description" content="Professional web development and business solutions by Josh Ellman. Full-stack developer specializing in custom websites, applications, and digital solutions.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/global.css">
    
    <!-- jQuery 3.x from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation Header -->
    <header class="main-header">
        <nav class="navbar">
            <div class="nav-container">
                <!-- Logo -->
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span>Josh Ellman</span>
                </div>
                
                <!-- Navigation Menu -->
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#process" class="nav-link">Process</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                
                <!-- View Portfolio Button -->
                <div class="nav-actions">
                    <button class="btn-template" id="view-portfolio-btn">
                        <i class="fas fa-eye"></i>
                        View Portfolio
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

    <!-- Main Hero Section -->
    <main class="hero-section">
        <div class="hero-container">
            <!-- Developer Icon -->
            <div class="hero-icon">
                <div class="developer-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
            </div>
            
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span>FULL STACK DEVELOPER & BUSINESS SOLUTIONS</span>
                </div>
                
                <h1 class="hero-title">
                    Building Digital Solutions. 
                    <span class="italic-text">Delivering Results.</span>
                </h1>
                
                <p class="hero-subtitle">
                    Professional web development and custom business solutions by Josh Ellman
                </p>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
                
                <div class="hero-actions">
                    <button class="btn-primary" id="book-call-btn">
                        Start Your Project
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="btn-secondary" id="view-work-btn">
                        <i class="fas fa-play"></i>
                        View My Work
                    </button>
                </div>
            </div>
            
            <!-- Social Media Links -->
            <div class="social-links">
                <a href="#" class="social-link" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-link" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="social-link" aria-label="LinkedIn">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </main>

    <!-- Hidden Contact Form Modal -->
    <div class="modal" id="contact-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Start Your Project</h3>
                <button class="modal-close" id="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <p class="modal-intro">Let's discuss your project and bring your vision to life. Tell me about your requirements and I'll get back to you within 24 hours.</p>
                
                <?php if ($form_message): ?>
                    <div class="form-message <?php echo $form_success ? 'success' : 'error'; ?>">
                        <?php echo $form_message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="" class="contact-form">
                    <input type="hidden" name="contact_form" value="1">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="project_type">Project Type</label>
                        <select id="project_type" name="project_type" required>
                            <option value="">Select project type</option>
                            <option value="website">Website Development</option>
                            <option value="webapp">Web Application</option>
                            <option value="ecommerce">E-commerce Store</option>
                            <option value="mobile">Mobile App</option>
                            <option value="consulting">Consulting</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="budget">Project Budget</label>
                        <select id="budget" name="budget" required>
                            <option value="">Select budget range</option>
                            <option value="under-5k">Under $5,000</option>
                            <option value="5k-10k">$5,000 - $10,000</option>
                            <option value="10k-25k">$10,000 - $25,000</option>
                            <option value="25k-50k">$25,000 - $50,000</option>
                            <option value="50k-plus">$50,000+</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Project Description</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Tell me about your project, goals, and any specific requirements..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        Send Project Brief
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Global JavaScript -->
    <script src="assets/js/global.js"></script>
</body>
</html> 