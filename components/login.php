<section id="login" class="h-auto bg-white rounded-xl">
    <div class="login border border-black rounded-xl flex">
        <div class="left-side w-2/4 p-36">
            <div class="top pb-20">
                <h1 class="text-3xl font-semibold ">Login</h1>
                <h1 class="pt-4">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid">
                <form action="#" class="flex flex-col">
                    <label for="email">Email</label>
                    <input type="text" class="rounded-3xl py-2 px-2 border border-black">
                    <label for="password">Password</label>
                    <input type="text" class="rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center">
                        <a href="#">Forgot Password?</a>
                    </small>
                </form>
            </div>

            <div class="bottom flex flex-col pt-20">
                    <button class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Login</button>
                    <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
            </div>
        </div>
        <div class="right-side bg-customGreen w-2/4 p-36 rounded-r-xl">
            <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-14 relative">
                <div class="right-side-top">
                    <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Login Now</h1>
                </div>   
                <div class="business">
                    <img src="<?php echo get_template_directory_uri(); ?>./components/icons/businessman.png" alt="">
                </div>
                <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                    <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./components/icons/100-emoji.png" alt="">
                </div>
                <div class="handshake absolute -left-8 bottom-24">
                    <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./components/icons/hand-emoji.png" alt="">
                </div>
            
            </div>
           
        </div>

    </div>
</section>
