<?php
get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">

<div class="company-single">
<?php if( have_rows('jobs') ): ?>
    <?php while ( have_rows('jobs') ) : the_row(); 
        $image = get_sub_field('company_logo');
        ?>
        <div class="w-full pb-2 ">
            <div class="company-header w-full h-auto flex justify-between pt-6 lg:flex-col lg:flex-col-reverse lg:justify-center lg:pt-0 lg:gap-8">
                <div class="company-info w-8/12 lg:w-full  lg:justify-center">
                    <h1 class="company-name flex text-3xl font-bold"><?php the_sub_field('company_name'); ?></h1>
                    <p class="about-company flex items-center pt-6 w-full justify-center"><?php the_sub_field('about_company'); ?></p>
                </div>
                <div class="company-logo flex justify-center w-4/12 lg:w-full  lg:justify-center">
                    <img class="object-scale-down" src="<?php echo $image['url'];?>" class=""/>
                </div>
            </div>
            <div class="company-social-media">
                <?php if(have_rows('company_social_media')):?>
                <div class="social-media-button grid w-7/12 2xl:grid-cols-6 xl:grid-cols-4 lg:grid-cols-2 sm:grid-cols-1 gap-4 xl:pt-10">
                    <?php while(have_rows('company_social_media')):the_row();
                        $socialMediaIcon=get_sub_field('social_media_icon');
                        $theirlink = get_sub_field('their_link');
                    ?>
                    <button class="flex justify-evenly items-center rounded-lg border-solid bg-stone-900 p-2 w-36 hover:bg-stone-400">
                    <img class="object-scale-down" src="<?php echo $socialMediaIcon['url'];?>">
                    <a href="<?php echo $theirlink['url']; ?>"><h5 class="text-white"><?php the_sub_field('social_media_buttons');?></h5></a>
                    </button> 
                    <?php endwhile;?>
                </div>
                <?php endif;?>
            </div>

            <!-- <div class="programming-languages pt-10">
            <?php if(have_rows('programming_languages')):?>
                <div class="languages flex justify-evenly w-full overflow-x-scroll">
                    <?php while(have_rows('programming_languages')):the_row();
                        $languageIcon=get_sub_field('language_icon');
                    ?>
                    <div class="flex justify-evenly items-center rounded-lg border-solid bg-gray-300 p-2 w-40">
                    <img class="object-scale-down w-5/12" src="<?php echo $languageIcon['url'];?>">
                    </div> 
                    <?php endwhile;?>
                </div>
                <?php endif;?>
            </div> -->

            <div class="programming-languages pt-10">
            <?php if(have_rows('programming_languages')):?>

                    <?php while(have_rows('programming_languages')):the_row();
                        $languageIcon=get_sub_field('language_icon');
                    ?>
                    <div class="language">
                        <div class="language-wrapper">
                                <img class="object-scale-down w-5/12 h-full" src="<?php echo $languageIcon['url'];?>">
                        </div> 
                    </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>

            <div class="open-job-positions w-full h-auto flex justify-between gap-4 lg:flex-col py-10 pt-20">
                <div class="about-job-postions w-7/12  lg:w-full ">
                    <h1 class="job-positions-name text-2xl">Starlabs is looking for <span class="font-bold"><?php the_sub_field('job_positions_name'); ?></span></h1>
                    <p class="information text-center pt-4"><?php the_content(); ?></p>
                </div>
                <div class="header-card w-4/12 flex justify-center items-center gap-8 lg:w-full lg:justify-start">
                    <div class="contract border-solid border-lime-800 rounded-lg border-2 px-6 xl:px-4 text-center text-white bg-lime-800"><?php the_sub_field('contract_hour'); ?></div>
                    <div class="price border-solid border-zinc-300 rounded-lg border-2 px-6 xl:px-4 text-center bg-zinc-300 font-bold"><?php the_sub_field('price_per_hour'); ?></div>
                </div>
            </div>
            <hr class="w-full text-black">
            

            <div class="job-info py-10">
                <h1 class="responsible pb-4 text-xl">For this job, knowledge of the following are required:</h1>
                <div class="responsibilities flex  flex-wrap w-full justify-between pt-6 md:flex-col">
                    <?php
                    if( have_rows('employees_info') ):?>
                        <?php while ( have_rows('employees_info') ) : the_row();
                            $employee = get_sub_field('about_the_employee');
                            ?>
                            <li class="list-none flex leading-10 items-center w-6/12 xl:w-5/12 xl:leading-6 xl:items-start  md:w-full gap-4">
                                <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400  xl:mt-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                &nbsp;<p class="employee-info leading-10"><?php echo $employee;?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="company-hiring w-full py-10">
                <div class="about-job-cards grid justify-items-center w-full 2xl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-4">
                    <?php
                        if( have_rows('about_the_job') ):?>
                            <?php while ( have_rows('about_the_job') ) : the_row();
                                $svg = get_sub_field('svg');
                                $about = get_sub_field('info');
                                ?>
                                <div class="info flex w-6/12 lg:w-8/12 md:w-full justify-evenly p-6 bg-gray-300 items-center  border-solid rounded-xl">
                                    <img class="flex-shrink-0 w-5 h-5" src="<?php echo $svg['url'];?>">
                                    <h3 class="about"><?php echo $about;?></h3>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        
        <?php endwhile; ?>
