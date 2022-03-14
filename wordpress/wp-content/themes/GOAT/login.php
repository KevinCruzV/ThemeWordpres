<?php
/*
Template Name: Login
*/
?>
<?php get_header() ?>

<div class="login">
    <div class="inscription-container">
        <h1 class="inscription-container__title">Inscription</h1>
    </div>

    <div class="connexion-container">
        <h1 class="connexion-container__title">Se connecter</h1>

        <div class="connexion-container__form">
            <form id="account-creation" method="post">
    
              
                <input type="text" name="login" id="login" placeholder="login" required>

                
                <input type="email" name="email" id="email" placeholder="E-mail" required>

                
                <input type="password" name="password" id="password" placeholder="Password" minlength="8" required>

                <button class="btn-submit" type="submit">Inscription</button>
            </form>
        </div>
    </div>

    
</div>
<?php wp_login_form() ?>
<?php get_footer() ?>

<?php
// if((isset($_POST["pseudo"]) && isset($_POST["email"]) && isset($_POST["password"]))) {

$pseudo = filter_input( INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS );
$email  = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
$pwd    = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS );

wp_insert_user( array(
    'user_pass'  => $pwd,
    'user_login' => $pseudo,
    'user_email' => $email,
    'role'       => 'subscriber',
));
?>



