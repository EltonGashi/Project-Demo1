<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head >

<body <?php body_class(array('container')); ?>>
<header class="header">
    <div class="container">
        <nav class="topnav" id="topnav">
            <div class="header-logo">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
                }
            ?>
            </div>
            <div class="menu-container">
                <?php wp_nav_menu(array('theme_location'=>'primary')); ?>  
                <div class="register-login-btn">
                    <button class="loginBtn" id="login-btn"><a href="#" class="login">Log In</a></button>
                    <button class="registerBtn" id="register-btn"> <a href="#" class="register">Register</a></button>
                </div>
            </div>
            <div class="navbar-toggler">
                <button class="icon" onclick="toggle()"><i class="fa fa-bars"></i></button>
            </div>
        </nav>
        <div class="banner">
            <div class="search-talents">
                <h2 class="search-title">Search for best <i class="font-courgette">services</i></h2>
                <form class="search-box"  method="get" action="http://localhost/wordpress">
                    <input type="text" class="input-search" placeholder="Search for new talents..." name="s" value="">
                    <button class="searchBtn" type="submit" value="Search Our Site...">Search</button>
                </form>
            </div>
            <div class="img-banner">
                <img class="bannerImg" src="<?php echo get_template_directory_uri(); ?>./assets/img/HeaderImages/Group 11.png">
            </div>
        </div>
    </div>
</header>
    <!--LOGIN MODAL  -->

<div class="bg-black bg-opacity-50 fixed inset-0 hidden  p-20" id="overlay-login">

    <div class="login-modal bg-white rounded-xl shadow-black shadow-lg flex lg:flex-row  lg:w-5/6 lg:h-5/6 md:flex-col md:h-5/6 md:w-5/6 md:flex-col-reverse sm:h-5/6">

        <div class="left-side lg:w-2/4 lg:h-full lg:p-24 md:h-3/6 md:p-16 ">
            <div class="left-side-top pb-10 ">
                    <h1 class="text-3xl font-semibold ">Login</h1>
                    <h1 class="pt-4">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid">
                <form action="#" class="flex flex-col">
                    <label for="email">Email</label>
                    <input type="text" class="rounded-3xl py-2 px-2 border border-black">
                    <label for="password">Password</label>
                    <input type="password" class="rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center">
                        <a href="#">Forgot Password?</a>
                    </small>
                </form>
            </div>

            <div class="bottom flex flex-col pt-4 mt-4">
                <button class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Login</button>
                <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
            </div>
                
        </div>

        <div class="right-side  bg-customGreen xl:rounded-r-xl  relative  lg:w-2/4 lg:h-full lg:p-24  md:h-3/6 md:p-16 md:rounded-t-xl ">
            <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black rounded-xl relative lg:h-full lg:w-full lg:p-14 md:h-full ">
                <div class="right-side-top">
                    <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Login Now</h1>
                 </div>   
                <div class="business ">
                    <img class="object-scale-down h-52 w-96 md:w-full"src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                </div>
                 <div class="100 absolute top-32 -right-8 bg-white rounded-full md:top-4 ">
                    <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                </div>
                <div class="handshake absolute -left-8 bottom-24">
                    <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
                </div>
                
            </div>

            <button class="close-btn absolute -right-1 -top-1 bg-white rounded-xl " id="close-lglogin">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg> 
            </button>

        </div>
    </div>
</div>

    <!-- REGISTER MODAL -->
    <div class="bg-black bg-opacity-50 fixed inset-0 hidden justify-center items-center" id="overlay-register">
        
        <div class="register-modal h-5/6 bg-white w-5/6 rounded-xl flex shadow-black shadow-lg">
            
            <div class="left-side w-2/4 p-24">
                <h1 class="text-2xl">Register</h1>
                <form action="#" class="flex flex-col pt-2">
                    <label class="text-sm"for="name">Name</label>
                    <input type="text" class="rounded-3xl px-2 py-1  border border-black">
                    <label class="text-sm"for="lastname">Lastname</label>
                    <input type="text" class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="email">Email</label>
                    <input type="email" class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="username">Username</label>
                    <input type="text" class="rounded-3xl  px-2 py-1 border border-black">
                    <label class="text-sm"for="password">Password</label>
                    <input type="password" class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="email">Confirm Password</label>
                    <input type="password" class="rounded-3xl px-2 py-1 border border-black">
                    
                </form>
                <div class="bottom flex flex-col pt-8">
                        <button class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Register</button>
                        <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                </div>
                    
            </div>
            <div class="right-side w-2/4 bg-customGreen rounded-r-xl p-24 relative">
                <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-14 relative">
                    <div class="right-side-top">
                        <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Register Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="object-scale-down h-52 w-96"src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                    </div>
                    <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                        <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                    </div>
                    <div class="handshake absolute -left-8 bottom-24">
                        <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
                    </div>
                
                </div>

                <button class="close-btn absolute -right-1 -top-1 bg-white rounded-xl " id="close-lgregister">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg> 
                </button>
            
            </div>

        </div>
      
    </div>
    

