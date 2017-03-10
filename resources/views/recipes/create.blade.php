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

        <div id="js-add-ing" class="lara-add-step">+ ингредиент</div>
        
        <div id="js-ings">
            <div class="add-ing">
                <textarea name="ingredients[]" class="lara-textarea-small" placeholder="Напишите ингредиент"></textarea>
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-ing">
                <textarea name="ingredients[]" class="lara-textarea-small" placeholder="Напишите ингредиент"></textarea>
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
            </div>
            <div class="add-ing">
                <textarea name="ingredients[]" class="lara-textarea-small" placeholder="Напишите ингредиент"></textarea>
                <div class="ing-delete"><img src="/assets/img/new-delete.png" alt=""></div>
             </div>
        </div>

        <div id="js-add-step" class="lara-add-step">Добавить шаг</div>
        
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

        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection