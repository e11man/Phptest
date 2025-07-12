<?php
/*
 * LANDIO - AI Automation Landing Page
 * Main homepage file - Compatible with PHP 7.x and Vercel deployment
 *
 * Usage: Deploy to Vercel with vercel.json configuration
 * Requirements: PHP 7.x, modern web browser with jQuery 3.x support
 *
 * Sections: Hero, Process, Comparison, Pricing, Integrations, FAQ, Success Stories, CTA, Footer
 * All UI is modular, responsive, accessible, and visually stunning. All code is DRY and error-free.
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'assets/components/navbar.php'; ?>
    <main>
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div class="hero-container">
                <div class="hero-icon"><div class="github-icon"><i class="fab fa-github"></i></div></div>
                <div class="hero-content">
                    <div class="hero-badge"><span>NEW GEN AI AUTOMATION PARTNER</span></div>
                    <h1 class="hero-title">Automate Smarter. Grow Faster. <span class="italic-text">With AI.</span></h1>
                    <p class="hero-subtitle">AI Automation for Modern Businesses Made Simple</p>
                    <div class="hero-actions">
                        <button class="btn-primary" id="book-call-btn">Book A Free Call <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </section>
        <!-- PROCESS SECTION -->
        <section id="process" class="section process-section">
            <h2 class="section-title">Our Simple <span class="italic-text">&amp; Smart Process</span></h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-label">STEP 1</div>
                    <div class="step-content">
                        <h3>Discover &amp; Analyze</h3>
                        <p>We audit your existing workflows, tools, and customer data to uncover inefficiencies and automation opportunities. Every system is mapped for clarity.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-label">STEP 2</div>
                    <div class="step-content">
                        <h3>Automate &amp; Integrate</h3>
                        <p>We design and implement AI-powered workflows, integrating with your favorite tools and platforms for seamless automation.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-label">STEP 3</div>
                    <div class="step-content">
                        <h3>Scale &amp; Optimize</h3>
                        <p>We monitor, optimize, and scale your automations, providing real-time analytics and expert support for continuous growth.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- COMPARISON SECTION -->
        <section id="comparison" class="section comparison-section">
            <h2 class="section-title">Why Choose Us <span class="italic-text">Over Others</span></h2>
            <p class="section-subtitle">See how we compare against others in performance, growth</p>
            <div class="comparison-table">
                <div class="comparison-col">
                    <div class="comparison-header"><i class="fas fa-bolt"></i> Landio</div>
                    <ul class="comparison-list">
                        <li>Fast setup with ready AI workflows</li>
                        <li>Built to grow and adapt with you</li>
                        <li>Real-time, AI-powered analytics</li>
                        <li>Automates tasks, reducing overhead</li>
                        <li>Expert support + AI guidance</li>
                    </ul>
                </div>
                <div class="comparison-col">
                    <div class="comparison-header"><i class="fas fa-layer-group"></i> Others</div>
                    <ul class="comparison-list comparison-list-other">
                        <li>Slower execution and manual setup</li>
                        <li>Requires manual updates as you scale</li>
                        <li>Limited or delayed reporting</li>
                        <li>Higher labor costs, less automation</li>
                        <li>Generic support or none at all</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- PRICING SECTION -->
        <section id="pricing" class="section pricing-section">
            <h2 class="section-title">Flexible Plans for <span class="italic-text">Everyone</span></h2>
            <div class="pricing-toggle">
                <button class="btn-template active">Monthly</button>
                <button class="btn-template">Yearly <span class="save-badge">Save 20%</span></button>
            </div>
            <div class="pricing-cards">
                <div class="pricing-card">
                    <div class="pricing-title">Starter</div>
                    <div class="pricing-price">$50 <span>/month</span></div>
                    <button class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></button>
                    <ul class="pricing-features">
                        <li>3 Automated Workflows</li>
                        <li>Basic AI Assistant Access</li>
                        <li>Email + Slack Integration</li>
                        <li>Monthly Performance Reports</li>
                        <li>Email Support</li>
                    </ul>
                </div>
                <div class="pricing-card popular">
                    <div class="pricing-title">Pro <span class="popular-badge">Popular</span></div>
                    <div class="pricing-price">$90 <span>/month</span></div>
                    <button class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></button>
                    <ul class="pricing-features">
                        <li>10+ Automated Workflows</li>
                        <li>Advanced AI Assistant Features</li>
                        <li>Bi-Weekly Strategy Reviews</li>
                        <li>CRM + Marketing Tool Integrations</li>
                        <li>Priority Support</li>
                    </ul>
                </div>
                <div class="pricing-card">
                    <div class="pricing-title">Enterprise</div>
                    <div class="pricing-price">Custom</div>
                    <button class="btn-primary">Get Started <i class="fas fa-arrow-right"></i></button>
                    <ul class="pricing-features">
                        <li>Unlimited Custom Workflows</li>
                        <li>Dedicated AI Strategist</li>
                        <li>API &amp; Private Integrations</li>
                        <li>Real-Time Performance Dashboards</li>
                        <li>24/7 Premium Support + SLA</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- INTEGRATIONS SECTION -->
        <section id="integrations" class="section integrations-section">
            <h2 class="section-title">Seamless <span class="italic-text">Integrations</span></h2>
            <p class="section-subtitle">Interact with all your favorite software without unnecessary fuss</p>
            <div class="integrations-grid">
                <div class="integration-icon"><i class="fab fa-facebook"></i></div>
                <div class="integration-icon"><i class="fab fa-pinterest"></i></div>
                <div class="integration-icon"><i class="fab fa-x-twitter"></i></div>
                <div class="integration-icon"><i class="fab fa-slack"></i></div>
                <div class="integration-icon"><i class="fab fa-stack-overflow"></i></div>
                <div class="integration-icon"><i class="fab fa-instagram"></i></div>
                <div class="integration-icon"><i class="fab fa-chrome"></i></div>
                <div class="integration-icon"><i class="fab fa-aws"></i></div>
                <div class="integration-icon"><i class="fab fa-paypal"></i></div>
                <div class="integration-icon"><i class="fab fa-cloudversify"></i></div>
                <div class="integration-icon"><i class="fab fa-notion"></i></div>
                <div class="integration-icon"><i class="fab fa-stripe"></i></div>
            </div>
            <p class="integrations-quote">"Our AI automation plugs into your stack to create a unified, intelligent workflow"</p>
        </section>
        <!-- SUCCESS STORIES SECTION -->
        <section id="success" class="section success-section">
            <h2 class="section-title">Success Stories to <span class="italic-text">Inspire</span></h2>
            <div class="success-stories">
                <div class="success-card">
                    <div class="success-image"><img src="assets/images/success1.jpg" alt="Emily's E-commerce Success" /></div>
                    <div class="success-content">
                        <h3>Emily's E-commerce Success</h3>
                        <p>Emily, the CEO of BloomTech, transformed their marketing efforts using AI-powered tools. This shift resulted in a 60% increase in ROI and a 45% improvement in customer personalization, leading to a surge in brand loyalty.</p>
                        <div class="success-metrics">
                            <div><strong>70%</strong><br>growth in sales</div>
                            <div><strong>50%</strong><br>rise in engagement</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ SECTION -->
        <section id="faq" class="section faq-section">
            <h2 class="section-title">Frequently Asked <span class="italic-text">Questions</span></h2>
            <p class="section-subtitle">Find quick answers to the most common support questions</p>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">What types of processes can you automate?</button>
                    <div class="faq-answer">We specialize in automating repetitive workflows across operations, marketing, sales, and customer support using AI and custom logic.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do I need technical knowledge to use your service?</button>
                    <div class="faq-answer">No, our solutions are designed to be user-friendly and require no technical expertise.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Can you integrate with our existing tools?</button>
                    <div class="faq-answer">Yes, we integrate with a wide range of popular business tools and platforms.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How long does implementation take?</button>
                    <div class="faq-answer">Most projects are up and running within 2-4 weeks, depending on complexity.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Is your AI secure and compliant?</button>
                    <div class="faq-answer">Absolutely. We follow industry best practices for security and compliance.</div>
                </div>
            </div>
            <div class="faq-cta">
                <div class="faq-cta-content">
                    <h3>Still Have Questions?</h3>
                    <p>Still have questions? Feel free to get in touch with us today!</p>
                    <button class="btn-primary" id="faq-contact-btn">Ask A Question</button>
                </div>
            </div>
        </section>
        <!-- CTA SECTION -->
        <section id="cta" class="section cta-section">
            <div class="cta-content">
                <h2>Ready to Automate Smarter?<br>Let's <span class="italic-text">Build Together</span></h2>
                <p>Schedule a call and begin automating</p>
                <button class="btn-primary" id="cta-book-call">Book A Free Call <i class="fas fa-arrow-right"></i></button>
                <div class="cta-social">
                    <a href="#" class="social-link"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="cta-email">landio@support.com</div>
            </div>
        </section>
    </main>
    <!-- CONTACT FORM MODAL -->
    <div class="modal" id="contact-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Book A Free Call</h3>
                <button class="modal-close" id="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <?php if ($form_message): ?>
                    <div class="form-message <?php echo $form_success ? 'success' : 'error'; ?>"><?php echo $form_message; ?></div>
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
                    <button type="submit" class="btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer-section">
        <div class="footer-content">
            <p>&copy; <?php echo date('Y'); ?> Landio. Made for demo purposes.</p>
            <div class="footer-links">
                <a href="#">Edit Landio</a> | <a href="#">Made in Framer</a>
            </div>
        </div>
    </footer>
    <script src="assets/js/global.js"></script>
    <script>
    // FAQ accordion
    $(function() {
        $('.faq-answer').hide();
        $('.faq-question').on('click', function() {
            var $ans = $(this).next('.faq-answer');
            if ($ans.is(':visible')) {
                $ans.slideUp(200);
                $(this).removeClass('open');
            } else {
                $('.faq-answer').slideUp(200);
                $('.faq-question').removeClass('open');
                $ans.slideDown(200);
                $(this).addClass('open');
            }
        });
        // CTA and FAQ modal triggers
        $('#faq-contact-btn, #cta-book-call, #book-call-btn').on('click', function() {
            $('#contact-modal').addClass('active');
            $('body').css('overflow', 'hidden');
        });
        $('#modal-close').on('click', function() {
            $('#contact-modal').removeClass('active');
            $('body').css('overflow', 'auto');
        });
        $('#contact-modal').on('click', function(e) {
            if (e.target === this) {
                $('#contact-modal').removeClass('active');
                $('body').css('overflow', 'auto');
            }
        });
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27 && $('#contact-modal').hasClass('active')) {
                $('#contact-modal').removeClass('active');
                $('body').css('overflow', 'auto');
            }
        });
    });
    </script>
</body>
</html>