<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-img">
        <div class="container-header">
            <div class="header">
                <div class="header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>./icons/logo-of-project.png">
                </div>
                <div id="menu">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                    <hr>
                    <div class="register-login-btn">
                        <button class="loginBtn"><a href="#" class="login">Log In</a></button>
                        <button class="registerBtn"><a href="#" class="register">Register</a></button>
                    </div>
                </div>
                <div id="burger">
                    <button type="button" class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>



    <section class="banner">
        <div class="first-banner">
            <div class="search-talents">
                <h2 class="search-title">Search for best <i>services</i></h2>
                <div class="search-box">
                    <input type="text" class="input-search" placeholder="Search for new talents...">
                    <button class="searchBtn">Search</button>
                </div>
            </div>
        </div>
    </section>
    <?php include("services-card-users/user-cards.php"); ?>


    <?php include("one_platform.php"); ?>

