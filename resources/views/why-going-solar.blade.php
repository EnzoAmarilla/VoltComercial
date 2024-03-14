@extends('layouts.master')

@section('title') Volt Comercial - Why Going Solar @endsection

@section('content')

    @include('components.sections.banner-section',
    [
        'imagen' => 'images/WhyGoingSolar/why-going-solar-banner.png',
        'titulo' => 'Why Going Solar',
    ])

    <section class="container">
        <div class="section-md">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 class="title-hero-black">Many reasons to go solar<span class="yellow-text">!</span></h2>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="col-lg-6 col-md-12 img-center-md text-center p-0">
                <img class="d-none d-sm-block lazyload" data-src="{{ asset('images/WhyGoingSolar/economic-reasons.png') }}" alt="">
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8 hero-lead-div-text hero-div-flex">
                <div class="d-flex flex-column justify-content-center align-items-center col-lg-12">
                    <img class="mb-3 lazyload" data-src="{{ asset('images/Icons/Vector.png') }}" alt="">
                    <h2 class="title-hero-black">Economic Reasons</h2>
                </div>
                <ul class="items-flex-lead">
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Significant Financial Benefits.</h6>
                            <small>Most solar projects allow to save more than 50% energy costs for at least 25 years.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Current Tax Incentives</h6>
                            <small>US Government currently subsidizes big part of the solar investment. It might cover close to 50% of the total investment.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">ITC Tradeable or Carry fwd 22yr</h6>
                            <small>ITC can be absorbed in a long period from tax liabilities and can also be traded in a regulated market.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Green Marketing</h6>
                            <small>Most customers and consumers prefer to buy from green companies over the other.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Power Outage Protection</h6>
                            <small>Energy produced from solar arrays become a true alternative to power outage when weather hits the energy grid.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Future Regulations</h6>
                            <small>Going green before others will help companies be ready for current and future energy regulations.</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="section bg-grey">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="col-lg-6 col-md-8 col-sm-8 hero-lead-div-text hero-div-flex">
                <div class="d-flex flex-column justify-content-center align-items-center col-lg-12">
                    <img class="mb-3 lazyload" data-src="{{ asset('images/Icons/environmental-reasons-icon.png') }}" alt="">
                    <h2 class="title-hero-black">Environmental Reasons</h2>
                </div>
                <ul class="items-flex-lead">
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Fastest growing Energy Tech worldwide</h6>
                            <small>Projections indicate that solar would be more than 50% of the renewable sources electricity generation by 2050.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">50% of Total Energy Growth (supply)</h6>
                            <small>Solar power was more than half of all new power generations capacity installed in 2023.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Environmental Alignment</h6>
                            <small>Commitment to zero emissions is today a leading business decision but soon might be the only way.</small>
                        </div>
                    </li>
                    <li class="items-hero-lead align-items-start">
                        <img class="margin-right-10 lazyload" data-src="{{ asset('images/Icons/tick.png') }}" alt="">
                        <div>
                            <h6 class="font-weight-700 m-0">Social Responsibility</h6>
                            <small>Power is needed for every single process. This is why saving power is a top priority among environmental initiatives.</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 p-0 d-flex justify-content-end">
                <img class="d-none d-sm-block lazyload" data-src="{{ asset('images/WhyGoingSolar/environmental-reasons.png') }}" alt="">
            </div>
        </div>
    </div>

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