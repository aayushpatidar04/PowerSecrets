@extends('index-main')

@section('title')
    <title>{{ $blog->title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keywords }}">
@endsection
@section('csscontent')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 m-5">
                    <img src="{{ asset($blog->image) }}" class="rounded" alt="">
                    <div class="p-3 mt-3">
                        <div class="d-flex gap-5">
                            <p class="py-2 px-3 rounded-pill text-primary" style="background: #DBEAFE;">
                                <b>{{ $blog->category }}</b>
                            </p>
                            <p class="py-2">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                            </p>
                        </div>
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->short_description }}</p>
                        <div>
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscontent')
@endsection
