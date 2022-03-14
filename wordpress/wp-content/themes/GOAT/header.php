
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>   
</head>
<body>
    <header>

        <nav class="menu-desktop">
            <div class="menu-desktop__nav">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="AldibBNB">
                </a>
                    
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'menu_class' => 'menu-desktop__nav-list',
            ]); ?>

             
            </div>
            <div class="menu-desktop__user">

                <a class="menu-desktop__user-account" href="/login">Mon compte</a>

                <a class="menu-desktop__user-account" href="/mon-compte">Mon compte</a>
                <a class="menu-desktop__user-account" href="/login">Login</a>

                <a class="menu-dekstop__user-cart" href="/cart">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cart.svg" alt="cart" class="cart">
                </a>
                <div><?php global $current_user;
                        if(is_user_logged_in())
                        {
                           wp_get_current_user() ;
                            echo "Hello" . " " . $current_user->user_login;
	                        echo '<a href="' . wp_logout_url('http://localhost:5555') . '" title="Logout">Logout</a>';
                        }?>
                </div>

            </div>
        </nav>
    </header>
    

