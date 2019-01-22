@extends('template.quiz')

@include('include.navbar')

@section('content')
    <div class="d-flex justify-content-center align-items-center math-quiz-box">
        <div class="text-center d-flex flex-column justify-content-between col-md-6 align-items-center">
            <div>
                <h1 class="mb-2">@yield('quiz.title')</h1>
                <span class="d-inline-block my-3">
                    <span class="text-muted">Duração: @yield('quiz.duracao') questões</span><br><br>
                    @yield('quiz.descricao')
                </span>
                <div>
                    <a class="btn btn-lg btn-success mt-4" href="@yield('quiz.link')">Iniciar Quiz</a>
                </div>
            </div>
        </div>
    </div>
@endsection
