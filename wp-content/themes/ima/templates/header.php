<header class="banner">
  <div class="container">
    <div class="logo">
      <a href="/">
        <img src="/wp-content/themes/ima/assets/images/logo.png">
      </a>
    </div>
    <nav class="nav-primary">
      <img class="mobile-logo" src="/wp-content/themes/ima/assets/images/logo.png">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="clear"></div>
</header>
