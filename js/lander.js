$(document).scroll(function() {
   var scrollPos = $(window).scrollTop()
   if(scrollPos > 60) {
     $("nav").addClass("scrolled");
     $("nav").removeClass("[class^='delay-']");
   }
   else
    $("nav").removeClass("scrolled");
});
