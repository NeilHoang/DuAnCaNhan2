<?php

namespace App\Http\Controllers;

use App\Http\Service\Image\ImageService;
use App\Http\Service\Review\ReviewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailsController extends Controller
{
    protected $reviewService;
    protected $imageService;

    public function __construct(ReviewService $reviewService,ImageService $imageService)
    {
        $this->reviewService = $reviewService;
        $this->imageService = $imageService;
    }

    public function index($id)
    {
        $images = $this->imageService->findById($id);
        $reviews= $this->reviewService->getByImages($id);
        $avgStar = ImageService::getStar($id);
        $cart = Session::get('cart');
        return view('shop.details',compact('images','reviews','avgStar','cart'));
    }
    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return back();
    }

    public function findById($id)
    {
        return $this->imageService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request,$review);
        return redirect()->route('shop.details');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('shop.details');
    }
}
