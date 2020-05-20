@extends('layouts.shop.master')
@section('content')
<div class="clothing_product_area" >
    <div class="container">
            <div class="row">
                <div class="">
                    <div class="my_tabs">
                        <div class="tab-content tab_content_style">
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    @foreach($images as $image)
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="product_list">
                                                <div class="single_product repomsive_768">
                                                    <a href="{{ route('shop.index',$image->id) }}" target="main"><img
                                                            style="width: 300px; height: 300px"
                                                            src="{{asset('storage/images/'.$image->image)}}"
                                                            alt=""/></a>
                                                    <div class="product_details">
                                                        <h2>{{$image->name}}</h2>
                                                        <p><span
                                                                class="regular_price">$ {{number_format($image->price)}}</span><span
                                                        </p>
                                                    </div>
                                                    <div class="product_detail">
                                                        <div class="star_icon">
                                                            @if(\App\Http\Service\Image\ImageService::getStar($image->id)!=0)
                                                                @for($i=0;$i<\App\Http\Service\Image\ImageService::getStar($image->id);$i++)<i class="fa fa-star"></i>  @endfor
                                                                @for($i=0;$i<5-\App\Http\Service\Image\ImageService::getStar($image->id);$i++)<i class="fa fa-star-o"></i>  @endfor
                                                            @else No rate
                                                            @endif
                                                        </div>
                                                        <div class="product_button">
                                                            <div class="cart_details">
                                                                <a href="{{ route('cart.addToCart', $image->id) }}">Add to cart</a>
                                                            </div>
                                                            <div class="cart_details">
                                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        {{$images->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
