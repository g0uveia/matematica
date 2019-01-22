@extends('template.quiz.home')

@section('title')
    Simulado ENEM
@endsection

@section('quiz.duracao')
    20
@endsection

@section('quiz.title')
    Simulado do Enem
@endsection

@section('quiz.descricao')
    Descubra o quanto você se daria bem no exame respondendo essas questões selecionadas
    de outras edições do ENEM e de outros concursos.
@endsection

@section('quiz.link')
    {{route('enem.quiz')}}
@endsection
