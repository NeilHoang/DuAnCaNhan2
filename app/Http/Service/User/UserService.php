<?php


namespace App\Http\Service\User;


use App\Http\Reponsitory\User\UserReponsitory;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    protected $userRepo;

    public function __construct(UserReponsitory $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAll()
    {
        return $this->userRepo->getAll();
    }

    public function store($request)
    {
        $user = new User();
        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $this->userRepo->store($user);
    }

    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }

    public function update($request, $obj)
    {
        $obj->name = $request->user;
        $obj->email = $request->email;
        $current = Auth::user()->password;
        if (Hash::check($request->oldPassword, $current)){
            if ($request->password){
                $obj->password = Hash::make($request->password);
            }
            $this->userRepo->update($obj);
        }

    }

    public function destroy($obj)
    {
        $this->userRepo->destroy($obj);
    }

    function edit($id)
    {
        $user = $this->userRepo->findById($id);
        $this->userRepo->update($user);
    }
}
