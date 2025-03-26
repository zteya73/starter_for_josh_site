<footer class="footer" style="background-image: url('http://170.187.231.66/~mesh20/sub2/wp-content/themes/starter_for_josh_site/images/image5.jpg');">
    <div class="container footer-content">
        <div class="footer-left">
            <!-- <p>JOSH WHITKIN</p> -->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>

        </div>
        <div class="footer-right">
            <!-- <p>Terms and Conditions</p> -->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>

        </div>
    </div>

    <?php wp_footer(); ?> <!-- This is essential for WordPress to load scripts and other necessary elements -->
</footer>

<!-- JavaScript files should be placed after wp_footer() -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

</body>
</html>