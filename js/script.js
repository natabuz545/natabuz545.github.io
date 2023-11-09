$(document).ready(function(){










    $('.clients_talk-slider').slick({
        slidesToShow: 2,
        prevArrow:"<img class='slider_left' src='./img/slider_left.png'>",
            nextArrow:"<img class='slider_right' src='./img/slider_right.png'>",

            responsive: [
                {
                  breakpoint: 960,
                  settings: {
                    slidesToShow: 1,
                
                  }
                }
              ]

    });



    let menuBtn = document.querySelector('.menu-btn');
    let menu = document.querySelector('.menu');
    menuBtn.addEventListener('click', function(){
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
    })
    
    console.log(2134);
  
    $(".btn_call").click(function(){

    $("#openModal").toggleClass("activeModalka");

  });

  $(".close").click(function(){

    $("#openModal").toggleClass("activeModalka");

  });


    $(".menbtn .downitem").click(function(){

        console.log(213);
        $(this).find(".dropdown-content_m").toggleClass("mio43");
    });
    
    

  });







