<?php
/**
 * index.php
 * Usage: Main entry point for the site. Place in the root directory.
 * Purpose: Loads the modular navigation, dynamic content sections, and contact form. Uses jQuery for dynamic content loading. All styles and scripts are included for a modern, dark, purple-accented theme.
 * Compatible with shared hosting and Vercel.
 */
$active_page = 'home';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landio - Automate Smarter. Grow Faster. With AI.</title>
  <link rel="stylesheet" href="assets/css/global.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/global.js"></script>
</head>
<body>
<?php include 'assets/components/navbar.php'; ?>
<div class="container" style="margin-top:2em;">
  <section id="hero" class="card" style="text-align:center;">
    <h1>Automate Smarter. Grow Faster. With AI.</h1>
    <p style="font-size:1.2em;max-width:600px;margin:1em auto;">AI Automation for Modern Businesses Made Simple</p>
    <?php include 'assets/components/button_primary.php'; echo primary_button('Book a Free Call', '#contact'); ?>
  </section>
  <section id="dynamic-content"></section>
</div>
<script>
// Dynamically load sections for 'Why Choose Us' and 'Success Stories'
$(function() {
  var whyChoose = `
    <section id="why-choose" class="card" style="margin-top:2em;">
      <h2 style="text-align:center;">Why Choose <span style="color:var(--color-accent);">Us?</span></h2>
      <div style="display:flex;flex-wrap:wrap;gap:1.5em;justify-content:center;margin-top:1.5em;">
        <div style="flex:1 1 220px;min-width:220px;max-width:300px;text-align:center;">
          <div style="font-size:2.5em;color:var(--color-accent);margin-bottom:0.5em;">&#9889;</div>
          <h3>Real-Time Intelligence</h3>
          <p>Access accurate, real-time data to drive smarter decisions</p>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:300px;text-align:center;">
          <div style="font-size:2.5em;color:var(--color-accent);margin-bottom:0.5em;">&#128200;</div>
          <h3>Measurable Impact</h3>
          <p>Track performance, uncover insights, and achieve data-backed growth</p>
        </div>
        <div style="flex:1 1 220px;min-width:220px;max-width:300px;text-align:center;">
          <div style="font-size:2.5em;color:var(--color-accent);margin-bottom:0.5em;">&#128279;</div>
          <h3>Seamless Integration</h3>
          <p>Connect tools, teams, and workflows with intelligent automation</p>
        </div>
      </div>
    </section>
  `;
  var successStories = `
    <section id="success-stories" class="card" style="margin-top:2em;">
      <h2 style="text-align:center;">Success Stories <span style="color:var(--color-accent);">to Inspire</span></h2>
      <div style="display:flex;flex-wrap:wrap;gap:1.5em;align-items:center;justify-content:center;">
        <div style="flex:1 1 320px;min-width:280px;max-width:400px;">
          <div class="card" style="background:var(--color-bg-alt);">
            <h3>Emily's E-commerce Success</h3>
            <p>Emily, the CEO of BloomTech, transformed their marketing efforts using AI-powered tools. This shift resulted in a 60% increase in ROI and a 45% improvement in customer personalization, leading to a surge in brand loyalty.</p>
            <div style="display:flex;gap:1em;justify-content:center;">
              <div><strong>70%</strong><br>growth in sales</div>
              <div><strong>50%</strong><br>rise in engagement</div>
            </div>
          </div>
        </div>
        <div style="flex:1 1 220px;min-width:180px;max-width:300px;text-align:center;">
          <img src="assets/images/success1.jpg" alt="Success Story" style="width:100%;border-radius:var(--radius);background:#333;max-width:220px;">
        </div>
      </div>
    </section>
  `;
  $('#dynamic-content').append(whyChoose).append(successStories);
});
</script>
<div id="contact" class="container">
  <?php include 'assets/components/contact_form.php'; ?>
</div>
<footer class="card" style="text-align:center;margin:2em auto 1em auto;max-width:700px;background:var(--color-bg-alt);">
  <p style="color:var(--color-accent);font-weight:bold;">&copy; <?php echo date('Y'); ?> Landio. Made for demo purposes.</p>
</footer>
</body>
</html>