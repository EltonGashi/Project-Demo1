<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="bg-img">
        <div class="container">
            <div class="header">
                <div class="header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>./components/HeaderImages/Repeat Grid 8.png">
                </div>
                <div id="menu">
                    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
                    <hr>
                    <div class="register-login-btn">
                        <button class="loginBtn" id="login-btn"><a href="#" class="login">Log In</a></button>
                        <button class="registerBtn" id="register-btn"> <a href="#" class="register">Register</a></button>
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
        <div class="search-talents">
            <h2 class="search-title">Search for best <i>services</i></h2>
            <div class="search-box">
                <input type="text" class="input-search" placeholder="Search for new talents...">
                <button class="searchBtn">Search</button>
            </div>
        </div>
    </header>


    <!--LOGIN MODAL  -->

    <div class="bg-black bg-opacity-50 fixed inset-0 hidden justify-center items-center " id="overlay-login">
        
        <div class="login-modal lg:h-5/6 bg-white lg:w-5/6 lg:rounded-xl  lg:shadow-black lg:shadow-lg lg:flex  ">
            <div class="left-side lg:w-2/4 lg:p-24 md:p-24 md:w-full md:h-2/4">
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
            <div class="right-side lg:w-2/4 lg:bg-customGreen lg:rounded-r-xl lg:p-24 relative  ">
                <div class="right-side-icon lg:bg-gradient-to-b lg:from-[#e6e6e6]  lg:shadow lg:shadow-black lg:h-full lg:w-full lg:rounded-xl lg:p-14 relative ">
                    <div class="right-side-top">
                        <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Login Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="object-scale-down h-52 w-96"src="<?php echo get_template_directory_uri(); ?>./components/icons/businessman.png" alt="">
                    </div>
                    <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                        <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./components/icons/100-emoji.png" alt="">
                    </div>
                    <div class="handshake absolute -left-8 bottom-24">
                        <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./components/icons/hand-emoji.png" alt="">
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
        
        <div class="login-modal h-5/6 bg-white w-5/6 rounded-xl flex shadow-black shadow-lg">
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
                    
                <button class="close-btn absolute -right-1 -top-1 bg-white rounded-xl" id="close-lgregister">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg> 
                </button>
            </div>
            <div class="right-side w-2/4 bg-customGreen rounded-r-xl p-24 relative">
                <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-14 relative">
                    <div class="right-side-top">
                        <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Register Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="object-scale-down h-52 w-96"src="<?php echo get_template_directory_uri(); ?>./components/icons/businessman.png" alt="">
                    </div>
                    <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                        <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./components/icons/100-emoji.png" alt="">
                    </div>
                    <div class="handshake absolute -left-8 bottom-24">
                        <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./components/icons/hand-emoji.png" alt="">
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

    <?php get_template_part('/components/services-card-users/user','cards');?>

    <?php get_template_part('/components/front','page');?>


    <script>

        window.addEventListener('DOMContentLoaded', () =>{
                    /*Login MODAL*/
                    const overlayLogin = document.querySelector('#overlay-login');
                    const loginBtn = document.querySelector('#login-btn');
                    const closeLogin = document.querySelector('#close-lglogin');
                    

                    const loginModal = () => {
                        overlayLogin.classList.toggle('hidden');
                        overlayLogin.classList.toggle('flex');
                    };
                    loginBtn.addEventListener('click', loginModal);

                    closeLogin.addEventListener('click', loginModal);

                    /*Register MODAL*/

                    const overlayRegister = document.querySelector('#overlay-register');
                    const registerBtn = document.querySelector('#register-btn');
                    const closeRegister = document.querySelector('#close-lgregister');

                    const registerModal = () => {
                        overlayRegister.classList.toggle('hidden');
                        overlayRegister.classList.toggle('flex');
                    };
                    registerBtn.addEventListener('click', registerModal);

                    closeRegister.addEventListener('click', registerModal);
                });

    </script>
