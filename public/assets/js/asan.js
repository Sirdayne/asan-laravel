$(document).ready(function(){   
    
    var slideIndex = 0;
    
    var numSlides = $('.h-slide').length;
    
    numSlides = numSlides - 2;
    
    //$('.h1-slide').eq( slideIndex ).fadeIn('fast');
    
    $('.h-left').css('z-index','1');
    $('.h-right').css('z-index','1');
    
    $('.h-left').eq( slideIndex ).css('z-index','3');
    $('.h-right').eq( slideIndex ).css('z-index','3');
    
    $('.h-arrow-right').click(function() {
        
        if (slideIndex > numSlides){
     
            
            var counterFix = slideIndex;
            
            $('.h-left').eq( slideIndex ).addClass('slideOutUp');  
            $('.h-right').eq( slideIndex ).addClass('slideOutDown'); 
           
            
            $('.h-left').css('z-index','1');
            $('.h-right').css('z-index','1');
            $('.h-left').eq( slideIndex ).css('z-index','3'); 
            $('.h-right').eq( slideIndex ).css('z-index','3'); 

            slideIndex = 0;
            $('.h-left').eq( slideIndex ).css('z-index','2');  
            $('.h-right').eq( slideIndex ).css('z-index','2'); 
            
            //$('.h1-slide').fadeOut('fast');
            //$('.h1-slide').eq( slideIndex ).fadeIn('fast');
            
            $('.h-left').eq( counterFix - 1 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            $('.h-right').eq( counterFix - 1).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            
            $('.h-left').eq( 0 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            $('.h-right').eq( 0 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            
            
            $('.h-box').hide();  
            
            $('.h-box').eq( slideIndex ).show();  
             
        }
        else{
            
            $('.h-left').removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            $('.h-right').removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            
            if ((slideIndex % 2) != 1){
                $('.h-left').eq( slideIndex ).addClass('slideOutUp');  
                $('.h-right').eq( slideIndex ).addClass('slideOutDown'); 
            }
            else{
                $('.h-left').eq( slideIndex ).addClass('slideOutLeft');  
                $('.h-right').eq( slideIndex ).addClass('slideOutRight'); 
            }

            
            $('.h-left').css('z-index','1');
            $('.h-right').css('z-index','1');
            $('.h-left').eq( slideIndex ).css('z-index','3'); 
            $('.h-right').eq( slideIndex ).css('z-index','3'); 

            slideIndex = slideIndex + 1;
            $('.h-left').eq( slideIndex ).css('z-index','2');  
            $('.h-right').eq( slideIndex ).css('z-index','2'); 
            
            $('.h-box').hide();  
            
            $('.h-box').eq( slideIndex ).show();  
            
            //$('.h1-slide').fadeOut('fast');
            //$('.h1-slide').eq( slideIndex ).fadeIn('fast');
        }
    });
    
    $('.h-arrow-left').click(function() {
        
        if (slideIndex < 1){

            
            $('.h-left').eq( slideIndex ).addClass('slideOutUp');  
            $('.h-right').eq( slideIndex ).addClass('slideOutDown'); 
            
            $('.h-left').css('z-index','1');
            $('.h-right').css('z-index','1');
            $('.h-left').eq( slideIndex ).css('z-index','3');
            $('.h-right').eq( slideIndex ).css('z-index','3'); 

            slideIndex = numSlides + 1;
            $('.h-left').eq( slideIndex ).css('z-index','2');  
            $('.h-right').eq( slideIndex ).css('z-index','2');  
            
            //$('.h1-slide').fadeOut('fast');
            //$('.h1-slide').eq( slideIndex ).fadeIn('fast');
            
            $('.h-left').eq( numSlides - 2 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            $('.h-right').eq( numSlides - 2 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            
            $('.h-left').eq( numSlides + 1 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            $('.h-right').eq( numSlides + 1 ).removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight');
            
            $('.h-box').hide();  
            
            $('.h-box').eq( slideIndex ).show();  
             
        }
        else{
            
            $('.h-left').removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight slideOutLeft slideOutRight');
            $('.h-right').removeClass('slideOutUp slideOutDown slideOutLeft slideOutRight slideOutLeft slideOutRight');
            
            if ((slideIndex % 2) != 1){
                $('.h-left').eq( slideIndex ).addClass('slideOutUp');  
                $('.h-right').eq( slideIndex ).addClass('slideOutDown'); 
            }
            else{
                $('.h-left').eq( slideIndex ).addClass('slideOutLeft');  
                $('.h-right').eq( slideIndex ).addClass('slideOutRight'); 
            }

            
            $('.h-left').css('z-index','1');
            $('.h-right').css('z-index','1');
            $('.h-left').eq( slideIndex ).css('z-index','3'); 
            $('.h-right').eq( slideIndex ).css('z-index','3'); 

            slideIndex = slideIndex - 1;
            $('.h-left').eq( slideIndex ).css('z-index','2');   
            $('.h-right').eq( slideIndex ).css('z-index','2'); 
            
            $('.h-box').hide();  
            
            $('.h-box').eq( slideIndex ).show();  
            
            //$('.h1-slide').fadeOut('fast');
            //$('.h1-slide').eq( slideIndex ).fadeIn('fast');
        }
    });
    
    $('.h-1').show();
    
    $('.s-box').click(function() {
        
        var indexBox = $(".s-box").index(this);
        var leN = $('.f-box').length; 
        
        $('.f-box').eq( indexBox ).removeClass('slideOutLeft').addClass('slideInRight').css('z-index','4');
        
        for (var i = 0; i < leN; i++) {
            if( i != indexBox ){
                $('.f-box').eq( i ).removeClass('slideInRight').addClass('slideOutLeft').css('z-index','3');
            }
        }

        $('.s-box').addClass('s-active');
        $('.s-3-left').addClass('s-active');
        $('.s-fix').addClass('s-active');
        
    });
    
    $('.s-close').click(function() {
        $('.s-box').removeClass('s-active');
        $('.s-3-left').removeClass('s-active');
        $('.s-fix').removeClass('s-active');
    });
    
    if ($(window).width() > 800) {
        var imgHeight = $('.service-consult').height();
        imgHeight = imgHeight + 250;
        $('.service-consult-img').css('height', imgHeight + 'px');
    }
    
    /* CATALOG FILTERS */
    
    $('.catalog-filter').click(function() {
        
        var indexCatalogFilter = $('.catalog-filter').index(this);
        
        $('.catalog-filter').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-category').removeClass('cf-active');
        $('.catalog-category').eq(indexCatalogFilter).addClass('cf-active');
    });
    
    $('.catalog-dot-1').click(function() {
        
        var indexCatalogDot = $('.catalog-dot-1').index(this);
        
        $('.catalog-dot-1').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-page-1').removeClass('cf-active');
        $('.catalog-page-1').eq(indexCatalogDot).addClass('cf-active');
    });
    
    $('.catalog-dot-2').click(function() {
        
        var indexCatalogDot = $('.catalog-dot-2').index(this);
        
        $('.catalog-dot-2').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-page-2').removeClass('cf-active');
        $('.catalog-page-2').eq(indexCatalogDot).addClass('cf-active');
    });
    
    $('.catalog-dot-3').click(function() {
        
        var indexCatalogDot = $('.catalog-dot-3').index(this);
        
        $('.catalog-dot-3').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-page-3').removeClass('cf-active');
        $('.catalog-page-3').eq(indexCatalogDot).addClass('cf-active');
    });
    
    $('.catalog-dot-4').click(function() {
        
        var indexCatalogDot = $('.catalog-dot-4').index(this);
        
        $('.catalog-dot-4').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-page-4').removeClass('cf-active');
        $('.catalog-page-4').eq(indexCatalogDot).addClass('cf-active');
    });
    
    $('.catalog-dot-5').click(function() {
        
        var indexCatalogDot = $('.catalog-dot-5').index(this);
        
        $('.catalog-dot-5').removeClass('cf-active');
        $(this).addClass('cf-active');
        
        $('.catalog-page-5').removeClass('cf-active');
        $('.catalog-page-5').eq(indexCatalogDot).addClass('cf-active');
    });
    
 /* 
    // declare variable
    var scrollTop = $(".scrollTop");

        $(window).scroll(function(){
            // declare variable
            var topPos = $(this).scrollTop();

           
            //if user scrolls down - show scroll to top button
            if(topPos > 100){
                $(scrollTop).removeClass('slideOutRightBig');
                $(scrollTop).addClass('slideInRightBig');


            }else{
                $(scrollTop).removeClass('slideInRightBig');
                $(scrollTop).addClass('slideOutRightBig');

            }
         

        }); // scroll END

        //Click event to scroll to top
        $(scrollTop).click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;

        });
    
       */
    
    $('.burger').click(function() {
        $('.burger').toggleClass('bur-act');
        $('.menu-mob').fadeToggle('fast');
    });
    
    $('.s-plus').click(function() {
        $(".s-box-mob").removeClass('box-active');
        $(this).parent(".s-box-mob").addClass('box-active');
    });
    
    $('.s-close-mob').click(function() {
        $(this).parent(".s-box-mob").removeClass('box-active');
    });
    
    $('.modal-back, .modal-close').click(function() {
        $('.modal-back').fadeOut('fast');
        $('.modal').fadeOut('fast');
        $('.thx').fadeOut('fast');
    });
    
    $('.jk').click(function() {
        $('.modal-back').fadeIn('fast');
        $('.modal').fadeIn('fast');
    });
    
    var modalH = $('.modal').height();
    modalH = modalH + 50;
    $('.modal-border').css('height', modalH + 'px');
    
    
    /* SVG MAP */
    $('.str1').click(function() {
        
        var indexStr = $('.str1').index(this);
        
        $('.js-map').hide();
        $('.js-map').eq(indexStr).show();
        
        $('.town-title').removeClass('js-active');
        $('.town-title').eq(indexStr).addClass('js-active');
        
        $('.str1').attr('class', 'str1');
        $(this).attr('class', 'str1 reg-active');
        
    });
    
    $('.catalog-btn').click(function() {
        
        var indexCatalogBtn = $('.catalog-btn').index(this);
        var productionText = $('.catalog-title').eq(indexCatalogBtn).html();
        
        $('#js-production').val(productionText);
        
        
      });  
    
    $('.catalog-btn-mob').click(function() {
        
        var indexCatalogBtnMob = $('.catalog-btn-mob').index(this);
        var productionTextMob = $('.catalog-title').eq(indexCatalogBtnMob).html();
        
        $('#js-production').val(productionTextMob);
        
        
      });
    
    /* ANCHORS SCROLL */

    function scrollToAnchor(aid){
        var aTag = $("a[name='"+ aid +"']");
        $('html,body').animate({scrollTop: aTag.offset().top}, 300);
    }

    $('.catalog-paginator div').click(function() {
        scrollToAnchor('anchor-catalog');
    });
    
    /* RECIPES TO CATALOG LINK */
    
    $('#js-catalog').click(function(){
        localStorage.setItem("catalogLink", "true");
    });

    if (localStorage.catalogLink == "true"){
        $('.catalog-filter').eq(1).click();
        localStorage.setItem("catalogLink", "false");
    }

    /* RECIPES CHANGE COLORS */
    var recipesRow = $('.recipe-box');
    var coef = 0;

    for(var i = 0; i < recipesRow.length ; i++){
        coef = i % 4;

        if(coef == 1){
            recipesRow.eq(i).addClass('recipe-orange');
        }
        else if(coef == 2){
            recipesRow.eq(i).addClass('recipe-green');
        }
        else if(coef == 3){
            
        }
        else{
            recipesRow.eq(i).addClass('recipe-blue');
        }
        
    }

    /* RECIPE STEPS CONSTRUCTOR */

    $('#js-add-step').click(function () {
        $('#js-steps').append('<div class="add-step"><textarea name="steps[]" class="lara-textarea-small" placeholder="Напишите шаг рецепта"></textarea><div class="step-delete"><img src="/assets/img/new-delete.png" alt=""></div></div>');
    });

    $('body').on('click','.step-delete',function(){
        $(this).parents('.add-step').remove();
    });

    

    $('#js-add-ing').click(function () {
        $('#js-ings').append('<div class="add-ing"><input name="ingredients[]" placeholder="Напишите ингредиент"><div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div></div>');
    });

    $('body').on('click','.ing-delete',function(){
        $(this).parents('.add-ing').remove();
    });
});

