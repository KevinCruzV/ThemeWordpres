<?php
/*
Template Name: Page de login
*/

get_header(); ?>

<section>
    <h1>Inscription</h1>
</section>

<section>
    <h1>Se connecter</h1>

    <div>
        <form method="post" id="loginform" name="loginform">

            <p>
                <label for="user_login">Identifiant</label>
                <input type="text" tabindex="10" size="20" value="" id="user_login" name="log">
            </p>

            <p>
                <label for="user_pass">Mot de passe</label>
                <input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd">
            </p>

            <p>
                <label><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
                    Rester connecter
                </label>
                <a href="http://example.com/wp-login.php?action=lostpassword">Mot de passe oublié</a>
            </p>

            <p>
                <input type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit">
                <input type="hidden" value="http://example.com/" name="redirect_to">
            </p>

        </form>
    </div>
</section>

<?php get_footer(); ?>
<?php
$log = filter_input(INPUT_POST)

?>
