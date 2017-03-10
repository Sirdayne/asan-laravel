  <footer class="footer">
        <div class="footer-left">
            <a href="/"><img src="/assets/img/footer-logo.png" alt=""></a>
        </div>
        <div class="footer-right">
            <div class="footer-navigation">
                <a href="/about"><p>О компании</p></a>
                <a href="/contacts"><p>Контакты</p></a>
                <a href="/recipes"><p>Рецепты</p></a>
                <a href="/partners"><p>Наши партнеры</p></a>
                <a href="/catalog"><p>Ассортимент товаров</p></a>
            </div>
            
            <div class="foot-part f-1">
                <p>г.Алматы п.Боралдай, ул Бостанова 2</p>
                <p>г.Актобе, 41 разъезд, №134</p>
                <p>г.Шымкент,  Каратобинское шоссе б/н</p>
            </div>
            
            <div class="foot-line"></div>
            
            <div class="foot-part f-2">
                <p>+7(727)387-65-60</p>
                <p>+7(7132)98-73-28</p>
                <p>+7(7282)95-82-42</p>
            </div>
            
            <div class="foot-line"></div>
            
            <div class="foot-part f-3">
                <p>индекс: 050000</p>
                <p>индекс: 030011</p>
                <p>индекс:160000</p>
            </div>
            
            <div class="gi-line"></div>
            
            <div class="gi-sentence">
                <a href="http://ginnova.kz" target="_blank">
                <div class="gi-txt">Разработано по особому рецепту</div>
                <img src="/assets/img/gi-logo.png" alt=""></a>
            </div>
        </div>
    </footer>
       
        
<script src="/assets/js/jquery.min.js"></script>

<!-- Swiper JS -->
 <script src="/assets/swiper/js/swiper.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoResize: false,
        breakpoints: {
        // when window width is <= 320px
        800: {
          slidesPerView: 1
        },
        // when window width is <= 480px
        1300: {
          slidesPerView: 2
        }
        
        }
    });
</script>
	
<script src="/assets/js/jquery.waypoints.min.js"></script>
   
<script src="/assets/js/asan.js"></script>
    
<script src="/assets/js/wow.min.js"></script>
<script>
    if ($(window).width() > 1200) {
        new WOW().init();
    }
</script>
    
<script src="/assets/js/maskedinput.js"></script>
<script type="text/javascript">	
    jQuery(function($){$("#client-tel-for-consult").mask("+7(999)999-99-99");});
    jQuery(function($){$("#client-tel-for-consult-2").mask("+7(999)999-99-99");});
    jQuery(function($){$("#client-tel-for-consult-3").mask("+7(999)999-99-99");});
</script>

 <script>
        var RunOnce = 1;
    
        $('.exp-numbers').waypoint( function(dir) {
        
                    if (RunOnce == 1) {
            
                         RunOnce = false;
            
                        $({n: 0}).animate({n: 18}, {
                            duration: 2E3,
                            step: function (a) {
                                $("#val-1").html(Math.round(a))
                            }
                        })
                        $({n: 0}).animate({n: 264}, {
                            duration: 2E3,
                            step: function (a) {
                                $("#val-2").html(Math.round(a))
                            }
                        })
                        $({n: 0}).animate({n: 45857}, {
                            duration: 2E3,
                            step: function (a) {
                                $("#val-3").html(Math.round(a))
                            }
                        })
                    }
                        
           }, {
            offset: '100%'
        }) 
</script>

<script type="text/javascript">
        $(document).ready(function(){ 
            
            //$('.buyer img').attr('src','/assets/img/buyer.gif');
            

            var newDate = new Date();
            var currenTime = newDate.getTime();
            
            var stringOne = '<img src="/assets/img/buyer.gif?' + currenTime + '" />';
            
            var stringTwo = '<img src="/assets/img/cashbox.gif?' + currenTime + '" />';
            
            $('.buyer').append(stringOne);
            
            //$('.cashbox img').attr('src','/assets/img/cashbox.gif');
            
            $('.cashbox').append(stringTwo);
            
            
            $('.buyer').addClass('buyer-anima');
            
            
            var timer = 0;
            var count = 1;
            var countTwo = 1;
            
            var sliderCondition = 1;
            
            window.setInterval(function(){
                ++timer;
                
                if ((timer > count*8.58) == 1)
                    {
                        $('.js-count').html(count);
                        count++;
                    }

                $('.js-sec').html(timer);
                
                if ((timer > countTwo*3) == 1){
                    if( sliderCondition == 1 ){
                        countTwo++;
                        $('.h-arrow-right').click();
                        
                        sliderCondition = 1;
                    }
                }
                
            }, 1000);
            
            $('.h-arrow-right, .h-arrow-left').click(function() {
                sliderCondition = 0;
            });
        });
    
    
</script>

<script src="/assets/js/slick.min.js"></script>
<script>
    $('#slick-slider').slick({
        centerMode: true,
        slidesToShow: 4,
        centerPadding: '0px',
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            centerMode: true,
            slidesToShow: 4,
            centerPadding: '0px',
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000
          }
        },
        {
          breakpoint: 1000,
          settings: {
            centerMode: true,
            slidesToShow: 3,
            centerPadding: '0px',
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000
          }
        },
        {
          breakpoint: 600,
          settings: {
            centerMode: true,
            slidesToShow: 2,
            centerPadding: '0px',
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000
          }
        },
        {
          breakpoint: 480,
          settings: {
            centerMode: true,
            slidesToShow: 1,
            centerPadding: '0px',
            arrows: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000
          }
        }
    ]
    });
</script>

</body>
</html>