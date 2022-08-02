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
    <div class="bg-img">
        <div class="container">
            <header>
                <div class="header">
                    <div class="header-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>./icons/Project-logo.png">
                    </div>
                    <!-- Dynamic menuc -->
                    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>

                    <!--Search input-->
                    <div class="search-input">
                        <input type="search" name="" id="search">
                        <img class="img-search" src="<?php echo get_template_directory_uri(); ?>./icons/search.png">
                    </div>

                    <div class="register-login-btn">
                        <button class="loginBtn"><a href="#" class="login">Log In</a></button>
                        <button class="registerBtn"><a href="#" class="register">Register</a></button>
                    </div>
                </div>
            </header>
        </div>
    </div>

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

    <div
        class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
            acquisitions of 2021 so far, in reverse chronological order.</p>
        <a href="#"
            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>