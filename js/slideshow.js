

   $(".galleryPreviewImage > img:gt(0)").hide();

        // fade out current slide (first), fade in next slide and move first slide to end
        var nextSlide = function() { 
            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

        }
   $(".gallerydescription > div:gt(0)").hide();

        var nextSlidedescription = function() { 
            $('.gallerydescription > div:first-child')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".gallerydescription");
          }
        var nextSlideTimer = setInterval(nextSlidedescription,  9000);

        var nextSlideTimer = setInterval(nextSlide,  9000);

        // fade out current slide (first) and move last slide to top and fade in
        $("a.previousslidearrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000);
            $(".galleryPreviewImage > img:last")
            .fadeIn(1000)
            .prependTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $("a.nextslidearrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $(".galleryPreviewImage").hover(function() {
            $("a.previousslidearrow").fadeToggle("slow", "linear");
            $("a.nextslidearrow").fadeToggle("slow", "linear");
        });      

        // circle buttons map fade out current slide (first) and move last slide to top and fade in
        $(".circrarrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000);
            $(".galleryPreviewImage > img:last")
            .fadeIn(1000)
            .prependTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $(".circlarrow").click(function() {
            clearInterval(nextSlideTimer);

            $(".galleryPreviewImage > img:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo(".galleryPreviewImage");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });
$('.circrarrow').hover(function(){
    //whatever
    $(this).css({'background-color' : 'red', 'border' : '1px solid black'});
});

$(window).on('scroll', function()
{
  stop = Math.round($(window).scrollTop());
    if (stop > 540)
    {
      $('nav').addClass('navbar-fixed-top');
      
    }
    if(stop<540)
    {
    $('nav').removeClass('navbar-fixed-top'); 
    }
}
);

/*
  //variables
  //var imageTotal=<?php echo $imageTotal; ?>;
  var currentImage=1;
  var thumbTotalWidth=0;

$('a.galleryBullets' + currentImage).addClass('active');
$('a.thumbnilsimage' + currentImage).addClass('active');
$('div.description'  + currentImage).addClass('visible');

    //Set width for thumbnail container
    $(window).load(function(){
      $('.galleryThumbnil a img').each(function(){
        thumbTotalWidth +=$(this).width();
      });
    })

  //Preview arrow code 
  
  $('a.previousslidearrow').click(function(){
    $('img.previewImage' + currentImage).hide();
    $('a.galleryBullets' + currentImage).removeClass('active');
    $('a.thumbnilsimage' + currentImage).removeClass('active');
    $('div.description'  + currentImage).removeClass('visible');

    currentImage++;
    if(currentImage==0){
      currentImage=imageTotal;
    }

    $('img.previewImage' + currentImage).show();
    $('a.galleryBullets' + currentImage).addClass('active');
    $('a.thumbnilsimage' + currentImage).addClass('active');
    $('div.description'  + currentImage).addClass('visible');
  });
*/

//  $(document).ready(function() {
//   var navpos = $('.menu>ul').offset();
//   console.log(navpos.top);
//     $(window).bind('scroll', function() {
//       if ($(window).scrollTop() > navpos.top) {
//         $('.menu>ul').addClass('fixed');
//        }
//        else {
//          $('.menu>ul').removeClass('fixed');
//        }
//     });
// });