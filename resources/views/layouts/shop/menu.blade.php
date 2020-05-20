<div class="header_botttom_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Start desktop menu area -->
                <div class="main_menu" >
                    <ul id="nav_menu" class="active_cl">
                        <li><a href="#"><span class="Home">Home</span></a>
                        </li>
                        <li><a href="#"><span class="Clothings">Shop</span></a>
                            <div class="mega_menu_list">
                                <div class="single_megamenu">
                                    <h2><a href="">Learning</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">Lighting</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Daisy</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Gladiolus</a>
                                    </div>
                                </div>
                                <div class="single_megamenu">
                                    <h2><a href="">Living_Room</a></h2>
                                    <div class="items_list">
                                        <a href=""><i class="fa fa-angle-right"></i>Carnation</a>
                                        <a href=""><i class="fa fa-angle-right"></i>{Daisy</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href=""><span class="Lookbook">Lookbook</span></a>
                            <div class="look_mega_menu">
                                <div class="look_single">
                                    <h3>{{__('language.Rose')}}</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Yellow_Rose</a>
                                        <a href=""><i class="fa fa-angle-right"></i>White_Rose</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>Orchids</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Orchids_Samurai</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Orchids_Phalaenopsis</a>
                                    </div>
                                </div>
                                <div class="look_single">
                                    <h3>Chrysanthemum</h3>
                                    <div class="items_list_lk">
                                        <a href=""><i class="fa fa-angle-right"></i>Red_Chrysanthemum</a>
                                        <a href=""><i class="fa fa-angle-right"></i>Yellow_Chrysanthemum</a>
                                    </div>
                                </div>
                                <div class="look_menu_img">
                                    <a href="#"><img src="{{asset('img/banner/banner-1.jpg')}}" alt="" /></a>
                                    <a href="#"><img src="{{asset('img/banner/banner-2.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><span class="Footwear">BLOG</span></a>
                        </li>
                        <li><a href=""><span class="Sales">Clothing</span></a>
                        </li>
                        <li><a href=""><span class="Accessaries">Category</span></a>
                            <div class="home_mega_menu">
                                @foreach($categories as $category)
                                <a href="{{route('shop.getImages',$category->id)}}">{{$category->name_category}}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End desktop menu area -->
            </div>
        </div>
    </div>
    <!--start Mobile Menu area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="">Home 2</a></li>
                                        <li><a href="">Home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Clothings</a>
                                    <ul>
                                        <li><a href="">Learning</a>
                                            <ul>
                                                <li><a href="">Carnation</a></li>
                                                <li><a href="">Daisy</a></li>
                                                <li><a href="">Rose</a></li>
                                                <li><a href="">Gladiolus</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Lookbook</a>
                                    <ul>
                                        <li><a href="">Yellow_Rose</a></li>
                                        <li><a href="">White_Rose</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Shop</a>
                                    <ul>
                                        <li><a href="">Cart</a></li>
                                        <li><a href="">Product</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="">My_Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Category</a>
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Mobile Menu area -->
</div>
