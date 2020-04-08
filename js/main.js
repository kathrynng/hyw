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
});