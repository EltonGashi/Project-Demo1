<?php get_header();?>

<h1>Search Results</h1>

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
        krsort($newArray);


        foreach($newArray as $qk=>$qv){

            $link = get_permalink  ($qv->ID);
            
            ?>
                <h1 class="text-3xl"><a href="<?php print $link; ?>"><?php print $qv->post_title; ?></a></h1>
                <p><?php print wp_trim_words($qv->post_content,40,'... <a href="'.$link.'">Continue Reading</a>'); ?></p>
                
            <?php
        }
    ?>

<?php get_footer();?>