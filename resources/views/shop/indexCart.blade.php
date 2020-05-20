@extends('layouts.shop.master')
@section('content')
    @if (Session::has('success'))
        <div class="col-12 alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>

    @endif

    @if (Session::has('delete_error'))
        <div class="col-12 alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('delete_error') }}</strong>
        </div>
    @endif


    <div class="shopping_cart_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 mt-2 border">
                    <div class="cart_title">
                        <h2>Shopping Cart</h2>
                    </div>
                    <div class="shopping-cart-table">
                        <table class="cart_items">
                            <tr>
                                <th>Image</th>
                                <th>Image Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                            @if(Session::has('cart'))
                                @forelse($cart->items as $image)
                                    <tr>
                                        <td><a href="{{ route('shop.index',$image['item']->id) }}"><img
                                                    src="{{asset('storage/images/'. $image['item']->image) }}"
                                                    alt="" style="width: 200px;height: 200px"/></a></td>
                                        <td>
                                            <a href="{{ route('shop.index',$image['item']->id) }}">{{ $image['item']->name }}</a>
                                        </td>
                                        <td><a href="#">{{ '$' . $image['item']->price }}</a></td>
                                        <form action="{{ route('cart.updateProductIntoCart', $image['item']->id) }}"
                                              method="post">
                                            @csrf
                                            <td data-th="Quantity">
                                                <input type="number" class="form-control text-center"
                                                       style="width: 100%" min="0" name="qty"
                                                       value="{{ $image['qty'] }}">
                                            </td>
                                            <td data-th="Subtotal" class="text-center">{{ $image['price']  }}</td>
                                            <td class="actions" data-th="">
                                                <button class="btn btn-info  btn-sm" type="submit"><i
                                                        class="fa fa-refresh fa-2x"></i></button>
                                                <a class="btn btn-danger btn-sm"
                                                   href="{{ route('cart.removeProductIntoCart', $image['item']->id) }}"><i
                                                        class="fa fa-trash-o fa-2x"></i></a>
                                            </td>
                                        </form>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center" style="color: deeppink"><p> "Bạn chưa mua
                                                sản phẩm nào" </p></td>
                                    </tr>
                                @endforelse
                                <tr class="visible-xs">
                                    <td class="text-center"><strong>Total money:
                                            ${{ $cart->totalPrice }}</strong></td>
                                </tr>
                                <tfoot>

                                <tr>
                                    <td><a href="{{ url('/') }}" class="btn btn-primary"><i
                                                class="fa fa-angle-left"></i>Continue Gallery</a>
                                    </td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-lg"></td>
                                    <td></td>
                                    <td class="hidden-xs text-center"><strong>Total_money:
                                            ${{ $cart->totalPrice }}</strong></td>
                                    <td><a href="#" class="btn btn-success btn-block">Checkout<i
                                                class="fa fa-angle-right"></i></a></td>
                                </tr>
                                </tfoot>
                            @else
                                <tr>
                                    <td colspan="5" class="text-center" style="color: deeppink"><p> "Bạn chưa mua sản
                                            phẩm nào" </p></td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

