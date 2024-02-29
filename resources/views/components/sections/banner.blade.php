<!-- Hero section -->
<div class="section-fullscreen bg-image bg-position vw-100 d-none-sm" data-bg-src="{{ asset($img) }}">
    <div class="@if(App::currentLocale() == "es") banner-width-es @else banner-flex @endif">
        <div class="left-bar"></div>
        <div class="flex-column">
            <h1 class="banner-title {{ $text_color }}">{{ $title }}<span class="blue-dot">.</span></h1>
            <p class="banner-subtitle {{ $text_color }}">
                {{ $subtitle }}
            </p>
        </div>
    </div>
</div>
<!-- end Hero section -->