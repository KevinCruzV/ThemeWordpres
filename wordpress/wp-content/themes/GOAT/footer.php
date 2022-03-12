<?php wp_footer(); ?>
<footer>
    <div class="footerContainer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoFooter.svg" alt="AldibBNB">
        <div class="footerInfo">
            <div class="footerContact paddingleft posirelative">
                <h2>Contact</h2>
                <p><strong>Tel:</strong> +33612568056</p>
                <p><strong>Mail:</strong> contact@aldibnb.com</p>
                <h3><a href="#">Via le formulaire de contact</a></h3>

            </div>
            <div class="paddingleft posirelative">
                <h2>A propos</h2>
                <h3><a href="#">>> Page a propos</a></h3>
                <p>SA de 100 salariés au capitale sociale de 100 000€.
                    Entreprise créer le 21 juin 2022</p>
            </div>

            <div class="paddingleft posirelative">
                <h2>Nos réseaux</h2>
                <h3><a href="#">>> Conditions générales</a></h3>
                <h3><a href="#">>> Confidentialité</a></h3>
                <h3><a href="#">>> Plan du site</a></h3>
            </div>

            <div class="paddingleft posirelative">
                <h2>Réglementation du site</h2>
                <h3><a href="#">>> Facebook</a></h3>
                <h3><a href="#">>> Instagram</a></h3>
                <h3><a href="#">>>Twitters</a></h3>
            </div>
            <!--
            <?php
			wp_nav_menu( [
				'theme_location' => 'footer',
				'menu_class'     => 'footer-menu posirelative',
				'container'      => false
			] ); ?>
            -->

        </div>

    </div>


</footer>

</body>
</html>
