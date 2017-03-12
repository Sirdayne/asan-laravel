@extends('layouts.main')

@section('content')

    @if(auth()->user())
        <header class="header-partners">
            <h1>Административная панель</h1>
        </header>

        <section class="lara-section">
        <div class="wrap">

            <a href="/recipes/create"><div class="lara-admin">Добавить рецепт</div></a>
            <a href="/admin/recipes/"><div class="lara-admin">Изменить/удалить рецепты</div></a>
            <a href="/logout"><div class="lara-admin">Выйти</div></a>

        </div>
        </section>
    @else
        <header class="header-partners">
            <h1>404</h1>
        </header>

        <section class="lara-section">
        <div class="wrap">

            <div class="lara-row">Такой страницы тут нет</div>
            <div class="lara-row-big"><a href="/">Вернуться на главную</a></div>

        </div>
        </section>
    @endif
    
@endsection