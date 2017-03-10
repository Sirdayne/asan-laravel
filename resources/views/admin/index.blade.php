@extends('layouts.main')

@section('content')

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


@endsection