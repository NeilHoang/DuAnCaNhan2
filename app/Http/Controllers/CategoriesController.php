<?php

namespace App\Http\Controllers;

use App\Http\Service\Category\CategoryService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $cateService;

    public function __construct(CategoryService $cateService)
    {
        $this->cateService = $cateService;
    }

    public function index()
    {
        $categories = $this->cateService->getAll();
        return view('admin.category.list', compact('categories'));
    }


    public function create()
    {
        $categories = $this->cateService->getAll();
        return view('admin.category.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $this->cateService->store($request);
        return redirect()->route('category.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = $this->cateService->findById($id);
        return view('admin.category.edit', compact('categories'));
    }


    public function update($id, Request $request)
    {
        $this->cateService->update($id,$request);
        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $this->cateService->destroy($id);
        return redirect()->route('category.index');
    }
}
