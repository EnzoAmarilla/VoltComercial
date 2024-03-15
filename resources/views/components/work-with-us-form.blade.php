<!-- Modal Contact -->
<div class="modal modal-slide-up fade" id="modal-work-with-us" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="div-bg-form">
                <div class="w-100 d-flex justify-content-start align-items-start">
                    <button type="button" class="close text-white" onclick="modal_doble_inactive()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <h6 class="text-title-tv">Work with us<span class="yellow-text">!</span></h6>
                <p class="text-form-tv mt-4">You are also interested in fighting climate change? Drop off your contact information and resume and we will reach out to you if we find the perfect fit!</p>
                <p class="title-hero-grey mt-5">Introduce Yourself</p>
                <form action="/careers" method="POST" class="w-100 mt-3" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}">
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}">
                    </div>
                    <div class="mb-4">
                        <input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}">
                    </div>
                    <div class="container p-0">
                        <h6 class="text-white">Areas of Expertise:</h6>
                        <div class="row">
                            <div class="col-3 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxSolar" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Example</label>
                            </div>
                            <div class="col-3 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxBatteries" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Example</label>
                            </div> 
                            <div class="col-3 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxRoof" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Example</label>
                            </div>
                            <div class="col-3 checkbox-form-contact-interested">
                                <input type="checkbox" class="form-check-input" name="checkboxRoof" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Example</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxEvChargers" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">
                                    Example    
                                </label>
                            </div>
                            <div class="col-3 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxEnergyEfficiency" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">Example</label>
                            </div> 
                            <div class="col-3 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxAc&Heat" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">
                                    Example
                                </label>
                            </div>
                            <div class="col-3 checkbox-form-contact-interested justify-content-end">
                                <input type="checkbox" class="form-check-input" name="checkboxAc&Heat" id="exampleCheck1">
                                <label class="form-check-label text-center white-space" for="exampleCheck1">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="container p-0">
                        <h6 class="text-white">Studies:</h6>
                        <p class="text-form-tv text-left mb-1">If you don’t have university studies please write ¨none¨.</p>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="university" placeholder="University">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control bg-input-form border-radius-2px" name="other-degrees" placeholder="Other Degrees">
                        </div>
                    </div>
                    <h4 class="text-white-tv text-center">Resume/CV</h4>
                    <p class="text-form-tv">Upload either DOC, DOCX, HTML, PDF, or TXT file types (5MB max)</p>
                    {{-- Input file --}}
                    <div class="container mt-4 mb-5" 
                    style="border-radius: 2px; background: rgba(123, 121, 121, 0.60);">
                        <div class="row align-items-center justify-content-center" style="position: relative;">
                            <label for="fileInput" class="custom-file-input"></label>
                            <input type="file" id="fileInput" name="attach" style="position: absolute;" class="custom-file-input" accept=".doc,.docx,.html,.pdf,.txt">
                            <div class="input-container mt-3">
                                <img class="mb-2 mt-2 lazyload" data-src="images/Icons/upload.png" alt="">
                                <h3 class="text-white-tv input-h3 text-center-sm">Drop File Here</h3>
                                <h4 class="text-white-tv text-center-sm">or <span class="yellow-text">Select File</span></h4>
                            </div>
                            <input type="text" id="fileName" class="file-name" style="display: none" readonly>									  
                        </div>
                    </div>
                    {{-- End input file --}}
                    <p class="text-form-tv">By entering your email address and submitting your resume, you agree to our <a data-toggle="modal" data-target="#modal-privacy" href="#">Privacy Policy</a> statement and consent to be contacted.</p>
                    <div class="mb-4 mt-4 form-check">
                        <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">I agree<span class="yellow-color"> *</span></label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-font button-form">Submit now!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Contact -->