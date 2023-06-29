@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-3.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>we are passionate
<span>about enabling a congenial <br>
work atmosphere.</span>
</h4>
<ul>
<li><a href="./">Home</a></li>   
<li> > </li>  
<li>Career</li>   
</ul>
</div>
</div>
</div>
</div>

</section>

<section class="dark-gray-bg car-erfrm">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact-bg">
						<div class="row align-items-center">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
								<div class="orange-bg shadow pad-30 pb-0 text-center">
									<h2 class="h3 text-white mar-bot-20 text-center casrtmzed">Explore your opportunities at Geri Care, where the best minds work together as a winning team.</h2>
									<img src="{{ asset('/public/website/assets/images/careers.png') }}" alt="" class="img-fluid">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-7" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
								<div class="pad-30">
								<h2 class="h3 mar-bot-20">Join with Us!</h2>
								<form onSubmit="return valid_chk3()" class="contact-form" name="rental" method="POST" action="#" enctype="multipart/form-data" id="contactForm">
								<input type="hidden" name="form_name" value="career" >
								<div class="row">
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Name (required)<span class="text-danger">*</span></label>
											<input type="text" name="name" value="" class="form-control jsrequired" required/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Phone (required)<span class="text-danger">*</span></label>
											<input type="tel" name="phone" value="" class="form-control jsrequired" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Email (required)<span class="text-danger">*</span></label>
											<input type="email" name="email" value="" class="form-control jsrequired" required/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Current Designation</label>
											<input type="text" name="designation" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Relevant Experience</label>
											<input type="text" name="experience" value="" class="form-control"/>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-6">
											<label class="text-dark">Upload Resume</label>
											<div class="custom-file-upload">
											<!-- <input type="file" name="upload_resume" /> -->
                                                <input type="file" id="real-file" hidden="hidden" name="upload_resume" accept="application/pdf,application/msword" />
                                                <button type="button" id="custom-button">&nbsp;</button>
                                                <span id="custom-text">Choose File.. <small>(Accept only .pdf/.doc/.docx)</small></span>
                                            </div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
											<label class="text-dark">Cover Letter</label>
											<textarea class="form-control" name="cover_letter"></textarea>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-start clearfix"><input type="submit" name="submit" value="Submit"> </div>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection