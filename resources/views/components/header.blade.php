<div class="header absolute-light sticky">
    <div class="container-header">
        <!-- Logo -->
        <div class="header-logo">
            <a href="/">
                <img data-src="{{ asset('/images/Logos/Logo.png') }}" alt="" class="lazyload">
            </a>   
        </div>
        <!-- Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item menu-header-mobile">
                    <a class="nav-link" href="#">@lang('translations.Menu')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/about-us">@lang('translations.About Us')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/why-going-solar">Why going solar</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/our-solutions">Our solutions</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/">Our projects</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="#" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-work-with-us">Work with us</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="#" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-form-contact">Contact Us</a>
                </li>
                {{-- <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="#">Contact</a>
                    <ul class="nav-dropdown">
                        <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Book a consultation</a></li>
                        <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Request for a quote</a></li>
                        <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-form-contact">Contact Us</a></li>
                    </ul>
                </li> --}}
                {{-- <div class="mobile-buy-now-my-voit">
                    <li class="nav-item">
                        <button class="nav-link yellow-text" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-form-buy-now">@lang('translations.Buy Now')</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://my.voltsolarenergy.com">My Volt</a>
                    </li>
                </div> --}}
            </ul>
        </div>

        <!-- Menu Extra -->
        {{-- <div class="header-menu-extra">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link button-circle button-circle-white-3" href="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}">
                        <form action="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}" method="GET">
                            <button type="submit" class="text-center text-white">
                                {{ App::currentLocale() == "en" ? "ES" : "EN" }}
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div> --}}
        <!-- Menu Toggle -->
        <button class="header-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<script>
    function modal_doble_active(){
        console.log("entre en active")
        $("#modal_doble").val(1);
    }

    function modal_doble_inactive(){
        console.log("entre en inactive")
        $("#modal_doble").val(0);
    }
</script>