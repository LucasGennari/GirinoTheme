jQuery(document).ready( function($){

  /* SCROLLBAR */
/*  $('.header-scroll').hover(function(){
    $( 'body' ).toggleClass('no-scroll');
    $( this ).css("overflow-y","visible");

  });*/
  /* Scrollbar for IPAD */
  $('.header-scroll').on("taphold",function(){
  $( this ).css("overflow-y","visible");
   });

   /* custom scrollbar */
   $(".header-scroll").mCustomScrollbar({
  //  scrollbarPosition: "inside"
   theme: "dark",
   scrollbarPosition: "inside",
   autoHideScrollbar: true


  });


  /* AJAX FUNCTIONS */

  $(document).on('click','.girino_load_more', function(){

      var page = $(this).data('page');
      console.log('page');

  });


});
