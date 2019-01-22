@extends('template.quiz.home')

@section('title')
    Lista de Exercícios
@endsection

@section('quiz.duracao')
    10
@endsection

@section('quiz.title')
    Lista de Exercícios
@endsection

@section('quiz.descricao')
    Teste seus conhecimentos resolvendo essas questões de Geometria Analítica
@endsection

@section('quiz.link')
    {{route('lista.quiz')}}
@endsection
