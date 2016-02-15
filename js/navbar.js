$(document).ready(function(){

  //Change la couleur au scroll
 var scroll_start = 0;
 var startchange = $('#startchange');
 var offset = startchange.offset();
  if (startchange.length){
 $(document).scroll(function() {
    scroll_start = $(this).scrollTop();
    if(scroll_start > offset.top) {
        $(".navbar-default").css('background-color', '#ffffff');
        $(".navbar-default").css('transition', '1s');
     } else {
        $('.navbar-default').css('background-color', 'transparent');
     }
 });
  }

//Vitesse de scroll quand click sur navbar
  $('.page-scroll').on('click', function() {
    var page = $(this).attr('href');
    var speed = 750;
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
  });

});
