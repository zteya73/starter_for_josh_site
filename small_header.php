<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="<?php bloginfo('description'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
  <title><?php wp_title(); ?></title>
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

  <?php wp_head(); ?> <!-- This allows WordPress to insert necessary styles and scripts -->
</head>
<body>

  <header class="container-fluid small_herobg">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="#">
        <span class="josh">JOSH</span><span class="orange">WHITKIN</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PROJECTS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CV</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
        </ul>
      </div>
    </nav>

    <div class="smallpage-tag">
      <h1 class="smallpage-title">Projects</h1>
    </div>
  </header>