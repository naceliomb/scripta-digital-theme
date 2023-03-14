const desktopNav = $(".main-menu");
const mobileNav = $(".menu-responsive");

if (window.matchMedia("(min-width: 1024px)").matches) {
  mobileNav.removeClass("active-nav");
  desktopNav.addClass("active-nav");
}

window.addEventListener("resize", function () {
  if (window.matchMedia("(min-width: 1024px)").matches) {
    mobileNav.removeClass("active-nav");
    desktopNav.addClass("active-nav");
  } else {
    desktopNav.removeClass("active-nav");
    mobileNav.addClass("active-nav");
  }
});


//toggle menu responsive{mobile}

$('.menu-responsive-hamburger-toggle').click(function() {
  $(this).toggleClass('open');
  $('.menu-menu-principal-container').toggleClass('active-nav');
});