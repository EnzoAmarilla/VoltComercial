<footer>
    <div class="section bg-dark-lighter">
        <div class="container">
            <div class="row align-items-center justify-content-around col-spacing-30">
                <div class="col-lg-6 col-md-6 text-left">
                    <h3 class="">Let us help you going solar <span class="yellow-text">!</span></h3>
                    <h5>Contact us:</h5>
                    <ul class="list-inline margin-top-20 margin-bottom-20">
                        <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit text-dark" data-toggle="modal" data-target="#modal-form-contact">Work With Us</button></li>
                        <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit text-dark" data-toggle="modal" data-target="#modal-form-contact">Request for a quote</button></li>
                        <li><button class="button button-sm button-outline-yellow border-radius-2px text-inherit text-dark" data-toggle="modal" data-target="#modal-form-contact">Book a consultation</button></li>
                        {{-- <li><a target="_blank" href="https://wa.me/13052046134"><button class="button button-sm button-outline-footer border-radius-2px text-inherit">@lang('translations.Chat with us')</button></a></li> --}}
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 text-left pl-100">
                    <div class="d-flex align-items-center">
                        <img class="mr-3" src="{{ asset('images/Icons/Building.png') }}" alt="">
                        <h3 class="m-0">Headquarters:</h3>
                    </div>
                    <p class="margin-top-20">@lang('translations.Phone'): +1 (786) 321 5117</p>
                    <p class="margin-top-10">@lang('translations.New customers'): info@voltsolarenergy.com</p>
                    <p class="margin-top-10">@lang('translations.Customer Support'): support@voltsolarenergy.com</p>
                    <p class="margin-top-10">@lang('translations.Address'): 801 Brickell Ave. Suite 817 Miami, FL 33131</p>
                    {{-- <ul class="list-inline margin-top-20">
                        <li><a href="https://www.facebook.com/voltenrgy" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/voltsolarenergy/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/volt-solar-energy/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/VoltSolarEnergy" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul> --}}
                    <div class="d-flex align-items-center mt-5">
                        <img class="mr-3" src="{{ asset('images/Icons/Gear.png') }}" alt="">
                        <h3 class="m-0">Engineering & Support Services</h3>
                    </div>
                    <p class="margin-top-20">@lang('translations.Phone'): +1 (786) 321 5117</p>
                    <p class="margin-top-10">@lang('translations.Address'): 801 Brickell Ave. Suite 817 Miami, FL 33131</p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <div class="section-xs bg-dark-lighter">
        <div class="container text-center">
            <p>@lang('translations.All Rights reserved Volt © :year', ['year' => now()->format('Y')])</p>
        </div><!-- end container -->
    </div>
</footer>
