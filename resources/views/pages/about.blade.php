@extends('template.template')
{{-- Buat Judulnya --}}
@section('title-header')
    <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
    @endsection
    {{-- Tulisan dibawah judul header --}}
    @section('sub-title-header')
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    @endsection

    {{-- Isi Content --}}
    @section('content')
        @include('content.content-about')
        @include('content.content-feature')
    @endsection
