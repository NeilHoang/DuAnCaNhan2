<?php


namespace App\Http\Service\Review;


use App\Http\Reponsitory\Review\ReviewRepository;
use App\Review;

class ReviewService implements ReviewServiceInterface
{

    protected $reviewRepo;

    public function __construct(ReviewRepository $reviewRepo)
    {
        $this->reviewRepo = $reviewRepo;

    }

    public function getAll()
    {
        return $this->reviewRepo->getAll();
    }

    public function store($request)
    {
        $oldReview = ReviewRepository::searchByUserAndImages($request->user, $request->image);
        if ($oldReview) {
            $oldReview->review = $request->review;
            $oldReview->star = $request->star;
            $this->reviewRepo->store($oldReview);
        } else {
            $review = new review();
            $review->review = $request->review;
            $review->star = $request->star;
            $review->images_id = $request->images_id;
            $review->user_id = $request->user;
            $this->reviewRepo->store($review);
        }

    }

    public function findById($id)
    {
        return $this->reviewRepo->findById($id);
    }

    public function update($request, $obj)
    {
        ;
        $obj->review = $request->review;
        $obj->star = $request->star;
        $this->reviewRepo->update($obj);
    }

    public function getByImages($images_id)
    {
        return $this->reviewRepo->getByImages($images_id);
    }

    public function destroy($obj)
    {
        $this->reviewRepo->destroy($obj);
    }

    public function search($request)
    {
        return $this->reviewRepo->search($request->key);
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

}
