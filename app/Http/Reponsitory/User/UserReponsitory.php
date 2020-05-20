<?php


namespace App\Http\Reponsitory\User;


use App\User;

class UserReponsitory implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function destroy($obj)
    {
        $obj->delete();
    }

    public function findById($id)
    {
        return $this->user->findOrFail($id);

    }

    public function search($key)
    {
        // TODO: Implement search() method.
    }
}
