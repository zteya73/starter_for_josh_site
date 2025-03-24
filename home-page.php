<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header(); ?> <!-- This loads header.php content -->

<body>
  <section class="container-fluid aboutbg text-center">
    <div class="container">
    <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
    <p class="particle-wizard"><?php the_field('subtitleforaboutme'); ?></p> 
    <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

    <div class="divider"></div>
    </div>
  </section>

  <!-- Page content goes here -->
  <div class="content">
      <!-- Your page content here -->
  </div>

  <section class="container-fluid aboutbg whitebg text-center">
      <div class="container">
        <h3>LATEST ARTICLES</h3>
        <div class="row">
          <div class="col-md-4">
            <img src="http://170.187.231.66/~mesh20/sub2/wp-content/themes/starter_for_josh_site/images/image2.jpg" alt="Image description">
            <h4 class="article-title">A PORTRAIT</h4>
            <p class="date">12 December 2020</p>
            <p>STS has never been shy of seeking new terrains of investigation...</p>
            <a href="#" class="readmore">CONTINUE READING</a>
          </div>
          <div class="col-md-4">
            <img src="http://170.187.231.66/~mesh20/sub2/wp-content/themes/starter_for_josh_site/images/image3.jpg" alt="Image description">
            <h4 class="article-title">A MODEL</h4>
            <p class="date">12 December 2020</p>
            <p>STS has never been shy of seeking new terrains of investigation...</p>
            <a href="#" class="readmore">CONTINUE READING</a>
          </div>
          <div class="col-md-4">
            <img src="http://170.187.231.66/~mesh20/sub2/wp-content/themes/starter_for_josh_site/images/image4.jpg" alt="Image description">
            <h4 class="article-title">A GAMES DESIGN</h4>
            <p class="date">12 December 2020</p>
            <p>STS has never been shy of seeking new terrains of investigation...</p>
            <a href="#" class="readmore">CONTINUE READING</a>
          </div>
        </div>
      </div>
  </section>

  <?php get_footer(); ?> <!-- This loads footer.php content -->
</body>
</html>