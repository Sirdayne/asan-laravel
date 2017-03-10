@extends('layouts.main')

@section('content')

    <header class="header-partners">
        <h1>Редактирование рецептов</h1>
    </header>

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif

    <section class="lara-section">
    <div class="wrap">

        <a href="/recipes/create"><div class="lara-admin lara-admin-block">Добавить рецепт</div></a>

        @foreach($recipes as $recipe)
            <div class="admin-recipe-box">
                <div class="admin-recipe-img">
                    <img src="/images/{{ $recipe->image }}" alt="">
                </div>
                <div class="admin-recipe-title">{{ $recipe->title }}</div>

                <div class="admin-recipe-edit">
                    <a href="/recipes/edit/{{ $recipe->id }}"><button class="recipe-btn admin-recipe-btn">редактировать</button></a>
                    <a href="/recipes/destroy/{{ $recipe->id }}"><button class="recipe-btn admin-recipe-btn">удалить</button></a>
                </div>
            </div>
        @endforeach 

    </div>
    </section>


@endsection