	$('.galleryPreviewImage > img:gt(0)').hide();
		setInterval(function() { 
		  $('.galleryPreviewImage > img:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('.galleryPreviewImage');
		},  4000);

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




  //variables
  //var imageTotal=<?php echo $imageTotal; ?>;
  //var currentImage=1;
  //var thumbTotalWidth=0;

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

    currentImage--;
    if(currentImage==0){
      currentImage=imageTotal;
    }

    $('img.previewImage' + currentImage).show();
    $('a.galleryBullets' + currentImage).addClass('active');
    $('a.thumbnilsimage' + currentImage).addClass('active');
    $('div.description'  + currentImage).addClass('visible');
  });

// 	$(document).ready(function() {
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