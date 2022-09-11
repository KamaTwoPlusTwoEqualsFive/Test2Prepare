// swiper js code
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 2500,
    // disableOnInteraction : false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
// here and there
let here = document.querySelector("#here");
let there = document.querySelector("#there");

here.addEventListener("click", navigateThere, false);
function navigateThere(e) {
  there.scrollIntoView({ behavior: "smooth" });
}
let here1 = document.querySelector("#here1");
let there1 = document.querySelector("#there1");

here1.addEventListener("click", navigateThere1, false);
function navigateThere1(e) {
  there.scrollIntoView({ behavior: "smooth" });
}
//Close
// var regiscontain = document.getElementsByClassName('register-container')[0];
// var logincontain = document.getElementsByClassName('sign-container')[0];

// logincontain.onclick = function(){
//   regiscontain.style.display = "none";
// }

// if (logincontain.onclick) {
//  regiscontain.style.display = "none";
// }
// else{
//  null;
// }
