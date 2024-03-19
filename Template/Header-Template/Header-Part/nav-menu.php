<nav class="paper-header-menu">
  <?php
  wp_nav_menu(array(
    'theme_location' => 'primary-menu',
    'container' => false,
    'menu_class' => 'primary-menu',
    'fallback_cb' => 'custom_fallback_menu', // Specify the fallback function
  ));
  ?>
</nav>

<div class='menu-mobile-icon'>
  <img onclick="callHamburger()" class="image-menu-close-icon" src="<?php echo esc_url(get_template_directory_uri()); ?>/Assets/Image/close.png" alt="">
  <img class="image-menu-icon" onclick="callHamburger()" src="<?php echo esc_url(get_template_directory_uri()); ?>/Assets/Image/menu.png" alt="">
  <div class="paper-header-menu-mobile">
    <div class='search-box-mobile-menu'>
      <?php get_search_form(); ?>
    </div>
    <nav class="mobile-nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'container' => false,
        'menu_class' => 'primary-menu',
        'fallback_cb' => 'custom_fallback_menu', // Specify the fallback function
      ));
      ?>
    </nav>
  </div>
</div>

<?php
// Custom fallback menu function
function custom_fallback_menu() {
  echo '<ul class="primary-menu">';
  echo '<li><a href="#">Home</a></li>'; // Example menu item
  echo '<li><a href="#">About</a></li>'; // Example menu item
  echo '<li><a href="#">Contact</a></li>'; // Example menu item
  echo '<li class="menu-item-has-children"><a href="#">Services</a>';
  echo '<ul class="sub-menu">';
  echo '<li><a href="#">Service 1</a></li>'; // Example sub-menu item
  echo '<li><a href="#">Service 2</a></li>'; // Example sub-menu item
  echo '<li><a href="#">Service 3</a></li>'; // Example sub-menu item
  echo '</ul>';
  echo '</li>'; // Close the Services menu item

  echo '</ul>';
}
?>