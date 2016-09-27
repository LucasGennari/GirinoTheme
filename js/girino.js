jQuery(function($){

  /* SCROLLBAR */
/*  $('.header-scroll').hover(function(){
    $( 'body' ).toggleClass('no-scroll');
    $( this ).css("overflow-y","visible");

  });*/
  /* Scrollbar for IPAD */
//  $('.header-scroll').on("taphold",function(){
  //$( this ).css("overflow-y","visible");
  // });


   /* custom scrollbar */
  $(window).load(function(){
  		$(".scroll-header").mCustomScrollbar({theme:"dark-thin",autoHideScrollbar:true,mouseWheelPixels:50000,advanced:{autoScrollOnFocus: false,updateOnContentResize: true,updateOnBrowserResize: true}});
  	});




  /* AJAX FUNCTIONS */

  $(document).on('click','.girino_load_more', function(){

      var page = $(this).data('page');
      console.log('page');

  });


});
