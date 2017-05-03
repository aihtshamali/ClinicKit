<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinic Kit landing page template for Health niche</title>

    <!-- css -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('plugins/cubeportfolio/css/cubeportfolio.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('css/nivo-lightbox.css') }}" rel="stylesheet">
  <link href="{{ asset('css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- boxed bg -->
  <link id="bodybg" href="{{ asset('bodybg/bg.css') }}" rel="stylesheet" type="text/css">
	<!-- template skin -->
	<link id="t-colors" href="{{ asset('color/default.css') }}" rel="stylesheet">

    <!-- =======================================================
        Theme Name: Clinic Kit
        Theme URL: https://bootstrapmade.com/Clinic Kit-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body >
<div id="wrapper">
@include('partials.header')

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Clinic Kit medical group</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Provide best quality healthcare for you</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
						</ul>
						<p class="text-right wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
						</p>
						</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<img src="img/dummy/img-1.png" class="img-responsive" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
            <div class="heading">
              <h1>Doctor's Section</h1>
            </div>
            <div class="dividersolid">

            </div>
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
            @foreach ($Doc as $D)
              <div class="row">
                <div class="col-md-5">
                  <a href="#"><h2 class="h-ultra">{{$D->name}}</h2>
                  <h4 class="h-ultra">{{$D->qualification}}</h4>
                  <h4 class="h-ultra">{{$D->address}}</h4>
                  </a>
                </div>
            @endforeach
            @foreach ($time as $D)
                <div class="col-md-5">
                  <h4 class="h-ultra">{{$D->time}}</h4>
                  <h4 class="h-ultra">{{$D->Etime}}</h4>
                </div>
            @endforeach
          </div>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					{{-- <h4 class="h-light">{{$Doc->qualification}}</h4> --}}
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">
</div></div></div></div></div></div></section>

    <section id="service" class="home-section nopadding paddingtop-60">

    	<label style="margin-left: 110px">Admin</label>
    	<label style="margin-left: 270px">Doctor</label>
    	<label style="margin-left: 320px">Nurse</label>
    	<label style="margin-left: 290px">Patient</label>

    	<br>
        <a href="{{url('/admin/login')}}">
        <img src="\img\dummy\admin.png" style="width: 200px; height: 200px; margin: 40px 40px">
        </a>

		    <a href="\log_in.html">
        <img src="\img\dummy\doctor.png" style="width: 200px; height: 200px; margin: 40px 80px">
        </a>

        <a href="F:\Temperory\SE Project\Clinic Kit\log_in.html">
        <img src="\img\dummy\nurse.png" style="width: 200px; height: 200px; margin: 40px 120px">
        </a>

        <a href="{{url('patient/login')}}">
        <img src="\img\dummy\patient.png" style="width: 200px; height: 200px">
        </a>
	</section>
	<!-- /Section: services -->


	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
    <a href="F:\Temperory\SE Project\Clinic Kit\Register.html">
		<button class="btn-lg" style="text-align: center; float: center; margin-left: 600px"> Register </button>
	</section>
	<!-- /Section: team -->



	<!-- Section: works -->
	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Clinic Kit</h5>
						<p>
						Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Clinic Kit center</h5>
						<p>
						Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 090078601
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@Clinic Kit.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>C2-JoharTown, Lahore City, Punjab Pakistan 54700</p>

					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright - Clinic Kit Theme. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Clinic Kit
                            -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
					   </div>
					   </div>
				   </div>
			   </div>
		  </div>
		</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="{{assets('js/jquery.min.js')}}"></script>
    <script src="{{assets('js/bootstrap.min.js')}}"></script>
    <script src="{{assets('js/jquery.easing.min.js')}}"></script>
	  <script src="{{assets('js/wow.min.js')}}"></script>
	  <script src="{{assets('js/jquery.scrollTo.js')}}"></script>
	  <script src="{{assets('js/jquery.appear.js')}}"></script>
	  <script src="{{assets('js/stellar.js')}}"></script>
	  <script src="{{assets('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
	  <script src="{{assets('js/owl.carousel.min.js')}}"></script>
	  <script src="{{assets('js/nivo-lightbox.min.js')}}"></script>
    <script src="{{assets('js/custom.js')}}"></script>

</body>
</html>
