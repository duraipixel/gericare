@extends("website.layout.welcome")

@section('content')

<section class="inner-banner p-0">

<div class="">
<img src="{{ asset('/public/website/assets/images/banners/inner-banner-6.jpg') }}" alt="" class="w-100" />
</div> 

<div class="banner-liners">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h4>Media Gallery
<span>about enabling a congenial <br>
work atmosphere.</span>
</h4>
<ul>
<li><a href="../">Home</a></li>   
<li> > </li>  
<li>Career</li>   
</ul>
</div>
</div>
</div>
</div>

</section> 

<section class="light-gray-bg">
		<div class="container">
			<div class="row">
				<div class="col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<ul class="press-release">						
						<li>
							<a href="" target="_blank"> 
								<img src="{{ asset('/public/website/assets/images/news-1.jpg') }}" alt="" class="img-fluid" />
								<span>The Hindu</span>
							</a>
						</li>
						<li>
							<a data-fancybox href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="City Express">
								<img src="{{ asset('/public/website/assets/images/news-1.jpg') }}" alt="" class="img-fluid" />
								<span>City Express</span>
							</a>
						</li>
						<li>
							<a data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">
								<img src="{{ asset('/public/website/assets/images/news-1.jpg') }}" alt="" class="img-fluid" />
								<span>Get Back to Life ! Sparkle your Intimate Beauty</span>
							</a>
							<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
							<a class="d-none" data-fancybox="gallery1" href="{{ asset('/public/website/assets/images/news-1.jpg') }}" data-caption="Get Back to Life ! Sparkle your Intimate Beauty">&nbsp;</a>
						</li> 
					</ul>
				</div>
			</div>
		</div>
	</section>

@endsection