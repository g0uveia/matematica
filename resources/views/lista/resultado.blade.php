@extends('template.quiz.home')

@section('content')
    <div class="d-flex justify-content-center align-items-center math-quiz-box">
        <div class="text-center d-flex flex-column justify-content-between col-md-6 align-items-center">
            <div>
                <h1 class="mb-3">Lista de Exercícios</h1>
                <h5 class="mb-4">Você acertou {{$num_acertos}} de {{$num_questoes}} questões</h5>
                <a class="btn btn-light" href="{{route('lista')}}">Tentar novamente</a>
                <a class="btn btn-success ml-3" href="{{route('index')}}">Estude e pratique mais</a>
            </div>
        </div>
    </div>
@endsection
