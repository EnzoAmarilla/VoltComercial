@extends('layouts.master')

@section('title') Volt Comercial - About Us @endsection

@section('content')

    @include('components.sections.banner-section',
    [
        'imagen' => 'images/About/about-banner.png',
        'titulo' => 'About Us',
    ])

    @include('components.sections.our-story', 
    [
        'title' => 'Our Story',
        'lg_text' => 'Started back in 2015 in Argentina, then launched business in Chile, Uruguay, Panama, Colombia and Costa Rica.

            We opened operations in the United States in 2019, with offices in Miami ( Brickell and Doral )
            Initially focused in Residential Solar, we installed more than 600 projects in Florida.

            After performing Commercial Solar in LatinAmerica, and having installed some projects in the United States...

            In 2023, we raised a capital round and to expand our Commercial and Industrial Division to cover the country nationwide.',
        'team_img' => 'images/About/team.png',
    ])

    @include('components.sections.our-presence', 
    [
        'map' => 'images/About/mapa.png',
        'icon1' => 'images/Icons/location.png',
        'icon2' => 'images/Icons/solar.png',
    ])

    @include('components.sections.our-dna', 
    [
        'title' => 'Our DNA',
        'gchat' => 'images/Icons/gchat.png',
        'img' => 'images/About/dna.png',
    ])

    @include('components.sections.certified', 
    [
        'certimg' => 'images/About/certimg.png',
        'txt' => 'Internationally recognized among the Top 100 energy start-ups, earning the prestigious World Energy Council SET Award in 2020.',
    ])

    @include('components.sections.certified-2', 
    [
        'txt' => "BBB Accreditation gives our customers confidence that they're dealing with an ethical and vetted business.",
        'certimg2' => 'images/About/certimg2.png',
    ])

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