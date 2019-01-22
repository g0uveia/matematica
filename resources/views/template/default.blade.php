@extends('template')

@section('body')
    @include('include.navbar')
    @yield('content')
    @include('include.footer')
@endsection
