@extends('template.default')

@section('title')
    Início
@endsection

@section('content')
    <div class="math-page-container">
        @include('index.sobre')
        <div class="container">
            @include('index.conteudos')
        </div>
    </div>
@endsection
