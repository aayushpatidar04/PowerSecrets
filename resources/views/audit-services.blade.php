@extends('index-main')

@section('title')
    <title>{{ $service->meta_title }}</title>
    <meta name="description" content="{{ $service->meta_description }}">
    <meta name="keywords" content="{{ $service->meta_keywords }}">
    {!! $service->json_data !!}
@endsection
@section('csscontent')
    
@endsection
@section('content')
    {!! $service->content !!}

    
@endsection
@section('jscontent')

@endsection