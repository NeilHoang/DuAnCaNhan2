<?php

namespace App\Http\Controllers;

use App\Carts;
use App\Categories;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function showFormCart()
    {
        $images = Images::all();
        return view('home-page.index', compact('images'));
    }

    public function index()
    {
        $cart = Session::get('cart');
//        dd($cart);
        return view('shop.indexCart',compact('cart'));
    }

    public function addToCart(Request $request, $imageId)
    {
        $images = Images::findOrFail($imageId);

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        //khoi tao gio hang
        $cart = new Carts($oldCart);
        $cart->add($images, $images->id);

        //luu du lieu gio hang vao session
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm vào giỏ hàng thành công');
        return redirect()->back();
    }

    public function removeProductIntoCart($imageId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Carts($oldCart);
                $cart->remove($imageId);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

    public function updateProductIntoCart(Request $request, $imageId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Carts($oldCart);
                $cart->update($request, $imageId);
                Session::put('cart', $cart);
                Session::flash('success', 'Cập nhật thành công!');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
        return redirect()->back();
    }

}
