$(".show-sidebar-btn").click(() => {
    $(".sidebar").animate({marginLeft:0});
})
$(".hide-sidebar-btn").click(() => {
    $(".sidebar").animate({marginLeft:'-100%'});
})

function go(url) {
    setTimeout(()=>{
        location.href = `${url}`;
    },500)
    
}

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

let screenHeight = $(window).height();
let currentMenuHeight = $(".menuItemLink.active").offset().top;

if(currentMenuHeight > screenHeight*.8) {
    $(".sidebar").animate(
        {
            scrollTop : currentMenuHeight,
        }, 1000
    )
}