<?php endif; ?>
    </div>
    


    <!-- FILE Attachment -->

    <form action="" method="post" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="Email">
        <br>
        <!-- <textarea type="msg" placeholder="Message"></textarea><br> -->
        <input type="file" name="attach1" id=""><br>
        <input type="submit" value="submit">
    </form>

    <?php
        error_reporting(E_ALL);
        ini_set('display_errors',1);

        if(isset($_FILES) && (bool) $_FILES){
            $allowedExtensions = array("pdf","jpg","doc","docx","png","jpeg");

            $files=array();

            foreach($_FILES as $name=>$file){
                $file_name =$file['name'];
                $temp_name=$file['tmp_name'];
                $file_type=$file['type'];
                $path_parts =pathinfo($file_name);
                $ext = $path_parts['extension'];
                if(!in_array($ext,$allowedExtensions)){
                    die("File $file_name has the extension $ext which is not allowed");
                }
                array_push($files,$file);
                }

                $to=$_POST['email'];
                $from="bleronamaxhuni68@gmail.com";
                $subject = "Email Attachment";
                // $message =$_POST['msg'];
                $headers ="From:$from";

                $semi_rand = md5(time());
                $mime_boundary = "==Multipart_Boundary_x($semi_rand)x";

                $headers .="\nMIMe-Version 1.0\n"."Content-Type:multipart/mixed;\n"."boundary=\"{$mime_boundary}\"";

                // $message = "This is a multi-part message in MIME format. \n\n"."--{$mime_boundary}\n"."Content-Type:text/plain; charset=\"iso-8859-1\"\n"."Content-Transfer-Encoding:7bit\n\n".$message."\n\n";

                // $message .= "--{$mime_boundary}";


                for($x = 0;$x < count($files);$x++ ){
                    $file = fopen($files[$x]['tmp_name'],"rb");
                    $data = fread($file,filesize($files[$x]['tmp_name']));
                    fclose($file);
                    $data = chunk_split(base64_encode($data));
                    $name=$files[$x]['name'];
                    // $message.="Content-Type:{\"application/ocet-stream\"};\n"."name=\"$name\"\n".
                    // "Content-Disposition:attachment;\n"."filename=\"$name\"\n"."Content-Transfer-Encoding:base64\n\n".$data."\n\n";
                    // $message .="--{$mime_boundary}\n";
                
                }

                $ok = mail($to,$subject,$headers);
                // if($ok){
                //     echo"<p>Mail sent to $to!</p>";
                // }else{
                //     echo"<p>Mail could not be sent!</p>";
                // }

                echo '<script type ="text/JavaScript">';  
                if($ok){
                echo 'alert("Mail sent to $to!")';  
                }else{
                echo 'alert("Mail could not be sent!")';  
                }
                echo '</script>';  

        }

    ?>




    <div class="my-16 font-extrabold text-2xl"><?php $cat = the_category(); ?></div>

<section id="company">
        <div class="company-suggested grid 2xl:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-8">
    
        <?php
            $categories1 = get_the_category();
            $category_id = $categories1[0]->cat_ID;
       ?>

            <?php 
            
            $args_cat = array(
                'include' => $category_id,
                
            );
        

            $categories = get_categories($args_cat);
            foreach($categories as $category):

                $args = array(
                    'post_type'=>'company',
                    
                    'posts_per_page' => 4,
                    // 'offset' =>1,
                    /*'category' ='1'*/
                    'category__in' => $category->term_id ,
                    'orderby' =>'rand',
                    // 'category__not_in' => array(1),
                );
                echo $category->term_id;
                $lastBlog = new WP_Query($args);
    
                if( $lastBlog->have_posts()):
    
                    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        
                        <?php get_template_part('/components/find-jobs/jobs-card/companies','card');?>
                        
                    <?php endwhile;
    
                    wp_reset_postdata();
    
                endif;
            endforeach;
            ?>
        </div>

    </section>

</div>
<?php get_footer();?>