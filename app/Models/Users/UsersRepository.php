<?php
namespace App\Models\Users;

class UsersRepository
{
    public function add(
        User $user,
        string $filenamePath
    ){
        $user->avatar = $filenamePath;
        $user->saveOrFail();
        return $user;

    }

}
