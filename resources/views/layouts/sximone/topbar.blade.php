

        <!-- HEADER -->
        <header class="header " >
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="{{ URL::to('') }}">
                        <img class="l-black" src="{{ asset('sximo/themes/420/img/logo-horizontal-white.png') }}" />
                        <img class="l-white" src="{{ asset('sximo/themes/420/img/logo-horizontal-white.png') }}" />
                        <img class="l-color" src="{{ asset('sximo/themes/420/img/logo-horizontal-black.png') }}" />
                    </a>
                </div>
                <!--End logo-->

                <!-- Rightside Menu (Search, Cart, Bart icon) -->
                <div class="side-menu-btn">
                    <ul>
                        <!-- Search Icon -->
                        <li class="">
                            <a class="right-icon search toggle-menu menu-top push-body"><i class="fa fa-search"></i></a>
                        </li>
                        <!-- End Search Icon -->

                    </ul>
                </div>
                <!-- End Rightside Menu -->

                <!-- Navigation Menu -->
                <nav class='navigation'>

					{{--*/ $menus = SiteHelpers::menus('top') /*--}}
					 	  <ul>
							@foreach ($menus as $menu)
								 <li class="@if(Request::is($menu['module'])) active @endif" >
								 	<a 
									@if($menu['menu_type'] =='external')
										href="{{ URL::to($menu['url'])}}" 
									@else
										href="{{ URL::to($menu['module'])}}" 
									@endif
								 
									 @if(count($menu['childs']) > 0 ) class="dropdown-toggle" data-toggle="dropdown" @endif>
								 		<i class="{{$menu['menu_icons']}}"></i> <span>
										
										@if(CNF_MULTILANG ==1 && isset($menu['menu_lang']['title'][Session::get('lang')]))
											{{ $menu['menu_lang']['title'][Session::get('lang')] }}
										@else
											{{$menu['menu_name']}}
										@endif	
									
										</span>
										@if(count($menu['childs']) > 0 )
										 <b class="caret"></b> 
										@endif  
									</a> 
									@if(count($menu['childs']) > 0)
										 <ul class="nav-dropdown">
											@foreach ($menu['childs'] as $menu2)
											 <li class=" 
											 @if(count($menu2['childs']) > 0) dropdown-submenu @endif
											 @if(Request::is($menu2['module'])) active @endif">
											 	<a 
													@if($menu2['menu_type'] =='external')
														href="{{ URL::to($menu2['url'])}}" 
													@else
														href="{{ URL::to($menu2['module'])}}" 
													@endif
																
												>
													<i class="{{$menu2['menu_icons']}}"></i> 
														@if(CNF_MULTILANG ==1 && isset($menu2['menu_lang']['title'][Session::get('lang')]))
															{{ $menu2['menu_lang']['title'][Session::get('lang')] }}
														@else
															{{$menu2['menu_name']}}
														@endif
													
												</a> 
												@if(count($menu2['childs']) > 0)
												<ul class="nav-dropdown">
													@foreach($menu2['childs'] as $menu3)
														<li @if(Request::is($menu3['module'])) class="active" @endif>
															<a 
																@if($menu3['menu_type'] =='external')
																	href="{{ URL::to($menu3['url'])}}" 
																@else
																	href="{{ URL::to($menu3['module'])}}" 
																@endif										
															
															>
																<span>
																@if(CNF_MULTILANG ==1 && isset($menu3['menu_lang']['title'][Session::get('lang')]))
																	{{ $menu3['menu_lang']['title'][Session::get('lang')] }}
																@else
																	{{$menu3['menu_name']}}
																@endif
																
																</span>  
															</a>
														</li>	
													@endforeach
												</ul>
												@endif							
												
											</li>							
											@endforeach
										</ul>
									@endif
								</li>
							@endforeach  
					  </ul> 

                  </nav>
                <!--End Navigation Menu -->

            </div>
        </header>
 