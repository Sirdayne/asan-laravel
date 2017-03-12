@extends('layouts.main')

@section('content')

    <header class="header-partners">
        <h1>Новый рецепт</h1>
    </header>

    <section class="lara-section">
    <div class="wrap">

    <h3>Введите данные рецепта в форму</h3>
    
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

    <form method="POST" action="/recipes/store" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="Название рецепта">
        <input type="file" name="image">

        
        
        <div id="js-ings">
            <div class="add-ing">
                <input name="ingredients[]" placeholder="Напишите ингредиент">
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-ing">
                <input name="ingredients[]" placeholder="Напишите ингредиент">
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-ing">
                <input name="ingredients[]" placeholder="Напишите ингредиент">
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
             </div>
        </div>
        <div id="js-add-ing" class="lara-add-step">+ ингредиент</div>

        <div id="js-steps">
            <div class="add-step">
                <textarea name="steps[]" class="lara-textarea-small" placeholder="Напишите шаг рецепта"></textarea>
                <div class="step-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-step">
                <textarea name="steps[]" class="lara-textarea-small" placeholder="Напишите шаг рецепта"></textarea>
                <div class="step-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-step">
                <textarea name="steps[]" class="lara-textarea-small" placeholder="Напишите шаг рецепта"></textarea>
                <div class="step-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
        </div>
        <div id="js-add-step" class="lara-add-step">+ шаг</div>

        <label for="ingredients">Выберите продукцию АС АН:</label>
        <select class="lara-select" name="product">
           	<option value="1">Длиннозерный рис пропаренный</option>
            <option value="2">Макаронные изделия из муки твердой пшеницы</option>
            <option value="3">Изделия макаронные из пшеничной муки</option>
            <option value="4">Гречневая крупа</option>
            <option value="5">Сгущенное молоко вареное с сахаром Лакомка</option>
            <option value="6">Молоко цельное сгущенное с сахаром</option>
            <option value="7">Пшеничная мука высший сорт</option>
        </select>

        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection