<?php

namespace App\Http\Controllers;

use App\Http\Service\Category\CategoryService;
use App\Http\Service\Image\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReturnShopController extends Controller
{
    protected $cateService;
    protected $imageService;

    public function __construct(CategoryService $cateService, ImageService $imageService)
    {
        $this->cateService = $cateService;
        $this->imageService = $imageService;
    }

    public function index()
    {
        $images = $this->imageService->getEightImage();
        $cart = Session::get('cart');
        return view('shop.index', compact('images', 'cart'));
    }

    public function showShop()
    {
        $cart = Session::get('cart');
        $images = $this->imageService->paginating();
        $categories = $this->cateService->getAll();
        return view('shop.shop', compact('images', 'cart', 'categories'));
    }

    public function search($id, Request $request)
    {
        $images = $this->imageService->search($request);
        $categories = $this->imageService->getAll();
        $cart = Session::get('cart');
        return view('shop.shop', compact('images', 'cart', 'categories'));
    }

    public function findByIdCategory($id)
    {
        $cart = Session::get('cart');
        $images = $this->imageService->findById($id);
        $categories = $this->cateService->getImagesByCategory($id);
        return view('layouts.shop.menu', compact('images', 'categories', 'cart'));
    }

    public function getImagesByCategory($id)
    {
        $cart = Session::get('cart');
        $categories = $this->cateService->getAll();
        $images = $this->cateService->getImagesByCategory($id);
//        dd($images);
        echo $id;
        return view('shop.search',compact('categories','cart','images'));
    }


}
