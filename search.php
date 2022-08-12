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
                $search .= " OR post_title '%".$ev."%' ";
            }

        };
        $search .= ")";

        $query = $wpdb->get_results(" SELECT * FORM ".$wpdb->prefix."posts WHERE post_status='publish' ");

        echo "<pre>";print_r($query);echo "</pre>";
    ?>

<?php get_footer();?>