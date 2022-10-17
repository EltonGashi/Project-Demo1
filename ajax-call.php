<?php $posts = $wpdb->prepare("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts
                LEFT JOIN 
                ratingSystem.rate
                ON wp_posts.ID = rate.cardID
                WHERE wp_posts.post_type = 'post'
                AND wp_posts.post_status = 'publish' 
                GROUP BY wp_posts.ID 
                ORDER BY rate DESC
                ");
                $page = $_POST['page']*4;
                if(isset($page)){
                $posting = $wpdb->get_results( $posts . "LIMIT 4 OFFSET {$page}", ARRAY_A);
            }

                
                if( $posting ) :

                    // run the loop
                    foreach( $posting as $query):
                        
                        if(isset($query)){
                        // look into your theme code how the posts are inserted, but you can use your own HTML of course
                        // do you remember? - my example is adapted for Twenty Seventeen theme
                        var_dump($query);
                        get_template_part('/components/home/card_users/user' , 'cards');
                        // for the test purposes comment the line above and uncomment the below one
                        // the_title();

                    }
                    endforeach;
             
                endif;?>
                <?php $wpdb->print_error();?>
                <?php $wpdb->flush();?>
            
            <?php wp_reset_postdata();
            ?>