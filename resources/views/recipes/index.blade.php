@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif

    <section class="recipes">
        <h1>РЕЦЕПТЫ</h1>
        <!-- recipe-green recipe-blue recipe-orange -->
        @foreach($recipes as $recipe)
            <div class="recipe-box">
                <div class="recipe-title">{{ $recipe->title }}</div>
                <div class="recipe-img">
                    <img src="/images/{{ $recipe->image }}" alt="">
                </div>
                <div class="recipe-btn-row">
                    <a href="/recipes/{{ $recipe->id }}"><button class="recipe-btn">посмотреть рецепт</button></a>
                </div>
            </div>
        @endforeach
     
        {{--@include('pagination.default', ['paginator' => $recipes->appends(Request::all()),])--}}

    </section>

@endsection