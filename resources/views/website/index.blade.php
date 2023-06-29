@extends('website.layout.welcome')
@section('content')
    <div id="homeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('/public/website/assets/images/banners/banner-image1.jpg') }}" alt=""
                    class="desky w-100 d-none d-lg-block" />
                <img src="{{ asset('/public/website/assets/images/banners/banner-image1-mobile.jpg') }}" alt=""
                    class="desky w-100 d-block d-lg-none" />

                <img src="{{ asset('/public/website/assets/images/banners/banner-image1-mobile-1.jpg') }}" alt=""
                    class="moby w-100 d-block d-lg-none" />
                <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                    <h1 class="text-blue">Come Home to Love, Warmth & Skilled Nursing Care</h1>
                    <span class="text-blue">India’s First Multi-speciality hospital for Senior Citizens.</span>
                    <a href="{{ url('/gericare-hospital/about-hospital') }}">Explore More</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('/public/website/assets/images/banners/banner-image2.jpg') }}" alt=""
                    class="w-100 d-none d-lg-block" />
                <img src="{{ asset('/public/website/assets/images/banners/banner-image2-mobile.jpg') }}" alt=""
                    class="w-100 d-block d-lg-none" />
                <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                    <h1 class="text-blue">Come Home to Love, Warmth & Skilled Nursing Care</h1>
                    <span class="text-blue">India’s First Multi-speciality hospital for Senior Citizens.</span>
                    <a href="{{ url('/gericare-assisted-living/about-assisted-living') }}">Explore More</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('/public/website/assets/images/banners/banner-image3.jpg') }}" alt=""
                    class="w-100 d-none d-lg-block" />
                <img src="{{ asset('/public/website/assets/images/banners/banner-image3-mobile.jpg') }}" alt=""
                    class="w-100 d-block d-lg-none" />
                <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                    <h1 class="text-blue">Come Home to Love, Warmth & Skilled Nursing Care</h1>
                    <span class="text-blue">India’s First Multi-speciality hospital for Senior Citizens.</span>
                    <a href="{{ url('/gericare-homecare/about-homecare') }}">Explore More</a>
                </div>
            </div>

        </div>
    </div>

    <section class="gericare-degree">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="common-heading text-center">
                        <h2>Care comes 360° at Geri Care</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
                    <div class="row full-deg m-0">

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-cnt">
                                <div class="logos-pot">
                                    <img src="{{ asset('/public/website/assets/images/logo-2.png') }}" alt="">
                                </div>
                                <span>Where internationally renowned Geriatricians take a multidisciplinary and passionate
                                    approach to the treatment and rehabilitation of seniors.</span>
                                <div class="red-mre">
                                    <a href="{{ url('/gericare-hospital/about-hospital') }}">Read More <img
                                            src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="">
                                </div></a>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-img">
                                <img src="{{ asset('/public/website/assets/images/degree-1.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12 mb-30">
                    <div class="row full-deg m-0">

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-cnt">
                                <div class="logos-pot">
                                    <img src="{{ asset('/public/website/assets/images/logo-1.png') }}" alt="">
                                </div>
                                <span>Enjoy a first-of-its-kind, 24 x 7 Assisted Living & Skilled Nursing Home services,
                                    under the expert care of Geriatricians.</span>
                                <div class="red-mre">
                                    <a href="{{ url('/gericare-assisted-living/about-assisted-living') }}">Read More <img
                                            src="{{ asset('/public/website/assets/images/red-mre.png') }}" alt="">
                                </div></a>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-img">
                                <img src="{{ asset('/public/website/assets/images/degree-2.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
                    <div class="row full-deg m-0">

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-cnt">
                                <div class="logos-pot">
                                    <img src="{{ asset('/public/website/assets/images/logo-4.png') }}" alt="">
                                </div>
                                <span>Get expert geriatric care in a peripheral clinic, and avoid long waiting hours in
                                    hospitals for minor issues.</span>
                                <div class="red-mre">
                                    <a href="{{ url('/gericare-clinics/about-clinics') }}">Read More <img
                                            src="{{ asset('/public/website/assets/images/red-mre.png') }}"
                                            alt="">
                                </div></a>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-img">
                                <img src="{{ asset('/public/website/assets/images/degree-3.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-mg-6 col-sm-12 col-xs-12">
                    <div class="row full-deg m-0">

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-cnt">
                                <div class="logos-pot">
                                    <img src="{{ asset('/public/website/assets/images/logo-3.png') }}" alt="">
                                </div>
                                <span>Get immediate and timely care from our experts in the comfort of your home. Book your
                                    appointment with our doctors for comprehensive consulting</span>
                                <div class="red-mre">
                                    <a href="{{ url('/gericare-homecare/about-homecare') }}">Read More <img
                                            src="{{ asset('/public/website/assets/images/red-mre.png') }}"
                                            alt="">
                                </div></a>
                            </div>
                        </div>

                        <div class="col-lg-6 p-0">
                            <div class="full-deg-img">
                                <img src="{{ asset('/public/website/assets/images/degree-4.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="expert-care">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="expert-cnt">
                        <div class="common-heading">
                            <h2>The Haven of Expert Care</h2>
                        </div>

                        <div class="common-para">
                            <p>Established by a team of qualified and compassionate Geriatricians, with more than three
                                decades of experience, Geri Care brings distinct and dedicated senior care services of
                                global standards within the confines of your own home. We serve the elders in your family
                                with utmost respect and compassion and give them the same kind of warmth and care that you
                                would.</p>
                        </div>

                        <div class="common-button drk">
                            <a href="">Know More</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="expert-img">
                        <img src="{{ asset('/public/website/assets/images/expert.jpg') }}" alt=""
                            class="w-100">
                        <div class="gertiarics">
                            <img src="{{ asset('/public/website/assets/images/hand.png') }}" alt=""
                                class="">
                            <span>3+ Decades of Experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="call-to-acttion">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <div class="primary-bg">
                        <div class="call-box text-end">
                            <h4>24x7 Ambulance Service Available</h4>
                            <div class="common-button">
                                <a href="tel:+914440614061"><img
                                        src="{{ asset('/public/website/assets/images/call.png') }}" alt=""
                                        class=""> +91 44 4061 4061</a>
                            </div>

                            <div class="ablan-ce">
                                <img src="{{ asset('/public/website/assets/images/ambulance.gif') }}" alt=""
                                    class="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="why-love pt-0">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="common-heading text-center">
                        <h2>Why People Love Us</h2>
                    </div>

                    <div class="vertical-tabdetails">

                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="1">
                                <button class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1"
                                    aria-selected="true">24x7 Availability</button>
                                <button class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2"
                                    aria-selected="false">Decades of Experience</button>
                                <button class="nav-link" id="v-pills-3-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3"
                                    aria-selected="false">360° Personalized Care</button>
                                <button class="nav-link" id="v-pills-4-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4"
                                    aria-selected="false">Expert Geriatricians</button>
                                <button class="nav-link" id="v-pills-5-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5"
                                    aria-selected="false">Best-in-Class Staff</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-1-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo.jpg') }}"
                                            alt="" class="w-100">
                                        <div class="skills-cnt">
                                            <span>Our geriatric hospital is open 24x7 with round-the-clock staff to provide
                                                care and support for elderly patients.</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                    aria-labelledby="v-pills-2-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo-1.jpg') }}"
                                            alt="" class="w-100">
                                        <div class="skills-cnt">
                                            <span>Our geriatric hospital is open 24x7 with round-the-clock staff to provide
                                                care and support for elderly patients.</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                    aria-labelledby="v-pills-3-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo-2.jpg') }}"
                                            alt="" class="w-100">
                                        <div class="skills-cnt">
                                            <span>Our geriatric hospital is open 24x7 with round-the-clock staff to provide
                                                care and support for elderly patients.</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                    aria-labelledby="v-pills-4-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo-3.jpg') }}"
                                            alt="" class="w-100">
                                        <div class="skills-cnt">
                                            <span>Our geriatric hospital is open 24x7 with round-the-clock staff to provide
                                                care and support for elderly patients.</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                    aria-labelledby="v-pills-5-tab">

                                    <div class="skills-img">
                                        <img src="{{ asset('/public/website/assets/images/hospitalo-4.jpg') }}"
                                            alt="" class="w-100">
                                        <div class="skills-cnt">
                                            <span>Our geriatric hospital is open 24x7 with round-the-clock staff to provide
                                                care and support for elderly patients.</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="dts-picx">
                                    <img src="{{ asset('/public/website/assets/images/dots.png') }}" alt=""
                                        class="w-100">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="kind-geriatric">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <div class="common-heading">
                        <h2>One of a Kind Geriatric Care</h2>
                    </div>
                    <div class="common-para">
                        <p>Introducing India's first-ever multi-specialty hospital designed exclusively for senior citizens,
                            offering a comprehensive range of specialized medical services tailored to meet the unique
                            healthcare needs of seniors.</p>
                    </div>

                    <div class="common-button drk">
                        <a href="{{ url('/gericare-hospital/about-hospital') }}">Explore Gericare Hospitals</a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="gentric-systems">

                        <ul>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-1.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Geriatric Cardiology</span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-2.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Geriatric Oncology </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-3.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Radiation Oncology </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-4.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Orthogeriatrics </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-5.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Gastroenterology </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-6.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Neurology </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-7.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Surgery </span>
                            </li>

                            <li>
                                <div class="geric-img">
                                    <img src="{{ asset('/public/website/assets/images/icn-8.png') }}" alt=""
                                        class="">
                                </div>
                                <span> Pulmonology </span>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="press-room text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading">
                        <h2>From Our Press Room</h2>
                    </div>

                    <div class="grps-stemp">

                        <div class="grp-str">
                            <div class="grp-img">
                                <img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt=""
                                    class="w-100">
                                <div class="post-dte">
                                    <h4>09<span>May</span></h4>
                                </div>
                            </div>
                            <div class="grp-cnt text-start">
                                <span>First-of-its-kind Assisted Living center lauched in RA Puram </span>
                            </div>
                        </div>

                        <div class="grp-str">
                            <div class="grp-img">
                                <img src="{{ asset('/public/website/assets/images/grp-2.jpg') }}" alt=""
                                    class="w-100">
                                <div class="post-dte">
                                    <h4>08<span>May</span></h4>
                                </div>
                            </div>
                            <div class="grp-cnt text-start">
                                <span>Specialised hospital for geriatric care launched in Chennai</span>
                            </div>
                        </div>

                        <div class="grp-str">
                            <div class="grp-img">
                                <img src="{{ asset('/public/website/assets/images/grp-3.jpg') }}" alt=""
                                    class="w-100">
                                <div class="post-dte">
                                    <h4>06<span>May</span></h4>
                                </div>
                            </div>
                            <div class="grp-cnt text-start">
                                <span>Inauguration Of Gericare Hospital Tnagar – Exclusively for senior citizens</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="gericare-services blog-datas">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Our Recent Blogs</h2>
                    </div>

                    <div class="blogs-strture">

                        <div class="main-srvcestr">
                            <img src="{{ asset('/public/website/assets/images/serv-1.jpg') }}" alt=""
                                class="" />
                            <div class="dmy">
                                Nov 04 2019
                            </div>
                            <div class="minrester">
                                <h4>India’s Leading Geriatricians Now in Your Parent’s Living Room!</h4>
                                <p>According to Indian Ageing Report 2017, 12 crore adults – almost the population of Japan
                                    – are above…</p>
                                <a href="https://www.gericare.in/blog/" target="_blank">Read More <img
                                        src="{{ asset('/public/website/assets/images/red.png') }}" alt=""
                                        class="" /></a>
                            </div>
                        </div>

                        <div class="main-srvcestr">
                            <img src="{{ asset('/public/website/assets/images/serv-1.jpg') }}" alt=""
                                class="" />
                            <div class="dmy">
                                Nov 04 2019
                            </div>
                            <div class="minrester">
                                <h4>Are you forgetting Dementia?</h4>
                                <p>This is the question that lingers around in the minds of young senior citizens. By young,
                                    I mean the population who have just got retired and entered the 60s. </p>
                                <a href="https://www.gericare.in/blog/" target="_blank">Read More <img
                                        src="{{ asset('/public/website/assets/images/red.png') }}" alt=""
                                        class="" /></a>
                            </div>
                        </div>

                        <div class="main-srvcestr">
                            <img src="{{ asset('/public/website/assets/images/serv-1.jpg') }}" alt=""
                                class="" />
                            <div class="dmy">
                                Nov 04 2019
                            </div>
                            <div class="minrester">
                                <h4>Feel at Home with India’s First Homecare run by Specialist Geriatricians</h4>
                                <p>We know what it feels like to leave aging parents home alone during an important official
                                    visit. We know that it takes years of trust ...</p>
                                <a href="https://www.gericare.in/blog/" target="_blank">Read More <img
                                        src="{{ asset('/public/website/assets/images/red.png') }}" alt=""
                                        class="" /></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    @include('website.bottomform')


    <section class="mobile-only-view call-acton">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <span>
                        24x7 Ambulance Service Available
                    </span>

                    <div class="common-button">
                        <a href=""><img src="{{ asset('/public/website/assets/images/call.png') }}"
                                alt="" class=""> +91 44 4061 4061</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="mobile-only-view people-lovers">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>Why People Love Us</h2>
                    </div>

                    <div class="text-center mb-20">
                        <img src="{{ asset('/public/website/assets/images/people-love.png') }}" alt=""
                            class="w-100">
                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="pept-cnt">
                        <h4><img src="{{ asset('/public/website/assets/images/dec-1.png') }}" alt=""
                                class=""> Decades of Experience </h4>
                        <p>Decades of experience bring the latest medical practices and technologies together for the best
                            possible care.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="pept-cnt">
                        <h4><img src="{{ asset('/public/website/assets/images/dec-2.png') }}" alt=""
                                class=""> 24x7 Availability </h4>
                        <p>Our geriatric hospital is open 24x7 with round-the-clock staff to provide care and support for
                            elderly patients.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="pept-cnt">
                        <h4><img src="{{ asset('/public/website/assets/images/dec-3.png') }}" alt=""
                                class=""> Expert Geriatricians</h4>
                        <p>Our team of expert geriatricians provides high-quality care to our patients.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="pept-cnt">
                        <h4><img src="{{ asset('/public/website/assets/images/dec-4.png') }}" alt=""
                                class=""> Best-in-Class Staff</h4>
                        <p>We employ the best-in-class staff dedicated to providing exceptional care to our patients.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mobile-only-view kind-geritaic-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="common-heading text-center">
                        <h2>One of a Kind Geriatric Care</h2>
                    </div>

                    <div class="common-para text-center">
                        <p>Introducing India's first-ever multi-specialty hospital designed exclusively for senior citizens,
                            offering a comprehensive range of specialized medical services tailored to meet the unique
                            healthcare needs of seniors.</p>
                    </div>

                </div>

                <div class="col-lg-12 text-center">

                    <div class="secdry-pra">
                        <h3>Our Departments</h3>
                    </div>

                    <div class="geriatic-care">

                        <div class="ger-care">
                            <img src="{{ asset('/public/website/assets/images/care-1.jpg') }}" alt=""
                                class="w-100">
                            <div class="ger-cntnt text-start">
                                <h4>Geriatric Cardiology</h4>
                                <p>This is a field of medicine that specializes on the treatment of heart diseases in older
                                    patients.</p>
                                <a href="">Read More <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                        class=""></a>
                            </div>
                        </div>

                        <div class="ger-care">
                            <img src="{{ asset('/public/website/assets/images/care-1.jpg') }}" alt=""
                                class="w-100">
                            <div class="ger-cntnt text-start">
                                <h4>Geriatric Cardiology</h4>
                                <p>This is a field of medicine that specializes on the treatment of heart diseases in older
                                    patients.</p>
                                <a href="">Read More <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                        class=""></a>
                            </div>
                        </div>

                        <div class="ger-care">
                            <img src="{{ asset('/public/website/assets/images/care-1.jpg') }}" alt=""
                                class="w-100">
                            <div class="ger-cntnt text-start">
                                <h4>Geriatric Cardiology</h4>
                                <p>This is a field of medicine that specializes on the treatment of heart diseases in older
                                    patients.</p>
                                <a href="">Read More <img
                                        src="{{ asset('/public/website/assets/images/small-arr.png') }}" alt=""
                                        class=""></a>
                            </div>
                        </div>

                    </div>

                    <div class="common-button drk">
                        <a href="">Explore Gericare Hospitals</a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="mobile-only-view press-rpomm">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="common-heading text-center">
                        <h2>From Our Press Room</h2>
                    </div>

                    <div class="press-detils">

                        <div class="press-cnt">
                            <img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt=""
                                class="w-100">
                            <div class="press-cntnt text-start">
                                <span>09 May 2023 </span>
                                <h4>First-of-its-kind Assisted Living center lauched in RA Puram </h4>
                            </div>
                        </div>

                        <div class="press-cnt">
                            <img src="{{ asset('/public/website/assets/images/grp-1.jpg') }}" alt=""
                                class="w-100">
                            <div class="press-cntnt text-start">
                                <span>09 May 2023 </span>
                                <h4>First-of-its-kind Assisted Living center lauched in RA Puram </h4>
                            </div>
                        </div>

                    </div>

                    <div class="common-button drk">
                        <a href="">Vie All Posts</a>
                    </div>

                </div>

            </div>
        </div>
    </section>


    @include('website.mobilebottomform')

    @include('website.bottommap')
@endsection
