<section class="patron-say">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading text-center">
                    <h2>Looking for a Consultation With Us</h2>
                </div>
                <div class="rechus-frms">
                    <form id="consult_form">
                        @csrf
                        <input type="hidden" name="from" value="homepage">
                        <div class="frm-fields row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="form-data cnt clearfix">
                                    <input type="text" placeholder="Name" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-data cnt clearfix">
                                    <input type="text" placeholder="Email" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-data cnt clearfix">
                                    <input type="text" placeholder="Phone" class="price" id="mobile_no"
                                        name="mobile_no" required maxlength="10">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="form-data cnt clearfix">
                                    <select class="form-control " id="service" name="service">
                                        <option value="">Select Your Service</option>
                                        <option value="Service-1">Service-1</option>
                                        <option value="Service-2">Service-2</option>
                                        <option value="Service-3">Service-3</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="form-data cnt clearfix">
                                    <textarea placeholder="Your Message" name="message" id="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="form-data cnt clearfix">
                                    <input type="submit" name="submit" id="save-btn" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 dbl-reds">

                <div class="common-heading text-center">
                    <h2>What Our Patrons Say</h2>
                </div>

                <div id="testimonailas" class="carousel slide text-center" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="0" class="active"><img
                                src="{{ asset('/public/website/assets/images/fem.png') }}" alt=""
                                class="d-block"></button>
                        <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="1"><img
                                src="{{ asset('/public/website/assets/images/mal.png') }}" alt=""
                                class="d-block"></button>
                        <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="2"><img
                                src="{{ asset('/public/website/assets/images/fem.png') }}" alt=""
                                class="d-block"></button>
                        <button type="button" data-bs-target="#testimonailas" data-bs-slide-to="3"><img
                                src="{{ asset('/public/website/assets/images/mal.png') }}" alt=""
                                class="d-block"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonal-details">
                                <p>"I cannot express enough how grateful I am for the care I received at this geriatric
                                    hospital. The staff was incredibly attentive and caring, always making sure that I
                                    was comfortable and had everything I needed. The doctors and nurses were experts in
                                    their field, and I felt confident that I was receiving the best possible care. The
                                    personalized approach to care made me feel valued as an individual, and I appreciate
                                    everything the hospital did for me during my stay.”</p>
                                <div class="testimona-nme">
                                    <h4>Mrs. Nalini K</h4>
                                    <span>Retd. Professor</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonal-details">
                                <p>"I cannot express enough how grateful I am for the care I received at this geriatric
                                    hospital. The staff was incredibly attentive and caring, always making sure that I
                                    was comfortable and had everything I needed. The doctors and nurses were experts in
                                    their field, and I felt confident that I was receiving the best possible care. The
                                    personalized approach to care made me feel valued as an individual, and I appreciate
                                    everything the hospital did for me during my stay.”</p>
                                <div class="testimona-nme">
                                    <h4>Mrs. Nalini K</h4>
                                    <span>Retd. Professor</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonal-details">
                                <p>"I cannot express enough how grateful I am for the care I received at this geriatric
                                    hospital. The staff was incredibly attentive and caring, always making sure that I
                                    was comfortable and had everything I needed. The doctors and nurses were experts in
                                    their field, and I felt confident that I was receiving the best possible care. The
                                    personalized approach to care made me feel valued as an individual, and I appreciate
                                    everything the hospital did for me during my stay.”</p>
                                <div class="testimona-nme">
                                    <h4>Mrs. Nalini K</h4>
                                    <span>Retd. Professor</span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonal-details">
                                <p>"I cannot express enough how grateful I am for the care I received at this geriatric
                                    hospital. The staff was incredibly attentive and caring, always making sure that I
                                    was comfortable and had everything I needed. The doctors and nurses were experts in
                                    their field, and I felt confident that I was receiving the best possible care. The
                                    personalized approach to care made me feel valued as an individual, and I appreciate
                                    everything the hospital did for me during my stay.”</p>
                                <div class="testimona-nme">
                                    <h4>Mrs. Nalini K</h4>
                                    <span>Retd. Professor</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
@section('addon_script')
    <script>
         
        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });
        $('#consult_form').submit(function() {
            event.preventDefault();
            var formData = $('#consult_form').serialize();
            $('#save-btn').prop('disabled', 'true');

            $.ajax({
                url: "{{ route('consultant.form.submit') }}",
                type: 'POST',
                data: formData,
                beforeSend: function() {
                },
                success: function(res) {

                    $('#save-btn').prop('disabled', 'false');
                    $("#save-btn").attr("disabled", false);

                    if (res.error == 0) {
                        toastr.success('Success', res.message);
                        $('#consult_form')[0].reset();
                    } else {
                        if (res.message) {

                            toastr.error("Error", res.message);

                        }
                    }
                }
            })
        })
    </script>
@endsection
