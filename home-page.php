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
      <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
        <div class="row">

          <div class="col-md-4">
            <img src="<?php the_field('articleimage'); ?>" alt="Image description">
            <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
            <p class="date" ><?php the_field('articledate'); ?></p>
            <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
            <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
          </div>
          <div class="col-md-4">
          <img src="<?php the_field('articleimagetwo'); ?>" alt="Image description">
            <h4 class="article-title"><?php the_field('articletitletwo'); ?></h4>
            <p class="date" ><?php the_field('articledatetwo'); ?></p>
            <p class="article-p"><?php the_field('articleexcerpttwo'); ?> </p>
            <a href="<?php the_field('readmoretwo'); ?>" class="readmore">CONTINUE READING</a>
          </div>
          <div class="col-md-4">
          <img src="<?php the_field('articleimagethree'); ?>" alt="Image description">
            <h4 class="article-title"><?php the_field('articletitlethree'); ?></h4>
            <p class="date" ><?php the_field('articledatethree'); ?></p>
            <p class="article-p"><?php the_field('articleexcerptthree'); ?> </p>
            <a href="<?php the_field('readmorethree'); ?>" class="readmore">CONTINUE READING</a>
          </div>
        </div>
      </div>
  </section>

  <?php get_footer(); ?> <!-- This loads footer.php content -->
</body>
</html>