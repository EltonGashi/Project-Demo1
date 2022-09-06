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
                    <button class="loginBtn" id="login-btn"><a  class="login">Log In</a></button>
                    <button class="registerBtn" id="register-btn"> <a  class="register">Register</a></button>
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


<div class="bg-black bg-opacity-50 fixed inset-0 hidden p-20" id="overlay-login">

    <div class="login-modal bg-white rounded-xl shadow-black shadow-lg  w-full flex xl:flex-row lg:flex-row md:flex-row sm:flex-col-reverse">

        <div class="left-side xl:h-full lg:h-full md:h-full xl:w-2/4 lg:w-2/4 md:w-2/4 sm:w-full sm:h-2/4 xl:p-20 lg:p-12 md:p-8 sm:p-4 ">
            <div class="left-side-top xl:pb-10 lg:pb-5 md:pb-4">
                    <h1 class="xl:text-3xl lg:text-2xl md:text-xl font-semibold ">Login</h1>
                    <h1 class="pt-4 xl:text-base lg:text-base md:text-sm sm:hidden">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid">
                <form method="POST" class="flex flex-col ">
                    <label for="email md:text-sm">Email</label>
                    <input type="text" id="username" name="username" placeholder="example@example.com " class="xl:mt-5 xl:h-full lg:h-full md:h-full lg:mt-5 md:mt-5 sm:mt-0 sm:h-5  rounded-3xl py-2 px-2 border border-black ">
                    <br>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********"  class="xl:mt-5 xl:h-full lg:h-full md:h-full lg:mt-5 md:mt-5 sm:mt-0 sm:h-5 rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center">
                        <a href="#">Forgot Password?</a>
                    </small>
            </div>

                <div class="bottom flex flex-col xl:pt-4 lg:pt-4 md:pt-4 sm:pt-0 mt-4 ">
                    <button type="submit" name="submit" id="submit" class="xl:mt-5 xl:h-full lg:h-full md:h-full lg:mt-5 md:mt-5 sm:mt-0 sm:h-8 xl:h-auto bg-customGreen rounded-3xl py-3 px-2 text-white xl:text-sm md:text-sm lg:text-sm sm:text-xs">Login</button>
                    <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                </div>  
            </form>
        </div>

        <div class="right-side  bg-customGreen relative xl:h-full lg:h-full md:h-full xl:w-2/4 lg:w-2/4 md:w-2/4 sm:h-2/4 xl:p-20 lg:p-12 md:p-8 sm:p-4 xl:rounded-r-xl lg:rounded-r-xl md:rounded-r-xl sm:rounded-t-xl">
            <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black rounded-xl relative h-full ">
                <div class="right-side-top p-5">
                    <h1 class="xl:text-3xl lg:text-2xl text-white font-semibold md:text-xl">Very Good works are waiting for you Login Now</h1>
                 </div>   
                <div class="business ">
                    <img class="object-scale-down w-full xl:h-64 lg:h-52 md:h-52 sm:h-20 "src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                </div>
                 <div class="100 absolute top-32 xl:-right-6 lg:-right-6 md:-right-6 bg-white rounded-full md:top-4 sm:-right-4">
                    <img class="xl:object-scale-down lg:object-scale-down md:object-scale-down sm:object-fit xl:h-14 lg:h-14 md:h-10 sm:h-8" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                </div>
                <div class="handshake absolute xl:-left-8 lg:-left-8 md:-left-4 sm:-left-2 bottom-24">
                    <img class="xl:object-scale-down lg:object-scale-down md:object-scale-down sm:object-fit xl:h-14 lg:h-14 md:h-10 sm:h-8 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
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

    // nese email osht invalid
if(!is_email($email)) {

  $erorr['email_valid'] =  "";


  
}

// nese egziston email n databaz
if(email_exists( $email )) {

  $erorr['email_exists'] =  "";

 
}

