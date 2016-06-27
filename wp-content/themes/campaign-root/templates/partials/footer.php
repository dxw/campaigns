<footer class="footer" role="contentinfo">

    <div class="row">
        <?php dynamic_sidebar('sidebar-footer'); ?>

        <nav class="footer-navigation">
        <?php
            if (has_nav_menu('footer')) {
                wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'footer'));
            }
        ?>
        </nav>

        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>

    </div>

</footer>
