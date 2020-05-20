<?php


namespace App\Http\Reponsitory\Category;


use App\Categories;
use App\Review;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $category;

    public function __construct(Categories $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->category->findOrFail($id);

    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete($obj);
    }

    public function search($key)
    {
        return $this->category->where('name', 'LIKE', '%' . $key . '%')->paginate(5);
    }

    public function paginating()
    {
        return $this->category->paginate(12);
    }

    public function getEightCategory()
    {
        return Categories::orderBy('id', 'desc')->take(4)->get();
    }

    public function getImagesByCategory($id)
    {
        return $this->category->findOrFail($id)->images;
    }
}
