<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Users\UsersRepository;
use App\Models\Users\UserService;

class AccountController extends Controller
{
    public function index($id){
        $users = User::find($id);
        return view('account/account',compact('users'));
    }

    public function update(Request $request){

        $rules = [
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = Auth::user();
//        $user = User::find($id);

//        (new UserService)->getAvatar($request, $user);

        if ($request->hasFile('avatar')) {
            $filename = $user->id . '_avatar.'.$request->file('avatar')->extension();
            $request->file('avatar')->move(public_path('/uploads'), $filename);
            $filenamePath = '/uploads/' . $filename;

            (new UsersRepository)->add($user, $filenamePath);

            return redirect()->back()->with('message','Добавленно');
        }else{
            return redirect()->back()->with('message','Файл не добавлен');
        }
    }
}
