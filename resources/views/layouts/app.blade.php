<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $metaTitle ?: 'NeCo Education Development Centre' }}</title>
        <meta name="title" content="{{ $metaTitle ?: '' }}">
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png')}}">
        <link rel="manifest" href="">
        <meta name="description" content="{{ $metaDescription ?: 'Welcome to NeCo Education Development Centre' }}">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:title" content="{{ $metaTitle ?: 'NeCo Education Development Centre' }}">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="">
        <meta name="twitter:title" content="{{ $metaTitle ?: 'NeCo Education Development Centre' }}">
        <meta name="twitter:description" content="Welcome to NeCo Education Development Centre">
        <meta name="twitter:image" content="">
        <!-- Custom Scroll Bar Configurations-->
        <style>
            body::-webkit-scrollbar {
                width: 10px;            
            }
            body::-webkit-scrollbar-track {
                background: #222854;       
            }
            body::-webkit-scrollbar-thumb {
                background-color: #f39119;  
                border-radius: 20px;     
                border: 3px solid #f39119;  
            }
        </style>

        {{-- my css styles --}}
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">		
		<!-- Google Font -->	
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
		<!-- Icon CSS -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/themify-icons.css')}}">
		<link href="{{ asset('assets/unpkg.com/boxicons%402.1.4/css/boxicons.min.css')}}" rel='stylesheet'>
		<link rel="stylesheet" href="{{ asset('assets/css/line-awesome.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/fontawesome.css')}}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">	
		<!--Preloader Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/preloader.css')}}">
		<!--jquery-simple-mobilemenu Css-->	
		<link rel="stylesheet" href="{{ asset('assets/css/jquery-simple-mobilemenu.css')}}">	
		<!--magnific-popup Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">	
		<!--animate Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">		
		<!--YouTubePopUp Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/YouTubePopUp.css')}}">	
		 <!--Slick Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">	
		<!--slick theme Css-->
		<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css')}}">					
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
		<!-- Responsive CSS -->		
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">	
    </head>
     

