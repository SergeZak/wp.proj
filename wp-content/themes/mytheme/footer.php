        <footer class="site-footer">

            <div class="footer-widgets">

                <?php if(is_active_sidebar('footer1')){ ?>
                    <div class="footer-widget_area">
                        <?php dynamic_sidebar('footer1') ?>
                    </div>
                <?php } ?>

                <?php if(is_active_sidebar('footer2')){ ?>
                    <div class="footer-widget_area">
                        <?php dynamic_sidebar('footer2') ?>
                    </div>
                <?php } ?>

                <?php if(is_active_sidebar('footer3')){ ?>
                    <div class="footer-widget_area">
                        <?php dynamic_sidebar('footer3') ?>
                    </div>
                <?php } ?>

                <?php if(is_active_sidebar('footer4')){ ?>
                    <div class="footer-widget_area">
                        <?php dynamic_sidebar('footer4') ?>
                    </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>

            <nav class="site-nav">
                <?php
                $args = ['theme_location'=>'footer'];
                wp_nav_menu($args);
                ?>
            </nav>


            <p><?php bloginfo('name') ?> - &copy;<?php echo date('Y')?></p>
        </footer>

    </div> <!-- container -->
    <?php wp_footer()?>
</body>
</html>