		<!-- Header Area Start -->
		<header class="top">
			<div class="header-area ptb-18 header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-xs-12">
							<div class="logo">
								<a href="{{route('home')}}"><img src="{{asset('img/logo/'.$header->logo)}}" alt="COFFEE" /></a>
							</div>
						</div>
						<div class="col-md-8 col-xs-12">
                            <div class="content-wrapper">
                                <!-- Main Menu Start -->
                                <div class="main-menu text-center">
                    @include('front.partials.navBar')
                                </div>
                                <div class="mobile-menu hidden-lg hidden-md"></div>
                                <!-- Main Menu End -->
                            </div>
						</div>
						<div class="col-md-2 hidden-sm hidden-xs">
						    <div class="header-contact text-right">
						        {{-- <a class="banner-btn" data-text="contact" href="{{route('contact')}}"><span>contact</span></a> --}}
                                @if (Route::has('login'))
                                    @auth
                                        
                                          <a class="banner-btn" data-text="Dashboard" href="{{ route('back') }}" ><span>Dashboard</span></a>
                                      

                                    @else
                                    
                                      <a class="banner-btn" data-text="Log in"  href="{{ route('login') }}"  ><span>Log in</span></a>
                                    
                                    @endauth
                                 @endif
						    </div>

						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Area End -->