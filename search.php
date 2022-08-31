<?php get_header();?>

    <?php

        $term = $_GET['s'];

        $expTerm = explode(" ", $term);

        $search = "(";
        foreach( $expTerm as $ek=>$ev ){

            if($ek == 0){
                $search .= " post_title LIKE '%".$ev."%' ";
            }
            else{
                $search .= " OR post_title LIKE '%".$ev."%' ";
            }

        };
        $search .= ")";

        $query = $wpdb->get_results(" SELECT * FROM ".$wpdb->prefix."posts WHERE post_status='publish' AND $search");


        /* builded a position array for the term */
        $position = 101;
        $rate = [];

        for( $i=0; $i<=100; $i++){
            
            $position = $position -1; //first run will start from 100
            $rate[$i] = $position;
        }
        /*build the array based on type and position */
        /* loop through the query */
        $newArray = [];
        foreach($query as $k => $v){

            /* loop through each term*/

            $title = $v->post_title;

            $calculate =0;

            foreach($expTerm as $tk=>$tv){

                if(strpos(strtolower($title), strtolower($tv)) !== false){

                    $calculate = $calculate + strlen($tv);

                    $pos = strpos(strtolower($title), strtolower($tv));
                    $calculate = $calculate + $rate[$pos];
                }
            }

            $newKey = $calculate.'.'.$v->ID;

            $newArray[$newKey] = $v;

            //print $newKey.'<br />';
        }

        /* Sort in reverse DESC*/
        krsort($newArray);?>
        <div class="container bg-bg p-20">
            <section id="search-results">
                <h1 class="text-3xl">Search Results</h1>
                <div class="users  grid xl:grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">

                    <?php foreach($newArray as $qk=>$qv){

                        $link = get_permalink  ($qv->ID);
                        ?>
                        <div class="user-card bg-white rounded-3xl">
                            <div class="user-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            </div>
                            <div class="user p-2">
                                <div class="user-info flex mb-2">
                                    <div class="img pr-5">
                                        <img class="w-10 h-10" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/ellipse1.png">
                                    </div>
                                    <div class="user-name text-basic">
                                        <?php print $qv->post_title; ?>
                                    </div>
                                </div>
                                <div class="user-content text-basic mb-5">
                                    <?php print wp_trim_words($qv->post_content,5,'... '); ?>
                                </div>
                                <div class="rating flex items-center mb-5">
                                    <div class="star pr-2">
                                        <img class="w-5 h-5" src="<?php echo get_template_directory_uri(); ?>./assets/img/UserImages/Star.png">
                                    </div>
                                    <div class="rating flex items-center">
                                        <p class="text-sm font-semibold">5.0</p>
                                        <p class="text-xs text-slate-500">(49)</p>
                                    </div>
                                </div>
                                
                                <button type="button" class="ml-48 text-white bg-green-700 hover:bg-green-800  rounded-full text-xs px-4 py-2 text-center justify-self-end">
                                    <p><?php print '<a href="'.$link.'">More Info ...</a>' ?></p> 
                                </button>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
            </section>
        </div>
   <?php ?>

<?php get_footer();?>