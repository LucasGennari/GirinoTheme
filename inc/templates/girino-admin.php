<h1>Sidebar Options</h1>
<?php settings_errors(); ?>
<?php

  $firstName =  esc_attr( get_option( 'first_name' ) ) ;
  $picture =  esc_attr( get_option( 'profile_picture' ) ) ;
  $lastName =  esc_attr( get_option( 'last_name' ) ) ;
  $fullName = $firstName . ' ' . $lastName;
  $description =  esc_attr( get_option( 'user_description' ) ) ;
 ?>

<div class="girino-sidebar-preview">
    <div class="girini-sidebar">
      <div class="image-container">
        <div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
      </div>
      <h1 class="girino-username"><?php print $fullName; ?></h1>
      <h2 class="girino-description"><?php print $description; ?></h2>
      <div class="icons-wrapper">
      </div>
    </div>
</div>

<form method="post" action="options.php" class="girino-general-form">
  <?php settings_fields('girino-settings-group'); ?>
  <?php do_settings_sections('lucas-gennarigirino'); ?>
  <?php submit_button('Save Changes', 'primary', 'btn submit'); ?>
</form>
