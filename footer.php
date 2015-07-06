        <footer class="navbar-fixed-bottom">

            <nav class="navbar">
                <?php

                $args = array(
                    'theme_location' => 'footer'
                );

                ?>

                <?php wp_nav_menu( $args); ?>
            </nav>

            <p><?php bloginfo('name'); ?> - &copy <?php echo date('Y'); ?></p>

        </footer>

    </div><!-- container -->
<?php wp_footer(); ?>
        <script src="<?php bloginfo('template_url');?>"></script>
</body>
</html>