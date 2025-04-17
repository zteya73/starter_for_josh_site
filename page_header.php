<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">









<title> <?php
  if (function_exists('is_tag') && is_tag()) {
     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
  elseif (is_archive()) {
     wp_title(''); echo ' Archive - '; }
  elseif (is_search()) {
     echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
  elseif (!(is_404()) && (is_single()) || (is_page())) {
     wp_title(''); echo ' - '; }
  elseif (is_404()) {
     echo 'Not Found - '; }
  if (is_home()) {
     bloginfo('name'); echo ' - '; bloginfo('description'); }
  else {
      bloginfo('name'); }
  if ($paged>1) {
     echo ' - page '. $paged; }
?>
</title>

<meta name="description" content="<?php
    if (is_single() || is_page()) {
        $excerpt = get_the_excerpt();
        
        // Fallback to content if excerpt is empty
        if (empty($excerpt)) {
            $excerpt = wp_trim_words(get_the_content(), 25);
        }
        
        // Final fallback to site description if both excerpt and content are empty
        if (empty($excerpt)) {
            $excerpt = get_bloginfo('description');
        }
        
        // Limit the description to 160 characters
        $meta_description = mb_substr(wp_strip_all_tags($excerpt), 0, 160);
        
        echo esc_attr($meta_description);
    } else {
        echo esc_attr(get_bloginfo('description'));
    }
?>">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">


</head>
<body>

<header class="container-fluid" style="background-size:cover; height:40vh; background-image: url(<?php the_field('projectheaderbackgroundimage') ?>);">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="http://170.187.231.66/~mesh20/sub2/">
          <span class="josh">JOSH</span>
          <span class="orange">WHITKIN</span>
        </a>
          
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-label="Toggle navigation menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="smallpage-tag">
      <h1 class="smallpage-title"><?php the_field('projectsheadertitle'); ?></h1><!--  the main tag line-->
    </div>


    </div> <!-- container -->

    <!-- very important that this code is added-->
<?php wp_head(); ?> 

</header>