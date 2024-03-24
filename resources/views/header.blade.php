

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html">
							<img src="{{asset('pato-master/images/icons/logo.png')}}" alt="IMG-LOGO" data-logofixed="{{asset('pato-master/images/icons/logo2.png')}}">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav id="navbar" class="navbar main">
							<ul class="main_menu">
								<li>
									<a href="{{url('/')}}">Home</a>
								</li>

								<li>
									<a href="{{url('/menu')}}">Menu</a>
								</li>

								<li>
									<a href="{{url('/reservation')}}">Reservation</a>
								</li>

								<li>
									<a href="{{url('/gallery')}}">Gallery</a>
								</li>

								<li class="dropdown"><a href="{{url('/about')}}"><span>About</span> <i style="font-size: 20px;"
											class="fa fa-angle-down"></i></a>
									<ul>
										<li><a href="{{url('/about')}}">About</a></li>
										<li><a href="{{url('/')}}">Team</a></li>
										<li><a href="{{url('/')}}">Testimonials</a></li>

										<li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
													style="font-size: 20px;" class="fa fa-angle-right"></i></a>
											<ul>
												<li><a href="#">Deep Drop Down 1</a></li>
												<li><a href="#">Deep Drop Down 2</a></li>
												<li><a href="#">Deep Drop Down 3</a></li>
												<li><a href="#">Deep Drop Down 4</a></li>
												<li><a href="#">Deep Drop Down 5</a></li>
											</ul>
										</li>
									</ul>
								</li>

								<li>
									<a href="{{url('/blog')}}">Blog</a>
								</li>

								<li>
									<a href="{{url('/contact')}}">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{url('/')}}" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/menu')}}" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/gallery')}}" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/about')}}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{url('/blog')}}" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{url('/contact')}}" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="{{url('/reservation')}}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

        <!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-01.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-01.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-02.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-02.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-03.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-03.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-05.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-05.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-06.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-06.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-07.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-07.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-09.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-09.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-10.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-10.jpg')}}" alt="GALLERY">
					</a>

					<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('pato-master/images/photo-gallery-11.jpg')}}" data-lightbox="gallery-footer">
						<img src="{{asset('pato-master/images/photo-gallery-thumb-11.jpg')}}" alt="GALLERY">
					</a>
				</div>
		</div>
	</aside>