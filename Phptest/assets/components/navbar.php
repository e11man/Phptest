<?php
/**
 * navbar.php
 * Usage: Include this file at the top of each page for consistent navigation.
 * Purpose: Modular, reusable navigation bar styled with the global accent color. Highlights the active page if $active_page is set.
 * Example: $active_page = 'home'; include 'assets/components/navbar.php';
 */
$active_page = isset($active_page) ? $active_page : '';
?>
<nav class="navbar" style="background: var(--color-bg-alt); padding: 0.7em 0; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
  <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
    <a href="/Phptest/index.php" class="logo" style="font-size: 1.5em; font-weight: bold; color: var(--color-accent); letter-spacing: 1px;">Landio</a>
    <ul style="list-style: none; display: flex; gap: 1.5em; margin: 0; padding: 0; align-items: center;">
      <li><a href="/Phptest/index.php" class="nav-link<?php if($active_page=='home') echo ' active'; ?>">Home</a></li>
      <li><a href="#services" class="nav-link<?php if($active_page=='services') echo ' active'; ?>">Services</a></li>
      <li><a href="#process" class="nav-link<?php if($active_page=='process') echo ' active'; ?>">Process</a></li>
      <li><a href="#pricing" class="nav-link<?php if($active_page=='pricing') echo ' active'; ?>">Pricing</a></li>
      <li><a href="#blog" class="nav-link<?php if($active_page=='blog') echo ' active'; ?>">Blog</a></li>
      <li><a href="#contact" class="nav-link<?php if($active_page=='contact') echo ' active'; ?>">Contact</a></li>
    </ul>
    <div style="display: flex; gap: 0.5em;">
      <?php include_once __DIR__.'/button_primary.php'; echo primary_button('Get Template', '#', 'sm'); ?>
    </div>
  </div>
</nav>
<style>
.nav-link {
  color: var(--color-text);
  font-weight: 500;
  padding: 0.3em 0.7em;
  border-radius: var(--radius);
  transition: background 0.2s, color 0.2s;
}
.nav-link.active, .nav-link:hover {
  color: #fff;
  background: var(--color-accent);
}
@media (max-width: 700px) {
  .navbar .container {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.7em;
  }
  .navbar ul {
    flex-direction: column;
    gap: 0.5em;
  }
}
</style>