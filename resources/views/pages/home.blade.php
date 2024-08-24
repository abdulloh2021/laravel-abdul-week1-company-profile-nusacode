@extends('template.template-home')
{{-- Buat Judulnya --}}
@section('title-header')
    <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">PT Abdul Sejahtera Indonesia
    </h1>
@endsection
{{-- Tulisan dibawah judul header --}}
@section('sub-title-header')
    <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">Win new customers with the #1 email
        marketing and automations brand* that recommends ways to get more opens, clicks, and sales.
    </p>
@endsection
@section('content')
    @include('content.content-about')
    @include('content.content-feature')
    @include('content.content-service')
    @include('content.content-testimonial')
@endsection
