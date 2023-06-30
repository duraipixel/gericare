@extends('website.layout.welcome')

@section('content')
    <section class="inner-banner p-0">

        <div class="">
            <img src="{{ asset('/public/website/assets/images/banners/inner-banner-2.jpg') }}" alt="" class="w-100" />
        </div>

        <div class="banner-liners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Contact us today for a better tomorrow.
                            <span>We have the proven ability <br>
                                in improving the elderly lives.</span>
                        </h4>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li> > </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="dark-gray-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="contact-bg">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="orange-bg shadow pad-30">
                                    <h2 class="h3 text-white mar-bot-20">Contact Info</h2>
                                    <p class="contact-icons"><img
                                            src="{{ asset('/public/website/assets/images/contact-icon1.png') }}"
                                            alt="" class="" /><strong>Geri Care Hospital</strong>
                                        No.8, Dr. Nair Road,<br> Behind Vani Mahal,<br> T.Nagar, Chennai - 600 017.</p>
                                    <p class="contact-icons"><img
                                            src="{{ asset('/public/website/assets/images/contact-icon2.png') }}"
                                            alt="" class="" />+91 44 4061 4061</p>
                                    <p class="contact-icons"><img
                                            src="{{ asset('/public/website/assets/images/contact-icon4.png') }}"
                                            alt="" class="" /><a href="mailto:enquiry@gericare.in"
                                            target="_blank" class="text-white">enquiry@gericare.in</a></p>
                                    <ul class="contact-socials">
                                        <li>
                                            <a class="facebook" href="" target="_blank"> <i class="fa fa-facebook"
                                                    aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="" target="_blank"> <i class="fa fa-twitter"
                                                    aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="" target="_blank"> <i class="fa fa-instagram"
                                                    aria-hidden="true"></i> </a>
                                        </li>
                                        <li>
                                            <a class="youtube" href="" target="_blank"> <i class="fa fa-youtube-play"
                                                    aria-hidden="true"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">
                                <div class="pad-30">
                                    <h2 class="h3 mar-bot-20">Send us a Message</h2>
                                    <form id="contact_form">
										@csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <label class="text-dark">Name (required)<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="name" id="name" value=""
                                                    class="form-control" required />
                                            </div>
											<input type="hidden" name="from" value="contact">
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <label class="text-dark">
                                                    Phone (required)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="tel" name="mobile_no" id="mobile_no" value=""
                                                    class="form-control price" maxlength="10" required />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <label class="text-dark">Email (required)
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" name="email" id="aemail" value=""
                                                    class="form-control" required />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <label class="text-dark">Subject (required)<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="subject" id="subject" value=""
                                                    class="form-control" required />
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <label class="text-dark">Message</label>
                                                <textarea class="form-control" name="message" required></textarea>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-data cnt text-start clearfix">
													<input type="submit"
                                                        name="submit" id="submit-btn" value="Submit"> </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 margin-top-50">

                    <div class="serveces-doctrs text-center">

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt=""
                                class="" />
                            <h4> Geri Care Assisted Living </h4>
                            <p> AKS RESIDENCY, Balamurugan Garden,<br> 1st main road, Thoraipakkam,<br> Chennai - 600 097
                            </p>
                            <a href=""> Locate Us <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                    class="" /></a>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt=""
                                class="" />
                            <h4> Geri Care Consultation </h4>
                            <p> 21, 1st Avenue,<br> Indira Nagar, <br>Adyar, Chennai - 600 020 </p>
                            <a href=""> Locate Us <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                    class="" /></a>
                        </div>

                        <div class="servce">
                            <img src="{{ asset('/public/website/assets/images/icon-2.png') }}" alt=""
                                class="" />
                            <h4> Geri Home Care </h4>
                            <p> 21, 1st Avenue,<br> Indira Nagar, <br>Adyar, Chennai - 600 020 </p>
                            <a href=""> Locate Us <img
                                    src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                    class="" /></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="p-0">
        <iframe class="orange-bg px-0"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31100.559364997906!2d80.254106!3d12.999337!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267853522f365%3A0x1dc3e7d7a2a95d9!2sGeri%20Care%20%7C%20Home%20Care%20%26%20Consultation!5e0!3m2!1sen!2sin!4v1685613981219!5m2!1sen!2sin"
            style="border:0; height: 500px;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
@section('addon_script')
    <script>
         
        $(".price").keypress(function(e) {
            if (String.fromCharCode(e.keyCode).match(/[^.0-9]/g)) return false;
        });
        $('#contact_form').submit(function() {
            event.preventDefault();
            var formData = $('#contact_form').serialize();
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
                        $('#contact_form')[0].reset();
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
