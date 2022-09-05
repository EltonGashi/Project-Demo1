<!---- stripe ---->


<div class="container">

</div>

          <?php 
          $about1 = get_field('about1');
          $about2 = get_field('about2');
          $about3 = get_field('about3');
          $about4 = get_field('about4');
          $button = get_field('button');
          $image = get_field('image');
          $picture = $image['sizes']['large'];
          ?>





   <!---- first section ----->

    <div class="first-section ml-28  ">
    <?php if($about1): ?>
    <h4 class="text-green-700 text-lg"><?php echo $about1;?></h4>
    <?php endif;?>
        
    <div class="font-sans text-3xl font-medium">

            <?php if($about2): ?>

                <h1><?php echo nl2br($about2);?></h1>

            <?php endif;?>
            </div>
    </div>
  
    <!----             ------->

    <br>
    <br>
    

    <!------ second section ---->
    <div class="second-section flex items-center ml-14">

    <div class=" ml-0 flex flex-col">
    <div class="text-2xl text-gray-800 font-bold">
    
    <?php if($about3): ?>
    <h1><?php echo nl2br($about3);?></h1>
    <?php endif;?>
    
    </div>


    <div class="text-lg text-gray-500 my-9">
    
    <?php if($about4): ?>
    <p><?php echo nl2br($about4);?></p>
    <?php endif;?>
    </div>
    
   

    <br>

    <?php if($button): ?>
    <a href="#">
        <button class="border rounded-lg px-9 py-1.5 text-center bg-green-500 text-white"><?php echo $button;?></button>
    </a>
    <?php endif;?>
    </div>


    <div class="img ml-64 w-96">

    <img src="<?php echo $picture;?>">
    
    </div>

    <br>

    </div>
    

   <!-----            ----->


    </div>

    </div>