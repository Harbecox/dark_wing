document.querySelectorAll(".fake_input").forEach(function (fake_input) {
  let input = fake_input.querySelector("input") || fake_input.querySelector("textarea");
  input.addEventListener("focusin", function () {
    fake_input.classList.add("focus");
  });
  input.addEventListener("focusout", function () {
    if (this.value.length == 0) {
      fake_input.classList.remove("focus");
    }
  });
});

let ai = document.querySelector(".airport_input");
if(ai && ai.querySelector(".search_close")){
  ai.querySelector("input").addEventListener("input",function (){
    if(this.value.length > 0){
      ai.querySelector(".search_close").classList.add("show");
    }else{
      ai.querySelector(".search_close").classList.remove("show");
    }
  })

  ai.querySelector(".search_close").addEventListener("click", function (){
    ai.querySelector("input").value = ""
    this.classList.remove("show");
  })
}



$('.owl-menu-cards').owlCarousel({
  stagePadding: 67,
  loop:true,
  margin:22,
  nav:true,
  dots: false,
  navText: ["<img src='/image/chevron-l.svg'>","<img src='/image/chevron-r.svg'>"],
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:2
    },
    1400:{
      items:3
    }
  }
})

$('.owl-city').owlCarousel({
  loop:true,
  margin:31,
  nav:true,
  responsive:{
    0:{
      items:2,
      nav:false,
      dots:false
    },
    600:{
      items:2,
      nav:false,
      dots:false
    },
    1200:{
      items:3,
      nav:false,
      dots:false
    },
    1400:{
      items:4
    }
  },
  navText: ["<img src='/image/chevron-left.svg'>","<img src='/image/chevron-right.svg'>"],
})

$('.owl-info-cards').owlCarousel({
  loop:true,
  margin:31,
  nav:true,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      nav:false,
      dots:false
    },
    600:{
      items:1,
      nav:false,
      dots:false
    },
    1000:{
      items:3
    }
  },
  navText: ["<img src='/image/chevron-left.svg'>","<img src='/image/chevron-right.svg'>"],
})

let owl_text = $('.owl-text').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:1
    },
    1000:{
      items:1
    }
  }
})

if(document.querySelector(".about_main .about_image")){
    document.querySelector(".about_main .about_image").querySelectorAll("p").forEach(function (p,i){
        p.addEventListener("click",function (){
            owl_text.trigger('to.owl.carousel', i)
        })
    })
}


let menu = document.querySelector(".mobile_menu_open");
let open = document.querySelector(".mobile_menu");
open.addEventListener("click", function (){
  open.classList.add("d-none");
  menu.classList.add("show");
})

let close = document.querySelector(".mobile_menu_open");
close.addEventListener("click", function (){
  close.classList.remove("show");
  open.classList.remove("d-none");
})

let time = new Date().getTime();
let timer = null;

if(document.querySelector(".personal_main_right")){
    let form = document.getElementById("personal_data_form");
    document.querySelector("#personal_data_form").querySelectorAll("input").forEach(function (input){
        console.log(input.type);
        input.addEventListener("input",function (){
            time = new Date().getTime();
            if(!timer){
                timer = setInterval(function (){
                    if(new Date().getTime() - time > 500){
                        clearInterval(timer);
                        timer = null;
                        form.querySelector("button[type=submit]").click();
                    }
                },1);
            }
        })
    })
}

let profile_avatar_button = document.getElementById("profile_avatar_button");
let profile_avatar_input = document.getElementById("profile_avatar_input");
if(profile_avatar_button && profile_avatar_input){
    profile_avatar_button.addEventListener("click",function (){
        profile_avatar_input.click();
    })
}
