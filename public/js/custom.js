$(document).ready(function() {
    console.log("dafda")
    $(".header-ref").on("scroll", function() {
        console.log("dafdasss")
        // var top_of_element = $(".main-ref-anchor ").offset().top;
        // var bottom_of_element = $(".main-ref-anchor ").offset().top + $(".main-ref-anchor ").outerHeight();
        // var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
        // var top_of_screen = $(window).scrollTop();
        // console.log("top_of_element", top_of_element)
        // console.log($(".main-ref-anchor ").outerHeight())
        // console.log("bottom_of_element", bottom_of_element)
        // console.log("bottom_of_screen", bottom_of_screen)
        // console.log("top_of_screen", top_of_screen)
        // if (!onnn && (bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        // }
        console.log("sroll")
        if($(".header-ref").length > 0) {
            var scrollTop     = $(window).scrollTop(),
                elementOffset = $('.top-ref').offset().top,
                distance      = (elementOffset - scrollTop);
            console.log(distance)
            if(distance < 40) {
                console.log("o")
                $(".top-agendar").addClass("show")
                // $(".navbar-brand").find("img").attr("src", base_url + "/assets/images/landing/bb_logo.svg")
                   
            } else {
                $(".top-agendar").removeClass("show")
                
                
            }
        }
        if($(".nossos-numeros").length > 0) {
            var top_of_element = $(".nossos-numeros").offset().top;
            var bottom_of_element = $(".nossos-numeros").offset().top + $(".nossos-numeros").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();
            
            if (!onnn && (bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
                onnn = true
                // console.warn("Sim")
                // Counter
                const counters = document.querySelectorAll('.value');
                const speed = 2500;
    
                counters.forEach( counter => {
                const animate = () => {
                    const value = parseInt(counter.getAttribute('akhi'));
                    const data = parseInt(formatarValor(counter.innerText, true));
                    const time = value / speed;
                    if(data < value) {
                        counter.innerText = formatarValor(Math.ceil(data + time));
                        setTimeout(animate, 1);
                        }else{
                        counter.innerText = formatarValor(value);
                        }
                    
                }
                
                animate();
                });
            } else {
                onnn = false
                // console.warn("NAO")
            }
        }
    })
})