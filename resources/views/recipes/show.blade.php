@extends('layouts.main')

@section('content')

    <section class="ingredients">

        @if( ! empty($prev) )
            <a href="/recipes/{{ $prev }}"><div class="r-prev"></div></a>
        @endif
       
        @if( ! empty($next) )       
            <a href="/recipes/{{ $next }}"><div class="r-next"></div></a>
        @endif

        <div class="ing-wrap">
            
            <div class="ing-title-mob">{{ $recipe->title }}</div>
            <div class="ing-img">
                <img src="/images/{{ $recipe->image }}" alt="">
            </div>
            <div class="ing-txt">
                <h1>{{ $recipe->title }}</h1>
                
                <h2>Ингредиенты:</h2>
                
                <div class="ing-block">
                    @foreach($recipe->ingredients as $ingredient)
                        <div class="ing-box">{{ $ingredient->body }}</div>
                    @endforeach
                </div>
      
            </div>
            
        </div>
    </section>
     
    <section class="recipe">
        <div class="ing-wrap">
            <div class="rcp-title">
                ОПИСАНИЕ
            </div>
            
            <!--
            <div class="rcp-txt">
                <div class="rcp-num">1</div>
                
                Заготовьте овощи. Для этого тщательно их помойте, лук и чеснок очистите, с помидор удалите кожицу, с фасоли – твердые хвостики, а с перцев – сердцевину. Затем порежьте чеснок тонкими пластинками, лук – полукольцами, перец – соломкой, помидоры – кубиками, фасоль – кусочками, длиной около двух сантиметров.
            </div>
            -->

            <?php $numOfSteps = 0; ?>

            @foreach($recipe->steps as $item)

                <?php $numOfSteps++; ?>

                <div class="rcp-txt">
                    <div class="rcp-num">
                        <?php echo $numOfSteps; ?>
                    </div>

                    {{ $item->body }}
                </div>
            @endforeach

        </div>
    </section>
     
    <section class="tovar-asan">
        <div class="ing-wrap">
            
            @if ( $recipe->product == 1)
                <div class="tovar-left">
                    <img src="/assets/img/t-1.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Длиннозерный рис пропаренный</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @elseif ( $recipe->product == 2)
                <div class="tovar-left">
                    <img src="/assets/img/t-3.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Макаронные изделия из муки твердой пшеницы</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @elseif ( $recipe->product == 3)
                <div class="tovar-left">
                    <img src="/assets/img/t-4.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Изделия макаронные из пшеничной муки</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @elseif ( $recipe->product == 4)
                <div class="tovar-left">
                    <img src="/assets/img/t-5.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Гречневая крупа</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @elseif ( $recipe->product == 5)
                <div class="tovar-left">
                    <img src="/assets/img/t-6.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Сгущенное молоко вареное с сахаром Лакомка</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @elseif ( $recipe->product == 6)
                <div class="tovar-left">
                    <img src="/assets/img/t-7.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Молоко цельное сгущенное с сахаром</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @else 
                <div class="tovar-left">
                    <img src="/assets/img/t-8.png" alt="">
                </div>
                <div class="tovar-right">
                    <div class="tovar-title">ПРОДУКЦИЯ АС АН</div>
                    <div class="tovar-desc">Пшеничная мука высший сорт</div>
                    <div class="tovar-button-wrap"><a href="/catalog"><button class="recipe-btn" id="js-catalog">перейти в каталог</button></a></div>
                </div>
            @endif
            
        </div>
    </section>

@endsection