<?php
/**
 * contact_form.php
 * Usage: Include this file where a contact form is needed.
 * Purpose: Modular, reusable contact form styled for the dark theme and purple accent. Submits to /api/contact_form.php for Vercel compatibility.
 * Example: include 'assets/components/contact_form.php';
 */
?>
<form id="contactForm" action="/api/contact_form.php" method="POST" class="card" style="max-width: 500px; margin: 2em auto 0 auto;">
  <h2 style="margin-top:0;">Contact Us</h2>
  <label for="name">Name</label>
  <input type="text" id="name" name="name" required style="width:100%;padding:0.7em;margin-bottom:1em;border-radius:var(--radius);border:1px solid var(--color-border);background:var(--color-bg-alt);color:var(--color-text);">
  <label for="email">Email</label>
  <input type="email" id="email" name="email" required style="width:100%;padding:0.7em;margin-bottom:1em;border-radius:var(--radius);border:1px solid var(--color-border);background:var(--color-bg-alt);color:var(--color-text);">
  <label for="message">Message</label>
  <textarea id="message" name="message" required rows="4" style="width:100%;padding:0.7em;margin-bottom:1em;border-radius:var(--radius);border:1px solid var(--color-border);background:var(--color-bg-alt);color:var(--color-text);"></textarea>
  <?php include_once __DIR__.'/button_primary.php'; echo primary_button('Send Message', 'javascript:void(0);', 'submit-btn'); ?>
  <div id="formStatus" style="margin-top:1em;"></div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// jQuery AJAX for contact form submission
$(function() {
  $('#contactForm').on('submit', function(e) {
    e.preventDefault();
    var $form = $(this);
    var $status = $('#formStatus');
    $status.text('Sending...');
    $.ajax({
      url: '/api/contact_form.php',
      method: 'POST',
      data: $form.serialize(),
      success: function(res) {
        $status.text('Thank you! We will get back to you soon.');
        $form[0].reset();
      },
      error: function() {
        $status.text('There was an error. Please try again.');
      }
    });
  });
});
</script>