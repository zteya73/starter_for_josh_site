<?php
/*
Template Name: CV
*/
?>

<?php require_once('page_header.php'); ?>

<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext">
                <article class="excerpts">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                    <div class="post single-page">
                        <h3 class="posttitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

                        <div class="postcontent">
                            <?php the_content(); ?>
                            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
                        </div><!-- postcontent -->
                    </div><!-- post -->

                    <?php endwhile; ?>
            
                    <?php else: ?>
                    <div class="post">
                        <p>Sorry, no posts found.</p>
                    </div><!-- post -->
                    <?php endif; ?>
                </article>
            </section>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- container-fluid -->

<?php get_footer(); ?> <!-- This loads footer.php content -->