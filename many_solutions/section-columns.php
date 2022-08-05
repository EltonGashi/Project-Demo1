<div class="row">


 <?php
 
 $columns = get_sub_field( 'columns' );
 
 foreach($columns as $column): ?>

<div class="grid xl:grid-cols-4  gap-24 py-8 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">


                <?php if($column['title']):?>
                    <h3><?php echo $column['title'];?></h3>
                <?php endif;?>
        
            <p><?php echo $column [ 'content'];?></p>

            <?php if($column['link']):?>
                <a href="<?php echo $column['link']['url'];?>">Find Out More</a>
            <?php endif;?>
 </div>


        <?php endforeach;?>

</div>
