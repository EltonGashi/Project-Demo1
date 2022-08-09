<?php 
$title = get_sub_field('title');
$content = get_sub_field('content_section_one');
$image = get_sub_field('image');
$picture = $image['sizes']['large'];
$side = get_sub_field('image_side');
?>


<div class="flex flex-row">
                            
                            <?php if($side == 'left'): ?>

                                <div class="grid grid-cols-2">


                                    <img src="<?php echo $picture;?>">

                                </div>
                                <div class="grid grid-cols-2">

                                    <h4><?php echo $title;?></h4>

                                    <?php echo $content;?>
                                    
                                </div>

                            <?php else:?>

                                <div class="grid grid-cols-2">

                                <h4><?php echo $title;?></h4>

                                    <?php echo $content;?>


                                    

                                </div>
                                <div class="grid grid-cols-2">
                                <img src="<?php echo $picture;?>">
                                    
                                    
                                </div>
                            
                            <?php endif;?>

                        </div>