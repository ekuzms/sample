<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UsersController extends Controller
{
    //注册
    public function create()
    {
        return view('user.create');
    }

}
