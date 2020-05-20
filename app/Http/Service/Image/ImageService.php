<?php


namespace App\Http\Service\Image;


use App\Http\Reponsitory\Image\ImageRepository;
use App\Images;
use Illuminate\Support\Facades\Storage;

class ImageService implements ImageServiceInterface
{
    protected $imageRepo;

    public function __construct(ImageRepository $imageRepo)
    {
        $this->imageRepo = $imageRepo;
    }

    function getAll()
    {
        return $this->imageRepo->getAll();
    }

    function store($request)
    {
        $image = new Images();
        if (!$request->hasFile('image')) {
            $image->image = $request->image;
        } else {
            $images = $request->image;
            $imageName = date('Y-m-d H:i:s') . $images->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName);
            $image->image = $imageName;
        }
        $image->name = $request->name;
        $image->descriptions = $request->descriptions;
        $image->price = $request->price;
        $image->categories_id = $request->categories_id;
        $this->imageRepo->store($image);
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

    function update($id, $request)
    {
        $image = $this->imageRepo->findById($id);
        if ($request->image) {
            $currentImage = $image->image;
            if ($currentImage) {
                Storage::delete('/public/images/' . $currentImage);
            }
            $images = $request->image;
            $imageName = date('Y-m-d H:i:s') . $images->getClientOriginalName();
            $request->image->storeAs('public/images', $imageName);
            $image->image = $imageName;
        }
        $image->name = $request->name;
        $image->descriptions = $request->descriptions;
        $image->price = $request->price;
        $image->categories_id = $request->categories_id;
        $this->imageRepo->update($image);
    }

    function destroy($id)
    {
        $image = $this->imageRepo->findById($id);
        if ($image->image) {
            Storage::delete('public/images/' . $image->image);
        }
        $this->imageRepo->destroy($image);
    }

    function findById($id)
    {
        return $this->imageRepo->findById($id);
    }

    public function search($request)
    {
        $key = $request->key;
        return $this->imageRepo->search($key);
    }

    public function getEightImage()
    {
        return $this->imageRepo->getEightImage();
    }

    public function paginating()
    {
        return $this->imageRepo->paginating();
    }

    public static function getStar($id)
    {
        $images = Images::findOrFail($id);
        $reviews = $images->reviews;
        $starResult = 0;
        $avgStar = 0;
        foreach ($reviews as $review) {
            $starResult += $review->star;
        }
        if (count($reviews) != 0) {
            $avgStar = $starResult / count($reviews);
        }
        return $avgStar;
    }

    function findByCategoryId($id)
    {
        return $this->imageRepo->getByCategory($id);
    }
}
