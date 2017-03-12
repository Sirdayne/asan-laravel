@extends('layouts.main')

@section('content')

    <header class="header-partners">
        <h1>Редактирование рецепта</h1>
    </header>

    <section class="lara-section">
    <div class="wrap">

    <h3>Обновите данные рецепта в форме</h3>
    
    @if(isset($success))
        <div class="lara-success"> {{$success}} </div>
    @endif

    @if (count($errors))
    <div>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>

        @endforeach
    </div>
    @endif

    <form method="POST" action="/recipes/update" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $recipe->id }}">
        <input type="text" name="title" placeholder="Заголовок" value="{{ $recipe->title }}">
        <input type="file" name="image">


        <!--<label for="ingredients">Ингредиенты:</label>-->
        <div id="js-ings">
        @foreach($recipe->ingredients as $ingredient)
            <div class="add-ing">
                <input name="ingredients[]" class="js-ing-txt" placeholder="Напишите ингредиент" value="{{ $ingredient->body }}">
                <input type="hidden" name="ings_id[]" value="{{ $ingredient->id }}">

                <div class="ing-remove"><img src="/assets/img/new-remove.png" alt=""></div>
                <input type="hidden" name="ings_delete[]" class="ing-remove-input" value="1">
            </div>
        @endforeach
        </div>
        <div id="js-add-ing" class="lara-add-step">+ ингредиент</div>


        <!--<label for="ingredients">Шаги рецепта:</label>-->
        <div id="js-steps">
        @foreach($recipe->steps as $step)
            <div class="add-step">
                <textarea name="steps[]" class="lara-textarea-small js-step-txt" placeholder="Напишите шаг рецепта">{{ $step->body }}</textarea>
                <input type="hidden" name="steps_id[]" value="{{ $step->id }}">

                <div class="step-remove"><img src="/assets/img/new-remove.png" alt=""></div>
                <input type="hidden" name="steps_delete[]" class="step-remove-input" value="1">
            </div>
        @endforeach
        </div>
        <div id="js-add-step" class="lara-add-step">+ шаг</div>

        <label for="ingredients">Выберите продукцию АС АН:</label>
        <select class="lara-select" name="product">

            @if ( $recipe->product == 1)
           	    <option value="1" selected>Длиннозерный рис пропаренный</option>
            @else
                <option value="1">Длиннозерный рис пропаренный</option>
            @endif

                
            @if ( $recipe->product == 2)
                <option value="2" selected>Макаронные изделия из муки твердой пшеницы</option>
            @else
                <option value="2">Макаронные изделия из муки твердой пшеницы</option>
            @endif

                
            @if ( $recipe->product == 3)
                <option value="3" selected>Изделия макаронные из пшеничной муки</option>
            @else
                <option value="3">Изделия макаронные из пшеничной муки</option>
            @endif

            @if ( $recipe->product == 4)
                <option value="4" selected>Гречневая крупа</option>
            @else
                <option value="4">Гречневая крупа</option>
            @endif

            @if ( $recipe->product == 5)
                <option value="5" selected>Сгущенное молоко вареное с сахаром Лакомка</option>
            @else
                <option value="5">Сгущенное молоко вареное с сахаром Лакомка</option>
            @endif

            @if ( $recipe->product == 6)
                <option value="6" selected>Молоко цельное сгущенное с сахаром</option>
            @else
                <option value="6">Молоко цельное сгущенное с сахаром</option>
            @endif

            @if ( $recipe->product == 7)
                <option value="7" selected>Пшеничная мука высший сорт</option>
            @else
                <option value="7">Пшеничная мука высший сорт</option>
            @endif

        </select>

        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection