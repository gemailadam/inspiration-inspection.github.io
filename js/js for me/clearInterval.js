//https://css-tricks.com/snippets/jquery/simple-auto-playing-slideshow/
//Natalie
$(function() {
       $("#slideshow > div:gt(0)").hide();
       count = 0;
       setInterval(function() {
           count++;
           if (count > 10){
               clearInterval();
           }else{
               $('#slideshow > div:first')
                   .fadeOut(1000)
                   .next()
                   .fadeIn(1000)
                   .end()
                   .appendTo('#slideshow');
           }},  3000);

/*******************************************************************************************/
// nav left nav right 
//Ed Wong
   $("#slideshow > div:gt(0)").hide();

        // fade out current slide (first), fade in next slide and move first slide to end
        var nextSlide = function() { 
            $("#slideshow > div:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo("#slideshow");
        }

        var nextSlideTimer = setInterval(nextSlide,  9000);

        // fade out current slide (first) and move last slide to top and fade in
        $("#nav-left").click(function() {
            clearInterval(nextSlideTimer);

            $("#slideshow > div:first")
            .fadeOut(1000);
            $("#slideshow > div:last")
            .fadeIn(1000)
            .prependTo("#slideshow");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $("#nav-right").click(function() {
            clearInterval(nextSlideTimer);

            $("#slideshow > div:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo("#slideshow");

            nextSlideTimer = setInterval(nextSlide, 9000)
            setTimeout(nextSlideTimer, 9000)
        });

        $("#slideshow").hover(function() {
            $("#nav-left").fadeToggle("slow", "linear");
            $("#nav-right").fadeToggle("slow", "linear");
        });       