<!-- main header -->
    <body>
    		<!-- Start Preloader -->
		<div class="preloader">
			<div class="book-style">
			  <div class="inner">
				<div class="left"></div>
				<div class="middle"></div>
				<div class="right"></div>
			  </div>
			  <ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			  </ul>
			</div>
		</div>	
		<!-- End Preloader -->
	
		<!-- Start Header -->
		<header id="navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-30 left-col align-self-center">
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png')}}" alt="NeCo EDC" width="20%"></a>					
						<div class="course_cat">
							<ul class="cat_list">
								<li><a href="#"><i class="bx bx-grid-alt"></i>Category</a>
									<ul class="sub-menu">
										<li><a href="#">Business Stategy</a></li>
										<li><a href="#">Management &amp; Leadership</a></li>
										<li><a href="#">Personal Development</a></li>
										<li><a href="#">Contract Management</a></li>								
									</ul>
								</li>
							</ul>
						</div>
					</div><!-- End Col -->			

					<div class="col-40 justify-content-center d-flex align-self-center">
						<nav id="main-menu">
							<ul>
								<li>
									<a href="{{ route('home')}}">Home</a>
							
								</li>	

								<li class="menu-item-has-children">
									<a href="#">About Us</a>
									<ul class="sub-menu">
										<li><a href="#">Mission</a></li>
										<li><a href="#">Vision</a></li>
										<li><a href="#">Board Of Executives</a></li>
										<li><a href="#">History</a></li>
										<li><a href="#">Services</a></li>
									</ul>
								</li>	
                                
								
								<li class="menu-item-has-children">
									<a href="#">More Info</a>
									<ul class="sub-menu">
                                        <li><a href="#">Courses Offered</a></li>
										<li><a href="{{ route('blog')}}">Blog Posts</a></li>
										<li><a href="#">Certificates</a></li>
										<li><a href="#">Events</a></li>
										<li><a href="#">Instructors</a></li>
									</ul>
								</li>		

								<li>
									<a href="{{route('contact')}}">Contact</a>
								</li>
							</ul>
						</nav>
					</div><!-- End Col -->		

					<div class="col-30 right-col align-self-center text-end">
						<div class="searchcart">
							<a href="#" class="sicon search-btn"><svg fill="none" viewBox="0 0 20 20"><path fill="#fff" d="M7.536.044a8.418 8.418 0 00-5.1 2.434C1.476 3.44.826 4.487.413 5.745a8.018 8.018 0 000 5.08 7.977 7.977 0 002.03 3.27c1.906 1.896 4.503 2.756 7.182 2.377a8.529 8.529 0 003.846-1.579c.117-.09.223-.156.239-.152.015.008 1.198 1.164 2.628 2.57 1.628 1.603 2.655 2.584 2.749 2.627a.627.627 0 00.89-.47c.063-.327.281-.093-3.999-4.32l-1.335-1.322.226-.265c.976-1.13 1.62-2.56 1.867-4.123.094-.61.094-1.727 0-2.345-.277-1.793-1.062-3.333-2.37-4.634A8.463 8.463 0 007.536.044zm1.87 1.309c1.578.23 2.964.918 4.061 2.012 1.344 1.349 2.043 3.025 2.043 4.92 0 .7-.063 1.18-.227 1.786-.828 3.08-3.635 5.209-6.869 5.209-1.925 0-3.713-.73-5.049-2.067a6.958 6.958 0 01-1.84-3.17c-.288-1.082-.288-2.434 0-3.516A7.082 7.082 0 016.572 1.52c.89-.23 1.98-.297 2.835-.168z"/></svg></a>
						</div>	
						
						<a href="{{route('register.course.index')}}" class="white-btn bt" style="background-color: #f39119;">Apply Now</a>
					</div><!-- End Col -->
					

					<ul class='mobile_menu'>
						<li>
							<a href="{{route('home')}}">Home</a>
						</li>	

						<li class="menu-item-has-children">
                            <a href="#">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Vision</a></li>
                                <li><a href="#">Board Of Executives</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </li>	
                        
                        
                        <li class="menu-item-has-children">
                            <a href="#">More Info</a>
                            <ul class="sub-menu">
                                <li><a href="#">Courses Offered</a></li>
                                <li><a href="{{ route('blog')}}">Blog Posts</a></li>
                                <li><a href="#">Certificates</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Instructors</a></li>
                            </ul>
                        </li>		

                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
					</ul>	
				</div>
			</div>
			
			
			<div class="search_box">
				<div class="close-btn">
					<i class="ti-close"></i>
				</div>
								
				<div class="search-data">
					<form action="#" method="get">
                        @csrf
						<input type="text" required>
						<div class="line"></div>
						<label>Type to search..</label>
						<button type="submit">
							<span class="ti-search"></span>
						</button>
					</form>
				</div>			
			</div>


		</header>
		<!-- End Header -->