if(strcmp($password, $confirmpassword) !==0) {
  

  
} 
if(count($erorr) ==0) {
  wp_create_user( $username, $password, $email );
  echo '<script type="text/javascript">';
  echo ' alert("You have successfully registered, please proceed to log in.")';  
  echo '</script>';
  echo "<script> setTimeout(function(){
    window.location.href = 'http://localhost/wordpresss';
 }, 2000);
</script>";
  exit();
}
} 
?> 




    <div class="bg-black bg-opacity-50 fixed inset-0 hidden p-20" id="overlay-register">
        
        <div class="register-modal  bg-white rounded-xl shadow-black shadow-lg  w-full flex xl:flex-row lg:flex-row md:flex-row sm:flex-col-reverse">

            <div class="left-side xl:h-full lg:h-full md:h-full xl:w-2/4 lg:w-2/4 md:w-2/4 sm:w-full sm:h-auto xl:p-20 lg:p-12 md:p-5 sm:p-4 ">

            <h1 class="text-sm xl:pt-4 lg:pt-4 md:pt-4 sm:pt-0 sm:text-xs ">NOTE: If you are a company please add @company as your email domain name</h1>
                <h1 class="xl:text-2xl lg:text-xl md:text-basic sm:text-sm  font-semibold xl:pt-5 lg:pt-5 md:pt-5 sm:pt-2 mb-2">Register</h1>
                <form method="POST"  class="flex flex-col">
                    <label class="text-sm"for="name">Name</label>
                    <input type="text" id="username" name="username" placeholder="example " class="rounded-3xl px-2 py-1  border border-black  xl:h-full lg:h-5/6 md:h-2/4 sm:h-2/6 mb-2">
                    <label class="text-sm "for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com"  class="rounded-3xl px-2 py-1 border border-black xl:h-full lg:h-5/6 md:h-2/4 sm:h-2/6 mb-2">
                    <label class="text-sm"for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" class="rounded-3xl px-2 py-1 border border-black xl:h-full lg:h-5/6 md:h-2/4 sm:h-2/6 mb-2">
                    <label class="text-sm"for="email">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="********"  class="rounded-3xl px-2 py-1 border border-black xl:h-full lg:h-5/6 md:h-2/4 sm:h-2/6 mb-2">
                    <div class="bottom flex flex-col pt-8">
                    <button type="submit" name="submit" id="submit" class="bg-customGreen rounded-3xl xl:py-3 lg:py-1 px-2 text-white text-sm xl:h-full lg:h-5/6 md:h-full">Register</button>
                    <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                    </div>
                </form>

            </div>
            <div class="right-side  bg-customGreen relative xl:h-full lg:h-full md:h-full xl:w-2/4 lg:w-2/4 md:w-2/4 sm:h-2/6 xl:p-20 lg:p-12 md:p-8 sm:p-4 xl:rounded-r-xl lg:rounded-r-xl md:rounded-r-xl sm:rounded-t-xl">
                <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-5 relative xl:block lg:block md:block sm:flex">
                    <div class="right-side-top">
                        <h1 class="xl:text-3xl lg:text-2xl md:text-xl text-white font-semibold sm:text-sm ">Very Good works are waiting for you Register Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="xl:object-scale-down lg:object-scale-down md:object-scale-down sm:object-fit xl:h-64 lg:h-52 md:h-52 sm:h-24 w-full " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                    </div>
                    <div class="100 absolute top-4 xl:-right-6 lg:-right-6 md:-right-4 sm:-right-2 bg-white rounded-full">
                        <img class="object-fit xl:h-14 lg:h-14 md:h-10 sm:h-8" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                    </div>
                    <div class="handshake absolute xl:-left-8 lg:-left-8 md:-left-4 sm:-left-2 bottom-24">
                        <img class="object-fit xl:h-14 lg:h-14 md:h-10 sm:h-8 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
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
    
<?php ob_flush();?>
