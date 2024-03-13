@extends('layouts.master')

@section('title') Volt Comercial - Home @endsection

@section('content')

    @include('components.sections.banner', ['img' => 'images/Main/landing-img-1.png'])

    @include('components.sections.hero-text-2', [])

    @include('components.sections.hero-lead', ['imagen' => 'images/Main/hero-lead-1.png'])

    @include('components.sections.hero-lead-2', ['imagen' => 'images/Main/hero-lead-2.png'])

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