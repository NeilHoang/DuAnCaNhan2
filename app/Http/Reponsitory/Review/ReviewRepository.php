<?php


namespace App\Http\Reponsitory\Review;


use App\Review;

class ReviewRepository implements ReviewRepositoryInterface
{

    protected $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public function getByImages($id)
    {
        return Review::where('images_id', 'like', $id)->paginate(4);
    }

    public function getAll()
    {
        return $this->review->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public static function searchByUserAndImages($user_id, $images_id)
    {
        return Review::where('user_id', 'like', $user_id)->where('images_id', 'like', $images_id)->first();
    }

    public function search($key)
    {
        return $this->review->where('review', 'like', '%' . $key . '%')->get();
    }

    public function findById($id)
    {
        return $this->review->findOrFail($id);

    }
}
