$(document).ready(function(){
  $(document).scroll(function(){
    if($(window).scrollTop() >= $('header').height()){
      $("nav").css("position", "fixed");
      $("nav").css("top", "0");
    }else{
      $("nav").css("position", "");
      $("nav").css("top", "auto");
    }
  });
})
