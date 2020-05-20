<?php


namespace App\Http\Reponsitory\Image;


use App\Categories;
use App\Images;

class ImageRepository implements ImageRepositoryInterface
{
    protected $images;

    public function __construct(Images $images)
    {
        $this->images = $images;
    }

    public function getAll()
    {
        return $this->images->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->images->findOrFail($id);
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public function search($key)
    {
        return $this->images->where('name', 'LIKE', '%' . $key . '%')->paginate(5);
    }

    public function getEightImage()
    {
        return Images::orderBy('id', 'desc')->take(4)->get();
    }

    public function paginating()
    {
        return $this->images->paginate(12);
    }

    public function getByCategory($id)
    {
        $image = Categories::where('categories_id', 'like', $id)->paginate(5);
    }

}
