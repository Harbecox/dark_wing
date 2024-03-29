//
//
// window.onload = function (){
//     document.querySelector("body").classList.remove("preloader_show");
// }
//
//

document.querySelectorAll(".fake_input").forEach(function (fake_input) {
    let input = fake_input.querySelector("input") || fake_input.querySelector("textarea");
    if (input) {
        input.setAttribute('autocomplete', 'off');
        if (input.value.length > 0) {
            fake_input.classList.add("focus");
        }
        input.addEventListener("focusin", function () {
            fake_input.classList.add("focus");
        });
        input.addEventListener("focusout", function () {
            console.log(this.value.length);
            if (this.value.length === 0) {
                fake_input.classList.remove("focus");
            }
        });
    }
});

let ai = document.querySelector(".airport_input");
if (ai && ai.querySelector(".search_close")) {
    ai.querySelector("input").addEventListener("input", function () {
        if (this.value.length > 0) {
            ai.querySelector(".search_close").classList.add("show");
        } else {
            ai.querySelector(".search_close").classList.remove("show");
        }
    })

    ai.querySelector(".search_close").addEventListener("click", function () {
        ai.querySelector("input").value = ""
        this.classList.remove("show");
    })
}


// $('.owl-city').owlCarousel({
//   loop:true,
//   margin:31,
//   nav:true,
//   responsive:{
//     0:{
//       items:2,
//       nav:false,
//       dots:false
//     },
//     600:{
//       items:2,
//       nav:false,
//       dots:false
//     },
//     1200:{
//       items:3,
//       nav:false,
//       dots:false
//     },
//     1400:{
//       items:4
//     }
//   },
//   navText: ["<img src='/image/chevron-left.svg'>","<img src='/image/chevron-right.svg'>"],
// })
//
// let owl_text = $('.owl-text').owlCarousel({
//   loop:true,
//   margin:0,
//   nav:true,
//   responsive:{
//     0:{
//       items:1
//     },
//     600:{
//       items:1
//     },
//     1000:{
//       items:1
//     }
//   }
// })


let menu = document.querySelector(".mobile_menu_open");
let open = document.querySelector(".mobile_menu");
open.addEventListener("click", function () {
    open.classList.add("d-none");
    menu.classList.add("show");
})

let close = document.querySelector(".mobile_menu_open");
close.addEventListener("click", function () {
    close.classList.remove("show");
    open.classList.remove("d-none");
})

let time = new Date().getTime();
let timer = null;

if (document.querySelector("#personal_data_form")) {
    let form = document.getElementById("personal_data_form");
    document.querySelector("#personal_data_form").querySelectorAll("input").forEach(function (input) {
        console.log(input.type);
        input.addEventListener("input", function () {
            time = new Date().getTime();
            if (!timer) {
                timer = setInterval(function () {
                    if (new Date().getTime() - time > 500) {
                        clearInterval(timer);
                        timer = null;
                        console.log(1);
                        form.querySelector("button[type=submit]").click();
                    }
                }, 1);
            }
        })
    })
}

let profile_avatar_button = document.getElementById("profile_avatar_button");
let profile_avatar_input = document.getElementById("profile_avatar_input");
if (profile_avatar_button && profile_avatar_input) {
    profile_avatar_button.addEventListener("click", function () {
        profile_avatar_input.click();
    })
}

function scrollToMenu() {
    document.querySelector(".menu").scrollIntoView();
}


let airport_map = document.querySelector(".airport_map");
if (airport_map) {
    airport_map.querySelectorAll(".continent").forEach(function (continent) {
        continent.querySelectorAll("path").forEach(function (path) {
            path.addEventListener("click", function () {
                console.log(continent.dataset.id);
            })
            path.addEventListener("mouseover", function () {
                continent.classList.add("hovered");
            })
            path.addEventListener("mouseout", function () {
                continent.classList.remove("hovered");
            })
        })
    })
}
//
// let menu_show = false;
//
// window.onscroll = function() {
//     if (window.scrollY >= 1000 && !menu_show) {
//         menu_show = true;
//         $.ajax({
//             type:'get',
//             url:'/get_menu',
//             success:function(data) {
//                 document.getElementById('menu').innerHTML = data;
//                 $('.owl-menu-cards').owlCarousel({
//                     stagePadding: 67,
//                     loop:true,
//                     margin:22,
//                     nav:true,
//                     dots: false,
//                     navText: ["<img src='/image/chevron-l.svg'>","<img src='/image/chevron-r.svg'>"],
//                     responsive:{
//                         0:{
//                             items:1,
//                             margin:0,
//                             stagePadding: 0,
//                         },
//                         600:{
//                             items:1,
//                             margin:0,
//                             stagePadding: 0,
//                         },
//                         1000:{
//                             items:2
//                         },
//                         1400:{
//                             items:3
//                         }
//                     }
//                 })
//             }
//         });
//         $.ajax({
//             type:'get',
//             url:'/get_posts',
//             success:function(data) {
//                 document.getElementById('news').innerHTML = data;
//                 $('.owl-info-cards').owlCarousel({
//                     loop:true,
//                     margin:31,
//                     nav:true,
//                     responsiveClass:true,
//                     responsive:{
//                         0:{
//                             items:1,
//                             nav:false,
//                             dots:false
//                         },
//                         600:{
//                             items:1,
//                             nav:false,
//                             dots:false
//                         },
//                         1000:{
//                             items:3
//                         }
//                     },
//                     navText: ["<img src='/image/chevron-left.svg'>","<img src='/image/chevron-right.svg'>"],
//                 })
//             }
//         });
//
//     }
// };


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});


window.addEventListener("show_posts",function (){
    fetch('/get_menu')
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            if (document.getElementById('menu')){
                document.getElementById('menu').innerHTML = data;
            }
            var swiperNews = new Swiper(".owl-menu-cards", {
                slidesPerView: 3,
                loop: true,
                initialSlide: 2,
                navigation: {
                    nextEl: '.menu_button.swiper-button-prev',
                    prevEl: '.menu_button.swiper-button-next',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    992: {
                        slidesPerView: 3
                    }
                },
            });

        });

    fetch('/get_posts')
        .then((response) => {
            return response.text();
        })
        .then((data) => {
            if ( document.getElementById('news')){
                document.getElementById('news').innerHTML = data;
            }
            var swiperNews = new Swiper(".owl-info-cards", {
                slidesPerView: 3,
                loop: true,
                spaceBetween: 31,
                navigation: {
                    nextEl: '.news_button.swiper-button-prev',
                    prevEl: '.news_button.swiper-button-next',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    992: {
                        slidesPerView: 3
                    }
                },
            });
        });

})

let menu_show = false;
window.addEventListener("scroll", (event) => {
    if(this.scrollY > 100 && !menu_show){
        menu_show = true;
        window.dispatchEvent(new Event("show_posts"));
    }
});


if (document.querySelector(".about_main .about_image")) {
    let buttons = document.querySelectorAll(".text_swiper .swiper-pagination-bullet");
    document.querySelector(".about_main .about_image").querySelectorAll("p").forEach(function (p, i) {
        p.addEventListener("click", function () {
            buttons[i].click()
        })
    })
}