<!-- /.main-header -->


    {{ $slot }}

    <!-- main footer -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 wow fadeIn">
                    <h2 class="fntitle">Subscribe to Our  Newsletter <br> 
                    for Latest Updates</h2>
                </div>
                
                <div class="col-xl-5 col-lg-5 align-self-center wow fadeIn">
                    <div class="newsletter">
                        <form action="#" method="post">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="row footer-bottom">
                <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                    <div class="single-footer">
                        <div class="about-footer">
                            <div class="footer-logo">
                                <a href="#"><img src="{{ asset('img/logo-white.png')}}" alt="NeCo EDC" width="50%"></a>
                            </div>
                            <p>
                                Welcome to NeCo Executive Development Centre.
                            </p>
                            
                            <div class="fot-social">
                                <span>Follow Us On :</span>
                                <ul>
                                    <li>
                                        <a href="#"><i class="bx bxl-facebook"></i></a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="bx bxl-twitter"></i></a>										
                                    </li>
                                    <li>
                                        <a href="#"><i class="bx bxl-linkedin"></i></a>	
                                    </li>
                                    <li>
                                        <a href="#"><i class="bx bxl-youtube"></i></a>								
                                    </li>																				
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- End Col -->
                
                <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                    <div class="single-footer">
                        <h3 class="footer-title">Useful Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div><!-- End Col -->	

                <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                    <div class="single-footer">
                        <h3 class="footer-title">Resources</h3>
                        <ul>
                            <li><a href="#">Reports &amp; Documents</a></li>
                            <li><a href="#">Support &amp; Community</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Certificates</a></li>
                        </ul>
                    </div>
                </div><!-- End Col -->
                
                <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                    <div class="single-footer">
                        <h3 class="footer-title">Contact Us</h3>
                        <div class="contact-info">
                            <p>
                                <i class='bx bx-map' ></i>
                                <span>Plot 2B  Moyo Close - Off  <br>
                                    Prince Charles Drive, Kololo </span>
                            </p>
                            <p>
                                <i class='bx bx-phone' ></i>
                                <span>
                                    +256783797931/+254701241860</span>
                            </p>

                            <p>
                                <i class='bx bx-envelope'></i>
                                <span> 
                                    info@necoedc.org</span>
                            </p>
                        </div>
                    </div>
                </div><!-- End Col -->
            </div>
            
            <div class="moeffect">
                <div class="fbulb_shape eitem" value=".5">
                    <svg fill="none" viewBox="0 0 90 90"><g fill="#fff" fill-opacity=".28" clip-path="url(#clip0_2833_430)"><path d="M42.715.123c-4.219.404-7.489 1.371-11.057 3.234-8.262 4.325-13.799 12.094-15.223 21.34-.421 2.62-.28 7.664.247 10.108 1.213 5.484 3.287 9.44 7.47 14.203 3.358 3.814 5.115 7.172 6.1 11.601.352 1.565.387 2.356.492 10.055.106 8.086.123 8.367.492 9.176.492 1.072 1.776 2.32 2.778 2.707l.79.299v1.037c0 2.232.897 4.043 2.514 5.115C38.725 89.93 39.34 90 45 90s6.275-.07 7.682-1.002c1.617-1.072 2.513-2.883 2.513-5.115v-1.037l.756-.3c1.072-.403 2.057-1.3 2.672-2.407l.527-.95.106-8.173c.105-8.913.158-9.44 1.248-12.832 1.055-3.287 2.707-6.047 5.66-9.493 4.43-5.15 6.54-9.562 7.506-15.732.281-1.793.281-6.258 0-8.086-1.494-9.809-7.612-18.035-16.488-22.166C52.787.668 47.267-.334 42.715.123zm5.097 3.568c5.872.704 10.688 3.006 14.907 7.102 8.156 7.91 10.037 20.057 4.675 30.146-1.019 1.916-1.933 3.182-4.166 5.784-2.25 2.619-3.375 4.289-4.605 6.802-1.494 3.059-2.373 6.082-2.69 9.229l-.123 1.318-2.232.053-2.25.053V42.064l1.371-.123c3.147-.28 5.15-2.232 5.168-5.08 0-1.423-.281-2.355-1.072-3.392-2.145-2.848-6.645-2.496-8.367.65-.44.809-.528 1.195-.616 2.62l-.087 1.67h-5.45l-.088-1.67c-.087-1.425-.175-1.811-.615-2.62-1.353-2.443-4.5-3.34-7.101-2.004-3.727 1.899-3.569 7.559.246 9.3.597.28 1.406.456 2.425.526l1.53.123V64.16H34.33l-.123-.545a7.62 7.62 0 01-.105-1.072c0-.932-.704-4.06-1.354-5.941-1.213-3.604-3.006-6.557-6.03-10.02-3.62-4.113-5.448-7.541-6.538-12.217-.528-2.285-.65-6.96-.229-9.44.967-5.765 3.955-11.126 8.438-15.081C33.627 5.22 41.045 2.883 47.812 3.69zm-9.685 31.746c.527.44.545.51.545 1.776v1.336l-1.248-.088c-1.512-.123-2.11-.563-2.145-1.6-.053-1.652 1.6-2.478 2.848-1.423zm15.363-.263c.95.44 1.195 1.986.422 2.742-.316.334-.668.457-1.512.527l-1.072.106v-1.301c.018-1.318.158-1.688.791-2.057.457-.263.844-.263 1.371-.017zm-5.678 17.912V64.16h-5.625V42.012h5.625v11.074zm7.91 19.775c0 5.889-.035 6.082-1.195 6.416-.44.141-3.586.176-9.914.141l-9.281-.053-.475-.492-.492-.475-.053-5.36-.052-5.362h21.463v5.185zM51.68 83.865c0 1.16-.405 1.987-1.143 2.338-.861.422-10.213.422-11.074 0-.738-.351-1.143-1.178-1.143-2.338v-.896h13.36v.896z"/><path d="M43.84 8.93c-.897.72-.967 1.916-.176 2.654.352.334.738.422 2.338.563 4.36.369 7.558 1.775 10.582 4.64 1.564 1.477 2.531 2.813 3.586 4.922.79 1.6 1.23 2.021 2.056 2.021.897 0 1.758-.86 1.758-1.757 0-.545-1.09-2.83-2.056-4.272-1.108-1.67-3.639-4.271-5.221-5.361-3.445-2.39-7.523-3.727-11.32-3.727-.844 0-1.284.088-1.547.317zM62.385 27.756c-.545.563-.668 1.248-.317 2.004.58 1.283 2.76 1.09 3.112-.281.193-.774.07-1.266-.44-1.793-.65-.633-1.67-.616-2.355.07zM8.754 8.543c-.615.316-.844.756-.844 1.582 0 .598.176.826 2.074 2.742 2.004 2.004 2.11 2.074 2.83 2.074 1.02 0 1.776-.72 1.776-1.687 0-.615-.158-.826-2.162-2.83-2.32-2.32-2.602-2.479-3.674-1.881zM77.572 10.424c-2.004 2.004-2.162 2.215-2.162 2.83 0 .967.756 1.687 1.776 1.687.72 0 .826-.07 2.83-2.074 1.898-1.916 2.074-2.144 2.074-2.742 0-.844-.229-1.266-.88-1.6-1.071-.545-1.317-.421-3.638 1.899zM.65 27.668c-.861.791-.808 1.951.123 2.637.422.316.791.369 2.707.422 1.213.035 2.55.017 2.954-.053 1.6-.229 2.214-1.828 1.142-2.918l-.51-.51H4.078c-2.9 0-2.988.018-3.428.422zM82.424 27.756c-1.072 1.09-.457 2.69 1.142 2.918.405.07 1.74.088 2.953.053 1.917-.053 2.286-.106 2.708-.422.931-.686.984-1.846.123-2.637-.44-.404-.528-.422-3.428-.422h-2.988l-.51.51zM11.953 43.172c-.72.475-3.516 3.287-3.797 3.797-.65 1.248.123 2.601 1.512 2.601.685 0 .826-.105 2.584-1.81 1.986-1.916 2.338-2.426 2.338-3.287 0-1.213-1.6-1.987-2.637-1.301zM75.955 43.4c-.615.58-.72 1.284-.299 2.092.14.264 1.072 1.283 2.092 2.268 1.758 1.705 1.898 1.81 2.584 1.81 1.389 0 2.162-1.353 1.512-2.601-.282-.51-3.077-3.322-3.797-3.797-.668-.44-1.46-.352-2.092.228z"/></g><defs><clipPath id="clip0_2833_430"><path fill="#fff" d="M0 0h90v90H0z"/></clipPath></defs></svg>						
                </div>	

                <div class="fpencil_shape eitem" value="1">
                    <svg fill="none" viewBox="0 0 57 57"><path fill="#fff" fill-opacity=".2" d="M46.865.174c-.345.122-.846.367-1.113.557-.268.19-9.479 9.334-20.46 20.316l-19.96 19.97-2.629 6.393C1.255 50.92.041 53.993.02 54.227-.171 55.597 1.089 57 2.514 57c.479 0 .902-.167 7.496-2.885l5.947-2.45 20.038-20.026c11.015-11.016 20.17-20.25 20.349-20.527.768-1.215.869-2.785.234-4.055-.279-.557-.836-1.18-3.208-3.542C50.964 1.121 50.396.608 49.85.363c-.868-.4-2.105-.479-2.985-.19zm-1.693 11.628c2.228 2.228 4.044 4.088 4.044 4.155 0 .144-2.139 2.283-2.284 2.283-.056 0-1.949-1.838-4.199-4.088l-4.099-4.099 1.136-1.136c.635-.635 1.192-1.147 1.26-1.147.055 0 1.926 1.816 4.142 4.032zm-5.87 1.259l1.727 1.726-7.106 7.106c-7.685 7.696-7.429 7.384-6.816 7.986.601.613.29.869 7.986-6.817l7.106-7.106 1.726 1.727c.947.947 1.726 1.77 1.726 1.838 0 .055-6.783 6.894-15.07 15.18l-15.058 15.06-1.782-1.783-1.782-1.782 7.106-7.106c7.685-7.696 7.429-7.384 6.816-7.986-.601-.612-.29-.869-7.986 6.817l-7.106 7.106-1.782-1.782-1.782-1.782 15.059-15.06c8.287-8.286 15.125-15.069 15.18-15.069.068 0 .892.78 1.839 1.727zM10.178 46.864c2.072 2.072 3.753 3.799 3.731 3.82-.09.068-6.16 2.551-6.382 2.618-.156.045-.68-.412-2.038-1.77-1.003-1.003-1.827-1.872-1.827-1.939 0-.156 2.606-6.516 2.673-6.516.034 0 1.76 1.705 3.843 3.787z"></path></svg>					
                </div>					
                
                <div class="fshape1 spinning">
                    <svg fill="none" viewBox="0 0 68 73"><path fill="#fff" fill-opacity=".05" d="M4.216 47.5C.004 45.604-.578 39.86 3.17 37.16L52.345 1.71c3.747-2.7 9.013-.332 9.478 4.263l6.112 60.313c.465 4.595-4.218 7.971-8.43 6.077L4.216 47.5z"/></svg>					
                </div>	
                
                <div class="fshape2 eitem" value=".5">
                    <svg fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#222854"/></svg>					
                </div>					
                
                <div class="fshape3">
                    <svg fill="none" viewBox="0 0 132 199"><circle cx="99.5" cy="99.5" r="98.5" stroke="#fff" stroke-opacity=".05" stroke-width="2"/></svg>					
                </div>					
                
                <div class="fshape4 spinning">
                    <svg fill="none" viewBox="0 0 82 92"><path stroke="#fff" stroke-opacity=".05" stroke-width="3" d="M36.75 3.186a8.5 8.5 0 018.5 0l30.703 17.726a8.5 8.5 0 014.25 7.361v35.454a8.5 8.5 0 01-4.25 7.36L45.25 88.815a8.5 8.5 0 01-8.5 0L6.047 71.088a8.5 8.5 0 01-4.25-7.361V28.273a8.5 8.5 0 014.25-7.362L36.75 3.186z"/></svg>					
                </div>					
                
                <div class="fshape5 eitem">
                    <svg fill="none" viewBox="0 0 199 199"><circle cx="99.5" cy="99.5" r="99.5" fill="#222854" fill-opacity=".05"/></svg>					
                </div>					
            
            </div>
        </div>
        
        <div class="copyright text-center wow fadeIn">
            <p>Copyright © {{ date("Y") }} <a href="{{route('home')}}">NeCo Development Center</a>. All rights reserved.</p>
        </div>
    </section>
    <!-- /.main-footer -->

    <!-- webscripts -->
    <script src="{{ asset('assets/js/jquery.min.js')}}" ></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery-simple-mobilemenu.min -->
    <script src="{{ asset('assets/js/jquery-simple-mobilemenu.js')}}"></script>
    <!-- imagesloaded.pkgd -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- masonry -->
    <script src="{{ asset('assets/js/masonry.pkgd.min.js')}}" ></script>			
    <!-- modernizer JS -->		
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js')}}"></script>																	
    <!-- owl-carousel min js  -->
    <script src="{{ asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>
    <!-- waypoints -->
    <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>		
    <!-- counterup -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- jquery appear js -->			
    <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>
    <!-- magnific-popup js -->	
    <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>	
    <!-- YouTubePopUp js -->		
    <script src="{{ asset('assets/js/YouTubePopUp.jquery.js')}}"></script>
    <!-- yvpopup-active js -->		
    <script src="{{ asset('assets/js/yvpopup-active.js')}}"></script>		
    <!-- scrolltopcontrol js -->
    <script src="{{ asset('assets/js/scrolltopcontrol.js')}}"></script>	
    <!-- Wow js -->			
    <script src="{{ asset('assets/js/wow.js')}}"></script>		
    <!-- slick js -->			
    <script src="{{ asset('assets/js/slick.js')}}"></script>									
    <!-- scripts js -->
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    </body>


</html>
