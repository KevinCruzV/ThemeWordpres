<?php wp_footer(); ?>
<footer>
    <div class="footerContainer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoFooter.svg" alt="AldibBNB">
        <div class="footerInfo">
            <div class="footerContact paddingleft posirelative">
                <h2>Contact</h2>
                <a href="tel:+33612568056"><p><strong>Tel:</strong>+33612568056</p></a>
                <a href="mailto:contact@aldibnb.com"><p><strong>Mail:</strong> contact@aldibnb.com</p></a>
                <h3><a href="/contact">Via le formulaire de contact</a></h3>

            </div>
            <div class="paddingleft posirelative">
                <h2>A propos</h2>
                <h3><a href="/about">>> Page a propos</a></h3>
                <p>SA de 100 salariés au capitale sociale de 100 000€.
                    Entreprise créer le 21 juin 2022</p>
            </div>

            <div class="paddingleft posirelative">
                <h2>Réglementation du site</h2>
                <h3><a href="/conditions-generales">>> Conditions générales</a></h3>
                <h3><a href="/confidentialité">>> Confidentialité</a></h3>
                <h3><a href="/sitemap">>> Plan du site</a></h3>
            </div>

            <div class="paddingleft posirelative">
                <h2>Nos réseaux</h2>
                <h3><a href="https://www.facebook.com">>> Facebook</a></h3>
                <h3><a href="https://www.instagram.com">>> Instagram</a></h3>
                <h3><a href="https://www.twitter.com">>>Twitter</a></h3>
            </div>
            
            <?php
			wp_nav_menu( [
				'theme_location' => 'footer',
				'menu_class'     => 'footer-menu posirelative',
				'container'      => false
			] ); ?>

        </div>

    </div>


</footer>

</body>
</html>
