$(document).ready(function(){
    let $btns = $(".project-area .project-menu button");
    $btns.click(function(e){
        $(".project-area .project-menu button").removeClass("active");
        e.target.classList.add("active");

        let selector = $(e.target).attr("data-filter");
        $(".project-area .grid").isotope({
            filter : selector
        })
            
        return false;
    })


    //magnific pop up to display the gallery of the images
    $(".project-area .project-menu #btn1").trigger('click');

    $('.project-area .grid .test-popup-link').magnificPopup({
        type: 'image',
        gallery:{enabled:true}
        
      });

    //owl carousel to display different clients  
      $(".site-main .client-area .owl-carousel").owlCarousel({
          loop:true,
          autoplay: true,
          dots:true,
          responsive:{
            0:{
                items:1
            },
            544:{
                items:2
            }
          }

      })
});