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

//SHARE SECTION

$title = get_the_title();
$permalink = get_permalink();
$type = "article";
$excerpt = get_the_excerpt();
$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ));
$FacebookrHandler = ( get_option('facebook_handler') );
$FacebookApp =  ( get_option('facebook_app') );

if (is_front_page()){

$title = get_bloginfo( 'name' );
$excerpt = get_bloginfo('description');
$featured_image = get_site_icon_url();
$type = "website";
$permalink = get_site_url();
}else{


}
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

      <title><?php bloginfo('name'); wp_title(); ?></title>



      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <!-- FACEBOOK GRAPH PROTOCOL-->
        <meta property="fb:app_id"        content="<?php echo $FacebookApp ?>" />
        <meta property="og:locale"        content="pt_BR" />
        <meta property="og:url"           content="<?php echo $permalink ?>" />
      	<meta property="og:type"          content="<?php echo $type ?>" />
      	<meta property="og:title"         content="<?php echo $title ?>" />
      	<meta property="og:description"   content="<?php echo $excerpt?>" />
      	<meta property="og:image"         content="<?php echo $featured_image ?>" />

        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
      <meta name="title" content="<?php  bloginfo("name"); ?>">
      <meta name="description" content="<?php  bloginfo("description"); ?>">
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content = "width=device-widht, initial-scale=1 ">
      <link rel="Profile" href="http://gmpg.org/xfn/11"/>

      <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
        <link rel="pingback" href"<?php bloginfo('pingback_url'); ?>" >
      <?php endif; ?>
      <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>  data-mcs-theme="dark">

  <!-- facebook test -->
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <!-- NAV BAR FOR SMARTPHONES -->
  <div class="navbar navbar-default navbar-fixed-top visible-xs navbar-blue" role="navigation" >
    <div class="container">

      <div class="navbar-header">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <?php bloginfo('name'); ?></a>
      </div>

      <div class="navbar-collapse collapse">
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
    </div>
  </div>

  <div class="container-fluid" style="padding:0; "   >

    <div class="row" style="margin-right: 0; margin-left: 0; ">
         <div class="hidden-xs col-sm-3 col-lg-3 scroll-header " style="padding:0px;  ">
           <div id="secondary" class=" header-scroll background-image " )>
            <header class="text-center" >

                <div class="header-content table" style="padding-bottom: 10px; margin-bottom:5px; border-bottom:3px solid #f1f1f1; ">
                  <div class="table-cell">


                      <a  class="site-title" style="font-family: Audiowide; font-size: 50px; color: #8d1010 !important; " target="_blank" href="<?php echo $FacebookrHandler  ?>" >
                        <?php bloginfo('name'); ?></a>

                    <h2 class="site-description">  <a  style="font-family: Audiowide; font-size: 13px;"
                      target="_blank" href="<?php echo $FacebookrHandler  ?>" ><?php bloginfo('description');?></a></h2>

                      <div class="fb-like" data-href="<?php echo $FacebookrHandler ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
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
