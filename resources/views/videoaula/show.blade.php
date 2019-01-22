@extends('video')

@section('title')
    Assitir Vídeo
@endsection

@section('video_src')
    {{$video->src}}
@endsection

@section('video_titulo')
    {{$video->titulo}}
@endsection

@section('video_descricao')
    {{$video->descricao}}
@endsection
