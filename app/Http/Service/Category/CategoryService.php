<?php


namespace App\Http\Service\Category;


use App\Categories;
use App\Http\Reponsitory\Category\CategoryRepository;

class CategoryService implements CategoryServiceInterface
{
    protected $cateRepo;

    public function __construct(CategoryRepository $cateRepo)
    {
        $this->cateRepo = $cateRepo;
    }

    function getAll()
    {
        return $this->cateRepo->getAll();
    }

    function store($request)
    {
        $category = new Categories();
        $category->name_category = $request->name_category;
        $this->cateRepo->store($category);
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }

    function update($id, $request)
    {
        $category = $this->cateRepo->findById($id);
        $category->name_category = $request->name_category;
        $this->cateRepo->update($category);
    }

    function destroy($id)
    {
        $category = $this->cateRepo->findById($id);
        $this->cateRepo->destroy($category);
    }

    function findById($id)
    {
        return $this->cateRepo->findById($id);
    }

    public function paginating()
    {
        return $this->cateRepo->paginating();
    }

    public function getEightCategory()
    {
        return $this->cateRepo->getEightCategory();
    }

    public function search($request)
    {
        $key = $request->key;
        return $this->cateRepo->search($key);
    }

    public function getImagesByCategory($id)
    {
        return $this->cateRepo->getImagesByCategory($id);
    }

}
