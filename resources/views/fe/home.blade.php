@extends('fe.layout.header')

@section('title')
    Beranda
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('template/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-4 animated slideInRight">Unlock Your Business
                                        Growth</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('template/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to <strong>GrowMark</strong>
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInLeft">Ready to Grow Your
                                        Business</h1>
                                    <a href=""
                                        class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Project Start -->
<div class="tr-job-posted section-padding" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" 
                style="max-width: 500px;">
                <br>
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
		<div class="job-tab text-center">
			<div class="tab-content text-left">
				<div role="tabpanel" class="tab-pane fade active show" id="hot-jobs">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Full Time</a>
										<span class="tr-title">
											<a href="#">Project Manager</a>
											<span><a href="#">Dig File</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/7B68EE/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Project Manager</a>
										<span><a href="#">Dig File</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span>Full Time</span></a>
										<span class="pull-right">Posted 23 hours ago</span>
									</div>																				
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Part Time</a>
										<span class="tr-title">
											<a href="#">Design Associate</a>
											<span><a href="#">Loop</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/F0F8FF/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Design Associate</a>
										<span><a href="#">Loop</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span class="part-time">Part Time</span></a>
										<span class="pull-right">Posted 1 day ago</span>
									</div>			
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Freelance</a>
										<span class="tr-title">
											<a href="#">Graphic Designer</a>
											<span><a href="#">Humanity Creative</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/00FFFF/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Graphic Designer</a>
										<span><a href="#">Humanity Creative</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span class="freelance">Freelance</span></a>
										<span class="pull-right">Posted 10 day ago</span>
									</div>			
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Full Time</a>
										<span class="tr-title">
											<a href="#">Design Consultant</a>
											<span><a href="#">Families</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/7FFFD4/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Design Consultant</a>
										<span><a href="#">Families</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span>Full Time</span></a>
										<span class="pull-right">Posted Oct 09, 2017</span>
									</div>				
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Part Time</a>
										<span class="tr-title">
											<a href="#">Project Manager</a>
											<span><a href="#">Sky Creative</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/8A2BE2/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Project Manager</a>
										<span><a href="#">Sky Creative</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>	
									<div class="time">
										<a href="#"><span class="part-time">Part Time</span></a>
										<span class="pull-right">Posted 1 day ago</span>
									</div>			
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Freelance</a>
										<span class="tr-title">
											<a href="#">Design Associate</a>
											<span><a href="#">Pencil</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/5F9EA0/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Design Associate</a>
										<span><a href="#">Pencil</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span class="freelance">Freelance</span></a>
										<span class="pull-right">Posted 23 hours ago</span>
									</div>				
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#" class="btn btn-primary">Full Time</a>
										<span class="tr-title">
											<a href="#">Graphic Designer</a>
											<span><a href="#">Fox</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/6495ED/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Graphic Designer</a>
										<span><a href="#">Fox</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span>Full Time</span></a>
										<span class="pull-right">Posted Oct 09, 2017</span>
									</div>				
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="job-item">
								<div class="item-overlay">
									<div class="job-info">
										<a href="#"><span class="btn btn-primary">Part Time</span></a>
										<span class="tr-title">
											<a href="#">Design Consultant</a>
											<span><a href="#">Owl</a></span>
										</span>
										<ul class="tr-list job-meta">
											<li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
											<li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
											<li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
										</ul>
										<ul class="job-social tr-list">
											<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>										
								</div>								
								<div class="job-info">
									<div class="company-logo">
										<img src="https://www.bootdey.com/image/300x100/FF7F50/000000" alt="images" class="img-fluid">
									</div>
									<span class="tr-title">
										<a href="#">Design Consultant</a>
										<span><a href="#">Owl</a></span>
									</span>
									<ul class="tr-list job-meta">
										<li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
										<li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
										<li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
									</ul>
									<div class="time">
										<a href="#"><span class="part-time">Part Time</span></a>
										<span class="pull-right">Posted 10 day ago</span>
									</div>			
								</div>
							</div>
						</div>
					</div><!-- /.row -->
				</div><!-- /.tab-pane -->
			</div>				
		</div><!-- /.job-tab -->			
	</div><!-- /.container -->
</div>
    <!-- Project End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('template/img/icon/icon-1.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('template/img/icon/icon-2.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('template/img/icon/icon-3.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="{{asset('template/img/icon/icon-4.png')}}" alt="Icon">
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{asset('template/img/icon/icon-5.png')}}" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="{{asset('template/img/icon/icon-2.png')}}" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Digital Marketing Services that We Offer</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-5.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Digital Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-6.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Internet Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-7.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Content Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-8.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">Social Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-9.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">B2B Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="{{asset('template/img/icon/icon-10.png')}}" alt="Icon">
                            </div>
                            <h5 class="mb-3">E-mail Marketing</h4>
                                <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                    stet</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">We've Done Lot's of Awesome Projects</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('template/img/project-1.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('template/img/project-1.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Data Analytics & Insights</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('template/img/project-2.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('template/img/project-2.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Marketing Content Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('template/img/project-3.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('template/img/project-3.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Business Target Market</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{asset('template/img/project-4.jpg')}}" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{asset('template/img/project-4.jpg')}}"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Social Marketing Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-medium text-primary">Get A Quote</p>
                    <h1 class="display-5 mb-4">Need Our Expert Help? We're Here!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <a class="d-inline-flex align-items-center rounded overflow-hidden border border-primary" href="">
                        <span class="btn-lg-square bg-primary" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </span>
                        <span class="fs-5 fw-medium mx-4">+012 345 6789</span>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Get A Free Quote</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Digital Marketing</option>
                                    <option value="">Social Marketing</option>
                                    <option value="">Content Marketing</option>
                                    <option value="">E-mail Marketing</option>
                                </select>
                                <label for="service">Choose A Service</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Team</p>
                <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('template/img/team-1.jpg')}}" alt="">
                        <h5>Alex Robin</h5>
                        <span class="text-primary">Founder & CEO</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('template/img/team-2.jpg')}}" alt="">
                        <h5>Adam Crew</h5>
                        <span class="text-primary">Co Founder</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('template/img/team-3.jpg')}}" alt="">
                        <h5>Boris Johnson</h5>
                        <span class="text-primary">Executive Manager</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="{{asset('template/img/team-4.jpg')}}" alt="">
                        <h5>Robert Jordan</h5>
                        <span class="text-primary">Digital Marketer</span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="btn btn-square" href=""><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Clients Say About Our Services!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('template/img/testimonial-1.jpg')}}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('template/img/testimonial-2.jpg')}}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('template/img/testimonial-3.jpg')}}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item rounded p-4 p-lg-5 mb-5">
                    <img class="mb-4" src="{{asset('template/img/testimonial-4.jpg')}}" alt="">
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo</p>
                    <h5>Client Name</h5>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection