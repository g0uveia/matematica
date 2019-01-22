@extends('template.default')

@section('content')
    <div class="math-page-container">
        <div class="container py-5">
            @yield('page_title')
            <div class="row bg-light py-3">
                <div class="col-md-8">
                    <div class="videoWrapper">
                        <iframe width="560" height="315" src="@yield('video_src')" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-4 d-flex align-items-center">
                    <div class="p-3">
                        <h2 class="mb-4">@yield('video_titulo')</h2>
                        <p>@yield('video_descricao')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
