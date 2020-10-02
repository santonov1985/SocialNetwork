<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $testDB = User::paginate(3);
//         dd(($testDB)->pluck('name'));

        return view('test',compact('testDB'));
    }
}
