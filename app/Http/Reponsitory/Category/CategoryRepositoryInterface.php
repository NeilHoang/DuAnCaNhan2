<?php


namespace App\Http\Reponsitory\Category;


use App\Http\Reponsitory\RepositoryInterface;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    public function paginating();
    public function getEightCategory();
    public function getImagesByCategory($id);
}
