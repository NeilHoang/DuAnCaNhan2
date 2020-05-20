<?php

namespace App\Http\Controllers;

use App\Http\Service\Category\CategoryService;
use App\Http\Service\Image\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $imageService;
    protected $cateService;

    public function __construct(ImageService $imageService, CategoryService $cateService)
    {
        $this->imageService = $imageService;
        $this->cateService = $cateService;
    }

    public function index()
    {
        $images = $this->imageService->getAll();
        return view('admin.image.list', compact('images'));
    }


    public function create()
    {
        $images = $this->imageService->getAll();
        $categories = $this->cateService->getAll();
        return view('admin.image.create', compact('images','categories'));
    }


    public function store(Request $request)
    {
        $this->imageService->store($request);
        return redirect()->route('image.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $images = $this->imageService->findById($id);
        return view('admin.image.edit', compact('images'));
    }


    public function update($id, Request $request)
    {
        $this->imageService->update($id, $request);
        return redirect()->route('image.index');
    }

    public function destroy($id)
    {
        $this->imageService->destroy($id);
        return redirect()->route('image.index');
    }

}
