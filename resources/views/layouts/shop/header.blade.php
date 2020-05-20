<div class="header_area_top" >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
                <!--Start Search area -->
                <form action="#" name="myForm" method="GET">
                    <div class="search_box">
                        <input name="key" id="itp" class="input_text" type="text" placeholder="Search" required/>
                        <button type="submit" class="btn-search">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </form>
                <!--End Search area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Logo area -->
                <div class="logo">
                    <a href="#">
                        <img src="{{asset('img/logo/images.png')}}" alt=""/>
                    </a>
                </div>
                <!--End Logo area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Header Right Cart area -->
                <div class="account_card_area">
                    <ul id="account_nav">
                        <li><a href="{{route('admin')}}"><i
                                    class="fa fa-key"></i>{{\Illuminate\Support\Facades\Auth::user()->name ?? __('Account')}}</a>
                            <div class="account_menu_list">
                                <div class="account_single_item">
                                    <h2>Currency</h2>
                                    <ul id="account_single_nav_1">
                                        <li><a href="#">Currency</a></li>
                                        <li><a href="#">US_Dollar</a></li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>Language</h2>
                                    <ul id="account_single_nav_2">
                                        <li>
{{--                                            <a href="{{ route('user.change-language', 'en') }}">{{__('language.English')}}</a>--}}
                                        </li>
                                        <li>
{{--                                            <a href="{{ route('user.change-language', 'vi') }}">{{__('language.Vietnames')}}</a>--}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="account_single_item">
                                    <h2>Setting</h2>
                                    <ul id="account_single_nav_3">
                                        <li>
                                            <a href="{{route('cart.index')}}">My Cart</a></li>
                                        @auth
                                            <li><a href="{{route('logout')}}">Log Out</a></li>
                                        @else
                                            <li><a href="{{route('login')}}">Log In</a></li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{route('cart.index')}}"><i class="fa fa-shopping-cart"></i>Cart <span
                                    class="cart_zero">{{ (Session::has('cart')) ? count(Session::get('cart')->items) : "0" }}</span></a>
                            <div class="cart_down_area">
                                @if(Session::has('cart'))
                                    @foreach ($cart->items as $image)
                                        <div class="cart_single">
                                            <a href="#"><img
                                                    src="{{asset('storage/images/'. $image['item']->image) }}"
                                                    style="width: 20%;height: 20%" alt=""/></a>
                                            <h2><a href="#">{{ $image['item']->name }}</a> <a
                                                    href="{{ route('cart.removeProductIntoCart', $image['item']->id) }}"><span><i
                                                            class="fa fa-trash"></i></span></a></h2>
                                            <p>{{ '$' . $image['item']->price }} * {{ $image['qty'] }}</p>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="cart_shoptings">
                                    <a href="{{route('cart.index')}}">Cart</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Header Right Cart area -->
            </div>
        </div>
    </div>
</div>
