<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
      public function __construct()
        {
          $this->middleware('guest');
        }

      //로그인 화면보여주는 method
      public function create()
        {
          return view('users.create');
        }

        


}
