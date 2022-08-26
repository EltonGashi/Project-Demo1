<?php ob_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head >

<body <?php body_class(array('container')); ?>>

    <header class="bg-img">
        <div class="container">
            <div class="header">
                <div class="header-logo">
                    <img  src="<?php echo get_template_directory_uri(); ?>./assets/img/HeaderImages/Repeat Grid 8.png">
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
        <!-- <div class="banner"> -->
            <div class="search-talents">
                <h2 class="search-title">Search for best <i class="font-courgette">services</i></h2>
                <form class="search-box"  method="get" action="<?php print site_url(); ?>">
                    <input type="text" class="input-search" placeholder="Search for new talents..." name="s" value="<?php if(isset($_GET['s'])){print $_GET['s'];} ?>">
                    <button class="searchBtn" type="submit" value="Search Our Site...">Search</button>
                </form>
            </div>
            <!-- <div class="image-banner">
            <img  src="<?php echo get_template_directory_uri(); ?>./assets/img/HeaderImages/Group 11.png">
            </div>
        </div> -->
    </header>

    <!--LOGIN MODAL  -->
    <?php 


if(isset($_POST['submit'])) {

    $redirect_to = ! empty ($_POST['redirect_to']) ? $_POST['redirect_go'] : '/';
    $user_login = sanitize_user($_POST['username']);
    $user_password = sanitize_text_field($_POST['password']);


    $user = wp_authenticate( $user_login, $user_password );

    if (!is_wp_error($user)) {
      wp_set_auth_cookie($user->data->ID);
      wp_safe_redirect(site_url());
      exit();
    } else {
    }
  }

  ?>


<div class="bg-black bg-opacity-50 fixed inset-0 hidden  p-20" id="overlay-login">

    <div class="login-modal bg-white rounded-xl shadow-black shadow-lg flex lg:flex-row  lg:w-5/6 lg:h-5/6 md:flex-col md:h-5/6 md:w-5/6 md:flex-col-reverse sm:h-5/6">

        <div class="left-side lg:w-2/4 lg:h-full lg:p-24 md:h-3/6 md:p-16 ">
            <div class="left-side-top pb-10 ">
                    <h1 class="text-3xl font-semibold ">Login</h1>
                    <h1 class="pt-4">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid">
                <form method="POST" class="flex flex-col">
                    <label for="email">Email</label>
                    <input type="text" id="username" name="username" placeholder="example@example.com " class="mt-5 rounded-3xl py-2 px-2 border border-black">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********"  class="mt-5 rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center">
                        <a href="#">Forgot Password?</a>
                    </small>
               
                
            </div>

            <div class="bottom flex flex-col pt-4 mt-4">
            <button type="submit" name="submit" id="submit" class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Login</button>
                <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
            </div>
            </form>
                
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

            <button   class="close-btn absolute -right-1 -top-1 bg-white rounded-xl " id="close-lglogin">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg> 
            </button>

        </div>
    </div>
</div>


    <!-- REGISTER MODAL -->
    <?php


global $wpdb;

if($_POST)  {
  $username = $wpdb->escape($_POST['username']);
  $email = $wpdb->escape($_POST['email']);
  $password = $wpdb->escape($_POST['password']);
  $confirmpassword = $wpdb->escape($_POST['confirmpassword']);

  $erorr = array();

  // nese username ka hapsir
  if(strpos($username, ' ')!==FALSE) {
    $erorr['username_space'] =  "";
    
  }

   // nese username osht i zbrazt
  if(empty($username)) {
    $erorr['username_empty'] =  "";
  
  
  }

     // nese username egziston n databaz
if(username_exists( $username )) {
 
  $erorr['username_exists'] =  "";
 
  

}

    // nese email osht valid
if(!is_email($email)) {

  $erorr['email_valid'] =  "";

  
  
}

// nese egziston email n databaz
if(email_exists( $email )) {

  $erorr['email_exists'] =  "";

 
}

if(strcmp($password, $confirmpassword) !==0) {
  
  $erorr['password'] =  "";

  
} 
if(count($erorr) ==0) {
  wp_create_user( $username, $password, $email );
  echo "You have successfully registered.";
  exit();
}
} 
?> 




    <div class="bg-black bg-opacity-50 fixed inset-0 hidden justify-center items-center" id="overlay-register">
        
        <div class="login-modal h-5/6 bg-white w-5/6 rounded-xl flex shadow-black shadow-lg">
            <div class="left-side w-2/4 p-24">
            <h1 class="text-xsm pt-4">NOTE: If you are a company please add @company as your email domain name</h1>
                <h1 class="text-2xl">Register</h1>
                <form method="POST"  class="flex flex-col pt-2">
                    <label class="text-sm"for="name">Name</label>
                    <input type="text" id="username" name="username" placeholder="example " class="rounded-3xl px-2 py-1  border border-black">
                    <label class="text-sm"for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com"  class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="email">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="********"  class="rounded-3xl px-2 py-1 border border-black">
                
                <div class="bottom flex flex-col pt-8">
                <button type="submit" name="submit" id="submit" class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Register</button>
                        <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                </div>
                </form>

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
    

