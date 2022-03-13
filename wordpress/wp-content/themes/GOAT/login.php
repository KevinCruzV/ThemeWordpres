<?php
/*
Template Name: Login
*/
?>
<?php get_header() ?>
    <form id="account-creation" method="post">

        <label for="pseudo">Email: </label>
        <input type="email" name="email" id="email" placeholder="E-mail" required>

        <label for="pseudo">Password: </label>
        <input type="password" name="password" id="password" placeholder="Password" minlength="8" required>

        <label for="pseudo">Confirm Password: </label>
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>

        <input type="submit" >

    </form>
<?php get_footer() ?>
<?php
// Check of the form and cleaning of the inputs
if((isset($_POST["pseudo"]) && isset($_POST["email"])
     && isset($_POST["password"]) && isset($_POST["confirm-password"]))
    && $_POST["password"] == $_POST["confirm-password"]) {

	$login = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
	$confirm_pwd = filter_input(INPUT_POST, 'confirm-password', FILTER_SANITIZE_SPECIAL_CHARS);

	$pwd = password_hash($pwd, PASSWORD_DEFAULT);

    wp_insert_user( array(
            'user_pass' => $pwd,
            'user_login' => $login,
            'user_email' => $email,
            'role' => 'subscriber'
    ));
}
?>

?>
