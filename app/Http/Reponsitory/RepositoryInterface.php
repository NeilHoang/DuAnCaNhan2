<?php


namespace App\Http\Reponsitory;


interface RepositoryInterface
{
    public function getAll();
    public function store($obj);
    public function findById($id);
    public function update($obj);
    public function destroy($obj);
    public function search($key);
}
