<?php 
/*
* Template Name:Template page contact
*/
get_header();
    if(have_posts()) :?>

    <section class="presentation-contact">
        <?php while (have_posts()) : the_post();?>
        <h1 class="title-page"><?php the_title();?></h1>

        <div class="presentation-contact__container">
            <div class="presentation-contact__container-info">
                <h2>Nos informations</h2>
                <div class="presentation-contact__container-info__inner">
                    <p>
                        <strong>Téléphone:</strong><br>
                        <a href="tel: +33972655761">+33 9 72 65 57 61</a>
                    </p>
                    <p>
                        <strong>Mail:</strong><br>
                        <a href="mailto:contact@aldibnb.com">contact@aldibnb.com</a>
                    </p>
                    <p>
                        <strong>Adresse:</strong><br>
                        <a href="tel: +33972655761">76, rue Henri Frugès - 75002 Paris<br>France</a>
                    </p>
                    </div>
            </div>
            <hr class="presentation-contact__container-hr">
            <div class="presentation-contact__container-form">
                <h2>Nous contacter</h2>
                <div class="presentation-contact__container-form__inner">
                    <form>

                    </form>
                </div>
            </div>
        </div>

        <?php endwhile;?>
    </section>


    <?php endif;?>
<?php get_footer();

?>