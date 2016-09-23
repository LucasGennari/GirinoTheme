<h1>Girino Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="girino-general-form">
  <?php settings_fields('girino-theme-support'); ?>
  <?php do_settings_sections('girino_theme_support_page'); ?>
  <?php submit_button(); ?>
</form>
