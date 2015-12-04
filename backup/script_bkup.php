
<!--script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/slideshow.js">

</script-->	
<script type="text/javascript">

  var theImage=1;
  var currentImage=1;
  var previousImage=1;
  var imageTotal=8;

var stp=1;
//////////////////////////////////////////////////////////////////////////////
/*
	$('.galleryPreviewImage > img:gt(0)').hide();
	
// if(stp==1){

  	setInterval(function() { 
		  $('.galleryPreviewImage > img:first-child').fadeOut(1000).next().fadeIn(1000).end().appendTo('.galleryPreviewImage'); 

  // if(currentImage==imageTotal){
  //     currentImage=1;
  // }
  // if(previousImage==theImage){
  //     previousImage=8;
  // }
//if($('.galleryPreviewImage img:hover')){
//     $('.galleryPreviewImage img').stop();
//}

  		  // currentImage++;	
      //   previousImage--;

          },  3000);
*/
///////////////////////////////////////////////////////////////////////////////          
// nav left nav right 
//Ed Wong
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

//  if(stp==2){
// $('.galleryPreviewImage > img:first-child').stop(); 

//  }

//  }
//   $('.galleryPreviewImage img.previewImage' + currentImage).addClass('active');

//   $('a.nextslidearrow').click(function(){   

//      $('.galleryPreviewImage img.previewImage'+currentImage).fadeOut(10).next().fadeIn(10);

//   });

//  $('a.previousslidearrow').click(function(){   

//      $('.galleryPreviewImage img.previewImage'+previousImage).show(100);//.fadeOut(10).prev().fadeIn(10);
// stp=2;
//      $('.galleryPreviewImage img').stop();

//   });

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
</script>
<?php wp_footer(); ?>	