<div class="section-xs">
    <div class="container-fluid p-0">
        <div class="d-flex flex-wrap align-items-center justify-content-{{ $justify }}">
            <div class="col-lg-6 col-md-12 img-center-md text-center p-0-img {{ $order }} {{ $m0auto }} ">
                <img class="d-none d-sm-block lazyload {{ $mleft }} {{ $mright }} {{ $img0auto }}" data-src="{{ asset($imagen) }}" alt="">
                {{-- <img class="d-block d-sm-none m-0-auto lazyload" data-src="{{ asset($imagen_sm) }}" alt=""> --}}
            </div>
            <div class="col-lg-5 col-md-8 col-sm-8 hero-lead-div-text hero-div-flex">
                {{-- <div><img src="{{ asset($icon_text) }}" alt=""></div> --}}
                <h4 class="title-hero-lead white-space h4-title-hero-lead">
                    <img class="mb-3" src="{{ asset($icon_text) }}" alt="">
                    {{ $hero_lead_titulo }}
                </h4>
                <ul class="items-flex-lead">
                    @foreach ($hero_lead_items as $item)
                        <li class="items-hero-lead"><img class="margin-right-10 lazyload" data-src="{{asset('images/Icons/tick.png')}}" alt=""><p>{{ $item }}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>