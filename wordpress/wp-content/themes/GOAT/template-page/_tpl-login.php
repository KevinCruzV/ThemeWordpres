<?php
/*
Template Name: Page de login
*/

get_header(); ?>
<div class="login">


    <div class="inscription-container">
        <h1 class="inscription-container__title">Inscription</h1>
    </div>

    <div class="connexion-container">
        <h1 class="connexion-container__title">Se connecter</h1>

        <div class="connexion-container__form">
            <form method="post" id="loginform" name="loginform">

                <p>
                    <input type="text"  placeholder="Adresse mail" tabindex="10" size="20" value="" id="user_login" name="log">
                </p>

                <p>
                    
                    <input type="password" placeholder="Mot de passe" tabindex="20" size="20" value="" id="user_pass" name="pwd">
                </p>

                <p >
                    <label class="stay-connect"><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
                        Rester connecter
                    </label>
                    <a class="forgot-password"href="http://example.com/wp-login.php?action=lostpassword">Mot de passe oublié</a>
                </p>

                <p>
                    <input class="btn-submit" type="submit" tabindex="100" value="Connexion" id="wp-submit" name="wp-submit">
                    <input type="hidden" value="http://example.com/" name="redirect_to">
                </p>

            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php
$log = filter_input( INPUT_POST, 'log', FILTER_SANITIZE_SPECIAL_CHARS );
$pwd = filter_input( INPUT_POST, 'pwd', FILTER_SANITIZE_SPECIAL_CHARS );
$rememeberme = filter_input( INPUT_POST, 'rememberme', FILTER_SANITIZE_SPECIAL_CHARS );

wp_insert_user(array(
        'user_pass' => $pwd,
        'user_login' => $log,
        'role' => 'subscriber'

))

?>
