$(document).ready(function(){
    $(".lista-element").slice(0, 4).show();
    $(".loadmore").on("click", function(e){
      e.preventDefault();
      $(".lista:hidden").slice(0, 4).slideDown();
      if($(".lista:hidden").length == 0) {
        $(".loadmore").text("No Content").addClass("noContent");
      }
    });
    
  })  
  