<?php
/*
Template Name: Login
*/
?>
<?php get_header() ?>
<h2>Inscription</h2>
<form id="account-creation" method="post">

    <label for="login">Name: </label>
    <input type="text" name="login" id="login" placeholder="login" required>

    <label for="email">Email: </label>
    <input type="email" name="email" id="email" placeholder="E-mail" required>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password" placeholder="Password" minlength="8" required>

    <button type="submit">Inscription</button>
</form>
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



