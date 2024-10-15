

    /*====================
    MEAN MENU JS
    ======================*/
    $('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    /*====================
    PRELOADER JS
    ======================*/
    $(window).on('load', function() {
        $('.preloader').fadeOut();
    });

    /*====================
    NICE SELECT JS
    ======================*/
    $('select').niceSelect();

    /*====================
    HEADER STICKY JS
    ======================*/
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 150) {
            $('.navbar-area').addClass("is-sticky");
        } else {
            $('.navbar-area').removeClass("is-sticky");
        }
    });



    /*====================
    TESTIMONIAL WRAP JS
    ======================*/
    $('.testimonial-wrap').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: true,
        items: 1,
        dots: true,
        autoHeight: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        center: false,
        responsive: {
            0: {
                items: 1,
                margin: 10
            },
            576: {
                items: 1,
                margin: 10
            },
            768: {
                items: 2,
                margin: 20
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });

    
    /*====================
    DATETIMEPICKER2 JS
    ======================*/
    $('#datetimepicker2').datepicker({
        weekStart: 0,
        todayBtn: "linked",
        language: "es",
        orientation: "bottom auto",
        keyboardNavigation: false,
        autoclose: true
    });

   

    /*====================
    SCROLL JS
    ======================*/
    $(window).on('scroll', function() {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        if (scrolled < 300) $('.go-top').removeClass('active');
    });

    /*====================
    GO-TOP JS
    ======================*/
    $('.go-top').on('click', function() {
        $("html, body").animate({
            scrollTop: "0"
        }, 50);
    });

   
    /*====================
    WOW JS
    ======================*/
    new WOW().init();


 


    // Data Aos
    AOS.init({
        once: true,
        disable: function() {
            var maxWidth = 991;
            return window.innerWidth < maxWidth;
        }
    });

// Gallery pages

const showDetails = (image) => {
    let img = document.querySelector('#noneimg');
    let div = document.querySelector('#none');
    let mainContainer = document.querySelector('.Box');
    let titlee = document.querySelector('#h3');
    
    img.src = image.src;
    div.style.display = 'block';
    titlee.innerText = image.title;
    
    mainContainer.style.filter = 'blur(20px)';
    
    document.querySelector('.close').addEventListener('click', function(){
        div.style.display = 'none';
        mainContainer.style.filter = 'none';
    });
};


