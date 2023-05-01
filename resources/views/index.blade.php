@extends('layouts.main-layout', ['title' => env('APP_NAME')])

@section('content')
    @include('includes.start')
    @include('includes.questions')
    @include('includes.about')
    @include('includes.how')
{{--    @include('includes.callback')--}}
    @include('includes.main-services')
    @include('includes.full-price')
    @include('includes.blog')
@endsection
