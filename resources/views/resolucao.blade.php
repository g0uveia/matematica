@extends('template.default')

@section('title')
    Resolução de Questões
@endsection

@section('content')
    <div class="math-page-container">
        <div class="container py-5">
            <h2 class="mb-4">Resolução de Questões</h2>
            <div class="p-3 py-4 bg-light">
                <div class="row  d-flex justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{asset('img/resolucao.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body" style="height: auto">
                                <h5 class="card-title mb-4">meHelpa - Questão 01</h5>
                                <a href="{{route('video', 5) }}" class="btn btn-success">Assitir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{asset('img/resolucao.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body" style="height: auto">
                                <h5 class="card-title mb-4">meHelpa - Questão 02</h5>
                                <a href="{{route('video', 6) }}" class="btn btn-success">Assitir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{asset('img/resolucao.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body" style="height: auto">
                                <h5 class="card-title mb-4">meHelpa - Questão 03</h5>
                                <a href="{{route('video', 7) }}" class="btn btn-success">Assitir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  d-flex justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img src="{{asset('img/resolucao.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body" style="height: auto">
                                <h5 class="card-title mb-4">meHelpa - Questão 04</h5>
                                <a href="{{route('video', 8) }}" class="btn btn-success">Assistir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <img src="{{asset('img/resolucao.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body" style="height: auto">
                            <h5 class="card-title mb-4">meHelpa - Questão 05</h5>
                            <a href="{{route('video', 9) }}" class="btn btn-success">Assitir</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
