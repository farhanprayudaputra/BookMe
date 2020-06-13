		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="{{ url('/') }}">
								<img src="images/logo/logo.png" alt="logo images" height="50" width="50">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="{{ url('/') }}">Home</a></li>
								<li class="drop"><a href="#">Shop</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Shop Layout</li>
											<li><a href="{{ url('/shopGrid') }}">Shop Grid</a></li>
											<li><a href="{{ url('/singleProduct') }}">Single Product</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Shop Page</li>
											<li><a href="{{ route('product.shoppingCart') }}">Cart Page</a></li>
											<li><a href="{{ url('/checkout') }}">Checkout Page</a></li>
											<li><a href="{{ url('/wishlist') }}">Wishlist Page</a></li>
											<li><a href="{{ url('/error404') }}">404 Page</a></li>
											<li><a href="{{ url('/faq') }}">Faq Page</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Bargain Books</li>
											<li><a href="{{ url('/shopGrid') }}">Bargain Bestsellers</a></li>
											<li><a href="{{ url('/shopGrid') }}">Activity Kits</a></li>
											<li><a href="{{ url('/shopGrid') }}">B&N Classics</a></li>
											<li><a href="{{ url('/shopGrid') }}">Books Under $5</a></li>
											<li><a href="{{ url('/shopGrid') }}">Bargain Books</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="{{ url('/shopGrid') }}">Books</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Categories</li>
											<li><a href="{{ url('/shopGrid') }}">Biography </a></li>
											<li><a href="{{ url('/shopGrid') }}">Business </a></li>
											<li><a href="{{ url('/shopGrid') }}">Cookbooks </a></li>
											<li><a href="{{ url('/shopGrid') }}">Health & Fitness </a></li>
											<li><a href="{{ url('/shopGrid') }}">History </a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="{{ url('/shopGrid') }}">Mystery</a></li>
											<li><a href="{{ url('/shopGrid') }}">Religion & Inspiration</a></li>
											<li><a href="{{ url('/shopGrid') }}">Romance</a></li>
											<li><a href="{{ url('/shopGrid') }}">Fiction/Fantasy</a></li>
											<li><a href="{{ url('/shopGrid') }}">Sleeveless</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Collections</li>
											<li><a href="{{ url('/shopGrid') }}">Science </a></li>
											<li><a href="{{ url('/shopGrid') }}">Fiction/Fantasy</a></li>
											<li><a href="{{ url('/shopGrid') }}">Self-Improvemen</a></li>
											<li><a href="{{ url('/shopGrid') }}">Home & Garden</a></li>
											<li><a href="{{ url('/shopGrid') }}">Humor Books</a></li>
										</ul>
									</div>
								</li>

								<li class="drop"><a href="#">Pages</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="{{ url('/about') }}">About Page</a></li>
											<li class="label2"><a href="{{ url('/portfolio') }}">Portfolio</a>
												<ul>
													<li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
													<li><a href="{{ url('/portfolioDetails') }}">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="{{ route('product.shoppingCart') }}">Cart Page</a></li>
											<li><a href="{{ url('/checkout') }}">Checkout Page</a></li>
											<li><a href="{{ url('/wishlist') }}">Wishlist Page</a></li>
											<li><a href="{{ url('/error404') }}">404 Page</a></li>
											<li><a href="{{ url('/faq') }}">Faq Page</a></li>
											<li><a href="{{ url('/team') }}">Team Page</a></li>
										</ul>
									</div>
								</li>
								<li class="drop with--one--item"><a href="{{ url('/howto') }}"> How To 'BookMe'</a></li>
								<li class="drop with--one--item"><a href="{{ url('/history') }}"> Our History</a></li>
								<li class="drop with--one--item"><a href="{{ url('/contribute') }}"> Contribute</a></li>
								
								<li><a href="{{ url('/contact') }}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a href="{{ route('product.shoppingCart') }}"><span class="product_qun">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>
								<!-- Start Shopping Cart
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span></span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="{{ route('product.shoppingCart') }}">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/1.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html"></a></h6>
														<span class="prize"></span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun"></span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/3.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html"></a></h6>
														<span class="prize"></span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun"></span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="images/product/sm-img/2.jpg" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html"></a></h6>
														<span class="prize"></span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun"></span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="{{ route('product.shoppingCart') }}">View and edit cart</a>
										</div>
									</div>
								</div>
								 End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<!--
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>
										-->
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<!-- <span><a href="#">Compare Product</a></span> -->
														<span><a href="{{ url('/wishlist') }}">My Wishlist</a></span>
														@guest
															<span>
																<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
															</span>
															@if (Route::has('register'))
																<span>
																	<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
																</span>
															@endif
														@else
															<span>
																<a href="{{ route('home') }}"> {{ Auth::user()->name }}</a>
															</span>
															<span>
																<a href="{{ route('logout') }}"
																onclick="event.preventDefault();
																				document.getElementById('logout-form').submit();">
																	{{ __('Logout') }}
																</a>

																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																	@csrf
																</form>
															</span>
														@endguest
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="{{ url('/about') }}">About Page</a></li>
										<li><a href="{{ url('/portfolio') }}">Portfolio</a>
											<ul>
												<li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
												<li><a href="{{ url('/portfolioDetails') }}">Portfolio Details</a></li>
											</ul>
										</li>
										<li><a href="{{ route('product.shoppingCart') }}">Cart Page</a></li>
										<li><a href="{{ url('/checkout') }}">Checkout Page</a></li>
										<li><a href="{{ url('/wishlist') }}">Wishlist Page</a></li>
										<li><a href="{{ url('/error404') }}">404 Page</a></li>
										<li><a href="{{ url('/faq') }}">Faq Page</a></li>
										<li><a href="{{ url('/team') }}">Team Page</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/shopGrid') }}">Shop</a>
									<ul>
										<li><a href="{{ url('/shopGrid') }}">Shop Grid</a></li>
										<li><a href="{{ url('/singleProduct') }}">Single Product</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/blog') }}">Blog</a>
									<ul>
										<li><a href="{{ url('/blog') }}">Blog Page</a></li>
										<li><a href="{{ url('/blogDetails') }}">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="{{ url('/contact') }}">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->
			</div>
		</header>
		<!-- //Header -->
