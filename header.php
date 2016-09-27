<?php
  /*
    This is the Template for the header
    @package GennariGirino-Theme
  */
?>
<?php
$firstName =  esc_attr( get_option( 'first_name' ) ) ;
$picture =  esc_attr( get_option( 'profile_picture' ) ) ;
$lastName =  esc_attr( get_option( 'last_name' ) ) ;
$fullName = $firstName . ' ' . $lastName;
$description =  esc_attr( get_option( 'user_description' ) ) ;

 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

      <title><?php bloginfo('name'); wp_title(); ?></title>



      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <meta name="description" content=<?php bloginfo("description"); ?>>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content = "width=device-widht, initial-scale=1 ">
      <link rel="Profile" href="http://gmpg.org/xfn/11"/>

      <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
        <link rel="pingback" href"<?php bloginfo('pingback_url'); ?>" >
      <?php endif; ?>
      <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>  data-mcs-theme="dark">


  <!-- NAV BAR FOR SMARTPHONES -->
  <div class="navbar navbar-default navbar-fixed-top visible-xs navbar-blue" role="navigation" style="background-image: url(<?php header_image();?>);" >
    <div class="container">

      <div class="navbar-header">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">O Cientista</a>
      </div>

      <div class="navbar-collapse collapse">
        <nav class="navbar navbar-default navbarxs-girino">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'nav navbar-nav'
            ) );
          ?>
        </nav>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="padding:0; "   >

    <div class="row" style="margin-right: 0; margin-left: 0; ">
         <div class="hidden-xs col-sm-3 col-lg-3 scroll-header " style="padding:0px; background-image: url(<?php header_image();?>);">
           <div id="secondary" class=" header-scroll background-image " >
            <header class="text-center" >

                <div class="header-content table">
                  <div class="table-cell">
                    <h1 class="site-title"><?php bloginfo('name');?></h1>
                    <h2 class="site-description"><?php bloginfo('description');?></h1>
                  </div><!-- .table-cell -->
                </div><!-- .header-content -->

                <div class="girini-sidebar">
                      <div class="image-container">
                        <div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
                      </div>
                      <h1 class="girino-username"><?php print $fullName; ?></h1>
                      <h2 class="girino-description"><?php print $description; ?></h2>
                      <div class="icons-wrapper">
                      </div>
                </div>

                <div class="nav-container">

                  <nav class="navbar navbar-default navbar-girino">
                    <?php
                      wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav'
                      ) );
                    ?>
                  </nav>

                </div>

                <div class="girino-sidebar">
                  <div>
                    <?php get_sidebar();?>
                  </div>
                </div>


            </header><!-- .header-container -->
          </div>
  </div><!-- .class="col-sm-4"-->
