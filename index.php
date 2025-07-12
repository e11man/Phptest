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
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    if ($name && $email && $message) {
        // In a real application, you would send email or save to database
        $form_message = "Thank you for your message! We'll get back to you soon.";
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
    <title>Landio - AI Agency & Landing Page Template</title>
    <meta name="description" content="Automate Smarter. Grow Faster. With AI. AI Automation for Modern Businesses Made Simple">
    
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
    <!-- Include Navigation Component -->
    <?php include 'assets/components/navbar.php'; ?>

    <!-- Main Hero Section -->
    <main class="hero-section">
        <div class="hero-container">
            <!-- GitHub Icon -->
            <div class="hero-icon">
                <div class="github-icon">
                    <i class="fab fa-github"></i>
                </div>
            </div>
            
            <!-- Hero Content -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span>NEW GEN AI AUTOMATION PARTNER</span>
                </div>
                
                <h1 class="hero-title">
                    Automate Smarter. Grow Faster. 
                    <span class="italic-text">With AI.</span>
                </h1>
                
                <p class="hero-subtitle">
                    AI Automation for Modern Businesses Made Simple
                </p>
                
                <div class="hero-actions">
                    <button class="btn-primary" id="book-call-btn">
                        Book A Free Call
                        <i class="fas fa-arrow-right"></i>
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

    <!-- Process Steps Section -->
    <section class="section-container animate-fadeInUp" id="process">
      <div class="section-title">Our Simple <span style="font-style:italic;color:var(--accent-light);">&amp; Smart Process</span></div>
      <div class="section-subtitle">How we deliver results in 3 clear steps</div>
      <div style="display:flex;flex-wrap:wrap;gap:2em;justify-content:center;">
        <div style="flex:1 1 220px;min-width:220px;max-width:340px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;transition:box-shadow 0.3s;">
          <div style="font-size:2.2em;color:var(--accent-color);font-weight:bold;margin-bottom:0.5em;">STEP 1</div>
          <div style="font-size:1.3em;font-weight:600;margin-bottom:0.5em;">Discover &amp; Analyze</div>
          <div style="color:var(--text-secondary);">We audit your existing workflows, tools, and customer data to uncover inefficiencies and automation opportunities. Every system is mapped for clarity.</div>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:340px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;transition:box-shadow 0.3s;">
          <div style="font-size:2.2em;color:var(--accent-color);font-weight:bold;margin-bottom:0.5em;">STEP 2</div>
          <div style="font-size:1.3em;font-weight:600;margin-bottom:0.5em;">Automate &amp; Integrate</div>
          <div style="color:var(--text-secondary);">We design and implement AI-powered workflows, integrating with your favorite tools and platforms for seamless automation.</div>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:340px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;transition:box-shadow 0.3s;">
          <div style="font-size:2.2em;color:var(--accent-color);font-weight:bold;margin-bottom:0.5em;">STEP 3</div>
          <div style="font-size:1.3em;font-weight:600;margin-bottom:0.5em;">Scale &amp; Optimize</div>
          <div style="color:var(--text-secondary);">We monitor, optimize, and scale your automations, providing real-time analytics and expert support for continuous growth.</div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-container animate-fadeInUp" id="why-choose">
      <div class="section-title">Why Choose Us <span style="font-style:italic;color:var(--accent-light);">Over Others?</span></div>
      <div class="section-subtitle">See how we compare against others in performance, growth, and results</div>
      <div style="display:flex;flex-wrap:wrap;gap:2em;justify-content:center;align-items:stretch;">
        <div style="flex:1 1 220px;min-width:220px;max-width:320px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;display:flex;flex-direction:column;align-items:center;">
          <div style="font-size:2.5em;color:var(--accent-color);margin-bottom:0.5em;">&#9889;</div>
          <div style="font-size:1.1em;font-weight:600;margin-bottom:0.5em;">Real-Time Intelligence</div>
          <div style="color:var(--text-secondary);text-align:center;">Access accurate, real-time data to drive smarter decisions</div>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:320px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;display:flex;flex-direction:column;align-items:center;">
          <div style="font-size:2.5em;color:var(--accent-color);margin-bottom:0.5em;">&#128200;</div>
          <div style="font-size:1.1em;font-weight:600;margin-bottom:0.5em;">Measurable Impact</div>
          <div style="color:var(--text-secondary);text-align:center;">Track performance, uncover insights, and achieve data-backed growth</div>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:320px;background:var(--primary-bg);border-radius:var(--border-radius-lg);box-shadow:0 2px 12px rgba(0,0,0,0.12);padding:2em 1.2em;display:flex;flex-direction:column;align-items:center;">
          <div style="font-size:2.5em;color:var(--accent-color);margin-bottom:0.5em;">&#128279;</div>
          <div style="font-size:1.1em;font-weight:600;margin-bottom:0.5em;">Seamless Integration</div>
          <div style="color:var(--text-secondary);text-align:center;">Connect tools, teams, and workflows with intelligent automation</div>
        </div>
      </div>
    </section>

    <!-- Contact Form Section (unchanged, but can be wrapped for consistency) -->
    <section class="section-container animate-fadeIn" id="contact">
      <?php include 'assets/components/contact_form.php'; ?>
    </section>

    <!-- Hidden Contact Form Modal -->
    <div class="modal" id="contact-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Book A Free Call</h3>
                <button class="modal-close" id="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <?php if ($form_message): ?>
                    <div class="form-message <?php echo $form_success ? 'success' : 'error'; ?>">
                        <?php echo $form_message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="" class="contact-form">
                    <input type="hidden" name="contact_form" value="1">
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Tell us about your project</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-primary">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Global JavaScript -->
    <script src="assets/js/global.js"></script>
</body>
</html> 