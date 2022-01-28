@php
$title = 'About';
@endphp
@extends('layouts.fontend')
@section('main_content')

    <div class="container" style="padding-top: 140px;">
        {!! $about->content !!}
    </div>

@endsection
