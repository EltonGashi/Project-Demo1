// $(document).ready(function(){
  
//     $('.user-card').slice(0 , 3).show();   
  
//   $(".loadmore").on("click", function(e){
//       $('.user-card hidden').slice(0,4).slideDown();
//   });
// });
  

// // // e.preventDefault();
// // $('.user-card').slice(1).slideDown();
// // if($(".user-card").length == 0) {
// //   $(".loadmore").text("No Content").addClass("noContent");
// // }

// var ajaxurl = "<?php echo admin_url('admin-ajax.php');?>";
// var page =2;
// jQuery(function($){
//     // init isotop

//     var $grid = $('.users');
//     $grid.isotope({
//       // options
//       itemSelector: '.user-card',
//       percentPosition: true,
//     });

//     $('body').on('click', '.loadmore', function(e){
//       console.log('works');
//       var data ={
//         'action':'load_posts_by_ajax',
//         'page': page,
//         'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
//       };

//       $.post(ajaxurl, data, function(response){
//         if(response != ''){
//           var $answer = $(response);

//           //append items to grid
//           $grid.append($answer)
//           .isotope('appended', $answer);

//           //layout 
//           page++;
//         }
//         else{
//           $('.loadmore').text("No more data");
//           $('.loadmore').attr("disabled", true);
//           $('.loadmore').css("borderColor", "gray");
//           $('.loadmore').css("color" , "gray");
//         }
//       });
//       e.preventDefault(); 
//     });
// });

