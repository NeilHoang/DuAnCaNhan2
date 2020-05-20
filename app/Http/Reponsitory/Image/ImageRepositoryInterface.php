<?php


namespace App\Http\Reponsitory\Image;


use App\Http\Reponsitory\RepositoryInterface;

interface ImageRepositoryInterface extends RepositoryInterface
{
    public function getEightImage();
    public function paginating();
    public function getByCategory($id);


}
