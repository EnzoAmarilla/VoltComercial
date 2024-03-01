@extends('layouts.master')

@section('title') Volt Comercial - Home @endsection

@section('content')

    @include('components.sections.banner',
    [
        'img' => 'images/Main/landing-img-1.png', 
    ])

    @include('components.sections.hero-text-2', 
    [
        'hero_titulo' => __("translations.hero-text-title-index"),
        'hero_texto' => __("translations.hero-text-description-index")
    ])

    @include('components.sections.hero-lead', 
	[
		'imagen' => 'images/Main/hero-lead-1.png',
		'icon_text' => 'images/Icons/Vector.png',
		'hero_lead_titulo' => __("translations.title-hero-lead-index"), 
		'hero_lead_items' => 
		[
			__("translations.item-hero-lead-index-1"),
			__("translations.item-hero-lead-index-2"),
			__("translations.item-hero-lead-index-3"),
			__("translations.item-hero-lead-index-4"),
			__("translations.item-hero-lead-index-5"),
			__("translations.item-hero-lead-index-6")
		],
		'justify' => 'between',
		'order' => '',
		'm0auto' => '',
		'mleft' => '',
		'mright' => 'mr-lead-img',
		'img0auto' => '',
	])

    @include('components.sections.banner-section', 
    [
        'imagen' => 'images/Main/banner-section-img-1.png', 
        'titulo' => __("translations.banner-section-title-index-1"), 
    ])

    @include('components.sections.banner-section', 
    [
        'imagen' => 'images/Main/banner-section-img-2.png', 
        'titulo' => __("translations.banner-section-title-index-2"), 
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