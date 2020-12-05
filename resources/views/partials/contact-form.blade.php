<div class="container-fluid mb-5" id="contact-form-section">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center my-5">Find Out More About Vivid</h3>

            <form>
                @csrf
                <div class="container">
                    <div class="row px-5">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name*</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name*</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email address*</label>
                            <input type="email" class="form-control" id="email" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid Email address is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="mobileNumber">Mobile number*</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid mobile number is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="acceptTC">*Mandatory field</label>
                            <input type="checkbox" class="form-control d-inline-block" id="acceptTC" required="">
                            <span>
                             I have read and agree to the storage and use of my data in
                             accordance with our privacy policy.
                            </span>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="submit" value="Submit" class="btn btn-md btn-primary rounded-sm rounded-sm   btn-block">
                        </div>


                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
