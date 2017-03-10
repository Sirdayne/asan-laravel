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

        @foreach($recipe->steps as $step)
            <textarea name="steps[]" class="lara-textarea-small" placeholder="Напишите шаг рецепта">{{ $step->body }}</textarea>
        @endforeach

        <button type="submit">Отправить</button>
    </form>

    </div>
    </section>


@endsection