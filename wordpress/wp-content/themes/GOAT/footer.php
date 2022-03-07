
<?php wp_footer();?>
<footer>

    <?php
    wp_nav_menu([
	    'theme_location' => 'footer',
	    'menu_class' => 'test',
	    'container' => false
    ]); ?>

</footer>

</body>
</html>
