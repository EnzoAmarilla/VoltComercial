@extends('layouts.master')

@section('title') Our Solutions @endsection

@section('content')

    @include('components.sections.banner-section',
    [
        'imagen' => 'images/Our Solutions/banner.png',
        'titulo' => 'Our Solutions',
    ])

    @include('components.sections.our-value', 
    [
        'img1' => 'images/Our Solutions/card1.png',
        'img2' => 'images/Our Solutions/card2.png',
        'img3' => 'images/Our Solutions/card3.png',
        'img4' => 'images/Our Solutions/card4.png',
        'img5' => 'images/Our Solutions/card5.png',
        'img6' => 'images/Our Solutions/card6.png',
        'vector' => 'images/Our Solutions/vector.png',
    ])

    {{-- @include('components.sections.our-dna', 
    [
        'title' => 'Our DNA',
        'gchat' => 'images/Icons/gchat.png',
        'img' => 'images/About/dna.png',
    ]) --}}

    {{-- @include('components.sections.certified', 
    [
        'certimg' => 'images/About/certimg.png',
        'txt' => 'Internationally recognized among the Top 100 energy start-ups, earning the prestigious World Energy Council SET Award in 2020.',
    ]) --}}

    {{-- @include('components.sections.certified-2', 
    [
        'txt' => "BBB Accreditation gives our customers confidence that they're dealing with an ethical and vetted business.",
        'certimg2' => 'images/About/certimg2.png',
    ]) --}}

    @include('components.sections.banner-footer-1',
    [
        'imagen' => 'images/Footer/landing-banner-footer.png', 
        'titulo' => __("translations.banner-footer-title-index"), 
        'subtitulo' => __("translations.banner-footer-text-index"), 
        'btn_texto' => __("translations.banner-footer-button-index"),
        'form' => true,
    ])

@endsection

@section('script')
    @if(session('status'))
    <script>
        $(document).ready(function () {
            $('#modal-form-result').modal('show');
        });
    </script>
    @endif
@endsection