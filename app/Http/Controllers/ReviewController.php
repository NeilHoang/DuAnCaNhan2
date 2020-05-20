<?php

namespace App\Http\Controllers;

use App\Http\Service\Image\ImageService;
use App\Http\Service\Review\ReviewService;
use App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    protected $reviewService;
    protected $images;
    protected $user;

    public function __construct(ReviewService $reviewService,ImageService $imageService,User $user)
    {
        $this->reviewService = $reviewService;
        $this->images = $imageService;
        $this->user = $user;
    }

    public function index()
    {
        $reviews = $this->reviewService->getAll();
        $images = $this->images->getAll();
        $users = $this->user->all();
        return view('admin.reviews.index',compact('reviews','images','users'));
    }

    public function store(Request $request)
    {
        $this->reviewService->store($request);
        return redirect()->route('review.index');
    }

    public function findById($id)
    {
        return $this->reviewService->findById($id);
    }

    public function update(Request $request, $id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->update($request,$review);
        return redirect()->route('review.index');
    }

    public function destroy($id)
    {
        $review = $this->reviewService->findById($id);
        $this->reviewService->destroy($review);
        return redirect()->route('review.index');
    }
}
