<?php


namespace App\Http\Service\Category;


use App\Http\Service\User\UserServiceInterface;

interface CategoryServiceInterface extends UserServiceInterface
{
    public function getImagesByCategory($id);
}
