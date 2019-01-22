@extends('template.default')

@section('title')
    Videoaulas
@endsection

@section('content')
    <div class="math-page-container">
        <div class="container py-5">
            <h2 class="mb-4">Videoaulas</h2>
            <div class="row bg-light p-3 py-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-0">
                        <img src="{{asset('img/elipse.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Geometria Analítica - Elipse</h5>
                            <p class="card-text">Estudo da Geometria Analítica na elipse</p>
                            <a href="{{route('video', 1) }}" class="btn btn-success">Assistir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-0">
                        <img src="{{asset('img/circunferencia.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Geometria Analítica - Circunferencia</h5>
                            <p class="card-text">Estudo da Geometria Analítica na circunferencia</p>
                            <a href="{{route('video', 2) }}" class="btn btn-success">Assitir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-0">
                        <img src="{{asset('img/hiperbole.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Geometria Analítica - Hipérbole</h5>
                            <p class="card-text">Estudo da Geometria Analítica na hipérbole</p>
                            <a href="{{route('video', 4) }}" class="btn btn-success">Assitir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-0">
                        <img src="{{asset('img/elipse.jpg')}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Geometria Analítica - Parábola</h5>
                            <p class="card-text">Estudo da Geometria Analítica na parábola</p>
                            <a href="{{route('video', 3) }}" class="btn btn-success">Assitir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
